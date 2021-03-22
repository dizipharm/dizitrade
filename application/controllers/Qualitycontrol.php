<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Qualitycontrol extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Category';

		$this->load->model('model_category');
	}

	/* 
	* It only redirects to the manage category page
	*/
	public function index()
	{

		if(!in_array('viewCategory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->render_template('qualitycontrol/index', $this->data);	
	}
	public function unloading()
	{

		if(!in_array('viewCategory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->render_template('qualitycontrol/unloading', $this->data);	
	}

	/*
	* It checks if it gets the category id and retreives
	* the category information from the category model and 
	* returns the data into json format. 
	* This function is invoked from the view page.
	*/
	public function fetchCategoryDataById($id) 
	{
		if($id) {
			$data = $this->model_category->getCategoryData($id);
			echo json_encode($data);
		}

		return false;
	}
	public function updateAssetQC()
		{ 
		    echo "<pre>";
			if (($this->uri->segment(3)) > 0){
			  $assetid = $this->uri->segment(3);					  
			  $MY_POSTFIELDS = array ('JbAssetId' => $assetid, 'UserId' => 'User2', 'Owner' => 'Jutemill', 'GeoLoc' => '23.5902833,89.3217102', 'AssetStatus' => 'QCLoadingDone');			  
			  $curl = curl_init();
			  curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://54.237.0.216:8080/api/updateJbAsset/",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => json_encode($MY_POSTFIELDS),
			  CURLOPT_HTTPHEADER => array(
				"content-type: application/json"
			  ),
			));
			print_r($curl);
			$response = curl_exec($curl);
			curl_close($curl);
			echo $response;  			
			} else redirect();			  			 
		}
		
	/*
	* Fetches the category value from the category table 
	* this function is called from the datatable ajax function
	*/ 
	    // loading 
		public function fetchAssetData()
		{
			$result = array('data' => array());
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://54.237.0.216:8080/api/queryAllAssets",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_POSTFIELDS =>"Test",
				CURLOPT_HTTPHEADER => array(
				"Content-Type: application/javascript"
			),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response, true);
			$response1 = json_decode($response['response'],true);
			//$this->data['TransactionsArray'] = $response1;
			//echo '<pre>'; print_r($response1);exit();
			$newdata = array();// Sorting
			for($i = 0; $i < count($response1); $i++)
			{
				$newdata[$response1[$i]["Key"]]=$i;				
			}
			$newdata1 = array();			
			$newId = 0;
			for($i = 0; $i < count($response1); $i++)
			{
				$checkVars = array("QCLoadingDone", "QCLoadingPending","HandoffToLogistics","QCUnloadingPending", "QCUnloadingDone", "HandoffToWarehouse", "JutebagWithRicemill", "JutebagReturnedToWarehouse");
				If (in_array($response1[$newdata[$i+1]]["Record"]["AssetStatus"],$checkVars,true)) {
					$newdata1[$newId] = ($response1[$newdata[$i+1]]["Record"]);
					$newId = $newId+1;
				}
			}		
			//$this->data['TransactionsArray']["0"] = newdata1;
			foreach (array_reverse($newdata1) as $key => $value) 
			{
				$buttons = ''; 				
				if ($value["AssetStatus"] == "QCLoadingPending") 
				{
					$buttons = '<a href="'.base_url().'qualitycontrol/SubmitQCReport/'.$value['JbAssetId'].'" class="label label-primary" role="button">&nbsp;&nbsp;&nbsp;&nbsp;ReportQC&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;';
					
					$value["AssetStatus"] = "QC Pending";
				}				
				if ($value["AssetStatus"] == "QCLoadingDone") 
				{ 
					//$buttons = '<a href="'.base_url().'qualitycontrol/updateAssetQC/'.$value['JbAssetId'].'" class="label label-primary" role="button">&nbsp;QCReported&nbsp;</a>&nbsp;&nbsp;'; 
					$value["AssetStatus"] = "QC Done";  
				}			
				$checkVars = array("QCUnloadingPending","QCUnloadingDone", "HandoffToWarehouse", "JutebagWithRicemill", "JutebagReturnedToWarehouse");
				If (in_array($value["AssetStatus"],$checkVars,true)) {
					$value["AssetStatus"] = "QC Done";
				}
				$result["data"][$key] = array(
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$value['JbAssetId'],
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img id='barcode' 
					src=https://api.qrserver.com/v1/create-qr-code/?data=".$value['QRCode']."&amp;size=100x100
					width='20' 
					height='20' /><br>".$value['QRCode'],
					$value['BatchNo'],
					$value['OrderNo'],
					$value['AssetName'].'<br>'.$value['AssetType'],
					$value['Jutemill'],
					//$value['Logistics'],
					$value['Warehouse'],
					$value['Owner'], 
					$value['AssetStatus'],
					$buttons
					);
			} // /foreach			
			echo json_encode($result); 					
		}
	public function fetchAssetUnloadingData()
	{
			$result = array('data' => array());
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://54.237.0.216:8080/api/queryAllAssets",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_POSTFIELDS =>"Test",
				CURLOPT_HTTPHEADER => array(
				"Content-Type: application/javascript"
			),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response, true);
			$response1 = json_decode($response['response'],true);
			//$this->data['TransactionsArray'] = $response1;
			//echo '<pre>'; print_r($response1);exit();
			$newdata = array();// Sorting
			for($i = 0; $i < count($response1); $i++)
			{
				$newdata[$response1[$i]["Key"]]=$i;				
			}
			$newdata1 = array();			
			$newId = 0;
			for($i = 0; $i < count($response1); $i++)
			{
				$checkVars = array("QCUnloadingPending", "QCUnloadingDone", "HandoffToWarehouse", "JutebagWithRicemill", "JutebagReturnedToWarehouse");
				If (in_array($response1[$newdata[$i+1]]["Record"]["AssetStatus"],$checkVars,true)) {
					$newdata1[$newId] = ($response1[$newdata[$i+1]]["Record"]);
					$newId = $newId+1;
				}
			}		
			//$this->data['TransactionsArray']["0"] = newdata1;
			foreach (array_reverse($newdata1) as $key => $value) 
			{
				$buttons = ''; 				
				if ($value["AssetStatus"] == "QCUnloadingPending") 
				{
					$buttons = '<a href="'.base_url().'qualitycontrol/SubmitQCUnloadReport/'.$value['JbAssetId'].'" class="label label-primary" role="button">&nbsp;&nbsp;&nbsp;&nbsp;ReportQC&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;';
					
					//$buttons = '<button class="btn btn-default" role="button" onclick = "$(\'#myQCReport\').toggle();"><a href="'.base_url().'qualitycontrol/'.$value['JbAssetId'].'">Submit QC Report</button></a>'; 
					
					//$buttons = '<button class="label label-primary" role="button" onclick = "$(\'#myQCReport\').toggle();">Submit QC Report</button>'; // Test it later
					
					$value["AssetStatus"] = "QC Pending";
				}				
				if ($value["AssetStatus"] == "QCUnloadingDone") 
				{ 
					//$buttons = '<a href="'.base_url().'qualitycontrol/updateAssetQC/'.$value['JbAssetId'].'" class="label label-primary" role="button">&nbsp;QCReported&nbsp;</a>&nbsp;&nbsp;'; 
					$value["AssetStatus"] = "QC Done";  
				}
				$checkVars = array("HandoffToWarehouse", "JutebagWithRicemill", "JutebagReturnedToWarehouse"); 
				If (in_array($value["AssetStatus"],$checkVars,true)) {
					$value["AssetStatus"] = "QC Done";
				}			
				$result["data"][$key] = array(
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$value['JbAssetId'],
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img id='barcode' 
					src=https://api.qrserver.com/v1/create-qr-code/?data=".$value['QRCode']."&amp;size=100x100
					width='20' 
					height='20' /><br>".$value['QRCode'],
					$value['BatchNo'],
					$value['OrderNo'],
					$value['AssetName'].'<br>'.$value['AssetType'],
					$value['Jutemill'],
					//$value['Logistics'],
					$value['Warehouse'],
					$value['Owner'], 
					$value['AssetStatus'],
					$buttons
					);
			} // /foreach			
			echo json_encode($result); 					
		}
	/*
	* Its checks the category form validation 
	* and if the validation is successfully then it inserts the data into the database 
	* and returns the json format operation messages
	*/
		
		public function SubmitQCReport($product_id)
		{
			if(!in_array('updateProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			if(!$product_id) {
				redirect('dashboard', 'refresh');
			}
			
			/*Array ( [0] => stdClass Object ( */
			$result = array('data' => array());
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://54.237.0.216:8080/api/queryAsset/".$product_id,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_POSTFIELDS =>"Test",
				CURLOPT_HTTPHEADER => array(
				"Content-Type: application/javascript"
			),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response, true);
			$response1 = json_decode($response['response'],true);			
			$this->data['QueryAsset'] = ($response1);			
			//echo '<pre>'; print_r($this->data['QueryAsset']);exit();
			$this->render_template('qualitycontrol/submittqcreport', $this->data);
		}
		public function SubmitQCUnloadReport($product_id)
		{
			if(!in_array('updateProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			if(!$product_id) {
				redirect('dashboard', 'refresh');
			}
			
			/*Array ( [0] => stdClass Object ( */
			$result = array('data' => array());
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://54.237.0.216:8080/api/queryAsset/".$product_id,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_POSTFIELDS =>"Test",
				CURLOPT_HTTPHEADER => array(
				"Content-Type: application/javascript"
			),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response, true);
			$response1 = json_decode($response['response'],true);			
			$this->data['QueryAsset'] = ($response1);			
			//echo '<pre>'; print_r($this->data['QueryAsset']);exit();
			$this->render_template('qualitycontrol/submittqcunloadreport', $this->data);
		}
		
	/*
	* It removes the category information from the database 
	* and returns the json format operation messages
	*/
	public function remove()
	{
		if(!in_array('deleteCategory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$category_id = $this->input->post('category_id');

		$response = array();
		if($category_id) {
			$delete = $this->model_category->remove($category_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the brand information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}

}
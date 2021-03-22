<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dizichain extends Admin_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->not_logged_in();
			$this->load->helper(array('form', 'url','file'));
			$this->data['page_title'] = 'Dizichain';
			$this->load->model('model_products');
			$this->load->model('model_brands');
			$this->load->model('model_category');
			$this->load->model('model_stores');
			$this->load->model('model_attributes');
		}

		public function index()
		{
			if(!in_array('viewProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			$this->render_template('dizichain/index', $this->data);
			//$this->load->view('dizichain/index',$data);
		}
		public function managedizichain()
		{
			if(!in_array('viewProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			$this->render_template('dizichain/managedizichain', $this->data);
		}
		/*
			* It Fetches the products data from the product table
			* this function is called from the datatable ajax function
		*/
		/*		
		//CURLOPT_POSTFIELDS =>"{\n    \"JbAssetId\": \"1\",\n    \"UserId\": \"User1\",\n    \"Owner\": \"Logistics\",\n    \"GeoLoc\": \"23.5902833,89.3217102\",\n    \"AssetStatus\": \"HandoffToLogistics\"\n}",
		*/

		public function updateAssetQC()
		{ 
			if (($this->uri->segment(3)) > 0){
			  $assetid = $this->uri->segment(3);			
		  
			$MY_POSTFIELDS = array ('JbAssetId' => $assetid, 'UserId' => 'User1', 'Owner' => 'Quality', 'GeoLoc' => '23.5902833,89.3217102', 'AssetStatus' => 'QCLoadingPending'); 
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
			redirect();
			} else redirect();
		}
		
		public function updateAssetLSP()
		{ 
		    echo "<pre>";
			if (($this->uri->segment(3)) > 0){
			  $assetid = $this->uri->segment(3);					  
			  $MY_POSTFIELDS = array ('JbAssetId' => $assetid, 'UserId' => 'User1', 'Owner' => 'Logistics', 'GeoLoc' => '23.5902833,89.3217102', 'AssetStatus' => 'HandoffToLogistics');
			  
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
				$checkVars = array("AssetRetired","QCLoadingDone","QCLoadingPending","AssetCreated","HandoffToLogistics");
				If (in_array($response1[$newdata[$i+1]]["Record"]["AssetStatus"],$checkVars,true)) {
					$newdata1[$newId] = ($response1[$newdata[$i+1]]["Record"]);
					$newId = $newId+1;
				}
			}
			foreach ($newdata1 as $key => $value) 
			{
				$buttons = ''; 		
				
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
			* If the validation is not valid, then it redirects to the create page.
			* If the validation for each input field is valid then it inserts the data into the database
			* and it stores the operation message into the session flashdata and display on the manage product page
		*/
		public function create()
		{
			if(!in_array('createProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			$this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
			$this->form_validation->set_rules('sku', 'SKU', 'trim|required');
			$this->form_validation->set_rules('cost_price', 'Cost Price', 'trim|required');
			$this->form_validation->set_rules('price', 'Selling Price', 'trim|required');
			$this->form_validation->set_rules('qty', 'Qty', 'trim|required');
			$this->form_validation->set_rules('store', 'Store', 'trim|required');
			$this->form_validation->set_rules('availability', 'Availability', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				// true case
				$upload_image = $this->upload_image();
				$data = array(
				'name' => $this->input->post('product_name'),
				'sku' => $this->input->post('sku'),
				'cost_price' => $this->input->post('cost_price'),
				'price' => $this->input->post('price'),
				'qty' => $this->input->post('qty'),
				'image' => $upload_image,
				'description' => $this->input->post('description'),
				'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
				'brand_id' => json_encode($this->input->post('brands')),
				'category_id' => json_encode($this->input->post('category')),
				'store_id' => $this->input->post('store'),
				'availability' => $this->input->post('availability'),
				);
				$create = $this->model_products->create($data);
				if($create == true) {
					$this->session->set_flashdata('success', 'Successfully created');
					redirect('dizichain/', 'refresh');
				}
				else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					redirect('dizichain/create', 'refresh');
				}
			}
			else {
				// false case
				// attributes
				$attribute_data = $this->model_attributes->getActiveAttributeData();
				$attributes_final_data = array();
				foreach ($attribute_data as $k => $v) {
					$attributes_final_data[$k]['attribute_data'] = $v;
					$value = $this->model_attributes->getAttributeValueData($v['id']);
					$attributes_final_data[$k]['attribute_value'] = $value;
				}
				$this->data['attributes'] = $attributes_final_data;
				$this->data['brands'] = $this->model_brands->getActiveBrands();
				$this->data['category'] = $this->model_category->getActiveCategroy();
				$this->data['stores'] = $this->model_stores->getActiveStore();
				$this->render_template('dizichain/create', $this->data);
			}
		}
		public function adddizichain()
		{
			$this->render_template('dizichain/adddizichain', $this->data);
		}
		/*
			* This function is invoked from another function to upload the image into the assets folder
			* and returns the image path
		*/
		public function upload_image()
		{
			// assets/images/product_image
			$config['upload_path'] = 'assets/images/product_image';
			$config['file_name'] =  uniqid();
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			// $config['max_width']  = '1024';s
			// $config['max_height']  = '768';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('product_image'))
			{
				$error = $this->upload->display_errors();
				return $error;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$type = explode('.', $_FILES['product_image']['name']);
				$type = $type[count($type) - 1];
				$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
				return ($data == true) ? $path : false;
			}
		}
		/*
			* If the validation is not valid, then it redirects to the edit product page
			* If the validation is successfully then it updates the data into the database
			* and it stores the operation message into the session flashdata and display on the manage product page
		*/
		public function update($product_id)
		{
			if(!in_array('updateProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			if(!$product_id) {
				redirect('dashboard', 'refresh');
			}
			$this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
			$this->form_validation->set_rules('sku', 'SKU', 'trim|required');
			$this->form_validation->set_rules('price', 'Price', 'trim|required');
			$this->form_validation->set_rules('qty', 'Qty', 'trim|required');
			$this->form_validation->set_rules('store', 'Store', 'trim|required');
			$this->form_validation->set_rules('availability', 'Availability', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				// true case
				$data = array(
				'name' => $this->input->post('product_name'),
				'sku' => $this->input->post('sku'),
				'cost_price' => $this->input->post('cost_price'),
				'price' => $this->input->post('price'),
				'qty' => $this->input->post('qty'),
				'description' => $this->input->post('description'),
				'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
				'brand_id' => json_encode($this->input->post('brands')),
				'category_id' => json_encode($this->input->post('category')),
				'store_id' => $this->input->post('store'),
				'availability' => $this->input->post('availability'),
				);
				if($_FILES['product_image']['size'] > 0) {
					$upload_image = $this->upload_image();
					$upload_image = array('image' => $upload_image);
					$this->model_products->update($upload_image, $product_id);
				}
				$update = $this->model_products->update($data, $product_id);
				if($update == true) {
					$this->session->set_flashdata('success', 'Successfully updated');
					redirect('products/', 'refresh');
				}
				else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					redirect('products/update/'.$product_id, 'refresh');
				}
			}
			else {
				// attributes
				$attribute_data = $this->model_attributes->getActiveAttributeData();
				$attributes_final_data = array();
				foreach ($attribute_data as $k => $v) {
					$attributes_final_data[$k]['attribute_data'] = $v;
					$value = $this->model_attributes->getAttributeValueData($v['id']);
					$attributes_final_data[$k]['attribute_value'] = $value;
				}
				// false case
				$this->data['attributes'] = $attributes_final_data;
				$this->data['brands'] = $this->model_brands->getActiveBrands();
				$this->data['category'] = $this->model_category->getActiveCategroy();
				$this->data['stores'] = $this->model_stores->getActiveStore();
				$product_data = $this->model_products->getProductData($product_id);
				$this->data['product_data'] = $product_data;
				$this->render_template('products/edit', $this->data);
			}
		}
		/*
			* It removes the data from the database
			* and it returns the response into the json format
		*/
		public function remove()
		{
			if(!in_array('deleteProduct', $this->permission)) {
				redirect('dashboard', 'refresh');
			}
			$product_id = $this->input->post('product_id');
			$response = array();
			if($product_id) {
				$delete = $this->model_products->remove($product_id);
				if($delete == true) {
					$response['success'] = true;
					$response['messages'] = "Successfully removed";
				}
				else {
					$response['success'] = false;
					$response['messages'] = "Error in the database while removing the product information";
				}
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Refersh the page again!!";
			}
			echo json_encode($response);
		}
	}			
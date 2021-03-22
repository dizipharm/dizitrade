<?php
	class Dashboard extends Admin_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->not_logged_in();
			$this->data['page_title'] = 'Dashboard';
			$this->load->model('model_products');
			$this->load->model('model_orders');
			$this->load->model('model_users');
			$this->load->model('model_stores');
		}
		/*
			* It only redirects to the manage category page
			* It passes the total product, total paid orders, total users, and total stores information
			into the frontend.
		*/
		function get_data($get_url)
		{
			//$result = array('data' => array());
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => $get_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS =>"Test",
			CURLOPT_HTTPHEADER => array("Content-Type: application/javascript"),)
			);
			$result = curl_exec($curl);
			curl_close($curl);
			return $result;
		}
		
		
		
		public function index()
		{
			$user_id = $this->session->userdata('id');
			$this->data['user_type'] = $this->model_users->getUserGroup($user_id);
			$is_admin = ($this->data['user_type']['id'] == 1) ? true :false;
			$this->data['is_admin'] = $is_admin;

			// Get blockchain data
			// M RaviChand
			// Query All Assets
			// Get AssetID
			// Get Transaction ID from History
			// Display Transaction and Blocks details
			//================= Get Assets
			$response = $this->get_data(API_URL."/api/queryAllAssets");
			//echo '<pre>'; print_r(API_URL."/api/queryAllAssets");exit();
			$response = json_decode($response, true);
			//echo '<pre>'; print_r($response);exit();
			$response1 = json_decode($response['response'],true);
			//echo '<pre>'; print_r($response1);
			$Assets = $response1;
			$preserved = array_reverse($response1);
			$this->data['AssetsArray'] = array_slice($preserved,0,30);
			$this->data['Assets'] = count($Assets);
			//echo '<pre>'; print_r($this->data['Assets']);exit();
			//================= Get Blocks
			$response = $this->get_data(API_URL."/dizia/blocks");			
			$blocks = json_decode($response, true);
			if (count($blocks)>1)
			{
			$blocks = json_decode($response, true);
			$this->data['Blocks'] = count($blocks)-1;
			//echo '<pre>'; print_r($this->data['Blocks']); exit();
			$preserved = array_reverse(json_decode($response), true);
			$this->data['BlocksArray'] = array_slice($preserved,0,30); 
			$newdata=array();
			for($i = count($blocks)-1; $i >= 0; $i--)
			{
				for($j = 0; $j < count($blocks); $j++)
				if ($i == $blocks[$j]['blocknum'])  
				{ 
					$newdata[$i] = $blocks[$j]; 
					continue;
					//echo $i.")".$blocks[$i]['blocknum']."\n"; 
				} 
			}
			$this->data['BlocksArray'] = array_slice($newdata,0,30);
			//echo '<pre>';  print_r ($this->data['BlocksArray']);  exit();
			//================= Get Transactions
			$response = $this->get_data(API_URL."/dizia/transactions");
			$trans = json_decode($response, true);
			$preserved = array_reverse(json_decode($response), true);
			$this->data['TransactionsArray'] = array_slice($preserved,0,30);
			$this->data['Transactions'] = count($trans);
			//================= Get Block wise Transactions
			$response = $this->get_data(API_URL."/dizia/transbyblocks");
			$trans = json_decode($response, true);
			//$preserved = array_reverse(json_decode($response), true);
			$this->data['TransbyBlocksArray'] = array_slice($trans,0,30);
			$this->data['TransbyBlocks'] = count($trans);		
			//echo '<pre>'; print_r($this->data['TransbyBlocksArray'][0]); exit();
			//Sort data as per the blocks // Each Block is with one Transaction// if there are need to think
			$newdata=array();
			for($i = count($trans)-1; $i >= 0; $i--)
			{
				for($j = 0; $j < count($trans); $j++)
				if ($i == $trans[$j]['blocknum'])  
				{ 
					$newdata[$i] = $trans[$j]; 
					// now get AssetId and its data
					continue;// assumed one block for one transaction
					//echo $i.")".$trans[$i]['blocknum']."\n"; 
				} 
			}
			$this->data['TransbyBlocksArray'] = array_slice($newdata,0,30);
			//================= Get Block wise Transactions
			//echo '<pre>';  
			//print_r ($this->data['TransbyBlocksArray']);  exit();
			/*
			for ($jbaid=1; $jbaid<=$this->data['Assets'];$jbaid++){
				$response = $this->get_data(API_URL."/api/getHistoryByPhAssetId/".$jbaid);
				$trans = json_decode($response, true); 
				$trans = json_decode($trans['response'],true);
				//$this->data['BlocksArray'] = $trans;
				//print_r($this->data['BlocksArray']);
			} */
			//echo '<pre>';  
			//print_r ($this->data['BlocksArray']);   
			//exit();			
			/*
			switch (json_last_error()) { 
					case JSON_ERROR_NONE:
					echo "No errors";
					break;
					case JSON_ERROR_DEPTH:
					echo "Maximum stack depth exceeded";
					break;
					case JSON_ERROR_STATE_MISMATCH:
					echo "Invalid or malformed JSON";
					break;
					case JSON_ERROR_CTRL_CHAR:
					echo "Control character error";
					break;
					case JSON_ERROR_SYNTAX:
					echo "Syntax error";
					break;
					case JSON_ERROR_UTF8:
					echo "Malformed UTF-8 characters";
					break;
					default:
					echo "Unknown error";
					break;
				}*/
			//exit();
		    }
			else {
			$this->data['Blocks']=0;
			$this->data['Transactions']=0;
			$this->data['BlocksArray']=[];
				}
			//echo '<pre>'; print_r($blocks['dataExists']);exit();
			
			$this->render_template('dashboard', $this->data);
		}
	}
?>

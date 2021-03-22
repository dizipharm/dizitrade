<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logistics extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Products';

		$this->load->model('model_products');
		$this->load->model('model_brands');
		$this->load->model('model_category');
		$this->load->model('model_stores');
		$this->load->model('model_attributes');
	}

    /* 
    * It only redirects to the manage product page
    */
	public function index()
	{
	//echo '<pre>'; print_r("Hi..");exit();
        if(!in_array('viewProduct', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$this->render_template('logistics/index', $this->data);	
	}
	public function lsp()
	{
	//echo '<pre>'; print_r("Hi..");exit();
        if(!in_array('viewProduct', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$this->render_template('logistics/lsp', $this->data);	
	}
	public function tracking()
	{
        if(!in_array('viewProduct', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$this->render_template('logistics/tracking', $this->data);	
	}

    /*
    * It Fetches the products data from the product table 
    * this function is called from the datatable ajax function
    */
	public function fetchAssetData()
		{
		
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/queryAllAssets",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS =>"Test",
			CURLOPT_HTTPHEADER => array("Content-Type: application/javascript"),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response, true);
			$response1 = json_decode($response['response'],true);
			$newdata = array();// Sorting
			for($i = 0; $i < count($response1); $i++)
			{
				$newdata[$response1[$i]["Key"]]=$i;				
			}
			$newdata1 = array();			
			$newId = 0;
			for($i = 0; $i < count($response1); $i++)
			{
		      // 2 MfgSendToQC  - User-1 Manufacturer 	// 3 QcSendsToPaF - User-2 QC 
			  // 4 PaFSendToLsp - User-1 Manufacturer 	// 5 LspSendToWh  - User-3 Logistics 
			  // 6 WhSendToPh   - User-4 Wholesaler 	// 7 PhSellToCo   - User-5 Pharmacy		
				$checkVars = array("PaFSendToLsp","LspSendToWh" ,"WhSendToPh", "PhSellToCo","HandoffToLogistics");
				If (in_array($response1[$newdata[$i+1]]["Record"]["AssetStatus"],$checkVars,true)) {
					$newdata1[$newId] = ($response1[$newdata[$i+1]]["Record"]);
					$newId = $newId+1;
				}
			}
			
			$this->data['DataTab']=$newdata1; 					
			//echo "<pre>"; print_r($this->data); exit();
			$this->render_template('logistics/index', $this->data);
		}
		public function sendtoqc($product_id)
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
				//CURLOPT_URL => "http://54.237.0.216:8080/api/queryAsset/".$product_id,
				CURLOPT_URL => API_URL."/api/queryAsset/".$product_id,
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
			$this->render_template('logistics/sendtoqc', $this->data);
		}
	public function sendtowh($product_id)
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
				//CURLOPT_URL => "http://54.237.0.216:8080/api/queryAsset/".$product_id,
				CURLOPT_URL => API_URL."/api/queryAsset/".$product_id,
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
			$this->render_template('logistics/sendtowh', $this->data);
		}
    /*
    * If the validation is not valid, then it redirects to the create page.
    * If the validation for each input field is valid then it inserts the data into the database 
    * and it stores the operation message into the session flashdata and display on the manage product page
    */
	public function addtruck()
	{
		$this->render_template('logistics/addtruck', $this->data);
	}
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
        		redirect('logistics/', 'refresh');
        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('logistics/create', 'refresh');
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

            $this->render_template('logistics/create', $this->data);
        }	
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
<?php  
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Track extends Admin_Controller 
	{	
		public function __construct()
		{
			parent::__construct();
			$this->data['page_title'] = 'DiZiTrade';
			$this->load->model('model_reports');
		}
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
			$jbaid=0;
			$response = $this->get_data(API_URL."/api/getHistoryByPhAssetId/".$jbaid);						
			$trans = json_decode($response, true); 
			$trans = json_decode($trans['response'],true);			
			$this->data['AssetTrace']=$trans;			
			$this->data['searchqrcode']="Search QR Code";
			//$this->data['DateWhenTrace']=$datewhentrans;			
			//$this->data['DurationTrace']=$durationtrans;			
			//1AssetCreated 	2MfgSendToQC 	3QCDone 	4PaFSendToLsp 	5LspSendToWh 	6WhSendToPh  7PhSellToCo 
			//echo "<pre>"; print_r($this->data['AssetTrace']); exit();
			$this->data['AssetTrace']=count($trans);
			$this->data['AssetTraceblink']=count($trans);
			$this->data['AssetStatus0']="";
			$this->data['AssetStatus1']="";
			$this->data['AssetStatus2']="";
			$this->data['AssetStatus3']="";
			$this->data['AssetStatus4']="";
			$this->data['AssetStatus5']="";
			$this->data['AssetStatus6']="";
			$this->data['AssetStatus7']="";
			$this->data['DateWhen0']="";
			$this->data['DateWhen1']="";
			$this->data['DateWhen2']="";
			$this->data['DateWhen3']="";
			$this->data['DateWhen4']="";
			$this->data['DateWhen5']="";
			$this->data['DateWhen6']="";
			$this->data['DateWhen7']="";			
			$this->data['Duration0']="";			
			$this->data['Duration1']="";			
			$this->data['Duration2']="";			
			$this->data['Duration3']="";			
			$this->data['Duration4']="";			
			$this->data['Duration5']="";			
			$this->data['Duration6']="";
			$this->data['QRCode0']="";
			$this->data['BatchNo0']="";
			$this->data['OrderNo0']="";
			$this->data['AssetName0']="";
			$this->data['AssetQty0']="";
			$this->data['DateWhenf0']="";
			$this->data['ExpiryDate0']="";
			$this->data['AssetType0']="";			
			$this->data['AssetStatusf'] ="";
			$this->data['GpslocWheref'] ="";
			$this->data['OwnerWhof'] ="";
			//$this->data['AssetStatus']="";
			$this->data['ownernew0'] ="";
			$this->data['ownernew1'] ="";
			$this->data['ownernew2'] ="";
			$this->data['ownernew3'] ="";
			$this->data['ownernew4'] ="";
			$this->data['ownernew5'] ="";
			$this->data['ownernew6'] ="";
			$this->data['ownernew7'] ="";
			$this->data['ownername0'] ="";
			$this->data['ownername1'] ="";
			$this->data['ownername2'] ="";
			$this->data['ownername3'] ="";
			$this->data['ownername4'] ="";
			$this->data['ownername5'] ="";
			$this->data['ownername6'] ="";
			$this->data['ownername7'] ="";
			$this->data['dispm'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispq'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['displ'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispw'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispp'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispc'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			for ($i=0; $i<count($trans); $i++){ 
				if ($i==0){ $this->data['AssetStatus0']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen0']=$trans[$i]['Value']['DateWhen'];
					//$this->data['Duration0']=$trans[$i]['Value']['DateWhen'];
				}
				
				if ($i==1){ $this->data['AssetStatus1']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen1']=$trans[$i]['Value']['DateWhen'];	
					
				}
				if ($i==2) {$this->data['AssetStatus2']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen2']=$trans[$i]['Value']['DateWhen'];
				}
				if ($i==3) {$this->data['AssetStatus3']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen3']=$trans[$i]['Value']['DateWhen'];
				}
				if ($i==4) {$this->data['AssetStatus4']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen4']=$trans[$i]['Value']['DateWhen'];
				}
				if ($i==5) {$this->data['AssetStatus5']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen5']=$trans[$i]['Value']['DateWhen'];
				}
				if ($i==6) {$this->data['AssetStatus6']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen6']=$trans[$i]['Value']['DateWhen'];
				}
				if ($i==7) {$this->data['AssetStatus7']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen7']=$trans[$i]['Value']['DateWhen'];
				}
			}
			
			
			//echo "<pre>"; print_r($this->data['Duration1']); exit();
			$this->render_template('track/index', $this->data);
		}
		public function trackAssetData()
		{
			$data["qrcode"]=$this->input->post("searchqrcode");
			$this->data['searchqrcode']=$this->input->post("searchqrcode");
			//Get Records Query All Assets and Get AssetID
			//
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
			//echo '<pre>';print_r($response1); exit();
			$jbaid=0;	
			for($i = 0; $i < count($response1); $i++)
			if ( $data["qrcode"] == $response1[$i]['Record']['QRCode']) {
				$jbaid=$response1[$i]['Record']['PhAssetId']; break;
			}
			$response = $this->get_data(API_URL."/api/getHistoryByPhAssetId/".$jbaid);						
			$trans = json_decode($response, true); 
			$trans = json_decode($trans['response'],true);			
			//If no Data Found then 
			$this->data['AssetTrace']=$trans;			
			//$this->data['DateWhenTrace']=$datewhentrans;			
			//$this->data['DurationTrace']=$durationtrans;
			//1AssetCreated 	2MfgSendToQC 	3QCDone 	4PaFSendToLsp 	5LspSendToWh 	6WhSendToPh  7PhSellToCo 
			//echo "<pre>"; print_r($this->data['AssetTrace']); exit();
			$this->data['AssetTrace']=count($trans)-2;
			$this->data['AssetTraceblink']=count($trans);
			$this->data['AssetStatus0']="";
			$this->data['AssetStatus1']="";
			$this->data['AssetStatus2']="";
			$this->data['AssetStatus3']="";
			$this->data['AssetStatus4']="";
			$this->data['AssetStatus5']="";
			$this->data['AssetStatus6']="";
			$this->data['AssetStatus7']="";
			$this->data['DateWhen0']="";
			$this->data['DateWhen1']="";
			$this->data['DateWhen2']="";
			$this->data['DateWhen3']="";
			$this->data['DateWhen4']="";
			$this->data['DateWhen5']="";
			$this->data['DateWhen6']="";
			$this->data['DateWhen7']="";			
			$this->data['Duration0']="";			
			$this->data['Duration1']="";			
			$this->data['Duration2']="";			
			$this->data['Duration3']="";			
			$this->data['Duration4']="";			
			$this->data['Duration5']="";			
			$this->data['Duration6']="";
			$this->data['QRCode0']="";
			$this->data['AssetName0']="";
			$this->data['AssetQty0']="";
			$this->data['DateWhenf0']="";
			$this->data['ExpiryDate0']="";
			$this->data['AssetType0']="";
			$this->data['BatchNo0']="";
			$this->data['OrderNo0']="";
			$this->data['AssetStatusf'] ="";
			$this->data['GpslocWheref'] ="";
			$this->data['OwnerWhof'] ="";
			$this->data['ownernew0'] ="";
			$this->data['ownernew1'] ="";
			$this->data['ownernew2'] ="";
			$this->data['ownernew3'] ="";
			$this->data['ownernew4'] ="";
			$this->data['ownernew5'] ="";
			$this->data['ownernew6'] ="";
			$this->data['ownernew7'] ="";
			$this->data['ownername0'] ="";
			$this->data['ownername1'] ="";
			$this->data['ownername2'] ="";
			$this->data['ownername3'] ="";
			$this->data['ownername4'] ="";
			$this->data['ownername5'] ="";
			$this->data['ownername6'] ="";
			$this->data['ownername7'] ="";
			$this->data['dispm'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispq'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['displ'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispw'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispp'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$this->data['dispc'] ="<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			//$this->data['AssetStatus']="";
			for ($i=0; $i<count($trans); $i++){
				if ($i==0){//Asset Created 
					$this->data['AssetStatus0']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen0']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$this->data['Duration0']="0 days, 0 hours";
					$this->data['QRCode0']=$trans[$i]['Value']['QRCode'];
					$this->data['BatchNo0']=$trans[$i]['Value']['BatchNo'];
					$this->data['OrderNo0']=$trans[$i]['Value']['OrderNo'];
					$this->data['AssetName0']=$trans[$i]['Value']['AssetName'];
					$this->data['AssetQty0']=$trans[$i]['Value']['AssetQty'];
					$this->data['DateWhenf0']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$this->data['ExpiryDate0']=date("d-M-Y", strtotime($trans[$i]['Value']['ExpiryDate']));
					$this->data['AssetType0']=$trans[$i]['Value']['AssetType'];
					$date_when0 = date("Y-m-d", strtotime($this->data['DateWhen0']));
					$datewhen0new = new DateTime($date_when0);
					if (count($trans)==1) $ownernew="No"; else $ownernew="Yes";
					if (count($trans)==1) $ownername="N/A"; 
					else if (count($trans)==2) $ownername="QC/Regulator"; 
					else if (count($trans)==3) $ownername="Manufacturer"; 
					else if (count($trans)>=4) $ownername="Logistics"; 
					$this->data['dispm']="<span style='text-align: left;' >Asset Created&nbsp;:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$this->data['DateWhen0']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;".$ownernew."</span><br><br><span style='color:#7FFFD4;' >Hand-off Details</span><br><span style='text-align: left;' >Sender............:</span><span style = 'text-align: right;' >&nbsp;&nbsp;Manufacturer</span><br><span style='text-align: left;'
					>Receiver..........:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$ownername."</span><br>Location / GLN:  N/A<br><br>";
				}
				if ($i==1)    { //AssetCreated
					$this->data['AssetStatus1']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen1']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));					
					$date_when1 = date("Y-m-d", strtotime($this->data['DateWhen1']));
					$datewhen1new = new DateTime($date_when1);
					$this->data['Duration1']=$datewhen1new->diff($datewhen0new)->format("%d days, %h hours");
					//echo $datewhen2new->diff($datewhen1new)->format("%d days, %h hours and %i min");
					$this->data['dispm']=$this->data['dispm']."<span style='color:#7FFFD4;' >Transactions</span><br><span style='text-align: left;'>Sent To QC......:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen1']."</span><br>";
					
					if (count($trans)<=2) $ownernew1="No"; else $ownernew1="Yes";
					if (count($trans)<=2) $ownername1="N/A"; 
					else if (count($trans)>=3) $ownername1="Manufacturer"; 					
					$this->data['dispq']="<span style='text-align: left;' >QC Requested:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen1']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;".$ownernew1."</span><br><br><span style='color:#7FFFD4;' >Hand-off Details</span><br><span style='text-align: left;' >Sender............:</span><span style = 'text-align: right;' >&nbsp;&nbsp;QC/Regulator</span><br><span style='text-align: left;'
					>Receiver..........:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$ownername1."</span><br>Location / GLN: N/A<br><br>";
					
				}
				if ($i==2) { //MfgSendToQC
					$this->data['AssetStatus2']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen2']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));					
					$date_when2 = date("Y-m-d", strtotime($this->data['DateWhen2']));
					$datewhen2new = new DateTime($date_when2);
					$this->data['Duration1']=$datewhen1new->diff($datewhen0new)->format("%d days, %h hours");
					$this->data['Duration2']=$datewhen2new->diff($datewhen1new)->format("%d days, %h hours");				
					$this->data['dispq']=$this->data['dispq']."<span style='color:#7FFFD4;' >Transactions</span><br><span style='text-align: left;'>QC Reported:</span><span
					style = 'text-align: right;' >&nbsp;".$this->data['DateWhen2']."</span><br><br><br>";
					
				}
				if ($i==3) { //QCDone
					$this->data['AssetStatus3']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen3']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$date_when3 = date("Y-m-d", strtotime($this->data['DateWhen3']));
					$datewhen3new = new DateTime($date_when3);
					$this->data['Duration1']=$datewhen3new->diff($datewhen0new)->format("%d days, %h hours");
					$this->data['Duration3']=$datewhen3new->diff($datewhen2new)->format("%d days, %h hours");
					$this->data['dispm']=$this->data['dispm']."<span style='text-align: left;' >Pak & Fwd.......:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen3']."</span><br><br>";	
					
					if (count($trans)<=4) $ownernew3="No"; else $ownernew3="Yes";
					
					if (count($trans)<=4) $ownername3="N/A"; 
					else if (count($trans)==4) $ownername3="Logistics";
					else if (count($trans)>=4) $ownername3="Wholesaler"; 	
					
					$this->data['displ']="<span style='text-align: left;' >Transit Starts...:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen3']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;".$ownernew3."</span><br><br><span style='color:#7FFFD4;' >Hand-off Details</span><br><span style='text-align: left;' >Sender............:</span><span style = 'text-align: right;' >&nbsp;&nbsp;Logistics</span><br><span style='text-align: left;'
					>Receiver..........:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$ownername3."</span><br>Location / GLN: N/A<br><br>";
					
				}
				if ($i==4) { //PaFSendToLsp
					$this->data['AssetStatus4']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen4']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$date_when4 = date("Y-m-d", strtotime($this->data['DateWhen4']));
					$datewhen4new = new DateTime($date_when4);
					$this->data['Duration1']=$datewhen4new->diff($datewhen0new)->format("%d days, %h hours");
					$this->data['Duration4']=$datewhen4new->diff($datewhen3new)->format("%d days, %h hours");	
					
					$this->data['displ']=$this->data['displ']."<span style='color:#7FFFD4;' >Transactions</span><br><span style='text-align: left;'>Hand-off:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen4']."</span><br><br><br>";
					
					if (count($trans)<=5) $ownernew4="No"; else $ownernew4="Yes";
					
					if (count($trans)<=5) $ownername4="N/A"; 
					else if (count($trans)==5) $ownername4="Wholesaler"; 	
					else if (count($trans)>=5) $ownername4="Pharmacy";
					
					$this->data['dispw']="<span style='text-align: left;' >GoodsReceived:</span><span style = 'text-align: right;' >".$this->data['DateWhen4']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;".$ownernew4."</span><br><br><span style='color:#7FFFD4;' >Hand-off Details</span><br><span style='text-align: left;' >Sender............:</span><span style = 'text-align: right;' >&nbsp;&nbsp;Wholesaler</span><br><span style='text-align: left;'
					>Receiver..........:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$ownername4."</span><br>Location / GLN: N/A<br><br>";
		
				}
				if ($i==5) {//LspSendToWh
					$this->data['AssetStatus5']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen5']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$date_when2 = date("Y-m-d", strtotime($this->data['DateWhen5']));
					$datewhen2new = new DateTime($date_when2);
					$date_when1 = date("Y-m-d", strtotime($this->data['DateWhen4']));
					$datewhen1new = new DateTime($date_when1);
					$this->data['Duration5']=$datewhen2new->diff($datewhen1new)->format("%d days, %h hours");
					
					$this->data['dispw']=$this->data['dispw']."<span style='color:#7FFFD4;' >Transactions</span><br><span style='text-align: left;'>Hand-off:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen5']."</span><br><br><br>";
					
					if (count($trans)<=6) $ownernew5="No"; else $ownernew5="Yes";
					
					if (count($trans)<=6) $ownername5="N/A"; 
					else if (count($trans)==6) $ownername5="Pharmacy"; 	
					else if (count($trans)>=6) $ownername5="Customer";
					
					$this->data['dispp']="<span style='text-align: left;' >Case Arrived...:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen5']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;".$ownernew5."</span><br><br><span style='color:#7FFFD4;' >Hand-off Details</span><br><span style='text-align: left;' >Sender............:</span><span style = 'text-align: right;' >&nbsp;&nbsp;Pharmacy</span><br><span style='text-align: left;'
					>Receiver..........:</span><span style = 'text-align: right;' >&nbsp;&nbsp;".$ownername5."</span><br>Location / GLN: N/A<br><br>";
				}
				if ($i==6) {//WhSendToPh
					$this->data['AssetStatus6']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen6']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$date_when2 = date("Y-m-d", strtotime($this->data['DateWhen6']));
					$datewhen2new = new DateTime($date_when2);
					$date_when1 = date("Y-m-d", strtotime($this->data['DateWhen5']));
					$datewhen1new = new DateTime($date_when1);
					$this->data['Duration6']=$datewhen2new->diff($datewhen1new)->format("%d days, %h hours");
					
					$this->data['dispp']=$this->data['dispp']."<span style='color:#7FFFD4;' >Transactions</span><br><span style='text-align: left;'>Hand-off:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen6']."</span><br><br><br>";
					
					if (count($trans)<=7) $ownernew6="No"; else $ownernew6="Yes";
					
					if (count($trans)<=7) $ownername6="N/A"; 
					else if (count($trans)==7) $ownername6="Customer"; 	
					else if (count($trans)>=7) $ownername6="Customer";
					
					$this->data['dispc']="<span style='text-align: left;' >Item Received:</span><span style = 'text-align: right;' >&nbsp;".$this->data['DateWhen6']."</span><br><span style='color:#FFD700;'>Change in Ownership&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;No</span><br><br><br>Location / GLN: N/A<br><br>";
				}
				if ($i==7) { //Sold to Customer
					$this->data['AssetStatus7']=$trans[$i]['Value']['AssetStatus'];
					$this->data['DateWhen7']=date("d-M-Y", strtotime($trans[$i]['Value']['DateWhen']));
					$date_when2 = date("Y-m-d", strtotime($this->data['DateWhen7']));
					$datewhen2new = new DateTime($date_when2);
					$date_when1 = date("Y-m-d", strtotime($this->data['DateWhen6']));
					$datewhen1new = new DateTime($date_when1);
					$this->data['Duration7']=$datewhen2new->diff($datewhen1new)->format("%d days, %h hours");
				}
			}
			if (count($trans)>1) $this->data['dispm']=$this->data['dispm']."<span style = 'text-align: right;color:#87CEFA;'>How long ?&nbsp;&nbsp;:&nbsp;".$this->data['Duration1']."</span><br>";
			
			if (count($trans)>2) $this->data['dispq']=$this->data['dispq']."<span style = 'text-align: right;color:#87CEFA;'>How long ?&nbsp;&nbsp;:&nbsp;".$this->data['Duration2']."</span><br>";			
			
			if (count($trans)>3) $this->data['displ']=$this->data['displ']."<span style = 'text-align: right;color:#87CEFA;'>How long ?&nbsp;&nbsp;:&nbsp;".$this->data['Duration3']."</span><br>";
			
			if (count($trans)>4) $this->data['dispw']=$this->data['dispw']."<span style = 'text-align: right;color:#87CEFA;'>How long ?&nbsp;&nbsp;:&nbsp;".$this->data['Duration4']."</span><br>";
			
			if (count($trans)>5) $this->data['dispp']=$this->data['dispp']."<span style = 'text-align: right;color:#87CEFA;'>How long ?&nbsp;&nbsp;:&nbsp;".$this->data['Duration5']."</span><br>";
			
			
			$this->data['AssetTracking']=count($trans)-1;
			for ($ii=0; $ii<= $this->data['AssetTracking']; $ii++) {
			    if ($trans[$ii]['Value']['OwnerWho'] == "QualityControll")  $trans[$ii]['Value']['OwnerWho'] = "Quality-Control";
				if ($trans[$ii]['Value']['OwnerWho'] == "Manufacturer Celgene")  $trans[$ii]['Value']['OwnerWho'] = "Manufacturer";
				
				if ($trans[$ii]['Value']['AssetStatus'] == "AssetCreated")  $trans[$ii]['Value']['AssetStatus'] = "Asset Created";
				if ($trans[$ii]['Value']['AssetStatus'] == "MfgSendToQC")  $trans[$ii]['Value']['AssetStatus'] = "Sent To Quality Control";
				if ($trans[$ii]['Value']['AssetStatus'] == "QCDone")  $trans[$ii]['Value']['AssetStatus'] = "Quality Checks Done";
				if ($trans[$ii]['Value']['AssetStatus'] == "PaFSendToLsp")  $trans[$ii]['Value']['AssetStatus'] = "Dispatcher handoff to Logistics";
				if ($trans[$ii]['Value']['AssetStatus'] == "LspSendToWh")  $trans[$ii]['Value']['AssetStatus'] = "Logistics handoff to Wholesaler/ Distributor";
				if ($trans[$ii]['Value']['AssetStatus'] == "WhSendToPh")  $trans[$ii]['Value']['AssetStatus'] = "Wholesaler handoff to Pharmacy";
				if ($trans[$ii]['Value']['AssetStatus'] == "PhSellToCo")  $trans[$ii]['Value']['AssetStatus'] = "Customer Received";
				
				//echo "<pre>"; print_r($this->data['AssetStatus'.$ii]); exit; 
				if ($ii == $this->data['AssetTracking']){
					//final state variable
					$this->data['AssetStatusf'] = $trans[$ii]['Value']['AssetStatus']; 
					$this->data['GpslocWheref'] = $trans[$ii]['Value']['GpslocWhere']; 
					$this->data['OwnerWhof'] = $trans[$ii]['Value']['OwnerWho']; 
					
				}
				
			}			
			$this->render_template('track/index', $this->data);
		}
	}
?>

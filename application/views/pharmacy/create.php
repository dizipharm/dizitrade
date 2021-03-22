<!-- IonIcons -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script href="https://github.com/inorganik/CountUp.js"></script>
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style <link rel="stylesheet" href="assets/dist/css/adminlte.min.css"> -->
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- ChartJS <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Content Wrapper. Contains page content
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- div class="container-fluid" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage
			<small>Drug Units</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Assets</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">				
				<div class="box">
					<div class="container-fluid mt--12">						
						<div class="row">
							<div class="col">
								<div class="card shadow">
									<div class="card-header bg-transparent">
										<h3 class="mb-0">Add</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<label for="">QR Code (Manual/ Automatic)</label>
														<input type="text" class="form-control" id="qrcode" name="" placeholder="Enter QR Code">
													</div>
													<div class="form-group">
														<label for="">Batch Number</label>
														<input type="text" class="form-control" id="bt_no" name="" value="B7683202">
													</div>
													<div class="form-group">
														<label for="">Order Number</label>
														<input type="text" class="form-control" id="or_no" name="" value="Ord29u32020">
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<div class="form-group">
															<label for="">Manufactured Date</label>
															<input type="date" class="form-control" id="mnftdt" name="mnft_date" placeholder="Manufactured Date">
														</div>
														<div class="form-group">
															<label for="">Drug Name</label>
														
															<select class="form-control" id="assettype" name="-B-Twill-50kg">
																
																<option select="selected" value="1" >Lenalidomide</option>
																<option  value="2" >Lenalidomide2</option>
															</select>
														</div>
														<div class="form-group">
															<label for="">Drug Type</label>
															<select class="form-control" id="assettype" name="-B-Twill-50kg">
																
																<option select="selected" value="1" >Tablet/Capsule</option>
																<option  value="2" >Injection</option>
															</select>
														</div>
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<div class="form-group">
															<label for="">Drug Qty</label>
															<input type="text" class="form-control" id="wh_name" name="" value="34">
														</div>
														<div class="form-group">
															<label for="">Expiry Date</label>
															<input type="date" class="form-control" id="mnftdt" name="mnft_date" placeholder="">
														</div>
														<div class="form-group">
															<label for="">Location/Address</label>
															<input type="text" class="form-control" id="jm_add" name="" value="Uxbridge,UB11 1DB,United Kingdom">
														</div>
														<div class="form-group">
															<div class="text-right mb-4">
																<button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Asset</button>
															</div>
														</div>
													</div>
												</form>
											</div>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			var qrcode = document.getElementById("qrcode");
			var batchno= document.getElementById("bt_no");
			var orderno= document.getElementById("or_no");
			var mnftdt= document.getElementById("mnftdt");
			var assetname= document.getElementById("asset_name");
			var assettype= document.getElementById("assettype");
			var jmname= document.getElementById("jm_name");
			var whname= document.getElementById("wh_name");
			//alert(qrcode.value);
			/*
				var myHeaders = new Headers();
				myHeaders.append("content-type", "application/json");
				var raw = JSON.stringify({"QRCode":qrcode.value,"BatchNo":batchno.value,"OrderNo":orderno.value,"AssetName":assetname.value,"AssetType":assettype.value,"Jutemill":jmname.value,"QCLoading":"QC-Unloading-Pending","Logistics":"LSP","QCUnloading":"QC-Loading-Pending","Warehouse":whname.value,"Ricemill":"","GeoLoc":"22.5902833,88.3217102","Owner":"jutemill","AssetStatus":"AssetCreated"});
				//alert(raw);
				console.log(raw);
				var requestOptions = {
				method: 'POST',
				headers: myHeaders,
				body: raw,
				redirect: 'follow'
				};
				fetch("http://100.25.4.248:8080/api/addAsset", requestOptions)
				.then( response => response.text())						
				.then(result => console.log(result))
				.catch(error => console.log('error', error));
			*/
			var settings;
			var settings = {
				"url": "http://100.25.4.248:8080/api/addAsset/",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"content-type": "application/json"
				},
				"data": JSON.stringify({"QRCode":qrcode.value,"BatchNo":batchno.value,"OrderNo":orderno.value,"AssetName":assetname.value,"AssetType":assettype.value,"Jutemill":jmname.value,"QCLoading":"QC-Unloading-Pending","Logistics":"LSP","QCUnloading":"QC-Loading-Pending","Warehouse":whname.value,"Ricemill":"","ManufacturerDate":mnftdt.value,"GeoLoc":"22.5902833,88.3217102","Owner":"Jutemill","AssetStatus":"AssetCreated"}),
			};
			
			$.ajax(settings).done(function (response) {
				//console.log(response);
				alert(response);
				location.href = "<?php echo base_url(); ?>jutemill/";
			});
		});
	});
	</script>		
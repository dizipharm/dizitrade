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
			<li class="active">Manufacturer</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">				
				<div class="box">
				<div class="container-fluid">
					<div class="container-fluid mt--12">
						<div class="row">
							<div class="col">
								<div class="card shadow">
									<div class="card-header bg-transparent">
										<h3 class="mb-0">Add Drug</h3>
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
															<select class="form-control" id="drug" name="Drug Name">
																<option select="selected" value="Lenalidomide">Lenalidomide</option>
																<option  value="Lenalidomide2">Lenalidomide2</option>
																<option  value="Aspirin">Aspirin</option>
															</select>
														</div>
														<div class="form-group">
															<label for="">Drug Type</label>
															<select class="form-control" id="assettype" name="Drug Type">
																<option select="selected" value="Tablet/Capsule">Tablet/Capsule</option>
																<option  value="Injection">Injection</option>
															</select>
														</div>
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<div class="form-group">
															<label for="">Expiry Date</label>
															<input type="date" class="form-control" id="expdt" name="mnft_date" placeholder="">
														</div>
														<div class="form-group">
															<label for="">Manufacturer Name</label>
															<select class="form-control" id="mfg_type" name="Manufacturer Name">
																<option select="selected" value="Celgene">Celgene</option>
																<option  value="Aspar">Aspar</option>
																<option  value="Eisai">Eisai</option>
																<option  value="Gloxo Smith">Gloxo Smith</option>
															</select>
														</div>
														<div class="form-group">
															<label for="">Drug Qty</label>
															<input type="text" class="form-control" id="drug_qty" name="" value="1134">
														</div>
														<div class="form-group">
															<div class="text-right mb-4">
															<a href="<?php echo base_url(); ?>manufacturer/fetchAssetData/">
														<input  type="button" name="Cancel" value="Cancel"  class="btn btn-danger">
													</a>
																<button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Drug</button>
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
			var expdt= document.getElementById("expdt");
			var assetname= document.getElementById("drug");
			var assettype= document.getElementById("assettype");
			var mfgtype= document.getElementById("mfg_type");
			var drugqty= document.getElementById("drug_qty");
			
			var settings;
			var apiurl = "<?php echo API_URL ?>";
			var settings = {
				"url": apiurl+"/api/addAsset/",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"content-type": "application/json"
				},
				"data": JSON.stringify({"QRCode":qrcode.value,"BatchNo":batchno.value,"OrderNo":orderno.value,"AssetName":assetname.value,"AssetType":assettype.value,"AssetQty":drugqty.value,"ExpiryDate":expdt.value,"DateWhen":mnftdt.value,"OwnerWho":mfgtype.value,"GpslocWhere":"51.5112627,-0.4499933","TransWhy":"Production Manager Created Item/Case","AssetStatus":"AssetCreated"}),
			};
			
			$.ajax(settings).done(function (response) {
				//console.log(response);
				alert(response);
				location.href = "<?php echo base_url(); ?>manufacturer/fetchAssetData";
			});
		});
	});
	</script>		

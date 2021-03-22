<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	@font-face {
	font-family: ExampleFont;
	src: url(/path/to/fonts/examplefont.woff) format('woff'),
	url(/path/to/fonts/examplefont.eot) format('eot');
	font-weight: 200;
	font-style: normal;
	font-display: block;
	}  
</style>
<!-- div class="container-fluid" -->
<!-- Content Wrapper. Contains page content -->
<div id="mysubmit" class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h4 class="box-title"><b>Pharmacy</b></h4>
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Conform Product Details before Sending to Customer</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body" style="font-size: 11px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif;">
						<table id="myData" class="table table-bordered table-striped">
							<thead>
								<tr bgcolor="skyblue">
									<th style="text-align: center;">Id</th>
									<th style="text-align: center;">QR Code</th>
									<th style="text-align: center;">Batch No</th>
									<th style="text-align: center;">Product Name /Type</th>
									<th style="text-align: center;">Product  Qty</th>
									<th style="text-align: center;">Current Owner</th>
									<th style="text-align: center;">Mfg Date</th>
									<th style="text-align: center;">Expiry Date</th>
									<th style="text-align: center;">Current GPS Location</th>
									<th style="text-align: center;">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="phassetid"><?php echo $QueryAsset["PhAssetId"];?></td>
									<td><?php echo $QueryAsset['QRCode'];?></td>
									<td><?php echo $QueryAsset["BatchNo"];?></td>
									<td><?php echo $QueryAsset["AssetName"]."/".$QueryAsset["AssetType"];?></td>
									<td><?php echo $QueryAsset["AssetQty"];?></td>
									<td><?php echo $QueryAsset["OwnerWho"];?></td>
									<td><?php echo date("d-m-Y", strtotime($QueryAsset['DateWhen']));?></td>
									<td><?php echo date("d-m-Y", strtotime($QueryAsset['ExpiryDate']));?></td>
									<td><?php echo $QueryAsset["GpslocWhere"];?></td>
									<td> <?php if($QueryAsset['AssetStatus'] == "WhSendToPh"){ ?>Send To Customer<?php }?> </td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div id="assetactions" class="row">
			<div class="col-md-12 col-xs-12">
				<div class="box">
					<!-- /.box-header -->
					<div class="container-fluid mt-7">
						<div class="row">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Selling to Customer</h3>
								</div>
								<!-- /.box-header -->
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-2">
									</div>
									<div class="col-md-4">
										<form action="javascript:">
											<div class="form-group">
												<label for="">Product New Owner</label>
												<select class="form-control" id="assetholder" name="AssetHolder">
													<option selected="selected" value="Pharmacy" >Pharmacy</option>
												</select>
											</div>
											<div class="form-group">
												<label for="">Geo Location (Lat, Long)</label>
												<select class="form-control" id="geoloc" name="GeoLoc">
													<option selected="selected" value="51.5112627,-0.4499933">Celgene(51.5112627,-0.4499933)</option>
													<option value="51.5937,0.2653">Aspar(51.5937,0.2653)</option>
													<option value="46.050610,-93.568680">Eisai(46.050610,-93.568680)</option>
													<option value="-27.686970,152.908670">Gloxo Smith(-27.686970,152.908670)</option>
												</select>
											</div>
											<div class="form-group">
												<label for="">Transaction</label>
												<input type="text" value="Transaction"  class="form-control" id="transwhy" name="" placeholder="Transaction Details">
											</div>
										</form>
									</div>
									<div class="col-md-4">
										<form action="javascript:">
											<div class="form-group">
												<div class="form-group">
													<label for="">Product  Status</label>
													<select class="form-control" id="assetstatus" name="AssetStatus">
														<option selected="selected" value="PhSellToCo">Handoff To Customer</option>
													</select>
												</div>
												<!-- Date pikcer -->
												<div class="form-group">
													<label for="">Selling Date</label>
													<input type="date" value="<?php echo date('Y-m-d'); ?>"  class="form-control" id="assign_date" name="Assign_Date" placeholder="Assugned Date">
												</div><br>
												<div class="form-group">
													<label for=""></label>
													<a href="<?php echo base_url(); ?>pharmacy/fetchAssetData/">
														<input  type="button" name="Cancel" value="Cancel"  class="btn btn-danger">
													</a>
													<input id="updateAsset" type="button" class="btn btn-success" value="Send To Customer"/>
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
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
	$(document).ready(function(){ 
		$("#updateAsset").click(function  (){ 
			event.preventDefault();	 
			var UserId="User1";
			var PhAssetId =  "<?php echo $QueryAsset['PhAssetId']; ?>";
			//var OwnerWho = "<?php echo $QueryAsset['OwnerWho']; ?>";
			var OwnerWho = document.getElementById("assetholder").value;
			var GpslocWhere= document.getElementById("geoloc").value;
			var AssetStatus= document.getElementById("assetstatus").value;
			var DateWhenform= document.getElementById("assign_date").value;
			var TransWhy= document.getElementById("transwhy").value;
			if (TransWhy.value = ""){ 
			    TransWhy = "Transaction";
			}
			TransWhy = "Transaction";
			var api_url = "<?php echo API_URL; ?>"+"/api/updatePhAsset/";
			//alert(DateWhenform.substring(8,10)+DateWhenform.substring(4,8)+DateWhenform.substring(0,4)); 
			var DateWhen = DateWhenform.substring(8,10)+DateWhenform.substring(4,8)+DateWhenform.substring(0,4); 
			//PhAssetId, UserId, DateWhen, OwnerWho, GpslocWhere, TransWhy, AssetStatus; 
			//alert(PhAssetId+" "+UserId+" "+ DateWhen +" "+OwnerWho+" "+GpslocWhere+" "+TransWhy+" "+AssetStatus);
			var vdata=JSON.stringify({"PhAssetId":PhAssetId, "UserId":UserId,"DateWhen":DateWhen, "TransWhy":TransWhy,  "OwnerWho":OwnerWho, "GpslocWhere":GpslocWhere, "AssetStatus":AssetStatus});
			//alert(vdata);
			console.log(vdata);
			//exit();
			
			var settings = { 
				"url": api_url, 
				"method": "POST", 
				"timeout": 0, 
				"headers": { "content-type": "application/json" }, 
				"data": vdata, 
			}; 
			$.ajax({
				"url": api_url,
				"method": "POST",
				"timeout": 0,
				"headers": {
					"content-type": "application/json"
				},
				"data": vdata,
				success: function(response) {
					alert(response);
					$(".mysubmit").fadeIn('fast').delay(30).fadeOut('fast').html(response.message);
					location.href = "<?php echo base_url(); ?>pharmacy/fetchAssetData/";
				},
				error: function(response) {
					console.error();
				}
			});
		});
	});		
</script>	
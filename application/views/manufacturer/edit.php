<!-- div class="container-fluid" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Purchase Order Details</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="myData" class="table table-bordered table-striped">
							<thead>
								<tr bgcolor="skyblue">
									<th style="text-align: center;">Order Date</th>
									<th style="text-align: center;">Order No</th>
									<th style="text-align: center;">Indent No</th>
									<th style="text-align: center;">SPA Name</th>
									<th style="text-align: center;">Bag Model</th>
									<th style="text-align: center;">Order Qty(Sacks/Bales)</th>
									<th style="text-align: center;">JuteMill</th>
									<th style="text-align: center;">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align: center;">15-Jan-2020</td>
									<td style="text-align: center;">Ord2020</td>
									<td style="text-align: center;">APCS0923</td>
									<td style="text-align: center;">AP Civil Supplies</td>
									<td style="text-align: center;">Jute-Sacks-B-Twill-50kg</td>
									<td style="text-align: center;">19,838</td>
									<td style="text-align: center;">Ambika Jute Mill</td>
									<td style="text-align: center;">In Progress</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<div class="container-fluid mt--7">
					<div class="row">
						<div class="col">
							<div class="card shadow">
								<div class="card-header bg-transparent">
									<h3 class="mb-0">Update Asset</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-4">
											<form action="javascript:">
												<div class="form-group">
													<label for="">QR Code</label>
													<input type="text" class="form-control" id="qrcode" name="" placeholder="Enter QR Code">
												</div>
												<div class="form-group">
													<label for="">Batch Number</label>
													<input type="text" class="form-control" id="bt_no" name="" placeholder="Enter Batch Number">
												</div>
												<div class="form-group">
													<label for="">Order Number</label>
													<input type="text" class="form-control" id="or_no" name="" placeholder="Enter Order Number">
												</div>
											</form>
										</div>
										<div class="col-md-4">
											<form action="javascript:">
												<div class="form-group">
													<div class="form-group">
														<label for="">Manufactured Date</label>
														<input type="date" class="form-control" id="mnft_date" name="mnft_date" placeholder="Manufactured Date">
													</div>
													<div class="form-group">
														<label for="">Asset Name</label>
														<input type="text" class="form-control" id="asset_name" name="" value="Jute-Sacks">
													</div>
													<div class="form-group">
														<label for="">Asset Model</label>
														<select class="form-control" id="assettype" name="-B-Twill-50kg">
															<option value="0" selected disabled hidden>
																Select Asset
															</option>
															<option value="BT-Will-50kgs" >B-Twill-50kg</option>
														</select>
													</div>
												</div>
											</form>
										</div>
										<div class="col-md-4">
											<form action="javascript:">
												<div class="form-group">
													<div class="form-group">
														<label for="">Warehouse Name</label>
														<input type="text" class="form-control" id="wh_name" name="" placeholder="Enter Warehouse Name">
													</div>
													<div class="form-group">
														<label for="">Jute Mill Name</label>
														<input type="text" class="form-control" id="jm_name" name="" placeholder="Enter Jute Mill Name">
													</div>
													<div class="form-group">
														<label for="">Jute Mill Address</label>
														<input type="text" class="form-control" id="jm_add" name="" placeholder="Enter Jute Mill Address">
													</div>
													<div class="form-group">
														<div class="text-right mb-4">
															<button type="submit" class="btn btn-primary" (click)="on_Submit()">Update Asset</button>
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
			var assetname= document.getElementById("asset_name");
			var assettype= document.getElementById("assettype");
			var jmname= document.getElementById("jm_name");
			var whname= document.getElementById("wh_name");
			//alert(qrcode.value);
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
			fetch("http://52.86.219.68:8080/api/addAsset", requestOptions)
			.then( response => response.text())						
			.then(result => console.log(result))
			.catch(error => console.log('error', error));
		});
	});
	</script>	
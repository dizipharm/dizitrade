<!-- div class="container-fluid" -->
<!-- Content Wrapper. Contains page content -->
<div id="mysubmit" class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h4 class="box-title"><b>Quality Control Department</b></h4>
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Asset Details</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="myData" class="table table-bordered table-striped">
							<thead>
								<tr bgcolor="skyblue">
									<th style="text-align: center;">Id</th>
									<th style="text-align: center;">QR Code</th>
									<th style="text-align: center;">Batch No</th>
									<th style="text-align: center;">AssetName /Type</th>
									<th style="text-align: center;">Jutemill</th>
									<th style="text-align: center;">Owner</th>
									<th style="text-align: center;">Manufactured Date</th>
									<th style="text-align: center;">QC Requested Dated</th>
									<th style="text-align: center;">Current GPS Location</th>
									<th style="text-align: center;">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="jbassetid"><?php echo $QueryAsset["JbAssetId"];?></td>
									<td><?php echo $QueryAsset['QRCode'];?></td>
									<td><?php echo $QueryAsset["BatchNo"];?></td>
									<td><?php echo $QueryAsset["AssetName"]."/".$QueryAsset["AssetType"];?></td>
									<td><?php echo $QueryAsset["Jutemill"];?></td>
									<td><?php echo $QueryAsset["Owner"];?></td>
									<td><?php echo $QueryAsset["Date"]["ManufactureDate"];?></td>
									<td><?php echo date("d-M-Y", strtotime($QueryAsset["Date"]["SendToQCLoadingDate"]));?></td>
									<td><?php echo $QueryAsset["GeoLoc"];?></td>
									<td><mark><b><?php echo $QueryAsset["AssetStatus"];?></b></mark></td>
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
					<div class="container-fluid mt-12">
						<div class="row">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">User Actions</h3>
								</div>
								<!-- /.box-header -->
							</div>
							<div class="card-body">
								<div class="row">
									<div >
									</div>
									<div class="col-md-4">
										<form action="javascript:">
											<div class="form-group">
												<label for="">Asset Holder (New Owner)</label>
												<select class="form-control" id="assetholder" name="AssetHolder">
													<option value="User1" >Manufacture (JuteMill)</option>
													<option value="User2" >Quality Controll(QC)</option>
													<option selected="selected" value="User3" >Logistics (LSP)</option>
													<option value="User4" >Warehouse (Distributor)</option>
													<option value="User5" >Retailer (Packaging)</option>
												</select>
											</div>
											<div class="form-group">
												<label for="">Geo Location (Lat, Long)</label>
												<select class="form-control" id="geoloc" name="GeoLoc">
													<option selected="selected" value="geoloc1">Ambica Jute Mill(22.6226407,88.3538107)</option>
													<option value="geoloc2" >Cuttack,Odisha(20.4630933,85.7977047)</option>
													<option value="geoloc3" >Vijayawada,AP(22.5902833,88.3217102)</option>
													<option value="geoloc4" >Anantapur,AP (18.5820235,78.4715534)</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-md-4">
										<form action="javascript:">
											<div class="form-group">
												<label for="">Asset Status</label>
												<select class="form-control" id="assetstatus" name="AssetStatus">
													<option value="Ordered" >Asset Ordered</option>
													<option value="Manufactured" >Asset Created</option>
													<option value="QCLoadingPending" >QC-Pending (Loading)</option>
													<option value="QCLoadingDone">QC-Done(Loading)</option>
													<option value="HandoffToLogistics" >Handoff To Logistics</option>
													<option value="QCUnloadingPending" >QC-Pending(Unloading)</option>
													<option selected="selected" value="QCUnloadingDone" >QC-Done(Unloading)</option>
													<option value="HandoffToWarehouse" >Handoff To Warehouse</option>
													<option value="JutebagWithRicemill" >Retailer/Packaging</option>
													<option value="JutebagReturnedToWarehouse" >Back to Warehouse</option>
													<option value="AssetRetired" >Asset Retired/Callback</option>
												</select>
											</div>
											<!-- Date pikcer -->
											<div class="form-group">
												<label for="">Assigned Date</label>
												<input type="date" value="<?php echo date('Y-m-d'); ?>"  class="form-control" id="assign_date" name="Assign_Date" placeholder="Assugned Date">
											</div>
										</form>
									</div>	
									<div class="col-md-4">	
										<form action="javascript:">
											<label for="">Asset's Quality Status </label>
											<!-- Material unchecked -->
											<!-- Default inline 1-->
											<div class="custom-control custom-checkbox custom-control-inline">
												<input type="checkbox" class="custom-control-input" id="defaultInline1">
												<label class="custom-control-label label label-danger" for="defaultInline1">Rejected</label>
												
												<input type="checkbox" class="custom-control-input" id="defaultInline2" checked="true">
												<label class="custom-control-label label label-success" for="defaultInline2">Accepted</label>
												
												<input type="checkbox" class="custom-control-input" id="defaultInline3">
												<label class="custom-control-label label label-default" for="defaultInline3">Indeterinate</label>
											</div><br><br>
											<div class="form-group">
												<label for="">Acknowledgement</label>
												<input type="file" name="InvAckPath" id="INV_ACK_PATH">
											</div>													
										
										</form>											
									</div>
								</div>
							</div>
						</div>
						<div class="container-fluid mt-12">
							<div class="form-group">
								<div class="text-right mb-8">
								</div>
								<div class="text-right mb-2">
									<a href="<?php echo base_url(); ?>qualitycontrol/">
										<input  type="button" name="Cancel" value="Cancel"  class="btn btn-danger">
									</a>
									<button id="updateAsset" type="submit" class="btn btn-success" (click)="on_Submit()">Submit</button >
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
	/*
		// ==========================
		// Status Vs dates
		// Ordered - OrderedDate
		// Manufactured - ManufactureDate
		// QCLoadingPending - SendToQCLoadingDate
		// QCLoadingDone    - SubmitQCReportLoadingDate
		// HandoffToLogistics - HandoffToLogisticsDate
		// QCUnloadingPending - SendToQCLoadingDate
		// QCUnloadingDone    - SubmitQCReportLoadingDate
		// HandoffToWarehouse - HandoffToWarehouseDate
		// JutebagWithRicemill - SendToRicemillDate
		// JutebagReturnedToWarehouse   - RicebagDeliveredDate
		// AssetRetired   - RetiredDate
		// ==================
	*/
	$(document).ready(function(){		
		
		$("#updateAsset").click(function  (){
			event.preventDefault();
			var jbassetid =  "<?php echo $QueryAsset['JbAssetId']; ?>";
			var currentOwner = "<?php echo $QueryAsset['Owner']; ?>"; 			                   
			//////////////// Define Frontend User to Blockchain User ID
			if (currentOwner.toLowerCase() === "jutemill") 		{userid="User1";}
			else if (currentOwner.toLowerCase() === "quality")   {userid="User2";} 
			else if (currentOwner.toLowerCase() === 'logistics')   {userid="User3";} 
			else if (currentOwner.toLowerCase() === 'warehouse')   {userid="User4";} 
			else if (currentOwner.toLowerCase() === 'ricemill')   {userid="User5";} 
			else console.log(currentOwner);
			//////////////// Front End User to Blockchain Owner Name
			var assetholder = document.getElementById("assetholder").value;
			if (assetholder === 'User2') {assetholder='Quality'; }
			else if (assetholder === 'User3') {assetholder='Logistics'; }
			else if (assetholder === 'User4') {assetholder='Warehouse'; }
			else if (assetholder === 'User5') {assetholder='Ricemill'; }
			else { assetholder = 'Jutemill'; }
			///////////////////////////////////////
			var geoloc= document.getElementById("geoloc").value;
			var assetstatus= document.getElementById("assetstatus").value;
			var assign_date= document.getElementById("assign_date").value;
			/* alert(jbassetid); 		alert(userid); 			alert(assetholder);			alert(geoloc);
			alert(assetstatus); 		alert(assetstatus);     alert(assign_date); 		*/
			
			$.ajax({
				
			    "url": "http://54.237.0.216:8080/api/updateJbAsset/",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"content-type": "application/json"
				},
				"data": JSON.stringify({"JbAssetId":jbassetid,"UserId":userid,"Owner":assetholder,"GeoLoc":geoloc,"AssetStatus":assetstatus,"updateDate":assign_date}), 
				success: function(response) {
					alert(response);
					$(".mysubmit").fadeIn('fast').delay(30).fadeOut('fast').html(response.message);
					location.href = "<?php echo base_url(); ?>qualitycontrol/unloading";           
				},
				error: function(response) {
					console.error();
				}
			});			
		});			
	});					
</script>		


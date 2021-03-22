<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quality Control (Before Unloading)
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Quality Control</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div id="messages"></div>
				<?php if($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php elseif($this->session->flashdata('error')): ?>
				<div class="alert alert-error alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('error'); ?>
				</div>
				<?php endif; ?>
				<div id="myQCReport"  style="display: none"  class="box">
					<div class="box-header">
						<h3 class="box-title">Report Submission</h3>
					</div>
				<div class="container-fluid mt--7">
					<section class="content">
						<div class="row">
							<div class="col">
								<div class="card shadow">
									<div class="card-header bg-transparent">
										<h4 class="mb-0"></h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<label for="">Order Number</label>
														<input type="text" class="form-control" id="or_no" name="" placeholder="Enter Order Number">
														<?php echo $this->data->TransactionsArray; ?>
													</div>
													<label for="">Asset's Quality Status </label>
													<!-- Material unchecked -->
													<!-- Default inline 1-->
													<div class="custom-control custom-checkbox custom-control-inline">
														<input type="checkbox" class="custom-control-input" id="defaultInline1">
														<label class="custom-control-label label label-danger" for="defaultInline1">Rejected</label>
													</div>
													<!-- Default inline 2-->
													<div class="custom-control custom-checkbox custom-control-inline">
														<input type="checkbox" class="custom-control-input" id="defaultInline2" checked="true">
														<label class="custom-control-label label label-success" for="defaultInline2">Accepted</label>
													</div>
													<!-- Default inline 3-->
													<div class="custom-control custom-checkbox custom-control-inline">
														<input type="checkbox" class="custom-control-input" id="defaultInline3">
														<label class="custom-control-label label label-default" for="defaultInline3">Indeterinate</label>
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form action="javascript:">
													<div class="form-group">
														<div class="form-group">
															<label for="">Batch Number</label>
															<input type="text" class="form-control" id="bt_no" name="" placeholder="Enter Batch Number">
														</div>
														<div class="form-group">
															<label for="">Remark</label>
															<input type="text" class="form-control" id="remark" name="" placeholder="Please Enter Remarks">
														</div>
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
															<label for="">Acknowledgement</label>
															<input type="file" name="InvAckPath" id="INV_ACK_PATH">
														</div>
														<div class="form-group">
															<div class="text-right mb-4">
																<a href="<?php echo base_url(); ?>qualitycontrol/">
																	<input  type="button" name="Cancel" value="Cancel"  class="btn btn-danger">
																</a>
																<button type="submit" class="btn btn-primary" (click)="on_Submit()">Submit</button >
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
					</section>
					<!-- /.box -->
				</div>
				</div>
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="manageTable" style="font-size:0.9em;" class="table table-bordered table-striped">
							<thead>
								<tr bgcolor="#cfd8dc">
									<th width=1% style="text-align: center;">Asset<br>Id</th>
									<th style="text-align: center;">QR<br>Code</th>
									<th style="text-align: center;">Batch<br>No</th>
									<th style="text-align: center;">Order<br>No</th>
									<th width=10% style="text-align: center;">Asset<br>Details</th>
									<th width=13% style="text-align: center;">Jute Mill</th>
									<!--  <th style="text-align: center;">QCLoading</th> -->
									<!--  <th style="text-align: center;">Logistics</th> -->
									<th style="text-align: center;">Warehouse</th>
									<!--  <th style="text-align: center;">GeoLoc</th> -->
									<th style="text-align: center;">Owner</th>
									<th style="text-align: center;">Asset<br>Status</th>
									<th style="text-align: center;">Actions</th>
								</tr>
							</thead>
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
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
	var manageTable=[];
	var base_url = "<?php echo base_url(); ?>";
	$(document).ready(function() {
		//$("#mainProductNav").addClass('active');
		manageTable = $('#manageTable').DataTable({
			'ajax': base_url + 'qualitycontrol/fetchAssetUnloadingData',
			'order': [],
			"scrollX": true
		});					
	});
</script>
<script>
	$(document).ready(function(){
		$("#button").click(function() {
			// assumes element with id='button'
			$("#myQCReport").toggle();
		});
		$('input:checkbox').click(function() {
			$('input:checkbox').not(this).prop('checked', false);
		});		
	});
</script>
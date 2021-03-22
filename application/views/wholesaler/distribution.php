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

<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage
			<small>Dispatches</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li><li class="active">Wholesaler</li>
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
				<div class="box">					
					<!-- /.box-header -->
			
					<div class="box-body">
						<table id="manageTable" style="font-size:0.8em;" class="table table-bordered table-striped">		
							<thead>
								<tr bgcolor="#cfd8dc">												
									<th width="10%" style="text-align: center;">Mfg Date</th>
									<th width="5%;" style="text-align: center;">QR<br>Code</th>
									<th width="5%;" style="text-align: center;">Batch<br>No</th>
									<th width="5%;" style="text-align: center;">Order<br>No</th>			    
									<th width="10%;" style="text-align: center;">Product<br>Name</th>
									<th width="5%;" style="text-align: center;">Qty/<br>Unit</th>
									<th width="10%;" style="text-align: center;">Expiry Date</th>
									<th width="10%;" style="text-align: center;">Owner</th>
									<th width="15%;" style="text-align: center;">Location</th>
									<th width="20%;" style="text-align: center;">Transaction<br>Details</th>
									<th width="5%;"  style="text-align: center;">Status</th>
									<th width="15%;" style="text-align: center;">Actions</th>
								</tr>			  
							</thead> 
							<tbody> 
								<?php 
									$start = 0; 
									foreach (array_reverse($DataTab) as $key) 
									{									
									$start++;
									?> 	
									
									<tr>
										<td><?php echo date("d-m-Y", strtotime($key['DateWhen']));?></td>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;<img id='barcode' class='zoomA' src=https://api.qrserver.com/v1/create-qr-code/?data=".$key['QRCode']."&amp; size=100x100 width='20' height='20' /><br><?php echo $key['QRCode']; ?> </td>					
										<td> <?php echo $key['BatchNo']; ?> </td>
										<td> <?php echo $key['OrderNo']; ?> </td>										
										<td> <?php echo $key['AssetType']; ?> </td>
										<td> <?php echo $key['AssetQty']; ?> </td>										
										<td><?php echo date("d-m-Y", strtotime($key['ExpiryDate']));?></td>
										<td> <?php echo $key['OwnerWho']; ?> </td>
										<td> <?php echo $key['GpslocWhere']; ?> </td>
										<td> <?php echo $key['TransWhy']; ?> </td>
										<td> <?php if($key['AssetStatus'] == "LspSendToWh"){ ?>Handoff To Wholesaler<?php }?><?php if($key['AssetStatus'] == "WhSendToPh"){ ?>Handoff To Pharmacy<?php }?><?php if($key['AssetStatus'] == "PhSellToCo"){ ?>Handoff To Customer<?php }?> </td>										
										<td> <?php if ($key['AssetStatus'] == "LspSendToWh"){ ?><a class="label label-success" role="button" href="<?php echo base_url()?>wholesaler/sendtoph/<?=$key['PhAssetId']?>"><b>SendToPh</b></a><?php }?> </td>
									</tr> 
									<?php 
									} 
									?>	
							</tbody> 
						</table>
						<!-- /.box-body -->
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
		
		
		<script type="text/javascript">
			var manageTable=[];
			var base_url = "<?php echo base_url(); ?>";
			
			$(document).ready(function() {	
		//		$("#mainProductNav").addClass('active');
				
				manageTable = $('#manageTable').DataTable({ 
					//'ajax': base_url + 'manufacturer/fetchAssetData', 
					'order': [], 
					"scrollX": true
				});
				
			});
		</script>
		
		<style>
			.zoomA {
			/* ease | ease-in | ease-out | linear */
			transition: transform ease-in-out 0.2s;
			}
			.zoomA:hover {
			transform: scale(5);
			}
		</style>
		
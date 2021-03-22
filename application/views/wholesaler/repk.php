
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage
			<small>Wholesaler/Distributors</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Wholesaler</li>
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
					<div class="box-body">
						<table id="" style="font-size:0.9em;" class="table table-bordered table-striped">		
							<thead>
								<tr bgcolor="#cfd8dc">																	    
									<th width=5% style="text-align: center;">QR<br>Code</th>
									<th width=8% style="text-align: center;">Mfg <br>Date</th>				
									<th width=5% style="text-align: center;">Batch<br>No</th>
									<th width=5% style="text-align: center;">Order<br>No</th>			    
									<th width=10% style="text-align: center;">Asset<br>Name</th>
									<th width=10% style="text-align: center;">Asset<br>Type</th>
									<th width=5% style="text-align: center;">Qty/<br>Unit</th>
									<th width=8% style="text-align: center;">Expiry Date</th>
									<th width=10% style="text-align: center;">Owner</th>
									<th width=15% style="text-align: center;">Location</th>
									<th width=20% style="text-align: center;">Transaction<br>Details</th>
									<th width=5%  style="text-align: center;">Status</th>
									<th width=15% style="text-align: center;">Actions</th>
								</tr>			  
							</thead> 
							
						</table>
					</div>
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

<?php if(in_array('deleteProduct', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Remove Product</h4>
			</div>
			
			<form role="form" action="<?php echo base_url('products/remove') ?>" method="post" id="removeForm">
				<div class="modal-body">
					<p>Do you really want to remove?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endif; ?>

<script type="text/javascript">
	var manageTable=[];
	var base_url = "<?php echo base_url(); ?>";
	
	$(document).ready(function() {	
		//$("#mainProductNav").addClass('active');
		
		manageTable = $('#manageTable').DataTable({ 
			'ajax': base_url + 'warehouse/fetchAssetData', 
			'order': [], 
			"scrollX": true
		});
		//$('#manageTable').on('click', '.SendToQC', function () {

        //var RowIndex = $(this).closest('tr');
        //var data = manageTable.row(RowIndex).data();
        //alert("Im in JavaScript");
		//});
		
	});
	
	
</script>

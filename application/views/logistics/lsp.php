
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage Logistics 
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Logistics</li>
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
						<table id="" style="font-size:0.9em" class="table table-bordered table-striped">		
							<thead>
								<tr bgcolor="#cfd8dc">
									<th width=1% style="text-align: center;">LSP<br>Id</th>
									<th style="text-align: center;">LSP<br>Name</th>
									<th style="text-align: center;">Address</th>
									<th style="text-align: center;">Contact<br>Person</th>			    
									<th style="text-align: center;">Contact<br>No</th>			    
									<th width=10% style="text-align: center;">EmailId</th>
									<th width=13% style="text-align: center;">Website</th>
									<th width=13% style="text-align: center;">No Of Trucks available</th>
									<th style="text-align: center;">Actions</th>
								</tr>			  
							</thead> 							
							<tbody>
							<tr bgcolor="#cfd8dc">
									<td width=1% style="text-align: center;">1</td>
									<td style="text-align: center;">HPS Trasport Company</td>
									<td style="text-align: center;">Lonodon</td>
									<td style="text-align: center;">Joseph<br>Mark</td>			    
									<td style="text-align: center;">10909</td>			    
									<td width=10% style="text-align: center;">joshepm@gmail.com</td>
									<td width=13% style="text-align: center;">N/s</td>
									<td width=13% style="text-align: center;">12</td>
									<td style="text-align: center;">Active</td>
							</tr>			  
							<tr >
									<td width=1% style="text-align: center;">2</td>
									<td style="text-align: center;">Ship and Trucks Company</td>
									<td style="text-align: center;">Lonodon</td>
									<td style="text-align: center;">Richard<br>K</td>			    
									<td style="text-align: center;">+44-99109009</td>			    
									<td width=10% style="text-align: center;">rikm@gmail.com</td>
									<td width=13% style="text-align: center;">N/s</td>
									<td width=13% style="text-align: center;">12</td>
									<td style="text-align: center;">Active</td>
							</tr>
							<tr >
									<td width=1% style="text-align: center;">3</td>
									<td style="text-align: center;">Speed Trasport Company</td>
									<td style="text-align: center;">Lonodon</td>
									<td style="text-align: center;">Mark<br>Alex</td>			    
									<td style="text-align: center;">10909</td>			    
									<td width=10% style="text-align: center;">alex@gmail.com</td>
									<td width=13% style="text-align: center;">N/s</td>
									<td width=13% style="text-align: center;">22</td>
									<td style="text-align: center;">Active</td>
							</tr>
							</tbody>
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
		//alert("Befor Calling..");
		manageTable = $('#manageTable').DataTable({ 
			'ajax': base_url + 'logistics/fetchAssetData', 
			'order': [], 
			"scrollX": true
		});
	});
	
	
</script>

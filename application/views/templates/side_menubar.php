<link rel="stylesheet" type="text/css" href="https://d2ta2fpo91apla.cloudfront.net/fontawesome-free-5.9.0-web/css/all.min.css" media="screen"/>
<aside id="myMiniSide" class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree" >			
			<li id="dashboardMainMenu">
				<a href="<?php echo base_url('dashboard') ?>">
					<i class="ion ion-monitor"></i><span><small>Dashboard</small></span>
				</a>
			</li>
			<?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="">
				<a href="#">
					<i class="fas fa-handshake"></i>
					<span><small>Suppliers</small></span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>				
				<ul class="treeview-menu">										
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="#"><i class="fas fa-business-time"></i> <small>Manage Supplies</small></a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
				<a href="#">
					<i class="fas fa-industry"></i>
					<span><small>Manufacturers</small></span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>				
				<ul class="treeview-menu">
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="<?php echo base_url('manufacturer/fetchAssetData') ?>"><i class="fas fa-pills"></i> <small>&nbsp;&nbsp;&nbsp;Manage Asset</small></a></li>
					<?php endif; ?>
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="<?php echo base_url('manufacturer/qc') ?>"><i class="fas fa-binoculars"></i> <small>&nbsp;&nbsp;&nbsp;Quality Inspection</small></a></li>
					<?php endif; ?>
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="<?php echo base_url('manufacturer/paf') ?>"><i class="fas fa-dolly"></i> <small>&nbsp;&nbsp;&nbsp;Packing & Forward</small></a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
				<a href="#">
					<i class="fas fa-truck"></i>
					<span><small>Logistics Service Providers</small></span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<?php if(in_array('createProduct', $user_permission)): ?>
					<li id="addProductNav"><a href="<?php echo base_url('logistics/lsp') ?>"><i class="fas fa-boxes"></i><small>&nbsp;&nbsp;&nbsp;Manage LSP</small></a></li>
					<?php endif; ?>
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="<?php echo base_url('logistics/tracking') ?>"><i class="fas fa-map-marker-alt"></i><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPS Tracking</small></a></li>
					<?php endif; ?>
					<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
					<li id="manageProductNav"><a href="<?php echo base_url('logistics/fetchAssetData') ?>"><i class="fas fa-shipping-fast"></i><small>&nbsp;&nbsp;&nbsp;Manage Dispatches</small></a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php if($user_permission): ?>
			<?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="">
				<a href="#">
					<i class="fa fa-users"></i>
					<span><small>Wholesaler/Distributor</small></span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">					
					<?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
				<li id=""><a href="<?php echo base_url('wholesaler/fetchAssetData') ?>"><i class="fas fa-truck"></i>&nbsp;&nbsp;&nbsp;Arrivals</small></a></li>
				<?php endif; ?>
				<?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
				<li id=""><a href="<?php echo base_url('wholesaler/repk') ?>"><i class="fas fa-box-open"></i> <small>&nbsp;&nbsp;&nbsp;Repacking</small></a></li>
				<?php endif; ?>
				<?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
				<li id=""><a href="<?php echo base_url('wholesaler/disp') ?>"><i class="fas fa-truck"></i><small>&nbsp;&nbsp;&nbsp;Dispatches</small></a></li>
				<?php endif; ?>
			</ul>
		</li>
		<?php endif; ?>
		<?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
		<li class="treeview" id="mainGroupNav">
			<a href="#">
				<i class='fas fa-prescription'></i>
				<span><small>&nbsp;Pharmacy</small></span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
				<li id="manageGroupNav"><a href="<?php echo base_url('pharmacy/fetchAssetData') ?>"><i class="fas fa-barcode"></i><small> &nbsp;Manage Inventory</small></a></li>
				<?php endif; ?>
				<?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
				<li id="manageGroupNav"><a href="<?php echo base_url('pharmacy/sales') ?>"><i class="fas fa-capsules"></i><small> &nbsp;Sales</small></a></li>
				<?php endif; ?>
			</ul>
		</li>
		<?php endif; ?>
		<?php if(in_array('viewReports', $user_permission)): ?>            
		<li id="reportNav">			
			<a href="<?php echo base_url('track')?>">
				<i class='fas fas fa-qrcode'></i><span><small>&nbsp;&nbsp;&nbsp;Track and Trace</small></span>
			</a>			
		</li>
		<?php endif; ?>						
		<!-- Changes Abraham -->
		<?php if(in_array('viewReports', $user_permission)): ?>            
		<li id="reportNav">			
			<a href="<?php echo base_url('reports/') ?>">
				<i class="glyphicon glyphicon-stats"></i> <span><small>Reports</small></span>
			</a>
		</li>
		<?php endif; ?>						
		<li >
			<a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> 
			<span><small>&nbsp;&nbsp;&nbsp;logout</small></span></a>
		</li>
	</ul>		
</section>	
</aside>
<?php endif; ?>            
<!-- <li class="header">Settings</li> -->
<!-- user permission info -->
</ul>
<!-- /.sidebar -->
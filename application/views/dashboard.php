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
<!-- Not required
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" media="screen"/>
	
	
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen"/> -->
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
<script>
	$(function () {
	$('#container22').highcharts({
	chart: {
	type: 'column'
	},
	title: {
	text: 'Supply chain Demand Signals'
	},
	subtitle: {
	text: 'Source: Sample Data'
},
xAxis: {
	categories: [
	'Jan',
	'Feb',
	'Mar',
	'Apr',
	'May',
	'Jun',
	'Jul',
	'Aug',
	'Sep',
	'Oct',
	'Nov',
	'Dec'
	]
},
yAxis: {
	min: 0,
	title: {
		text: 'Pharma Units (in Thousands)'
	}
},
tooltip: {
	headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
	'<td style="padding:0"><b>{point.y:.1f} mn</b></td></tr>',
	footerFormat: '</table>',
	shared: true,
	useHTML: true
},
plotOptions: {
	column: {
		pointPadding: 0.2,
		borderWidth: 0
	}
},
series: [{
	name: 'Demand from Pharmacy',
	data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
	
	}, {
	name: 'Manufactured',
	data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
	
	}, {
	name: 'Stock with Wholesaler',
	data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
	
	}, {
	name: 'Stock with Distributor',
	data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
	
}]
});
});
</script>	
<style>
	.myinput {
	float: right;
	clear: both;
	}
	.blocksline {
	margin-top: 10px;
	position: relative;
	}
	.blocksline:before {
	position: absolute;
	content: "";
	width: 4px;
	border: dashed;
	height: calc(100% + 50px);
	background: rgb(138, 145, 150);
	background: -moz-linear-gradient(
	left,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(98, 105, 109, 1) 100%
	);
	background: -webkit-linear-gradient(
	left,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(98, 105, 109, 1) 100%
	);
	background: linear-gradient(
	to right,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(98, 105, 109, 1) 100%
	);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8a9196', endColorstr='#62696d',GradientType=1 );
	left: 14px;
	top: 5px;
	border-radius: 4px;
	}
	.blocksline-month {
	position: relative;
	background-color: #444950;
	display: inline-block;
	width: auto;
	border-radius: 40px;
	border: 1px solid #17191b;
	border-right-color: black;
	margin-bottom: 30px;
	}
	.blocksline-month span {
	position: absolute;
	top: -1px;
	left: calc(100% - 10px);
	z-index: -1;
	white-space: nowrap;
	display: inline-block;
	background-color: #111;
	padding: 4px 10px 4px 20px;
	border-top-right-radius: 40px;
	border-bottom-right-radius: 40px;
	border: 1px solid black;
	box-sizing: border-box;
	}
	.blocksline-month:before {
	position: absolute;
	content: "";
	width: 20px;
	height: 20px;
	background: rgb(138, 145, 150);
	background: -moz-linear-gradient(
	top,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(112, 120, 125, 1) 100%
	);
	background: -webkit-linear-gradient(
	top,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(112, 120, 125, 1) 100%
	);
	background: linear-gradient(
	to bottom,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(112, 120, 125, 1) 100%
	);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8a9196', endColorstr='#70787d',GradientType=0 );
	border-radius: 100%;
	border: 1px solid #17191b;
	left: 5px;
	}
	.blocksline-section {
	padding-left: 35px;
	display: block;
	position: relative;
	margin-bottom: 30px;
	}
	.blocksline-date {
	margin-top: 3px;
	margin-bottom: 3px;
	padding: 2px 8px;
	position: relative;
	display: inline-block;
	color: #00a65a;
	font-size:12px;
	}
	.fade-in-down {
	animation: fade-in-down 10s ease 0;
	}
	@keyframes fade-in-down {
	0% {
	opacity: 0;
	transform: translateY(-20px);
	}
	100% {
	opacity: 1;
	transform: translateY(0);
	}
	}
	.fade-in-down1 {
	animation: fade-in-down 5s ease infinite;
	}
	@keyframes fade-in-down1 {
	0% {
	opacity: 0;
	transform: translateY(-20px);
	}
	100% {
	opacity: 1;
	transform: translateY(0);
	}
	}
	.blocksline-date1 {
	margin-top: 5px;
	margin-bottom: 5px;
	padding: 2px 15px;
	background: #000;
	position: relative;
	display: inline-block;
	border-radius: 20px;
	border: 2px solid #17191b;
	color: #3c8dbc;
	transition: all 10s ease;
	overflow: hidden;
	}
	.blocksline-section:before {
	content: "";
	position: absolute;
	width: 30px;
	height: 1px;
	background-color: #444950;
	top: 12px;
	left: 20px;
	}
	.blocksline-section:after {
	content: "";
	position: absolute;
	width: 10px;
	height: 10px;
	background: linear-gradient(
	to bottom,
	rgba(138, 145, 150, 1) 0%,
	rgba(122, 130, 136, 1) 60%,
	rgba(112, 120, 125, 1) 100%
	);
	top: 7px;
	left: 11px;
	border: 1px solid #17191b;
	border-radius: 100%;
	}
	.blocksline-section .col-sm-4 {
	margin-bottom: 15px;
	}
	.blocksline-box {
	position: relative;
	background-color: #444950;
	border-radius: 15px;
	border-top-left-radius: 0px;
	border-bottom-right-radius: 0px;
	border: 1px solid #17191b;
	transition: all 3s ease;
	overflow: hidden;
	}
	.box-icon {
	position: absolute;
	right: 5px;
	top: 0px;
	}
	.box-title {
	padding: 5px 10px;
	border-bottom: 1px solid #17191b;
	background-color: #708090;
	}
	.box-title i {
	margin-right: 5px;
	color: #bbab16;
	font-size:12px;
	}
	.box-content {
	padding: 5px 6px;
	color: #f6f6f6;
	background-color: #17191b;
	font-size:10.5px;
	font-family: monospace;
	}
	.box-content strong {
	color: #f6f6f6;
	font-style: italic;
	margin-right: 5px;
	font-size:10.5px;
	font-family: monospace;
	}
	.box-item {
	margin-bottom: 5px;
	color: #bbab16;
	font-size:10.5px;
	font-family: monospace;
	}
	.box-footer {
	padding: 2px 10px;
	border-top: 1px solid #17191b;
	background-color: #999;
	text-align: right;
	font-style: italic;
	color: #000;
	font-size:10px;
	}
	.truck-1 {
	width: 100px;
	position: absolute;
	top: 22%;
	left: 10%;
	width: 80px;
	animation: truck1 15s ease 5 normal forwards;
	}	
	@keyframes truck1 {
	0% {
    top: 23%;
	left: 10%;
    transform: rotate(0deg);
	}
	10% {
    top: 23%;
	left: 22%;
    transform: rotate(0deg);
	}
	20% {
    top: 23%;
	left: 35%;
    transform: rotate(0deg);
	}
	30% {
    top: 23%;
	left: 50%;
    transform: rotate(10deg);
	}	
	40% {
    top: 32%;
	left: 60%;
    transform: rotate(10deg);
	}	
	50% {
    top: 42%;
	left: 65%;
    transform: rotate(0deg);
	}
	60% {
    top: 48%;
	left: 65%;
    transform: rotate(0deg);
	}
	70% {
    top: 75%;
	left: 65%;
    transform: rotate(0deg) scaleX(-1);
	}
	80% {
    top: 75%;
	left: 50%;
    transform: rotate(0deg) scaleX(-1);
	}
	90% {
    top: 75%;
	left: 38%;
    transform: rotate(0deg) scaleX(-1);
	}
	100% {
    top: 75%;
	left: 25%;
    transform: rotate(0deg) scaleX(-1);
	}
	}
.small-box>.small-box-footer:hover {
    color: #fff;
    background: rgba(0,0,0,0.15);
    text-align: center !important;
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0 3px 10px;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
-webkit-transition: 0.3s all ease;
transition: 0.3s all ease;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
    text-align: left !important;
}
.small-box.bg-info {
    box-shadow: 5px 6px 1px #5e6a75;
}
.small-box.bg-info .icon i {
    font-size: 50px;
    padding-top: 20px;
}

.small-box .icon{
    top: -40px;	
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.2.3/cjs/ionicons.cjs.js" integrity="sha512-7bxryoVInzeU8J41Ec/pw/7Sp7ijapUyj0FhhdQptlh34wNZ7dx1baQabohax40jaj3MYcnGRSyGXSgCmnbTJQ==" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard/') ?>"><i class="ion ion-home"></i>Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content" style=" background-color: #708090!important;">
		<!-- Small boxes (Stat box) -->
		<?php if($is_admin == true): ?>		
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<script src="http://code.highcharts.com/highcharts.js"></script> 
				<script src="http://code.highcharts.com/modules/exporting.js"></script>				
				<div class="small-box bg-info" style="background-color: #5F9EA0!important;">				
					<div class="inner">
						<h3>22</h3>
						<p>Suppliers</p>
					</div>					
					<div class="icon">
						<i class="fas fa-handshake"></i>
					</div>
					<a href="<?php echo base_url('suppliers/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info" style="background-color: #90EE90!important;">
					<div class="inner">
						<h3>2</h3>
						<p>Manufacturers</p>
					</div>
					<div class="icon">
						<i class="fas fa-industry"></i>
					</div>
					<a href="<?php echo base_url('manufacturer/fetchAssetData/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info" style="background-color: #B0C4DE!important;">
					<div class="inner">
						<h3>18</h3>
						<p>Logistics Service Providers</p>
					</div>
					<div class="icon">
						<i class="fas fa-truck"></i>
					</div>
					<a href="<?php echo base_url('logistics/fetchAssetData/') ?>" class="small-box-footer">More info 
					<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info" style="background-color: #87CEEB!important;">
					<div class="inner">
						<h3>16</h3>
						<p>Wholesalers</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="<?php echo base_url('wholesaler/fetchAssetData/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info" style="background-color: #40E0D0!important;">
					<div class="inner">
						<h3>34</h3>
						<p>Distributors</p>
					</div>
					<div class="icon">
						<i class="ion ion-location"></i>
					</div>
					<a href="<?php echo base_url('wholesaler/disp/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info"  style="background-color: #8FBC8F!important;">
					<div class="inner">
						<h3>378</h3>
						<p>Retailers/Pharmacy</p>
					</div>
					<div class="icon">
						<i class="fas fa-check-circle"></i>
					</div>
					<a href="<?php echo base_url('pharmacy/fetchAssetData/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info" style="background-color: #B0E0E6!important;">
					<div class="inner">
						<h3>6</h3>
						<p>Quality/Compliance</p>
					</div>
					<div class="icon">
						<i class="fas fa-binoculars"></i>
					</div>
					<a href="<?php echo base_url('manufacturer/qc/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-info"  style="background-color: #4682B4!important;">
					<div class="inner">
						<h3>898</h3>
						<p>Total No. of Pharma Units</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-home"></i>
					</div>
					<a href="<?php echo base_url('pharmacy/fetchAssetData/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<?php endif; ?>
		<div id="container22" style="min-width: 100%; height: 100%; margin: 0 auto"></div>
	</section>
	<section class="content-header">
		<h1>
			Blockchain
		<small>Network</small></h1>
	</section>
	<!-- Main content  <section class="content" style="min-height: 80px; background-color: #708090!important;"> -->
	<section class="content" style="min-height: 80px; background-color:  #708090!important;">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-12 col-sm-3 col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-info elevation-1"><i class="fa fa-institution"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Organizations</span>
						<span class="info-box-number">3</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-3 col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Peers</span>
						<span class="info-box-number">5</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-3 col-md-3">
				<div class="info-box mb-3">
					<span class="info-box-icon bg-info elevation-1"><i class="fa fa-square"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Blocks</span>
						<span class="info-box-number"><?php echo $Blocks ?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<!-- /.col -->
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-3 col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-info elevation-1"><i class="fa fa-dot-circle"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Transactions</span>
						<span class="info-box-number"><?php echo $Transactions ?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.row -->
		</div>
	</section>
	<?php if(count($BlocksArray) >  1) { ?>			
		<section class="content-header">
			<h1>Blockchain<small>Blocks&nbsp;<i class="fa fa-cubes text-primary" aria-hidden="true"></i> /Transactions</small></h1>
		</section>
		<section class="" style="min-height: 470px; background-color: #000000!important;">
			<!--<img src="assets/images/diziasset_flow01.png" height="100%" width="100%"> -->
			<div class="card">
				<div class="col-12 col-sm-6 col-md-6">
					<div class="card-body table-responsive" style="height: 470px; width: 100%; background-color: #000000!important;">
						<div class="container">
							<div class="blocksline fade-in-down" style="color: #00a65a;">
								<div class="blocksline-month fade-in-down">
								</div>
								<?php for($i=0; $i< count($BlocksArray); $i++) { ?>
									<table id="tabblocks" style="overflow: hidden;" class="table table-striped table-bordered table-hover" cellspacing="0">
										<tbody>
											<tr style="" >
												<div class="row no-container fade-in-down">
													<div class="col-sm-5">
														<div class="blocksline-box">
															<div class="blocksline-date">
																<i class="fa fa-cube text-primary" aria-hidden="true"></i>
																<strong>Block No</strong>
																<span class="number"><b><mark style="background:#000; color: #00a65a; border-radius: 10px;"><?php echo $BlocksArray[$i]['blocknum']; ?></mark>&nbsp;&nbsp;</b></span>Created Dt :<?php echo substr($BlocksArray[$i]['createdt'],0);?>
															</div>
														</div>
														<div class="box-content">
															<div class="box-item"><strong>Blockhash:</strong><?php
															echo trim($BlocksArray[$i]['blockhash']); ?>
															</div>
															<div class="box-item"><strong>Datahash&nbsp;:</strong><?php echo trim($BlocksArray[$i]['datahash']); ?></div>
															<div class="box-item"><strong>Prehash&nbsp;&nbsp;:</strong><?php echo $BlocksArray[$i]['prehash'];?></div>
														</div>
														<div class="box-footer">Number of Transactions: <?php echo $BlocksArray[$i]['txcount']; ?>&nbsp;&nbsp; Block Size :<?php echo $BlocksArray[$i]['blksize']; ?> kb
														</div>
													</div>
												</tr>
											</tbody>
										</table>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6" style="background-color: #000000!important;">
						<div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">                      
							<div class="tm-notification-items">
								<div class="box">
									<div> 
										<!-- Google Map Copied Code -->									
										<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
										</div>
										<!-- /.box-body -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>	
			<?php } ?>			
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#dashboardMainMenu").addClass('active');
				(function ($) {
					$.fn.countup = function (params) {
						// make sure dependency is present
						if (typeof CountUp !== 'function') {
							console.error('countUp.js is a required dependency of countUp-jquery.js.');
							return;
						}
						var defaults = {
							startVal: 0,
							decimalPlaces: 0,
							duration: 2,
						};
						if (typeof params === 'number') {
							defaults.endVal = params;
						}
						else if (typeof params === 'object') {
							$.extend(defaults, params);
						}
						else {
							console.error('countUp-jquery requires its argument to be either an object or number');
							return;
						}
						this.each(function (i, elem) {
							var countUp = new CountUp(elem, defaults.endVal, defaults);
							countUp.start();
						});
						return this;
					};
				}(jQuery));
				public function (myFun(ele,ccount){
					let demo = new CountUp(ele, ccount);
					if (!demo.error) {
						demo.start();
						} else {
						console.error(demo.error);
					}
				});
			</script>
			<script type="text/javascript">
				var manageTable=[];
				var base_url = "<?php echo base_url(); ?>";
				$(document).ready(function() {
					//$("#mainProductNav").addClass('active');
					manageTable = $('#manageTable').DataTable({
						'ajax': base_url + 'manufacturer/fetchAssetData',
						'order': [],
						"scrollX": true
					});
					$('.member-title').click(function(e) {
						alert("clicked");
						console.log("Clicked");
						$(this).next().slideToggle();
						$(this).next().next().next().slideToggle();
					});
				});
			</script>
			<!-- REQUIRED SCRIPTS -->
			<!-- jQuery <script src="plugins/jquery/jquery.min.js"></script> -->
			<!-- Bootstrap <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
			<!-- AdminLTE <script src="dist/js/adminlte.js"></script> -->
			<!-- OPTIONAL SCRIPTS  <script src="plugins/chart.js/Chart.min.js"></script> <script src="dist/js/demo.js"></script>
			<script src="dist/js/pages/dashboard3.js"></script> -->												
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
	#blocksdisplay {
	border-radius: 2px;
	border: 2px solid #00a0a0;
	padding: 4px;
	width: 99%;
	height: 90px;
	}
	#assetinfo {
	border-radius: 2px;
	border: 2px solid #00a0a0;
	padding: 4px;
	width: 99%;
	height: 100%;
	}
	#blocksinfo {
	border-radius: 1px;
	border: 1px solid #7FFF00;
	padding: 4px;
	width: 99%;
	height: 60px;
	}
	#rcorners2 {
    border-radius: 10px;
    border: 3px solid #008b8b;
    padding:1.5% 1% 1%;
    width: 100%;
    height: auto;
	}
	.shake {
	animation: shake2 2s ease infinite;
	}
	#rcorners2 span2:hover
	{
	animation: shake 2s ease infinite;
	}
	@keyframes shake {
	0%,
	100% {
	transform: translateX(0);
	}
	90% {
	transform: translateX(-20px);
	}
	80% {
	transform: translateX(20px);
	}
	}
	span:hover
	{
	animation: shake2 2s ease infinite;
	}
	.fade-out-right {
	animation: fade-out-right 2s ease infinite;
	}
	@keyframes fade-out-right {
	0% {
	opacity: 1;
	transform: translateX(0);
	}
	100% {
	opacity: 0;
	transform: translateX(20px);
	}
	}
	.gelatine
	{
	animation: gelatine 0.5s infinite;
	}
	@keyframes gelatine {
	from,
	to {
	transform: scale(1, 1);
	}
	25% {
	transform: scale(.25, .75);
	}
	50% {
	transform: scale(.50, .50);
	}
	75% {
	transform: scale(.75, .25);
	}
	}
	.flash {
	animation: flash 500ms ease infinite alternate;
	}
	@keyframes flash {
	from {
	opacity: 1;
	}
	to {
	opacity: 0;
	}
	}
	span svg:hover
	{
	animation: fade-out-right 2s ease infinite;
	}
	.grid-container {
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-gap: 55px;
	}
	@import url(https://fonts.googleapis.com/css?family=Poiret + One);
	*,
	*:before,
	*:after {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	}
	:root,
	html,
	body {
	font-family: "Poiret One", "Open Sans", "Helvetica Neue", "Helvetica", "Arial",
	sans-serif;
	/*background: #000000!important;*/
	color:#f6f6f6;
	}
	.cell {
	display: inline-block;
	width: 100%;
	text-align: center;
	}
	.line {
	display: inline-block;
	width: 100px;
	height: 5px;
	background: whiteSmoke;
	box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;
	}
	.circle {
	display: inline-block;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	background: whiteSmoke;
	box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;
	}
	.circle-icon {
	background: #ffc0c0;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	text-align: center;
	line-height: 80px;
	vertical-align: middle;
	padding: 30px;
	}
	.icon-background {
	color: #008B8B;
	}
	.square {
	display: inline-block;
	width: 100px;
	height: 100px;
	border-radius: 20px;
	background: #222;
	/*box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;*/
	}
	.foo {
	float: left;
	width:  20px;
	height: 20px;
	margin: 5px;
	border: 1px solid rgba(0, 0, 0, .2);
	}
	.stop {
	display: inline-block;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background: whiteSmoke;
	box-shadow: 1px -40px 60px 8px rgb(60, 179, 113) inset;
	}
	.aliceblue {
	background: #F0F8FF;
	}
	.blue {
	background: #13b4ff;
	}
	.purple {
	background: #ab3fdd;
	}
	.wine {
	background: #ae163e;
	}
	header.card-header {
    background-color: #008b8b;
    border-radius: 10px 10px 0 0;
    padding: 4px 10px 1px 10px;
    text-align: center;
}
.card-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: center;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}
.card-body {
    border: 1px solid #008b8b;
    padding: 10px;
    border-radius: 0 0 10px 10px;
}
.card-body .info_stauts {
    width: 0;
    -ms-flex-preferred-size: calc(10% - 20px);
    flex-basis: calc(16.6% - 20px);
    margin: 10px;
    min-height: 100%;
    -webkit-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    background-color: #0a0e0e00;
    padding: 1% 1.2%;
    border-right: 2px solid #7b7b7b;
    color: #ffffff;
    text-align: center;
}
.card-body .info_stauts strong {
    color: #ffd700;
}
.card-body .info_stauts:last-child {
    border: none;
}


div.org_status {
display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: center;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}
div.org_block {
    width: 0;
    -ms-flex-preferred-size: calc(33% - 20px);
    flex-basis: calc(16% - 20px);
    margin: 10px;
    min-height: 100%;
    border-radius: 15px;
    -webkit-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
	text-align:center;
}
div.assert_proc {
    margin-top: 20px;
}
.status_heading {
    font-size: 12px;
    color: white;
    font-weight: 600;
    text-transform: capitalize;
    position: relative;
    padding-bottom: 5px;
}
.status_heading:before {
    content: '';
    position: absolute;
    width: 65%;
    height: 1px;
    background-color: #008b8b;
    margin: 0 auto;
    bottom: 0;
    left: 0;
    right: 0;
}
button.btn.btn-default.btn-rounded.btn-sm.my-0.ml-sm-2 {
    background-color: #008b8b;
    color: #ffffff !important;
    font-weight: 600;
    border: 1px solid #008b8b;
    border-radius: 0 5px 5px 0;
    margin-left: -4px;
    padding: 6px 20px 5px;
}
input.form-control {
    border-radius: 8px 0 0 8px;
    border: 1px solid #adadad;
    border-right: 0;
}
.card-left {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: center;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}

h5.card-text {
    width: 0;
    -ms-flex-preferred-size: calc(10% - 20px);
    flex-basis: calc(33.33% - 20px);
    margin: 10px;
    min-height: 100%;
    border-radius: 15px;
    -webkit-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    text-align: left;
}
h5.status_header.card-text {
    text-align: center;
}
h5.status_header.last_hd.card-text {
    text-align: right;
}

.normaltransition {
    width: calc(180px - 10px);
    margin-left: 11px;
    margin-top: -74px;
    height: 3px;
    border-top: 4px dashed #e0e0e0;
}
.reachedtransition {
    width: calc(180px - 10px);
    margin-left: 11px;
    margin-top: -74px;
    height: 3px;
    background: #e0e0e0;
}

.reachedtransition {
    border: 2px solid #008b8b;
    -webkit-animation: progressBar 1s ease-in-out;
    -webkit-animation-fill-mode: both;
    -moz-animation: progressBar 1s ease-in-out;
    -moz-animation-fill-mode: both;
}
.reachedtransition:before {
    content: '';
    position: absolute;
    background-color: transparent;
    display: block;
    width: 100%;
    height: 20px;
    left: 140%;
    top: 17px;
    border-style: solid;
    border-width: 10px 0 10px 20px;
    border-color: transparent transparent transparent #008b8b;
	    -webkit-animation-fill-mode: both;
    -moz-animation: progressBar 1s ease-in-out;
    -moz-animation-fill-mode: both;
}
.reachedtransition.reach1 {
animation-delay: 1s;

}


.reachedtransition.reach2 {
animation-delay: 2s;

}
.reachedtransition.reach3 {
animation-delay: 3s;

}
.reachedtransition.reach4 {
animation-delay: 4s;

}

@-webkit-keyframes progressBar {
  0% { width: 0; }
  100% { width:calc(180px - 10px); }
}

@-moz-keyframes progressBar {
  0% { width: 0; }
  100% { width:calc(180px - 10px); }
}
.w3-animate-top{
	position:relative;
	animation:fadeInDown 0.4s
	 opacity: 0;
}
@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

div.assert_infor {
    font-size: 9px !important;
    text-align: justify;
    min-height: 185px !important;
    padding-top: 10px !important;
}

.reachp1{
animation-delay:2s;	
}
.slide_icon {
   border-radius: 100%;
  animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running;
}
@keyframes stretch {
  0% {
    transform: scale(.9);
    background-color: #008B8B;
    border-radius: 100%;
  }
  50% {
    background-color: #008B8B;
    border-radius: 100%;
  }
  100% {
    transform: scale(1.02);
    background-color: #008B8B;
    border-radius: 100%;
  }
}

 </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Track &  Trace</li>
		</ol>
		<div class="col-md-12 col-xs-12">
		<form class="form-inline ml-auto" id="frmUsers" name="frmUsers" method="POST" action="<?php echo base_url('track/trackAssetData/') ?>">
		<input class="form-control" type="text" placeholder=<?php echo $searchqrcode; ?> aria-label="Search" id="searchqrcode" name="searchqrcode">
      <button class="btn btn-default btn-rounded btn-sm my-0 ml-sm-2" style='font-size:14px;color:black'  type="submit">Search QR</button>

    </form>

		</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="box" style="background:#000;" >
					<!-- /.box-header -->
					<div class="box-body">
						<div id="rcorners2" class="org_status">
							<div id="M" class="org_block">
								<p class="status_heading" >Manufacturer</p>
								<span class="fa-stack fa-2x ">
								<?php if ( intval($AssetTrace) >= 2) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
								<?php } else if (( intval($AssetTraceblink) == 1) || (intval($AssetTraceblink) == 3)) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
									<i class='fas fas fa-industry fa-stack-1x'></i>
									<svg width="200" height="80">
										<defs>
											<marker id="arrowhead" markerWidth="10" markerHeight="7"
											refX="0" refY="1.5" orient="auto" fill="#008B8B">
												<polygon points="0 0, 3 1.5, 0 3"/>
											</marker>
											<marker id="pendingarrowhead" markerWidth="10" markerHeight="7"
											refX="0" refY="1.5" orient="auto" fill="#000">
												<polygon points="0 0, 3 1.5, 0 3"/>
											</marker>
										</defs>
										<?php 
										  if ( intval($AssetTrace) >= 1) { ?>
								<div class="reachedtransition " ></div>
									<!-- 		<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" -->
									<?php  } else { ?> 
									<div class="normaltransition" style="transition-delay: 0s;"></div>
									
									<!-- 		<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>" -->
										<?php } ?>	
									</svg>
								
							</span>
							<p></p>
						<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
					<p class="fadeInDown reachp1">   <?php echo $dispm; ?> </p>	
							   
						</div>
						</div>
						<div id="S" class="org_block">
							<p class="status_heading" >QC/Regulator</p>
							<span class="fa-stack fa-2x">
								<?php if ( intval($AssetTrace) >= 1) { ?>
								<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php  } else if ( intval($AssetTraceblink) == 1) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
								<i class='fas fas fa-user-secret fa-stack-1x'></i>
								<svg width="200" height="80">
								<?php if ($AssetTrace>=2) { ?>
								 <div class="reachedtransition reach1" ></div>
								 
									<!-- 		<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" -->
									<?php  } else { ?> 
									<div class="normaltransition" style="transition-delay: 0s;"></div>
									<!-- 	<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>" -->
									<?php } ?>
								</svg>
							</svg>
						</span>
						<p></p>
							<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
					<p class="fadeInDown reachp2">    <?php echo $dispq; ?>	</p>								 
							   </div>
					</div>
					<div id="L1" class="org_block green">
					<p class="status_heading" >Logistics</p>
					<span class="fa-stack fa-2x">
						<?php if ( intval($AssetTrace) >= 4) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<?php  } else if ( intval($AssetTraceblink) == 4) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
						<i class='fas fa-shipping-fast fa-stack-1x'></i>
						<svg width="200" height="80">
							<?php if ($AssetTrace>=4) { ?>
						 <div class="reachedtransition reach2" ></div>
									<!-- 		<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" -->
									<?php  } else { ?> 
									<div class="normaltransition" style="transition-delay: 0s;"></div>
							<!-- 	<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>" 	 -->
							<?php } ?>
						</svg>
					</svg>
				</span>
				<p></p>
							<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
						<p class="fadeInDown reachp3"> <?php echo $displ; ?>	</p>							 
							   </div>
						</p>
						
					</div>
					<div id="W" class="org_block">
						<p class="status_heading" >Wholesaler</p>
						<span class="fa-stack fa-2x">
					<?php if ( intval($AssetTrace) >= 4) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } else if ( intval($AssetTraceblink) == 5) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
							<i class='fas fas fa-warehouse fa-stack-1x'></i>
							<svg width="200" height="80">
								<?php if ($AssetTrace>=4) { ?>
							 <div class="reachedtransition reach3" ></div>
									<!-- 		<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" -->
									<?php  } else { ?> 
									<div class="normaltransition" style="transition-delay: 0s;"></div>
								<!-- 	<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"	 -->
								<?php } ?>	
							</svg>
						</svg>
					</span>
					<p></p>
							<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
					<p class="fadeInDown reachp3">   <?php echo $dispw; ?>	</p>	
						     	
						</div>
				</div>
				<div id="P" class="org_block green">
			<p class="status_heading" >Pharmacy</p>
			<span class="fa-stack fa-2x">
				<?php if ( intval($AssetTrace) >= 5) { ?>
							<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } else if ( intval($AssetTraceblink) == 6) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
				<i class='fas fa-prescription fa-stack-1x'></i>
				<svg width="200" height="80">
						<?php if ($AssetTrace>=5) { ?>
					 <div class="reachedtransition reach4" ></div>
									<!-- 		<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" -->
									<?php  } else { ?> 
					<div class="normaltransition" style="transition-delay: 0s;"></div>
							<!-- 	<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>" -->
						<?php } ?>
					</svg>
			</span><p></p>
						</p>
							<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
						<p class="fadeInDown reachp2"><?php echo $dispp; ?></p>
						      	
						</div>
		</div>
			<div id="D" class="org_block">
				<p class="status_heading" >Customer</p>
				<span class="fa-stack fa-2x">
				<?php if ( intval($AssetTrace) >= 6) { ?>
						<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } else if ( intval($AssetTraceblink) == 7) { ?>
									<i class="fa fa-circle fa-stack-2x icon-background slide_icon"></i>
									<?php  } else { ?> 
									<i class="fa fa-circle fa-stack-2x icon-background "></i>
									<?php } ?>
					<i class='fas fa-user  fa-stack-1x'></i>
					<!-- <svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>-->
					
				</svg>
			</span>
			<p></p>
				<div class="assert_infor" style="background: #222; min-height:100px; border:2px solid #383838;border-radius:5px;padding:5px; margin:0px; color:#cecebd"> 
			<p class="fadeInDown reachp2">  <?php echo $dispc; ?> </p>
						    	
						</div>
			</p>
		</div>
		
		
		
	</div>
	<div id="D" class="grid-child assert_proc">
		<header class="card-header">
		<div class="card-left">
			<h5 class="card-text" style="float:left;"><strong>Product Information for</strong> <?php echo $QRCode0;?></h5>
			<h5 class="status_header card-text"><strong>Asset Name:</strong> <?php echo $AssetName0;?></h5>
		<h5 class="status_header last_hd card-text"><strong>Asset Type:</strong> <?php echo $AssetType0;?></h5>
					
				</div>
			</header>
		<div class="card-body">			
		
		<p class="info_stauts"><strong>Batch No</strong><br><?php echo $BatchNo0;?></p>
		<p class="info_stauts"><strong>Order No</strong><br><?php echo $OrderNo0;?></p>
		<p class="info_stauts"><strong>Mfg Date</strong><br><?php echo $DateWhenf0;?></p>
		<p class="info_stauts"><strong>Expiry Date</strong><br><?php echo $ExpiryDate0;?></p>
		<p class="info_stauts"><strong>Current Owner</strong><br><?php echo $OwnerWhof;?></p>
		<p class="info_stauts"><strong>Current Status</strong><br><?php echo $AssetStatusf;?></p>
		</div>
		</div>

</div>
</section>
<div class="container">
	<div class="foo blue"></div>
	<div class="foo purple"></div>
	<div class="foo wine"></div>
	<div class="foo aliceblue"></div>
</div>
<div>
	<span style='font-size:11px;color:black; text-align: center;'>
		<marquee behavior="scroll" scrollamount="3,0"  direction="left"><b style='text-align: center;'>DiZiTrade Platform :</b>Improving transparency, accountability, and integrity of the supply chain by ensuring compliance with Global Standard good manufacturing, distribution, and pharmacy practices.
		</marquee>
	</span>
</div>
<!-- /.content -->
</div>
<script type="text/javascript">
$(document).ready(function(){ 
		$("#button").click(function(){ 	
	  
		var searchqrcode = (document.getElementById('searchqrcode').value);
		
		//alert(searchqrcode);
		
		$.ajax({
			type:"post",
			url:"<?php echo base_url();?>Track/TrackAssetData/",
			//data:"&QRCode="+searchqrcode,
			success: function(content) {
				//$("#main-content").html(content);
				//$("#cancelupdate").click();
			}
			//,error: function(e){ alert('Error: ' + e); }
		});
		return false;
		
	});
	});
</script>

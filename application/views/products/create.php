 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Assets</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Assets</li>
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
          <div class="box-header">
            <h3 class="box-title">Add Asset</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
 				
                <div class="form-group">
                  <label for="product_name">Asset name</label>
                  <input type="text" class="form-control" id="asset_name" name="" placeholder="Enter Asset name" autocomplete="off"/>
                </div>

                <div class="form-group">
                  <label for="sku">Order No</label>
                  <input type="text" class="form-control" id="orderno" name="" placeholder="Enter Order No" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="Cost price">Batch No</label>
                  <input type="text" class="form-control" id="batchno" name="" placeholder="Enter Batch No" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="price">Jutemiller Name</label>
                  <input type="text" class="form-control" id="jmname" name="price" placeholder="Enter Jutemiller Name" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="qty">QcLoadingUser Name</label>
                  <input type="text" class="form-control" id="qcloadname" name="qty" placeholder="Enter QC Loading User Name" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="qty">Logistic Name</label>
                  <input type="text" class="form-control" id="log" name="qty" placeholder="Enter Logistic Name" autocomplete="off" />
                </div>

				<div class="form-group">
                  <label for="qty">QcUnloadingUser Name</label>
                  <input type="text" class="form-control" id="qcunloadname" name="qty" placeholder="Enter QC Unloading User Name" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="qty">Warehouse Name</label>
                  <input type="text" class="form-control" id="whname" name="qty" placeholder="Enter Warehouse Name" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="qty">Ricemiller Name</label>
                  <input type="text" class="form-control" id="rmname" name="qty" placeholder="Enter Ricemiller Name" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="qty">AssetDateinfo</label>
                  <input type="date" class="form-control" id="assetdt" name="qty" placeholder="Enter Date" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="qty">Price</label>
                  <input type="text" class="form-control" id="price" name="qty" placeholder="Enter Price" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="qty">Status</label>
                  <input type="text" class="form-control" id="status" name="qty" placeholder="Enter Status" autocomplete="off" />
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('products/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
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
$(document).ready(function(){
  $("button").click(function(){
    var name= document.getElementById("asset_name");
    var orderno= document.getElementById("orderno");
	var batchno= document.getElementById("batchno");
	var jmname= document.getElementById("jmname");
	var qcloadname= document.getElementById("qcloadname");
	var log= document.getElementById("log");
	var qcunloadname= document.getElementById("qcunloadname");
	var whname= document.getElementById("whname");
	var rmname= document.getElementById("rmname");
	var assetdt= document.getElementById("assetdt");
	var price= document.getElementById("price");
	var status= document.getElementById("status");
    
    $.post("http://127.0.0.1:8000/asset",    
	{"em_name":name.value,"em_orderno":orderno.value,"em_batchno":batchno.value,"em_jmname":jmname.value,"em_qcloadname":qcloadname.value,"em_log":log.value,"em_qcunloadname":qcunloadname.value,"em_whname":whname.value,"em_rmname":rmname.value,"em_assetdt":assetdt.value,"em_price":price.value,"em_status":status.value},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_name":name.value,"em_orderno":orderno.value,"em_batchno":batchno.value,"em_jmname":jmname.value,"em_qcloadname":qcloadname.value,"em_log":log.value,"em_qcunloadname":qcunloadname.value,"em_whname":whname.value,"em_rmname":rmname.value,"em_assetdt":assetdt.value,"em_price":price.value,"em_status":status.value});
    });
  });
});</script>

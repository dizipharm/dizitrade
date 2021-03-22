<!-- div class="container-fluid" --> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Warehouse</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Warehouse</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

<div class="container-fluid mt--7">

  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Add Warehouse</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="javascript:">
				
                  <div class="form-group">
                      <label for="">Warehouse Name</label>
                      <input type="text" class="form-control" id="wh_name" name="" placeholder="Enter Warehouse Name">
                    </div>
                  
                  <div class="form-group">
                      <label for="">Warehouse Code</label>
                      <input type="text" class="form-control" id="wh_code" name="" placeholder="Enter Warehouse Code">
                    </div>
                  <div class="form-group">
                    <label for="">Incharge Name</label>
                    <input type="text" class="form-control" id="inc_name" name="" placeholder="Enter Incharge Name">
                  </div>
				  
				   <div class="form-group">
                    <label for="">Contact No</label>
                    <input type="text" class="form-control" id="contactno" name="" placeholder="Enter Contact No">
                  </div>
				  
				   <div class="form-group">
                    <label for="">Capacity</label>
                    <input type="text" class="form-control" id="capacity" name="" placeholder="Enter Capacity(MT)">
                  </div>
                  
                </form>
              </div>

              <div class="col-md-6">
                <form action="javascript:">
                  <div class="form-group">
				   
				   <div class="form-group">
                    <label for="">Availablity Space</label>
                    <input type="text" class="form-control" id="space" name="" placeholder="Enter Space(MT)">
                  </div>
				  <div class="form-group">
                    <label for="">Email ID</label>
                    <input type="text" class="form-control" id="email_id" name="" placeholder="Enter Email ID">
                  </div>
				  <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" id="loc" name="" placeholder="Enter Location">
                  </div>
				  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="wh_add" name="" placeholder="Enter Address">
                  </div>
				  <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Warehouse</button>
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
    var whname= document.getElementById("wh_name");
    var whcode= document.getElementById("wh_code");
	var incname= document.getElementById("inc_name");
	var contactno= document.getElementById("contactno");
	var capacity= document.getElementById("capacity");
	var space= document.getElementById("space");
	var email= document.getElementById("email_id");
	var loc= document.getElementById("loc");
	var whadd= document.getElementById("wh_add");
	//alert(assettype.value);
	$.post("http://127.0.0.1:8000/warehouse/",
	{"em_whname":whname.value,"em_whcode":whcode.value,"em_whincharge":incname.value,"em_whcontactno":contactno.value,"em_whcapacity":capacity.value,"em_whspace":space.value,"em_whemail":email.value,"em_whlocation":loc.value,"em_whaddress":whadd.value},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_whname":whname.value,"em_whcode":whcode.value,"em_whincharge":incname.value,"em_whcontactno":contactno.value,"em_whcapacity":capacity.value,"em_whspace":space.value,"em_whemail":email.value,"em_whlocation":loc.value,"em_whaddress":whadd.value});
	  
    });
  });
});</script>

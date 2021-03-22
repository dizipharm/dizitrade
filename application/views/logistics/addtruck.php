<!-- div class="container-fluid" --> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Trucks</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Trucks</li>
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
          <h3 class="mb-0">Add Truck</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="javascript:">

                  <div class="form-group">
                    <label for="">Transporter Name</label>
                    <input type="text" class="form-control" id="transporter" name="" placeholder="Enter Transporter Name">
                  </div>
                  
                  <div class="form-group">
                      <label for="">Vehicle Reg.No</label>
                      <input type="text" class="form-control" id="truck_no" name="" placeholder="Enter Vehicle Reg. Number">
                    </div>
                  <div class="form-group">
                    <label for="">Truck Type</label>
                    <select class="form-control" id="trucktype" name="">
                      <option value="0" selected disabled hidden>
                        Select Truck Type
                      </option>
                      <option value="Own">Own</option>
					  <option value="Rent">Rent</option>
					  <option value="Market">Market</option>
					  </select>
                  </div>
                  
                </form>
              </div>

              <div class="col-md-6">
                <form action="javascript:">
                  <div class="form-group">
				   <div class="form-group">
                      <label for="">Truck Capacity</label>
                      <input type="text" class="form-control" id="capacity" name="" placeholder="Enter Truck Capacity(MT)">
                    </div>
				   
				  <div class="form-group">
                    <label for="">No.of Wheels</label>
                    <input type="text" class="form-control" id="wheelsno" name="" placeholder="Enter No.of Wheels">
                  </div>
				  <div class="form-group">
                    <label for="">Truck Regd. Year</label>
                    <input type="text" class="form-control" id="truckyear" name="" placeholder="Enter Truck Regd. Year">
                  </div>
				  
				   <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Truck</button>
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
    var indent_dt= document.getElementById("indent_dt");
    var indent_no= document.getElementById("indent_no");
	var indentmonth= document.getElementById("indentmonth");
	var indent_qty= document.getElementById("indent_qty");
	var spaname= document.getElementById("spaname");
	var bagmodel= document.getElementById("bagmodel");
	var season= document.getElementById("season");
		
    $.post("http://127.0.0.1:8000/indent/",    
	{"em_indentdate":indent_dt.value,"em_indentno":indent_no.value,"em_indent_month":indentmonth.value,"em_indent_qty":indent_qty.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodel.value,"em_indent_season":season.value},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_indentdate":indent_dt.value,"em_indentno":indent_no.value,"em_indent_month":indentmonth.value,"em_indent_qty":indent_qty.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodel.value,"em_indent_season":season.value});
	  
    });	 
  });
});</script>

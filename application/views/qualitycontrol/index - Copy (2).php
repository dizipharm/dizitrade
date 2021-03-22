<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Quality Control
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Quality Control - Requests</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myData" class="table table-bordered table-striped">
              <thead>
              <tr>
				<th style="text-align: center;">Order No</th>			    
                <th style="text-align: center;">Batch No</th>
                <th style="text-align: center;">Asset No</th>                
				<th style="text-align: center;">Asset Model</th>
                <th style="text-align: center;">Manufactured Date</th>
                <th style="text-align: center;">JuteMill</th>
				<th style="text-align: center;">QC Activity</th>
				<th style="text-align: center;">QC Status</th>				
				<th style="text-align: center;">Comments</th>
				
              </tr>			  
              </thead>
			
            </table>
          </div>
          <!-- /.box-body -->
        </div>
		      <div class="container-fluid mt--7">

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
				<label>Quality Control Result</label><br>
				<input type="radio" id="QC-Pass" name="gender" value="QC-Pass">
  <label for="QC-Pass">QC-Pass</label><br>
  <input type="radio" id="QC-Fail" name="" value="QC-Fail">
  <label for="QC-Fail">QC-Fail</label><br>
					
                  </div>
                  
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				   
				   <div class="form-group">
                      <label for="">Remark</label>
                      <input type="text" class="form-control" id="jm_name" name="" placeholder="Please Enter Remarks">
                    </div>
				  </div>
                 
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
                    				
                  <div class="form-group">
                    <label for="">Acknowledgement</label>
                    <input type="file" name="InvAckPath" id="INV_ACK_PATH">
					
                  </div>
                  <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Submit</button>
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
	const api_url='';
        fetch('http://127.0.0.1:8000/asset/10/')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
			});
			function appendData(data) {
				var data1=data.result;
				var mainContainer = document.getElementById("myData");
                var td = document.createElement("td");
				td.innerHTML = data1.em_orderno;
				mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_batchno;
				mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_assetno;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_name;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_asset_type;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_assetdt;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_jmname;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_whname;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_assetowner;
                mainContainer.appendChild(td);
				var td = document.createElement("td");
				td.innerHTML = data1.em_status;
                mainContainer.appendChild(td);
				var tr = document.createElement("tr");
                mainContainer.appendChild(tr);
        }
			
			
		
    </script>

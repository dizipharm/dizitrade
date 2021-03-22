
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

        <?php if(in_array('createProduct', $user_permission)): ?>
          <a href="<?php echo base_url('products/create') ?>" class="btn btn-primary">Add Asset</a>
          <br /> <br />
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Assets</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myData" class="table table-bordered table-striped">
              <thead>
              <tr>
			    <th>Date</th>
                <th>Asset Name</th>
                <th>Order No</th>
                <th>Batch No</th>
                <th>JuteMill</th>
                <th>QC by(Loading)</th>
                <th>Logistic</th>
                <th>QC by(Unloading)</th>
                <th>Warehouse</th>
				<th>Rice Mill</th>
				<th>Asset Owner</th>
				<th>Status</th>
                              
         
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
	const api_url='http://127.0.0.1:8000/asset/';
        fetch(api_url)
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
            var mainContainer = document.getElementById("myData");
            for (var i = 0; i < data.length; i++) {
                var td = document.createElement("td");
                td.innerHTML = data[i].em_assetdt;
                mainContainer.appendChild(td);
                td = document.createElement("td");
                td.innerHTML = data[i].em_name;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_orderno;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_batchno;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_jmname;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_qcloadname;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_log;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_qcunloadname;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_whname;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_rmname;
                mainContainer.appendChild(td);				
				td = document.createElement("td");
                td.innerHTML = data[i].em_assetowner;
                mainContainer.appendChild(td);
				td = document.createElement("td");
                td.innerHTML = data[i].em_status;
                mainContainer.appendChild(td);				
                var tr = document.createElement("tr");
                mainContainer.appendChild(tr);

            }
        }
    </script>
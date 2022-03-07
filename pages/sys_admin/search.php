<br>
<ol class="breadcrumb">
  <li><a href="admin.php">Home</a></li>
  <li>Search</li>
</ol>

<ol class="breadcrumb">
    <li><h4><b>Search Inventory</b></h4></li>
    <li><button id="searchTablesRefresh" name="searchTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></li>
</ol>
				 <div class="card-body">										
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#itemSearchTab">Item</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#saleSearchTab">Sale</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#purchaseSearchTab">Purchase</a>
						</li>
						
					</ul>
  
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="itemSearchTab" class="container-fluid tab-pane active">
						  <br>
						  <p>Use the grid below to search all details of items</p>
						  <!-- <a href="#" class="itemDetailsHover" data-toggle="popover" id="10">wwwee</a> -->
							<div class="table-responsive" id="itemDetailsTableDiv"></div>
						</div>
						<div id="saleSearchTab" class="container-fluid tab-pane fade">
							<br>
							<p>Use the grid below to search sale details</p>
							<div class="table-responsive" id="saleDetailsTableDiv"></div>
						</div>
						<div id="purchaseSearchTab" class="container-fluid tab-pane fade">
							<br>
							<p>Use the grid below to search purchase details</p>
							<div class="table-responsive" id="purchaseDetailsTableDiv"></div>
						</div>
					</div>
				  </div> 
				</div>
			  </div>

	

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>	
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	

	<!-- Chosen files for select boxes -->
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="vendor/chosen/chosen.css" />
	
	<!-- Datepicker JS -->
	<script src="vendor/datepicker164/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Custom scripts -->
	<script src="dist/js/scripts.js"></script>

		
	<!-- Datatables CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.css">
	
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="vendor/datepicker164/css/bootstrap-datepicker.min.css">
	
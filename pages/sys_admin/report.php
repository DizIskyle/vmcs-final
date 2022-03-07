<br>
<ol class="breadcrumb">
  <li><a href="admin.php">Home</a></li>
  <li>Report</li>
</ol>

<ol class="breadcrumb">
    <li><h4><b>Reports</b></h4></li>
    <li><button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></li>
</ol>

				  <div class="card-body">										
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#itemReportsTab">Item</a>
						</li>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#saleReportsTab">Sale</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#purchaseReportsTab">Purchase</a>
						</li>
					</ul>
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active">
							<br>
							<p>Use the grid below to get reports for items</p>
							<div class="table-responsive" id="itemReportsTableDiv"></div>
						</div>
					
						<div id="saleReportsTab" class="container-fluid tab-pane fade">
							<br>
							<!-- <p>Use the grid below to get reports for sales</p> -->
							<form> 
							  <div class="form-row">
								  <div class="form-group col-md-4">
									<label for="saleReportStartDate">Start Date</label>
									<input type="text" class="form-control datepicker" id="saleReportStartDate" value="2018-05-24" name="saleReportStartDate" readonly>
								  </div>
								  <div class="form-group col-md-4">
									<label for="saleReportEndDate">End Date</label>
									<input type="text" class="form-control datepicker" id="saleReportEndDate" value="2018-05-24" name="saleReportEndDate" readonly>
								  </div>
							  </div>
                              <div class="form-group col-md-6">
							  <button type="button" id="showSaleReport" class="btn btn-dark">Show Report</button>
							  <button type="reset" id="saleFilterClear" class="btn">Clear</button>
                              </div>
							</form>
							<br><br>
							<div class="table-responsive" id="saleReportsTableDiv"></div>
						</div>
						<div id="purchaseReportsTab" class="container-fluid tab-pane fade">
							<br>
							<!-- <p>Use the grid below to get reports for purchases</p> -->
							<form> 
							  <div class="form-row">
								  <div class="form-group col-md-4">
									<label for="purchaseReportStartDate">Start Date</label>
									<input type="text" class="form-control datepicker" id="purchaseReportStartDate" value="2018-05-24" name="purchaseReportStartDate" readonly>
								  </div>
								  <div class="form-group col-md-4">
									<label for="purchaseReportEndDate">End Date</label>
									<input type="text" class="form-control datepicker" id="purchaseReportEndDate" value="2018-05-24" name="purchaseReportEndDate" readonly>
								  </div>
							  </div>
                              <div class="form-group col-md-6">
							  <button type="button" id="showPurchaseReport" class="btn btn-dark">Show Report</button>
							  <button type="reset" id="purchaseFilterClear" class="btn">Clear</button>
                              </div>
                            </form>
							<br><br>
							<div class="table-responsive" id="purchaseReportsTableDiv"></div>
						</div>
					
						</div>
					</div>
				  </div> 
				</div>
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
<br>
<ol class="breadcrumb">
  <li><a href="admin.php">Home</a></li>
  <li>Purchase</li>
</ol>

<h1>Purchase Details</h1>
<br>
				  <div class="card-body">
					<div id="purchaseDetailsMessage"></div>
					<form>
					  <div class="form-row">
						<div class="form-group col-md-3">
						  <label for="purchaseDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="purchaseDetailsItemNumber" name="purchaseDetailsItemNumber" autocomplete="off">
						  <div id="purchaseDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
						</div>
						<div class="form-group col-md-3">
						  <label for="purchaseDetailsPurchaseDate">Purchase Date<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control datepicker" id="purchaseDetailsPurchaseDate" name="purchaseDetailsPurchaseDate" readonly value="2018-05-24">
						</div>
						<div class="form-group col-md-2">
						  <label for="purchaseDetailsPurchaseID">Purchase ID</label>
						  <input type="text" class="form-control invTooltip" id="purchaseDetailsPurchaseID" name="purchaseDetailsPurchaseID" title="This will be auto-generated when you add a new record" autocomplete="off">
						  <div id="purchaseDetailsPurchaseIDSuggestionsDiv" class="customListDivWidth"></div>
						</div>
					  </div>
					  <div class="form-row"> 
						  <div class="form-group col-md-6">
							<label for="purchaseDetailsItemName">Item Name<span class="requiredIcon">*</span></label>
							<input type="text" class="form-control invTooltip" id="purchaseDetailsItemName" name="purchaseDetailsItemName" readonly title="This will be auto-filled when you enter the item number above">
						  </div>
						  <div class="form-group col-md-4">
							  <label for="purchaseDetailsCurrentStock">Current Stock</label>
							  <input type="text" class="form-control" id="purchaseDetailsCurrentStock" name="purchaseDetailsCurrentStock" readonly>
						  </div>
						
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-7">
						  <label for="purchaseDetailsQuantity">Quantity<span class="requiredIcon">*</span></label>
						  <input type="number" class="form-control" id="purchaseDetailsQuantity" name="purchaseDetailsQuantity" value="0">
						</div>
						<div class="form-group col-md-7">
						  <label for="purchaseDetailsUnitPrice">Unit Price<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="purchaseDetailsUnitPrice" name="purchaseDetailsUnitPrice" value="0">
						  
						</div>
						<div class="form-group col-md-7">
						  <label for="purchaseDetailsTotal">Total Cost</label>
						  <input type="text" class="form-control" id="purchaseDetailsTotal" name="purchaseDetailsTotal" readonly>
						</div>
					  </div>
                      <div class="form-group col-md-8">
					  <button type="button" id="addPurchase" class="btn btn-success">Add Purchase</button>
					  <button type="button" id="updatePurchaseDetailsButton" class="btn btn-primary">Update</button>
					  <button type="reset" class="btn">Clear</button>
                      </div>
					</form>
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
	
	
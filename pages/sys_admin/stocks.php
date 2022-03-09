<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Stocks</li>
</ol>

<h1>Stocks</h1>

<button type="button" class="btn btn-success create-new">Add New Stocks</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="6%">Stock Code</th>
			<th width="6%">Category</th>
			<th width="6%">Name</th>
			<th width="6%">Quantity</th>
			<th width="6%">Price</th>
			<th width="6%">Expiration Date</th>
			<th width="6%">Process Date</th>
			<th width="6%">Processed by</th>
			<th width="6%">Status</th>
			<th></th>
		</tr>
	</thead>

</table>

<div class="modal fade" id="modal-id">
  	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-section" method="POST" id="section-form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Item Code</label>
								<input type="text" class="form-control" placeholder="Item Code" name="stock_code" id="stock_code" title="This will be auto-generated" readonly="readonly"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>            
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Category</label>
								<select name="stock_catid" id="stock_catid" class="form-control">
									<?php 
											$data1 = "";
											$query1 = "SELECT * FROM stocks_category ORDER BY stockcat_name ASC";

											if (!$result1 = mysqli_query($db,$query1)) {
												exit(mysqli_error());
											}
										
											if(mysqli_num_rows($result1) > 0) {
												while($row1 = mysqli_fetch_assoc($result1))
												{
													$data1 .= '<option value="'.$row1['stockcat_name'].'">'.$row1['stockcat_name'].'</option>';
												}
											} else
											{
												$data1 .="";
											}
											echo $data1;                                                                            
										?>
								</select>
							</div>
						</div>   
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Item Name</label>
								<input type="text" class="form-control" placeholder="Item Name" name="stock_name" id="stock_name"/>
							</div>
						</div> 
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Item Quantity</label>
								<input type="text" class="form-control" placeholder="Item Quantity" name="stock_quantity" id="stock_quantity"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Item Price</label>
								<div class="input-group" >
                                    <span class="input-group-addon">
									&#8369;
                                    </span>
                                    <input type="text" class="form-control " placeholder="Item Price" name="stock_price" id="stock_price" />                                
                                </div>
							</div>
						</div> 	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Expiration Date</label>
								<div class="input-group date" id="stockexpiration" data-target-input="nearest">
                                    <span class="input-group-addon" data-target="#stockexpiration" data-toggle="datetimepicker">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                    <input type="text" class="form-control datetimepicker-input" data-target="#stockexpiration" placeholder="Expiration Date" name="stock_expirationdate" id="stock_expirationdate" />                                
                                </div>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="stock_status" id="stock_status" class="form-control">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
									<option value="Deleted">Deleted</option>
								</select>
							</div>
						</div>
						
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="stock_id" id="stock_id" value="" />
								<span id="check-e"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="section_btn" id="section_btn">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#stockexpiration').datetimepicker({
        format: 'L'
    });

    //Reading
    var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/stocks_exe_dt.php",
            type: "POST"
        }
    });

	//Adding
    $('.create-new').click(function() {
        var action = $(this).attr("id");
        var theform = $("#section-form").validate();

        $(".modal-title").text('Create');
        $("#section_btn").text('Submit');
        $("#section_btn").attr('name', 'submit_btn');
        $("#section_btn").attr('data-id', '');

        $("#stock_code").val('');
        $("#stock_catid").val($("#stock_catid option:first").val());
        $("#stock_name").val('');
        $("#stock_quantity").val('');
        $("#stock_price").val('');
        $("#stock_expirationdate").val('');
        $("#stock_status").val($("#stock_status option:first").val());
        $("#stock_id").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

	//Adding Validation
    $("#section-form").validate({
        rules: {
			//rules
			stock_catid: {
				required: true
			},
			stock_name: {
				required: true,
				minlength: 3,
				maxlength: 50
			},
			stock_quantity: {
				required: true,
				minlength: 1,
				maxlength: 10
			},
			stock_price: {
				number: true,
				required: true,
				minlength: 1,
				maxlength: 10
			},
			stock_expirationdate: {
				required: false,
				minlength: 1,
				maxlength: 10
			},
			stock_status: {
				required: true
			},
        },
        messages: {
			//messages
		
			stock_catid: {
				required: "Please select a category"
			},
			stock_name: {
				required: "Please enter a name",
				minlength: "Your name must consist of at least 3 characters",
				maxlength: "Your name must be less than 50 characters"
			},
			stock_quantity: {
				required: "Please enter a quantity",
				minlength: "Your quantity must consist of at least 1 characters",
				maxlength: "Your quantity must be less than 10 characters"
			},
			stock_price: {
				required: "Please enter a price",
				minlength: "Your price must consist of at least 1 characters",
				maxlength: "Your price must be less than 10 characters"
			},
			stock_expirationdate: {
				minlength: "Your expiration date must consist of at least 1 characters",
				maxlength: "Your expiration date must be less than 10 characters"
			},
			stock_status: {
				required: "Please select a status"
			},		
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/stocks_exe_crud.php',
            data: data,
            success: function(data, status) {
                if (data != 999) {
                    console.log(data);
                    $("#modal-id").modal("hide");
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                } else {
                    console.log(data);
                    alert('error');
                }
            }
        });
        return false;
    }

	//Update
    $(document).on('click', '#update', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        action = 'read_selected';

        $.ajax({
            type: 'POST',
            url: "pages_exe/sys_user_dashboard/stocks_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data
				$("#stock_code").val(cruddata.stock_code);
				$("#stock_catid").val(cruddata.stock_catid);
				$("#stock_name").val(cruddata.stock_name);
				$("#stock_quantity").val(cruddata.stock_quantity);
				$("#stock_price").val(cruddata.stock_price);
				$("#stock_expirationdate").val(cruddata.stock_expirationdate);
				$("#pet_processdate").val(cruddata.pet_processdate);
				$("#pet_processby").val(cruddata.pet_processby);
				$("#stock_status").val(cruddata.stock_status);
				$("#stock_id").val(cruddata.stock_id);



                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.job_id);
                $(".modal-title").text('Edit');
                $("#section_btn").text('Save Changes');
                $("#modal-id").modal("show");
            }
        });
    });

	//Delete
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var conf = confirm("Are you sure, do you really want to delete these?");
        if (conf == true) {
            var action = "delete";
            $.ajax({
                type: 'POST',
                url: "pages_exe/sys_user_dashboard/stocks_exe_crud.php",
                data: {
                    delete_selected: action,
                    crud_id: id,
                },
                success: function(data, status) {
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                }
            });
        }
    });

});


</script>
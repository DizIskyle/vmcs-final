<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Pets</li>
</ol>

<h1>Pets</h1>

<button type="button" class="btn btn-success create-new">Add New Pet</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="6%">Pet Code</th>
			<th width="6%">Category</th>
			<th width="15%">Name</th>
			<th width="15%">Adopted</th>
			<th width="15%">Owner</th>
			<th width="15%">Rescued from</th>
			<th width="6%">Process Date</th>
			<th width="15%">Processed by</th>
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
								<label for="">Pet Code</label>
								<input type="text" class="form-control" placeholder="Pet Code" name="pet_code" id="pet_code" title="This will be auto-generated" readonly="readonly"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>            
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Category</label>
								<select name="pet_catid" id="pet_catid" class="form-control">
									<?php 
											$data1 = "";
											$query1 = "SELECT * FROM pet_category ORDER BY petcat_name ASC";

											if (!$result1 = mysqli_query($db,$query1)) {
												exit(mysqli_error());
											}
										
											if(mysqli_num_rows($result1) > 0) {
												while($row1 = mysqli_fetch_assoc($result1))
												{
													$data1 .= '<option value="'.$row1['petcat_name'].'">'.$row1['petcat_name'].'</option>';
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
								<label for="">Pet Name</label>
								<input type="text" class="form-control" placeholder="Pet Name" name="pet_name" id="pet_name"/>
							</div>
						</div>        
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Adopted?</label>
								<select name="pet_adopted" id="pet_adopted" class="form-control">
									<option value="Adopted">Yes</option>
									<option value="Rescued">Rescued</option>
									<option value="Own">No</option>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Pet Owner</label>
								<select name="pet_adoptedfrom" id="pet_adoptedfrom" class="form-control">
										<?php 
											$data2 = "";
											$query2 = "SELECT * FROM users ORDER BY userid ASC";

											if (!$result2 = mysqli_query($db,$query2)) {
												exit(mysqli_error());
											}
										
											if(mysqli_num_rows($result2) > 0) {
												while($row2 = mysqli_fetch_assoc($result2))
												{
													$data2 .= '<option value="'.$row2['username'].'">'.$row2['userfirstname'].' '.$row2['userlastname'].'</option>';
												}
											} else
											{
												$data2 .="";
											}
											echo $data2;                                                                            
										?>
								</select>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Rescued From?</label>
								<input type="text" class="form-control" placeholder="Rescued From" name="pet_rescuedfrom" id="pet_rescuedfrom"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Process Date</label>
								<input type="text" class="form-control" placeholder="Date" name="pet_processdate" id="pet_processdate"title="This will be auto-generated" readonly="readonly" />
							</div>
						</div>		
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="pet_status" id="pet_status" class="form-control">
									<option value="In Custody">In Custody</option>
									<option value="Adopted">Adopted</option>
									<option value="Deleted">Deleted</option>
								</select>
							</div>
						</div>
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="pet_id" id="pet_id" value="" />
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
    //Reading
    var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/pets_exe_dt.php",
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

        $("#pet_catid").val($("#pet_catid option:first").val());
        $("#pet_name").val('');
        $("#pet_adopted").val($("#pet_adopted option:first").val());
        $("#pet_adoptedfrom").val($("#pet_adoptedfrom option:last").val());
        $("#pet_rescuedfrom").val('');
        $("#pet_processdate").val('');
        $("#pet_status").val($("#pet_status option:first").val());
        $("#pet_id").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

	//Adding Validation
    $("#section-form").validate({
        rules: {
            pet_name: {
                required: true
            },  
        },
        messages: {
           
            pet_name: {
                required: "Please make sure pet name not empty"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/pets_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/pets_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data

				$("#pet_catid").val(cruddata.pet_catid);
				$("#pet_name").val(cruddata.pet_name);
				$("#pet_adopted").val(cruddata.pet_adopted);
				$("#pet_adoptedfrom").val(cruddata.pet_adoptedfrom);
				$("#pet_rescuedfrom").val(cruddata.pet_rescuedfrom);
				$("#pet_processdate").val(cruddata.pet_processdate);
				$("#pet_status").val(cruddata.pet_status);
				$("#pet_id").val(cruddata.pet_id);



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
                url: "pages_exe/sys_user_dashboard/pets_exe_crud.php",
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
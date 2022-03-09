<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Veterinarians</li>
</ol>

<h1>Appointment Scehdule</h1>
<button type="button" class="btn btn-success create-new">Add New Schedule</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="6%">Username</th>
			<th width="6%">Vet Name</th>
			<th width="6%">Sched ID</th>
			<th width="6%">Appointment Code</th>
			<th width="6%">Reason</th>
			<th width="6%">Appointment Time</th>
            <th width="6%">Status</th>
            <th width="6%">Appointment Come</th>
            <th width="6%">Created Date</th>
			<th></th>
		</tr>
	</thead>
</table>

<!-- Add Modal -->
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
								<label for="">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="appointment_customerid" id="appointment_customerid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Vet Name</label>
								<input type="text" class="form-control" placeholder="Vet Name" name="appointment_vetid" id="appointment_vetid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Sched ID</label>
								<input type="text" class="form-control" placeholder="Sched ID" name="appointment_schedid" id="appointment_schedid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Appointment Code</label>
								<input type="text" class="form-control" placeholder="Appointment Code" name="appointment_code" id="appointment_code"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Reason</label>
								<input type="text" class="form-control" placeholder="Reason" name="appointment_reason" id="appointment_reason"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Appointment Time</label>
								<input type="text" class="form-control" placeholder="Appointment Time" name="appointment_time" id="appointment_time"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="appointment_status" id="appointment_status" class="form-control">
									<option value="Cancel">Cancel</option>
									<option value="Booked">Booked</option>
									<option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
								</select>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="appointment_come" id="appointment_come" class="form-control">
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Created Date</label>
								<input type="text" class="form-control" placeholder="Created Date" name="appointment_createddate" id="appointment_createddatee"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<!-- ID -->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="userid" id="userid" value="" />
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

<!-- Update Modal -->
<div class="modal fade" id="modal-id2">
  	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-section2" method="POST" id="section-form2">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="update_appointment_customerid" id="update_appointment_customerid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Vet Name</label>
								<input type="text" class="form-control" placeholder="Vet Name" name="update_appointment_vetid" id="update_appointment_vetid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Sched ID</label>
								<input type="text" class="form-control" placeholder="Sched ID" name="update_appointment_schedid" id="update_appointment_schedid"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Appointment Code</label>
								<input type="text" class="form-control" placeholder="Appointment Code" name="update_appointment_code" id="update_appointment_code"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Reason</label>
								<input type="text" class="form-control" placeholder="Reason" name="update_appointment_reason" id="update_appointment_reason"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Appointment Time</label>
								<input type="text" class="form-control" placeholder="Appointment Time" name="update_appointment_time" id="update_appointment_time"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="update_appointment_status" id="update_appointment_status" class="form-control">
									<option value="Cancel">Cancel</option>
									<option value="Booked">Booked</option>
									<option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
								</select>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="update_appointment_come" id="update_appointment_come" class="form-control">
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Created Date</label>
								<input type="text" class="form-control" placeholder="Created Date" name="update_appointment_createddate" id="update_appointment_createddatee"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="update_userid" id="update_userid" value="" />
								<span id="check-e"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="update_section_btn" id="update_section_btn">Save changes</button>
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
            url: "pages_exe/sys_user_dashboard/report_exe_dt.php",
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

        $("#appointment_customerid").val('');
        $("#appointment_vetid").val('');
        $("#appointment_schedid").val('');
        $("#appointment_code").val('');
        $("#appointment_reason").val('');
        $("#appointment_time").val('');
        $("#appointment_status").val("#appointment_status option:first");
        $("#appointment_come").val("#appointment_come option:first");
        $("#appointment_createddate").val('');
        $("#appointment_id").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });


 //Update Validation
 $("#section-form").validate({
        rules: {
            appointment_customerid: {
                required: true,
            },
            appointment_vetid: {
                required: true,
            },
            appointment_reason: {
                required: true,
                minlength:5
            },
            appointment_status: {
                required: true,
            },
        },
        messages: {
            appointment_customerid: {
                required: "Please enter username",

            },
            appointment_vetid: {
                required: "Please enter a Vetname",
               
            },
            appointment_reason: {
                required: "Please enter a middlename",
                minlength: "Your middlename must consist of at least 5 characters",
                
            },
            appointment_status: {
                required: "Please enter a status",
            },
        },
        submitHandler: submitForm
    });


    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/report_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/report_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data
                $("#update_appointment_customerid").val(cruddata.appointment_customerid);
                $("#update_appointment_vetid").val(cruddata.appointment_vetid);
                $("#update_appointment_schedid").val(cruddata.appointment_schedid);
                $("#update_appointment_code").val(cruddata.appointment_code);
                $("#update_appointment_reason").val(cruddata.appointment_reason);
                $("#update_appointment_time").val(cruddata.appointment_time);
                $("#update_appointment_status").val(cruddata.appointment_status);
                $("#update_appointment_come").val(cruddata.aappointment_come);
                $("#update_appointment_createddate").val(cruddata.appointment_createddate);
                $("#update_appointment_id").val(cruddata.appointment_id);


                $("#update_section_btn").attr('name', 'update_btn');
                $("#update_section_btn").attr('data-id', cruddata.appointment_id);
                $(".modal-title").text('Edit');
                $("#update_section_btn").text('Save Changes');
                $("#modal-id2").modal("show");
            }
        });
    });

    //Update Validation
    $("#section-form2").validate({
        rules: {
            update_appointment_customerid: {
                required: true,
            },
            update_appointment_vetid: {
                required: true,
            },
            update_appointment_reason: {
                required: true,
                minlength:5
            },
            update_appointment_status: {
                required: true,
            },
        },
        messages: {
            update_appointment_customerid: {
                required: "Please enter username",

            },
            update_appointment_vetid: {
                required: "Please enter a Vetname",
               
            },
            update_appointment_reason: {
                required: "Please enter a middlename",
                minlength: "Your middlename must consist of at least 5 characters",
                
            },
            update_appointment_status: {
                required: "Please enter a status",
            },
        },
        submitHandler: updateForm
    });

    function updateForm() {
        var data = $("#section-form2").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/report_exe_crud.php',
            data: data,
            success: function(data, status) {
                if (data != 999) {
                    console.log(data);
                    $("#modal-id2").modal("hide");
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
    

	//Delete
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var conf = confirm("Are you sure, do you really want to delete these?");
        if (conf == true) {
            var action = "delete";
            $.ajax({
                type: 'POST',
                url: "pages_exe/sys_user_dashboard/report_exe_crud.php",
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

    //Reset Password
    $(document).on('click', '#resetpass', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var conf = confirm("Are you sure, do you really want to reset password?");
        if (conf == true) {
            var action = "resetpass";
            var randomstring = Math.random().toString(36).slice(-8);
            $.ajax({
                type: 'POST',
                url: "pages_exe/sys_user_dashboard/vets_exe_crud.php",
                data: {
                    resetpass_selected: action,
                    newpassword: randomstring,
                    crud_id: id,
                },
                success: function(data, status) {
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                    alert('Password has been reset to ' + randomstring);
                    console.log(data);
                }
            });
        }
    });

    

});


</script>
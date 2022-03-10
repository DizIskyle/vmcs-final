<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Appointment</li>
</ol>

<h1>Appointment</h1>

<!-- <button type="button" class="btn btn-success create-new">Add New Schedule</button><br> --><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>            
			<th width="3%">No</th>
			<th width="6%">Veterinarian</th>
			<th width="6%">Date</th>
			<th width="6%">Day</th>
			<th width="6%">Start Time</th>
			<th width="6%">End Time</th>
			<th width="6%">Consulting Time</th>
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
								<label for="">Reason for Appointment</label>                                
                                <textarea name="appointment_reason" id="appointment_reason" class="form-control" rows="3" placeholder="Reason for Appointment"></textarea>
                                
							</div>
						</div>
                        <!--Vet ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Vet</label>
								<input type="text" class="form-control" placeholder="ID" name="appointment_vetid" id="appointment_vetid" />
								<span id="check-e"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Sched ID</label>
								<input type="text" class="form-control" placeholder="ID" name="appointment_schedid" id="appointment_schedid" />
								<span id="check-e"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Time</label>
								<input type="text" class="form-control" placeholder="Appointment Time" name="appointment_time" id="appointment_time" />
								<span id="check-e"></span>
							</div>
						</div>
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="appointment_id" id="appointment_id" value="" />
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
            url: "pages_exe/sys_user_dashboard/appointment_exe_dt.php",
            type: "POST"
        }
    });
	//Booknow
    $(document).on('click', '#booknow', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        action = 'read_selected';
        $.ajax({
            type: 'POST',
            url: "pages_exe/sys_user_dashboard/appointment_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
                $('#appointment_vetid').val(cruddata.sched_vetid);
                $('#appointment_schedid').val(cruddata.sched_id);
                $('#appointment_time').val(cruddata.appointment_time);
				//parse json data
                /* $("#sched_date").val(cruddata.sched_date);
                $("#sched_starttime").val(cruddata.sched_starttime);
                $("#sched_endtime").val(cruddata.sched_endtime);
                $("#sched_consultingtime").val(cruddata.sched_consultingtime);
                $("#sched_status").val(cruddata.sched_status);
                $("#sched_id").val(cruddata.sched_id); */
              /*   theform.resetForm(); */
                $("#section_btn").attr('name', 'submit_btn');
                $("#section_btn").attr('data-id', cruddata.sched_id);
                $(".modal-title").text('Create Appointment');
                $("#section_btn").text('Book Now');
                $("#modal-id").modal("show");
            }
        });
    });
    $/* ('#booknow').click(function() {
        var action = $(this).attr("id");
        var theform = $("#section-form").validate();
        $(".modal-title").text('Create');
        $("#section_btn").text('Submit');
        $("#section_btn").attr('name', 'submit_btn');
        $("#section_btn").attr('data-id', '');
        $("#sched_date").val('');
        $("#sched_starttime").val('');
        $("#sched_endtime").val('');
        $("#sched_consultingtime").val($("#sched_status option:first").val());
        $("#sched_status").val($("#sched_status option:first").val());
        $("#sched_id").val('');
        theform.resetForm();
        $("#modal-id").modal("show");
    }); */
	//Adding Validation
    $("#section-form").validate({
        rules: {
            appointment_reason: "required",
            appointment_vetid: "required",
            appointment_schedid: "required",
        },
        messages: {
            appointment_reason: "Please enter reason for appointment",
            appointment_vetid: "Please enter vet id",
            appointment_schedid: "Please enter sched id",
        },
        submitHandler: submitForm
    });
    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/appointment_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/appointment_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data
                $("#sched_date").val(cruddata.sched_date);
                $("#sched_starttime").val(cruddata.sched_starttime);
                $("#sched_endtime").val(cruddata.sched_endtime);
                $("#sched_consultingtime").val(cruddata.sched_consultingtime);
                $("#sched_status").val(cruddata.sched_status);
                $("#sched_id").val(cruddata.sched_id);
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
                url: "pages_exe/sys_user_dashboard/appointment_exe_crud.php",
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
<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Schedule</li>
</ol>

<h1>Schedule</h1>

<button type="button" class="btn btn-success create-new">Add New Schedule</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="6%">Date</th>
			<th width="6%">Day</th>
			<th width="6%">Start Time</th>
			<th width="6%">End Time</th>
			<th width="6%">Consulting Time</th>
			<th width="6%">Status</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
            <th width="3%">No</th>
			<th width="6%">Date</th>
			<th width="6%">Day</th>
			<th width="6%">Start Time</th>
			<th width="6%">End Time</th>
			<th width="6%">Consulting Time</th>
			<th width="6%">Status</th>
            <th></th>
		</tr>
	</tfoot>
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
								<label for="">Scheduled Date</label>
								<div class="input-group date" id="vetsched_date" data-target-input="nearest">
                                    <span class="input-group-addon" data-target="#vetsched_date" data-toggle="datetimepicker">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type="text" class="form-control datetimepicker-input" data-target="#vetsched_date" placeholder="Scheduled Date" id="sched_date" name="sched_date" />                                
                                </div>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>            
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Start Time</label>
								<div class="input-group date" id="vetsched_starttime" data-target-input="nearest">
                                    <span class="input-group-addon" data-target="#vetsched_starttime" data-toggle="datetimepicker">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type="text" class="form-control datetimepicker-input" data-target="#vetsched_starttime" placeholder="Start Time" id="sched_starttime" name="sched_starttime" />                                
                                </div>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div> 
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">End Time</label>
								<div class="input-group date" id="vetsched_endtime" data-target-input="nearest">
                                    <span class="input-group-addon" data-target="#vetsched_endtime" data-toggle="datetimepicker">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type="text" class="form-control datetimepicker-input" data-target="#vetsched_endtime" placeholder="End Time" id="sched_endtime" name="sched_endtime" />                                
                                </div>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Consulting Time</label>
								<select name="sched_consultingtime" id="sched_consultingtime" class="form-control">
									<option value="5 Minutes">5 Minutes</option>
									<option value="10 Minutes">10 Minutes</option>
                                    <option value="15 Minutes">15 Minutes</option>
									<option value="20 Minutes">20 Minutes</option>
                                    <option value="25 Minutes">25 Minutes</option>
									<option value="30 Minutes">30 Minutes</option>
                                    <option value="35 Minutes">35 Minutes</option>
									<option value="40 Minutes">40 Minutes</option>
                                    <option value="45 Minutes">45 Minutes</option>
									<option value="50 Minutes">50 Minutes</option>
									<option value="55 Minutes">55 Minutes</option>
									<option value="60 Minutes">60 Minutes</option>
								</select>
							</div>
						</div> 
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="sched_status" id="sched_status" class="form-control">
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
								<input type="text" class="form-control" placeholder="ID" name="sched_id" id="sched_id" value="" />
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
    $('#vetsched_date').datetimepicker({
        format: 'L'
    });
    $('#vetsched_starttime').datetimepicker({
        format: 'HH:mm'
    });
    $('#vetsched_endtime').datetimepicker({
        format: 'HH:mm'
    });

    //Reading
    var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/schedule_exe_dt.php",
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

        $("#sched_date").val('');
        $("#sched_starttime").val('');
        $("#sched_endtime").val('');
        $("#sched_consultingtime").val($("#sched_status option:first").val());
        $("#sched_status").val($("#sched_status option:first").val());
        $("#sched_id").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

	//Adding Validation
    $("#section-form").validate({
        rules: {
            sched_date: {
                required: true
            },
            sched_starttime: {
                required: true
            },  
            sched_endtime: {
                required: true
            },

        },
        messages: {
            sched_date: {
                required: "Please enter date"
            },
            sched_starttime: {
                required: "Please enter start time"
            },
            sched_endtime: {
                required: "Please enter end time"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/schedule_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/schedule_exe_crud.php",
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
                url: "pages_exe/sys_user_dashboard/schedule_exe_crud.php",
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
<br>
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Pets Category</li>
</ol>

<h1>Pets Category</h1>

<button type="button" class="btn btn-success create-new">Add New Pet Category</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="6%">Name</th>
			<th width="6%">Process Date</th>
			<th width="15%">Processed by</th>
			<th width="6%">Status</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="3%">No</th>
			<th width="6%">Name</th>
			<th width="6%">Process Date</th>
			<th width="15%">Processed by</th>
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
								<label for="">Name</label>
								<input type="text" class="form-control" placeholder="Name" name="petcat_name" id="petcat_name"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div> 
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="petcat_status" id="petcat_status" class="form-control">
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
								<input type="text" class="form-control" placeholder="ID" name="petcat_id" id="petcat_id" value="" />
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
            url: "pages_exe/sys_user_dashboard/petscategory_exe_dt.php",
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

        $("#petcat_name").val('');
        $("#petcat_status").val($("#petcat_status option:first").val());
        $("#petcat_id").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

	//Adding Validation
    $("#section-form").validate({
        rules: {
            petcat_name: {
                required: true
            }, 
        },
        messages: {
            petcat_name: {
                required: "Please make sure pet category name not empty "
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/petscategory_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/petscategory_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data
				$("#petcat_name").val(cruddata.petcat_name);
				$("#petcat_status").val(cruddata.petcat_status);
				$("#petcat_id").val(cruddata.petcat_id);

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
                url: "pages_exe/sys_user_dashboard/petscategory_exe_crud.php",
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
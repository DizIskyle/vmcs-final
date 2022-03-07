<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Users</li>
</ol>


<h1>Users</h1>

<button type="button" class="btn btn-success create-new">Add New</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="5%">No</th>
			<th width="5%">Username</th>
			<th width="5%">Salt</th>
			<th width="5%">Password</th>
			<th width="5%">First name</th>
			<th width="5%">Middle name</th>
			<th width="5%">last Name</th>
			<th width="5%">email</th>
			<th width="5%">category</th>
			<th width="5%">Status</th>
			<th></th>
		</tr>
	</thead>
    <tfoot> 
		<tr>
			<th width="5%">No</th>
			<th width="5%">Username</th>
			<th width="5%">Salt</th>
			<th width="5%">Password</th>
			<th width="5%">First name</th>
			<th width="5%">Middle name</th>
			<th width="5%">last Name</th>
			<th width="5%">email</th>
			<th width="5%">category</th>
			<th width="5%">Status</th>
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
								<label for="">User Name</label>
								<input type="text" class="form-control" placeholder="User Name" name="username" id="username"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">First Name</label>
								<input type="text" class="form-control" placeholder="First Name" name="userfirstname" id="userfirstname"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Middle Name</label>
								<input type="text" class="form-control" placeholder="Middle Name" name="usermiddlename" id="usermiddlename"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Last Name</label>
								<input type="text" class="form-control" placeholder="Last Name" name="userlastname" id="userlastname"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" placeholder="Email" name="useremail" id="useremail"/>
							</div>
						</div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="userpass" id="userpass"/>
							</div>
						</div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_userpass" id="confirm_userpass"/>
							</div>
						</div>               
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Category</label>
								<select name="usercategory" id="usercategory" class="form-control">
									<option value="1">Admin</option>
									<option value="3">Customers</option>
								</select>
							</div>
						</div> 
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Status</label>
								<select name="userstatus" id="userstatus" class="form-control">
									<option value="enable">Enable</option>
									<option value="suspended">Disable</option>
								</select>
							</div>
						</div>  
						<!--ID-->
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

      
<script type="text/javascript">
$(document).ready(function() {
    //Reading
    var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/users_exe_dt.php",
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

        $("#username").val('');
        $("#userfirstname").val('');
        $("#usermiddlename").val('');
        $("#userlastname").val('');
        $("#useremail").val('');
        $("#userpass").val('');
        $("#confirm_userpass").val('');
        $("#usercategory").val($("#usercategory option:first").val());
        $("#userstatus").val($("#userstatus option:first").val());
        $("#userid").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

    //Adding Validation
    $("#section-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            userfirstname: {
                required: true
            },
            usermiddlename: {
                required: true
            },
            userlastname: {
                required: true
            },
            useremail: {
                required: true,
                email: true
            },
            userpass: {
                required: true,
                minlength: 6
            },
            confirm_userpass: {
                required: true,
                minlength: 6,
                equalTo: "#userpass"
            },
			usercategory: {
                required: true
            },
			userstatus: {
                required: true
            },
        },
        messages: {
            username: {
                required: "Please enter username name"
            },
            useremail: {
                required: "Please enter username useremail"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/users_exe_crud.php',
            data: data,
            success: function(data, status) {
                //console.log(data);
                if (data != 999) {
                    $("#modal-id").modal("hide");
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                } else {
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
            url: 'pages_exe/sys_user_dashboard/users_exe_crud.php',
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
                $("#userid").val(cruddata.userid);
                $("#username").val(cruddata.username);
                $("#userfirstname").val(cruddata.userfirstname);
                $("#usermiddlename").val(cruddata.usermiddlename);
                $("#userlastname").val(cruddata.userlastname);
                $("#useremail").val(cruddata.useremail);
                $("#usercategory").val(cruddata.usercategory);
                $("#userstatus").val(cruddata.userstatus);
                $("#userpass").val('');
                $("#confirm_userpass").val('');

                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.userid);
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
                url: 'pages_exe/sys_user_dashboard/users_exe_crud.php',
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
<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
</ol> 

<div class="container">
	<div class="row">
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h1>Your Profile</h1>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                       
		                    <form>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name</label> 
                                <div class="col-8">
                                  <div class="form-control here"> <?php echo $_SESSION['system_username']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                <div class="form-control here"> <?php echo $_SESSION['system_userfirstname']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                <div class="form-control here"> <?php echo $_SESSION['system_userlastname']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Middle Name</label> 
                                <div class="col-8">
                                <div class="form-control here"> <?php echo $_SESSION['system_usermiddlename']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">ID</label> 
                                <div class="col-8">
                                <div class="form-control here"> <?php echo $_SESSION['system_userid']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                <div class="form-control here"> <?php echo $_SESSION['system_userid']; ?> </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button type="button" class="btn btn-primary btn-sm" id="update" data-id=".$row[0]" >Edit</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
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
								<input type="text" class="form-control" placeholder="Username" name="update_username" id="update_username"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">First Name</label>
								<input type="text" class="form-control" placeholder="First Name" name="update_userfirstname" id="update_userfirstname"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Middle Name</label>
								<input type="text" class="form-control" placeholder="Middle Name" name="update_usermiddlename" id="update_usermiddlename"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Last Name</label>
								<input type="text" class="form-control" placeholder="Last Name" name="update_userlastname" id="update_userlastname"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" placeholder="Email" name="update_useremail" id="update_useremail"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Status</label>
								<select name="update_userstatus" id="update_userstatus" class="form-control">
									<option value="activated">Activated</option>
									<option value="unactivated">Unactivated</option>
									<option value="suspended">Suspended</option>
								</select>
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
            url: "pages_exe/sys_user_dashboard/customers_exe_dt.php",
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
        $("#confirmuserpass").val('');        
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
                minlength: 5,
                maxlength: 20
            },
            userfirstname: {
                required: true,
            },
            usermiddlename: {
                required: true,
            },
            userlastname: {
                required: true,
            },
            useremail: {
                required: true,
                email: true
            },
            userpass: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            confirmuserpass: {
                required: true,
                minlength: 5,
                maxlength: 20,
                equalTo: "#userpass"
            },
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 5 characters",
                maxlength: "Your username must consist of at least 5 characters"
            },
            userfirstname: {
                required: "Please enter a firstname",
                minlength: "Your firstname must consist of at least 5 characters",
                maxlength: "Your firstname must consist of at least 5 characters"
            },
            usermiddlename: {
                required: "Please enter a middlename",
                minlength: "Your middlename must consist of at least 5 characters",
                maxlength: "Your middlename must consist of at least 5 characters"
            },
            userlastname: {
                required: "Please enter a lastname",
                minlength: "Your lastname must consist of at least 5 characters",
                maxlength: "Your lastname must consist of at least 5 characters"
            },
            useremail: {
                required: "Please enter a email",
                email: "Please enter a valid email address"
            },
            userpass: {
                required: "Please enter a password",
                minlength: "Your password must be at least 5 characters long",
                maxlength: "Your password must be at least 5 characters long"
            },
            confirmuserpass: {
                required: "Please enter a password",
                minlength: "Your password must be at least 5 characters long",
                maxlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },           

        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/customers_exe_crud.php',
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
            url: "pages_exe/sys_user_dashboard/customers_exe_crud.php",
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
				//parse json data
                $("#update_username").val(cruddata.username);
                $("#update_userfirstname").val(cruddata.userfirstname);
                $("#update_usermiddlename").val(cruddata.usermiddlename);
                $("#update_userlastname").val(cruddata.userlastname);
                $("#update_useremail").val(cruddata.useremail);
                $("#update_userstatus").val(cruddata.userstatus);
                $("#update_userid").val(cruddata.userid);


                $("#update_section_btn").attr('name', 'update_btn');
                $("#update_section_btn").attr('data-id', cruddata.userid);
                $(".modal-title").text('Edit');
                $("#update_section_btn").text('Save Changes');
                $("#modal-id2").modal("show");
            }
        });
    });

    //Update Validation
    $("#section-form2").validate({
        rules: {
            update_username: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            update_userfirstname: {
                required: true,
            },
            update_usermiddlename: {
                required: true,
            },
            update_userlastname: {
                required: true,
            },
            update_useremail: {
                required: true,
                email: true
            },
            update_userstatus: {
                required: true,
            },
        },
        messages: {
            update_username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 5 characters",
                maxlength: "Your username must consist of at least 5 characters"
            },
            update_userfirstname: {
                required: "Please enter a firstname",
                minlength: "Your firstname must consist of at least 5 characters",
                maxlength: "Your firstname must consist of at least 5 characters"
            },
            update_usermiddlename: {
                required: "Please enter a middlename",
                minlength: "Your middlename must consist of at least 5 characters",
                maxlength: "Your middlename must consist of at least 5 characters"
            },
            update_userlastname: {
                required: "Please enter a lastname",
                minlength: "Your lastname must consist of at least 5 characters",
                maxlength: "Your lastname must consist of at least 5 characters"
            },
            update_useremail: {
                required: "Please enter a email",
                email: "Please enter a valid email address"
            },
            update_userstatus: {
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
            url: 'pages_exe/sys_user_dashboard/customers_exe_crud.php',
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
                url: "pages_exe/sys_user_dashboard/customers_exe_crud.php",
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
                url: "pages_exe/sys_user_dashboard/customers_exe_crud.php",
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
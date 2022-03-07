<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Pets</li>
</ol>

<h1>Pets</h1>


<button type="button" class="btn btn-success create-new">Add New</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="30%">Pet Code</th>
			<th width="15%">Pet Name</th>
			<th width="6%">Category</th>
			<th width="6%">Vaccine</th>
			<th width="15%">Birthday</th>
			<th width="6%">Gender</th>
			<th width="6%">Status</th>
            <th width="6%">Owner ID</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="3%">No</th>
			<th width="30%">Pet Code</th>
			<th width="15%">Pet Name</th>
			<th width="6%">Category</th>
			<th width="6%">Vaccine</th>
			<th width="15%">Birthday</th>
			<th width="6%">Gender</th>
			<th width="6%">Status</th>
            <th width="6%">Owner ID</th>
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
								<label for="">Pet Code</label>
								<input type="text" class="form-control" placeholder="pet_code" name="pet_code" id="pet_code"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Pet Name</label>
								<input type="text" class="form-control" placeholder="pet_name" name="pet_name" id="pet_name"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
                       
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Category</label>
								<select name="pet_category" id="pet_category" class="form-control">
									<option value="1">Cat</option>
                                    <option value="2">Dog</option>
									<option value="3">Lizard</option>
                                    <option value="4">Scorpion</option>
								</select>
							</div>
						</div> 

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">pet_vaccine</label>
								<select name="pet_vaccine" id="pet_vaccine" class="form-control">
									<option value="1">1st vaccine done</option>
                                    <option value="2">2nd vaccine done</option>
									<option value="3">3rd vaccine done</option>
                                    <option value="4">4th vaccine done</option>
                                    <option value="5">fully vaccinated</option>
								</select>
							</div>
						</div>             
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Birthday</label>
								<input type="date" class="form-control" placeholder="birthday" name="pet_birthday" id="pet_birthday"/>
							</div>
						</div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Gender</label>
								<select name="pet_gender" id="pet_gender" class="form-control">
									<option value="1">Male</option>
                                    <option value="2">Female</option>
								</select>
							</div>
						</div> 
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Status</label>
								<select name="pet_status" id="pet_status" class="form-control">
									<option value="1">Puppy</option>
                                    <option value="2">Adult</option>
								</select>
							</div>
						</div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">OWNER</label>
								<input type="text" class="form-control" placeholder="ownername" name="username" id="username"/>
							</div>
						</div>  
				    </div>
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="pet_id" id="pet_id" value="pet_id" />
								<span id="check-e"></span>
							</div>
						</div>
                        <div class="modal-footer">
				            	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				            	<button type="submit" class="btn btn-primary" name="section_btn" id="section_btn">Save changes</button>
				        </div>
				    </div>
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
            url: "pages_exe/sys_admin/pets_exe_dt.php",
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

        $("#pet_code").val('');
        $("#pet_name").val('');
        $("#pet_category").val($("#pet_category option:first").val());
        $("#pet_vaccine").val('');
        $("#pet_Birthday").val('');
        $("#pet_gender").val('');
        $("#pet_status").val('');
        $("#userid").val($("#userid option:first").val());
       

        theform.resetForm();

        $("#modal-id").modal("show");
    });

    //Adding Validation
    $("#section-form").validate({
        rules: {
            pet_code: {
                required: true
            },
            pet_name: {
                required: true,
            },
            pet_category: {
                required: true
            },
            pet_vaccine: {
                required: false
            },
            pet_Birthday: {
                required: false
            },
            pet_gender: {
                required: false
            },
            pet_status: {
                required: false
            },
            userid: {
                required: true
            },
        },
        messages: {
            pet_name: {
                required: "Please enter petname name"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_admin/pets_exe_crud.php',
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
            url: 'pages_exe/sys_admin/pets_exe_crud.php',
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                console.log(data);
                var cruddata = JSON.parse(data);
                $("#pet_id").val(cruddata.id);
                $("#pet_code").val(cruddata.pet_code);
                $("#pet_name").val(cruddata.pet_name);
                $("#pet_category").val(cruddata.pet_category);
                $("#pet_pet_vaccine").val(cruddata.pet_vaccine);
                $("#pet_Birthday").val(cruddata.pet_Birthday);
                $("#pet_gender").val(cruddata.pet_gender);
                $("#pet_status").val(cruddata.pet_status);
                $("#userid").val(cruddata.userid);
            
                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.id);
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
                url: 'pages_exe/sys_admin/pets_exe_crud.php',
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
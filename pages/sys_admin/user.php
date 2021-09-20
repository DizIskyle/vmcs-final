<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Flexo Cylinder</li>
</ol>

<label for="selectversion">Version:</label>
<select name="selectversion" id="selectversion" class="form-control" style="width:200px" >
    <option value="version1" selected>Version 1</option>
    <option value="version2">Version 2</option>
</select>

<h1>Flexo Cylinder</h1>

<button type="button" class="btn btn-success create-new">Add New</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="30%">Machine</th>
			<th width="15%">Color</th>
			<th width="6%">Width (inch)</th>
			<th width="6%">Width (mm)</th>
			<th width="15%">Type</th>
			<th width="6%">Spec</th>
			<th width="6%">Qty</th>
			<th width="6%">Plate</th>
			<th width="6%">Double Sided Tape</th>
			<th width="6%">Destrotion</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
		<th width="3%">No</th>
			<th width="30%">Machine</th>
			<th width="15%">Color</th>
			<th width="6%">Width (inch)</th>
			<th width="6%">Width (mm)</th>
			<th width="15%">Type</th>
			<th width="6%">Spec</th>
			<th width="6%">Qty</th>
			<th width="6%">Plate</th>
			<th width="6%">Double Sided Tape</th>
			<th width="6%">Destrotion</th>
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
								<label for="">Machine</label>
								<input type="text" class="form-control" placeholder="Machine" name="machine" id="machine"/>
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Color</label>
								<input type="text" class="form-control" placeholder="Color" name="color" id="color"/>
							</div>
						</div>                
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Type</label>
								<select name="cylindertype" id="cylindertype" class="form-control">
									<option value="Anilox">Anilox</option>
									<option value="Anilox Glue">Anilox Glue</option>
									<option value="Cut Cylinder Without Heat Seal">Cut Cylinder Without Heat Seal</option>
									<option value="Cut Cylinder With Heat Seal">Cut Cylinder With Heat Seal</option>
									<option value="Cut Cylinder Without Gear">Cut Cylinder Without Gear</option>
									<option value="Forming Plate">Forming Plate</option>
									<option value="Forming Plate Down Only">Forming Plate Down Only</option>
									<option value="Forming Plate Up Only">Forming Plate Up Only</option>
									<option value="Gear Only">Gear Only</option>
									<option value="Magnetic Cylinder">Magnetic Cylinder</option>
									<option value="Plate Cylinder">Plate Cylinder</option>
									<option value="Rubber for Coating">Rubber for Coating</option>
									<option value="Rubber Roller">Rubber Roller</option>
									<option value="Tint Rubber">Tint Rubber</option>
									<option value="Wax Applicator">Wax Applicator</option>
								</select>
							</div>
						</div>       
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Width (inch)</label>
								<input type="text" class="form-control" placeholder="Width (inch)" name="widthinch" id="widthinch"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Width (mm)</label>
								<input type="text" class="form-control" placeholder="Width (mm)" name="widthmm" id="widthmm"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Specification</label>
								<input type="text" class="form-control" placeholder="Specification" name="spec" id="spec"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Quantity</label>
								<input type="text" class="form-control" placeholder="Quantity" name="qty" id="qty"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Plate</label>
								<input type="text" class="form-control" placeholder="Plate" name="plate" id="plate"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Double Sided Tape</label>
								<input type="text" class="form-control" placeholder="Double Sided Tape" name="dstape" id="dstape"/>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="">Distortion</label>
								<input type="text" class="form-control" placeholder="Distortion" name="distortion" id="distortion"/>
							</div>
						</div>	
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="machid" id="machid" value="" />
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
    //Versions
    $('#selectversion').change(function(){
        if($(this).val() == 'version1'){ // or this.value == 'volvo'
            window.location.href = "index.php?page=flexocylinder";
        }else if ($(this).val() == 'version2') {
            window.location.href = "index.php?page=flexocylinder_v2";
        } else {
            window.location.href = "index.php?page=flexocylinder";
        }
    });

    //Reading
    var dataTable = $('#example').DataTable({
        
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_admin/users_exe_dt.php",
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

        $("#machine").val('');
        $("#color").val('');
        $("#widthinch").val('');
        $("#widthmm").val('');
        $("#cylindertype").val($("#cylindertype option:first").val());
        $("#spec").val('');
        $("#qty").val('');
        $("#plate").val('');
        $("#dstape").val('');
        $("#distortion").val('');
        $("#machid").val('');

        theform.resetForm();

        $("#modal-id").modal("show");
    });

    //Adding Validation
    $("#section-form").validate({
        rules: {
            machine: {
                required: true
            },
            color: {
                required: true
            },
            widthinch: {
                required: true,
                number: true
            },
            widthmm: {
                required: true,
                number: true
            },
            spec: {
                required: true
            },
            qty: {
                required: true,
                number: true
            },
            plate: {
                required: true,
                number: true
            },
			dstape: {
                required: true
            },
			distortion: {
                required: true
            },
        },
        messages: {
            machine: {
                required: "Please enter machine name"
            },
            color: {
                required: "Please enter machine color"
            },
            qty: {
                required: "Please enter quantity used in this machine"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#section-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_admin/user_exe_crud.php',
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
            url: 'pages_exe/sys_admin/user_exe_crud.php',
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                //console.log(data);
                var cruddata = JSON.parse(data);
                $("#machid").val(cruddata.machid);
                $("#machine").val(cruddata.machine);
                $("#color").val(cruddata.color);
                $("#widthinch").val(cruddata.widthinch);
                $("#widthmm").val(cruddata.widthmm);
                $("#cylindertype").val(cruddata.cylindertype);
                $("#spec").val(cruddata.spec);
                $("#qty").val(cruddata.qty);
                $("#plate").val(cruddata.plate);
                $("#dstape").val(cruddata.dstape);
                $("#distortion").val(cruddata.distortion);

                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.machid);
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
                url: 'pages_exe/sys_admin/user_exe_crud.php',
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
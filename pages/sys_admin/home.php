<br>
 
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Dashboard</li>
</ol>
<h1>Dashboard</h1>


<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		        <div class="panel panel-loulou">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <i class="fa fa-address-book-o fa-5x"></i> 
		                    </div>
		                    <div class="col-xs-9 text-right">
		                        <div class>
					<?php
						$query =" SELECT * FROM users
						/*WHERE qty != 'disable'*/
						ORDER BY userid DESC;";
						$query_run=mysqli_query($db,$query);

						$row = mysqli_num_rows($query_run);

						echo '<h1> ' .$row. '</h1>';

					?>
					</div>
		                        <div>User</div>
		                    </div>
		                </div>
		            </div>

				
		            <a href="index.php?page=flexocylinder">
		                <div class="panel-footer">
		                    <span class="pull-left">View Details</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
		    
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
		        <div class="panel panel-group1green">
		            <div class="panel-heading" id="dash_foldericon">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <i class="fa fa-folder-o fa-5x"></i>
		                    </div>
		                    <div class="col-xs-9 text-right">
		                        <div class="huge">
					
					<?php
						$query =" SELECT * FROM pets
						/*WHERE qty != 'disable'*/
						ORDER BY pet_id DESC;";
						$query_run=mysqli_query($db,$query);

						$row = mysqli_num_rows($query_run);

						echo '<h1> ' .$row. '</h1>';

					?>


								</div>
		                        <div>Pets</div>
		                    </div>
		                </div>
		            </div>
		            <a href="dashboard.php?page=vitamins">
		                <div class="panel-footer">
		                    <span class="pull-left">View Details</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
        
		    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		        <div class="panel panel-green-vogue">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <i class="fa fa-calendar fa-5x"></i>
		                    </div>
		                    <div class="col-xs-9 text-right">
		                        <div class="huge">
					<?php
						$query =" SELECT * FROM schedules
						/*WHERE qty != 'disable'*/
						ORDER BY sched_status DESC;";
						$query_run=mysqli_query($db,$query);

						$row = mysqli_num_rows($query_run);

						echo '<h1> ' .$row. '</h1>';

					?>

								</div>
		                        <div>Appointment</div>
		                    </div>
		                </div>
		            </div>
		            <a href="index.php?page=export">
		                <div class="panel-footer">
		                    <span class="pull-left">View Details</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		        <div class="panel panel-verdun-green gear-third">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <i class="fa fa-gear fa-5x"></i>
		                    </div>
		                    <div class="col-xs-9 text-right">
		                        <div class="huge">&#8734;</div>
		                        <div>Settings</div>
		                    </div>
		                </div>
		            </div>
		            <a href="index.php?page=settings">
		                <div class="panel-footer">
		                    <span class="pull-left">View Details</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
<div style="height:73vh" >




</div>
<script>
$('.gear-third').hover(function() {
    $('.gear-third .fa-gear').addClass('fa-spin');
}, function() {
    $('.gear-third .fa-gear').removeClass('fa-spin');
});
$('#dash_foldericon').hover(function() {
                $(this).find('i').toggleClass('fa-folder fa-folder-open-o')
            });
</script>




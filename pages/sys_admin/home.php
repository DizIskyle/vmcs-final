<br>
 
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Dashboard</li>
</ol>
<h1>Dashboard</h1>


<div class="col-lg-4 col-md-7 col-sm-7 col-xs-16">
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

				
		            <a href="admin.php?page=customers">
		                <div class="panel-footer">
		                    <span class="pull-left">View Details</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
		    
            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-16" >
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
        
		    <div class="col-lg-4 col-md-7 col-sm-7 col-xs-16">
		        <div class="panel panel-green-vogue">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <i class="fa fa-calendar fa-5x"></i>
		                    </div>
		                    <div class="col-xs-9 text-right">
		                        <div class="huge">
					<?php
						$query =" SELECT * FROM appointment
						/*WHERE qty != 'disable'*/
						ORDER BY appointment_status DESC;";
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

			<br><br>
		    </div>
        <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
		    </div> --><br><br>
			<h1 style="text-align:center">Analytics Report</h1>		
<div style="height:73vh">

<div class="col-lg-5 col-md-7 col-sm-7 col-xs-16">
<?php

         $sql ="SELECT user_category.usercategory,(SELECT COUNT(*) FROM users WHERE usercategory = user_category.user_id)
		 AS COUNT FROM user_category WHERE 1 GROUP BY user_category.user_id";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $usercategory[]  = $row['usercategory']  ;
            $user_id[] = $row['COUNT'];
		 }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:60%;height:40%;text-align:center">
            <h2 class="page-header" ></h2>
            <div>USERS </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($usercategory); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($user_id); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>
			</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-16">
<?php

         $sql ="SELECT pet_category.petcat_name,(SELECT COUNT(*) FROM pets WHERE pet_catid = pet_category.petcat_name)
		 AS COUNT FROM pet_category WHERE 1 GROUP BY pet_category.pet_catid";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $petcat_name[]  = $row['petcat_name']  ;
            $pet_catid[] = $row['COUNT'];
		 }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:60%;height:40%;text-align:center">
            <h2 class="page-header" > </h2>
            <div>PETS </div>
            <canvas  id="chartjs_b"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_b").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($petcat_name); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($pet_catid); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>


<div class="col-lg-6 col-md-7 col-sm-7 col-xs-16">
<?php

         $sql ="SELECT appointment_status, COUNT(appointment_status) AS COUNT FROM appointment GROUP BY appointment_status";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $appointment_status[]  = $row['appointment_status']  ;
            $appointment[] = $row['COUNT'];
		 }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
	<div style="width:100%;height:40%;text-align:center">
	<h2 class="page-header" > </h2>
            <div>Schedule </div>
            <canvas  id="chartjs_bar1"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($appointment_status); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($appointment); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>



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




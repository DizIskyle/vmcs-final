<br>
<ol class="breadcrumb">
  <li><a href="admin.php">Home</a></li>
  <li>Purchase</li>
</ol>

<h1>Reports</h1>
<br>

<div class="col-lg-6 col-md-7 col-sm-7 col-xs-16">
<?php

         $sql ="SELECT stock_name, stock_quantity From stocks WHERE stock_catid='Pet Accessories'";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $jasper[]  = $row['stock_name']  ;
            $accessories[] = $row['stock_quantity'];
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
	
            <h2 class="page-header" > </h2>
            <div>Pet Accessories</div>
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
                        labels:<?php echo json_encode($jasper); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#000000",
								"#800000",
								"#ff0000",
								"#800080",
								"#ff00ff",
								"#a52a2a",
								"#dc143c",
								"#00ffff",

                            ],
                            data:<?php echo json_encode($accessories); ?>,
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

         $sql ="SELECT stock_name, stock_quantity From stocks WHERE stock_catid='Medicine' ORDER BY stock_name";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $med[]  = $row['stock_name']  ;
            $ok[] = $row['stock_quantity'];
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
	
            <h2 class="page-header" > </h2>
            <div>Medicine</div>
            <canvas  id="chartjs_bar2"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($med); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#000000",
								"#800000",
								"#ff0000",
								"#800080",
								"#ff00ff",
								"#a52a2a",
								"#dc143c",
								"#00ffff",

                            ],
                            data:<?php echo json_encode($ok); ?>,
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

         $sql ="SELECT stock_name, stock_quantity From stocks WHERE stock_catid='vitamins'";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $name[]  = $row['stock_name']  ;
            $stock[] = $row['stock_quantity'];
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
	
            <h2 class="page-header" > </h2>
            <div>Vitamins</div>
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
                        labels:<?php echo json_encode($name); ?>,
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
                            data:<?php echo json_encode($stock); ?>,
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

<div class="col-lg-6 col-md-7 col-sm-7 col-xs-16">
<?php

         $sql ="SELECT stock_name, stock_quantity From stocks WHERE stock_catid='Pet Vaccine'";
         $result = mysqli_query($db,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $stock_name[]  = $row['stock_name']  ;
            $stock_quantity[] = $row['stock_quantity'];
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
	
            <h2 class="page-header" > </h2>
            <div>Pet Vaccine</div>
            <canvas  id="chartjs_bard"></canvas> 
        </div>    
    </body>

<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bard").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($stock_name); ?>,
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
                            data:<?php echo json_encode($stock_quantity); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'tahoma',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>



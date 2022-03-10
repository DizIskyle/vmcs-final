<!-- <div class="col-lg-6 col-md-7 col-sm-7 col-xs-16">
<?php

        //  $sql ="SELECT stock_name, stock_quantity From stocks WHERE stock_catid='Pet Vaccine'";
        //  $result = mysqli_query($db,$sql);
        //  $chart_data="";
        //  while ($row = mysqli_fetch_array($result)) { 
 
        //     $stock_name[]  = $row['stock_name']  ;
        //     $stock_quantity[] = $row['stock_quantity'];
		//  }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:60%;hieght:20%;text-align:center">
            <h2 class="page-header" > </h2>
            <div>Vitamins</div>
            <canvas  id="chartjs_barp"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_barp").getContext('2d');
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
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html> -->

<?php

include 'config/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getenv('SYS_NAME') ?> v<?php echo getenv('SYS_VERSION') ?> | <?php echo $title; ?></title> 
    <meta name="description" content="">
    <meta name="keywords" content=""> 
    <meta name="author" content=""> 
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="72x72" href="dist/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="dist/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="dist/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="dist/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="dist/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="dist/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="dist/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="dist/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon/favicon-16x16.png">
    <!--<link rel="manifest" href="dist/img/favicon/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="dist/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--/////////////////////////////////////////////////////////////////////
                                SYSTEM STYLES
    /////////////////////////////////////////////////////////////////////-->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">    
    <!--Eonasdan DateTimepicker-->
    <link rel="stylesheet" type="text/css" href="node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <!-- SilvioMoreto Bootstrap Select-->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-select/dist/css/bootstrap-select.min.css"> 
    <!--||||||||| Datatables Start Here |||||||||-->
    <!--Datatables Base-->
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!--Datatable Responsive-->
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!--Datatable RowReorder-->    
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-rowreorder-bs/css/rowReorder.bootstrap.min.css">
    <!--Datatable FixHeader-->    
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css">
    <!--||||||||| Datatables Ends Here |||||||||-->
    <!--Font-Awesome 4.7.0-->
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- MetisMenu -->
    <link href="node_modules/metismenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- 
        Custom Style
    -->
    <link rel="stylesheet" type="text/css" href="dist/css/system.min.css">


    <!--/////////////////////////////////////////////////////////////////////
                                SYSTEM SCRIPTS
    /////////////////////////////////////////////////////////////////////-->
    <!-- JQuery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- PDFJs -->
    <script type="text/javascript" src="node_modules/pdfjs-dist/build/pdf.min.js"></script>
    <!--MomentJS-->
    <script type="text/javascript" src="node_modules/moment/min/moment-with-locales.min.js"></script>
    <!--Eonasdan DateTimepicker-->
    <script type="text/javascript" src="node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>    
    <!-- SilvioMoreto Bootstrap Select-->
    <script type="text/javascript" src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>     

    <!--||||||||| Datatables Ends Here |||||||||-->
    <!--JQuery Form Validator-->
    <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- MetisMenu -->
    <script src="node_modules/metismenu/dist/metisMenu.min.js"></script>
    <!-- 
        Custom Scripts
    -->    
    <script type="text/javascript" src="dist/js/system.min.js"></script>
</head>
<body data-spy="scroll" data-target="#vmcs_navigation">
    <div id="wrapper">

        <!-- Navigation --> 
        <?php 
        include 'navigation.php';
        ?>
 
        <!-- Page Content --><!-- 
        <div id="page-wrapper"> -->
            <div class="container-fluid">
                <?php require_once $content;?>
                <!-- Footer -->
                <?php 
                    include 'footer.php';
                ?>
                <!-- /#Footer -->
            </div>
            <!-- /.container-fluid -->

            
        <!-- </div> -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
</body>
 
</html>
<script type="text/javascript">
    function logout(id) {       
        $.ajax({
            type : 'POST',
            url  : 'pages_exe/login_exe.php',
            data : {
                logout:id
            },
            success : function(data,status){
                window.location.href = "index.php";
            }
        });
    }
    
</script>
<style>
    body {
        background: #F8F7F4;
        background: url('src/img/fixtures/login_background/20211119_173327_0003.PNG') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
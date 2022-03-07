<!DOCTYPE html>
<html> 
 
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getenv('SYS_NAME') ?> | Log In</title> 
    <meta name="description" content="">
    <meta name="keywords" content=""> 
    <meta name="author" content="Carl Angelo Nievarez"> 
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
                                ACE STYLES
    /////////////////////////////////////////////////////////////////////-->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">    
    <!--Font-Awesome 4.7.0-->
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!--Font-Awesome 4.7.0-->
    <link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <!--/////////////////////////////////////////////////////////////////////
                                ACE SCRIPTS
    /////////////////////////////////////////////////////////////////////-->
    <!-- JQuery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--JQuery Form Validator-->
    <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <!--Sweet Alert 2-->
    <script type="text/javascript" src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>

<body>  
    <div class="container" style="margin-top: 80px;"> 
        <?php require_once $content;?>
    </div>
</body>

</html>

<style type="text/css"> 
    body {
        background: #F8F7F4;
        background: url('src/img/fixtures/login_background/login_8.PNG') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .pallet{
        border: none;
        box-shadow: none;
        padding: 50px !important;
        background: #FCFBFA !important;
        /*background-color: #f1f0eb !important;*/
        border-radius: 8px 8px 8px 8px;
    }
    svg {
        width: 252;
        height: 312px;
    }
    .margin-top-30px {
        margin-top: 30px;
    }
    .forgots {
        color: black;
    }
    .forgots:hover {
        color: black;
        text-decoration: none;
    }
    .logininfo{
        color: #043673;
    }
    .logininfo:hover{
        color: #043673;
        text-decoration: none;
    }
</style>
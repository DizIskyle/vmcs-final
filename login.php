<!--
    Project Title: My Project Name
    Code Name: ProjectCode
    Code Color: 
    Code Hex: 
    Description:
    Start:
    Developer: Carl Angelo Nievarez
        > Github: https://github.com/aice09
        > Email: carlangelopamparonievarez@gmail.com
        > FB: https://facebook.com/aice0927
-->
<?php
    include 'environment.php';
    include 'config/database.php';

    if (getenv('SYS_LOGIN')!="enable") { 

?>        
        <script type="text/javascript">
            window.location="index.php";
        </script>
<?php 
    } else {
        if (isset($_SESSION['system_logged_in'])==true) { 
?>        
            <script type="text/javascript">
                window.location="index.php";
            </script>
<?php 
        }
    } 
?>
<!DOCTYPE html>
<html> 
 
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getenv('SYS_NAME') ?> | Login</title> 
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
</head>

<body>  
    <div class="container" style="margin-top: 80px;"> 
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4  col-xs-offset-1 col-sm-offset-1 col-md-offset-4 pallet">
                <form class="form-login" method="POST" id="login-form">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >
                        <p style="font-size: 23px;margin-bottom: 0px; padding-bottom: 0px; line-height: 25px;"><?php echo  getenv('SYS_NAME')?></p>
                        <p style="padding-top: 0px; margin-top: 0px;">Sign in to get started.</p>
                        <br> 
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="error"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="user_employeeid" id="user_employeeid" />
                            <span id="check-e"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="user_password" id="user_password" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="login_button" id="login_button"> Sign In</button>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="index.php?=forgotpass" class="forgots">Forgot your password?</a><br>
                        <a href="index.php?=forgotid" class="forgots">Forgot your user ID?</a><br>
                        <a href="index.php?=register" class="forgots"><b><u>CREATE ACCOUNT</u></b></a>
                    </div> 
                </form>
        </div>
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4  col-xs-offset-1 col-sm-offset-1 col-md-offset-4" style="margin-top: 15px;">
                <p style="font-size: 9px; color: white;">*Our website supports the latest browser versions to ensure your privacy and security. To ensure access and for best viewing experience, please upgrade to the latest versions of Mozilla Firefox, Google Chrome, Safari or Internet Explorer as soon as possible</p>
                <p style="font-size: 9px; color: white;">*Detailed instructions can be found <a href="index.php?page=instructions" class="logininfo"><b>here</b></a>.</p>
            </div>
        </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////////
                                ACE SCRIPTS
    /////////////////////////////////////////////////////////////////////-->
    <!-- JQuery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--JQuery Form Validator-->
    <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
</body>

</html>
    
<style type="text/css"> 
    body {
        background: #F8F7F4;
        background: url('src/img/fixtures/login_background/login_img7.png') no-repeat center center fixed;
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
<script type="text/javascript">
    $('document').ready(function() { 
        /* handling form validation */
        $("#login-form").validate({
            rules: {
                user_password: {
                    required: true,
                },
                user_employeeid: {
                    required: true,
                    email: false
                },  
            },
            messages: { 
                user_password:{
                  required: "Please enter your password"
                 },
                user_employeeid: "Please enter your ID",
            },
            submitHandler: loginsubmitForm   
        });    
        /* Handling login functionality */
        function loginsubmitForm() {     
            var data = $("#login-form").serialize();                
            $.ajax({                
                type : 'POST', 
                url  : 'pages_exe/login_exe.php',
                data : data,
                beforeSend: function(){ 
                    $("#error").fadeOut();
                    $("#login_button").html('Sending...');
                },
                success : function(data,status){
                    var module1 = JSON.parse(data);
                    if (data!=999) {
                        $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Signing In ...');
                        setTimeout(' window.location.href = "index.php"; ',1000);
                    } else {
                        $("#error").fadeIn(1000, function(){                        
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email or password does not exist. Or email not yet verified!</div>');
                            $("#login_button").html('Sign In');
                        });
                    }
                }
            });
            return false;
        }   
    });
</script>
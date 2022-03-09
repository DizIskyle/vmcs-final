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

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
    case 'register' :
        $title="Register";  
        $content='pages/authentication/register.php';        
        break;
    
    case 'forgot' :
        $title="Forgot Password";  
        $content='pages/authentication/forgotpassword.php';        
        break;

    case 'resetpass' :
        $title="Reset Password";  
        $content='pages/authentication/resetpassword.php';        
        break;
    
    case 'verifyemail' :
        $title="Verify Email";  
        $content='pages/authentication/verifyemail.php';        
        break;

    default :
        $title="Home";  
        $content ='pages/authentication/home.php';     
}

require_once 'template/authentication/body.php';
?>

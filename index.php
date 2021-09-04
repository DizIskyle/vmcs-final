<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Register
    case 'register' :
        $title="Register";  
        $content='pages/sys_user/register.php';        
        break;
    
    default :
        $title="Home";  
        $content ='pages/sys_user/home.php';     
}

require_once 'template/sys_user/body.php';
?>
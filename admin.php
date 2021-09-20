<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Sales
    case 'users' :
        $title="Users";  
        $content='pages/sys_admin/user.php';        
        break;

    default :
        $title="Home";  
        $content ='pages/home.php';     
}

require_once 'template/sys_admin/body.php';
?>
<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Register
case 'services' :
        $title="services";  
        $content='pages/sys_user/services.php';        
        break;

    case 'profile' :
        $title="Profile";  
        $content='pages/sys_user_dashboard/profile.php';        
        break;

    case 'vitamins' :
        $title="Vitamins";  
        $content='pages/sys_user_dashboard/vitamins.php';        
        break;
    case 'pets' :
            $title="Pets";  
            $content='pages/sys_user_dashboard/pets.php';        
            break;
    case 'users' :
                $title="Users";  
                $content='pages/sys_user_dashboard/users.php';        
                break;
    default :
        $title="Home";  
        $content ='pages/sys_user_dashboard/home.php';     
}

require_once 'template/sys_user_dashboard/body.php';
?>
<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	
    case 'gallery' :
        $title="Gallery";  
        $content='pages/sys_user/gallery.php';        
        break;

    case 'about' :
        $title="About";  
        $content='pages/sys_user/about.php';        
        break;

    case 'contacts' :
        $title="Contacts";  
        $content='pages/sys_user/contacts.php';        
        break;

    case 'services' :
        $title="Services";  
        $content='pages/sys_user/services.php';        
        break;

    default :
        $title="Home";  
        $content ='pages/sys_user/home.php';     
}


require_once 'template/sys_user/body.php';
?>
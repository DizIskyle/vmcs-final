<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Register
    case 'profile' :
        $title="Profile";  
        $content='pages/sys_user_dashboard/profile.php';        
        break;

    case 'vitamins' :
        $title="Vitamins";  
        $content='pages/sys_user_dashboard/vitamins.php';        
        break;
    
        case 'veterinarians' :
            $title="Veterinarians";  
            $content='pages/sys_user_dashboard/vets.php';        
            break;

        case 'customers' :
            $title="Customers";  
            $content='pages/sys_user_dashboard/customers.php';        
            break;

        case 'admin' :
            $title="Administrator";  
            $content='pages/sys_user_dashboard/admin.php';        
            break;

        case 'schedule' :
            $title="Schedule";  
            $content='pages/sys_user_dashboard/schedule.php';        
            break;
        case 'appointment' :
            $title="Schedule";  
            $content='pages/sys_user_dashboard/appointment.php';        
            break;

    case 'pets' :
            $title="Pets";  
            $content='pages/sys_user_dashboard/pets.php';        
            break;

    case 'pets-category' :
            $title="Pets Category";
            $content='pages/sys_user_dashboard/petscategory.php';        
            break;
            case 'breeding' :
                $title="Breeding";
                $content='pages/sys_user_dashboard/breeding.php';        
                break;

                case 'stocks' :
                    $title="Stocks";
                    $content='pages/sys_user_dashboard/stocks.php';        
                    break;
    default :
        $title="Home";  
        $content ='pages/sys_user_dashboard/home.php';     
}

require_once 'template/sys_user_dashboard/body.php';
?>
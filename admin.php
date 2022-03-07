<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Sales
    case 'users' :
        $title="Users";  
        $content='pages/sys_admin/user.php';        
        break;
    case 'pets' :
        $title="Pets";  
        $content='pages/sys_admin/pets.php';        
        break;
    case 'manage_appointment' :
        $title="manage_appointment";  
        $content='pages/sys_admin/manage_appointment.php';        
        break; 
    case 'pets-category' :
        $title="Pet Category";  
        $content='pages/sys_admin/petscategory.php';        
        break; 
    case 'calendar' :
        $title="calendar";  
        $content='pages/sys_admin/calendar.php';        
        break;

        case 'veterinarians' :
            $title="Veterinarians";  
            $content='pages/sys_admin/vets.php';        
            break;

        case 'customers' :
            $title="Customers";  
            $content='pages/sys_admin/customers.php';        
            break;

            case 'videocall' :
                $title="videocall";  
                $content='pages/sys_admin/videocall.php';        
                break;

        case 'admin' :
            $title="Administrator";  
            $content='pages/sys_admin/admin.php';        
            break;

        case 'schedule' :
            $title="Schedule";  
            $content='pages/sys_admin/schedule.php';        
            break;

        case 'inventory' :
            $title="Inventory";  
            $content='pages/sys_admin/inventory.php';        
            break;

    case 'purchase' :
        $title="Purchase";  
        $content='pages/sys_admin/purchase.php';        
        break;

    case 'sale' :
        $title="Sale";  
        $content='pages/sys_admin/sale.php';        
        break;

    case 'search' :
        $title="Search";  
        $content='pages/sys_admin/search.php';        
        break;

    case 'report' :
        $title="Report";  
        $content='pages/sys_admin/report.php';        
        break;

    case 'appointment' :
        $title="Appointment";  
        $content='pages/sys_admin/appointment.php';        
        break;

    case 'pets' :
            $title="Pets";  
            $content='pages/sys_admin/pets.php';        
            break;

    case 'pets-category' :
            $title="Pets Category";
            $content='pages/sys_admin/petscategory.php';        
            break;
            case 'breeding' :
                $title="Breeding";
                $content='pages/sys_admin/breeding.php';        
                break;
                case 'stocks' :
                    $title="Stocks";
                    $content='pages/sys_admin/stocks.php';        
                    break;

                    case 'stocks-category' :
                        $title="Stocks Category";
                        $content='pages/sys_admin/stockscategory.php';        
                        break;
    

    default :
    $title="Home";  
    $content ='pages/sys_admin/home.php';     
}

require_once 'template/sys_admin/body.php';
?>
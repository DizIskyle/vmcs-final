<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//Sales
    case 'jobs' :
        $title="Jobs";  
        $content='pages/jobs.php';        
        break;
    
    case 'jobs-details' :
        $title="Jobs";  
        $content='pages/jobs_details.php';        
        break;

    //Coordinator
    case 'coordinator-toassign' :
        $title="To Assign";  
        $content='pages/coordinator_toassign.php';        
        break;

    case 'coordinator-review' :
        $title="To Review";  
        $content='pages/coordinator_review.php';        
        break;
    
    case 'coordinator-done' :
        $title="Done";  
        $content='pages/coordinator_done.php';        
        break;

    //Prepress
    case 'ppress-todo' :
        $title="To Do";  
        $content='pages/ppress_todo.php';        
        break;

    case 'ppress-done' :
        $title="Done";  
        $content='pages/ppress_done.php';        
        break;
    
    default :
        $title="Home";  
        $content ='pages/home.php';     
}

require_once 'template/body.php';
?>
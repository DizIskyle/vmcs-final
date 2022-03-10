<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
	$petcat_name = $_POST["petcat_name"];
	$petcat_processdate = $currentdate;
	$petcat_processby = $_SESSION['system_username'];
	$petcat_status = $_POST["petcat_status"];


    //Insert Data
    $query = "INSERT INTO pet_category (petcat_name, petcat_processdate, petcat_processby, petcat_status) VALUES ('$petcat_name', '$petcat_processdate', '$petcat_processby', '$petcat_status')";

		$response = array();
	if (!$result = mysqli_query($db,$query)) {
        $response=mysqli_error($db);
    } else {
        $response = 'ok';
    }
    echo json_encode($response);	
}

//Read Selected Job Ticket
if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    
    $query = "SELECT * FROM pet_category
    WHERE pet_catid = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    echo json_encode($response);
}

//Update
if (isset($_POST['update_btn'])) {
    $id=$_POST['pet_catid'];
    $petcat_name = $_POST["petcat_name"];
    $petcat_processdate = $currentdate;
    $petcat_processby = $_SESSION['system_username'];
    $petcat_status = $_POST["petcat_status"];

    $query = "UPDATE pet_category SET petcat_name = '$petcat_name', petcat_processdate = '$petcat_processdate', petcat_processby = '$petcat_processby', petcat_status = '$petcat_status' WHERE pet_catid = '$id'";

	if (!$result1 = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete

//Permanently Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM pet_category WHERE pet_catid = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
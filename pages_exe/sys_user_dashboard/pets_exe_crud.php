<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
	$pet_code =  "P-".rand(0001,9999);
	$pet_catid = $_POST["pet_catid"];
	$pet_name = $_POST["pet_name"];
	$pet_adopted = $_POST["pet_adopted"];
	$pet_adoptedfrom = $_POST["pet_adoptedfrom"];
	$pet_rescuedfrom = $_POST["pet_rescuedfrom"];
	$pet_processdate = $currentdate;
	$pet_processby = $_SESSION['system_userlastname'];
	$pet_status = $_POST["pet_status"];


    //Insert Data
    $query = "INSERT INTO pets (pet_code, pet_catid, pet_name, pet_adopted, pet_adoptedfrom, pet_rescuedfrom, pet_processdate, pet_processby, pet_status) VALUES ('$pet_code', '$pet_catid', '$pet_name', '$pet_adopted', '$pet_adoptedfrom', '$pet_rescuedfrom', '$pet_processdate', '$pet_processby', '$pet_status')";
  
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
    
    $query = "SELECT * FROM pets
    WHERE pet_id = '$id'";
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
    $id=$_POST['pet_id'];
    $pet_code =  "P-".rand(0001-9999);
    $pet_catid = $_POST["pet_catid"];
    $pet_name = $_POST["pet_name"];
    $pet_adopted = $_POST["pet_adopted"];
    $pet_adoptedfrom = $_POST["pet_adoptedfrom"];
    $pet_rescuedfrom = $_POST["pet_rescuedfrom"];
    $pet_processdate = $currentdate;
    $pet_processby = $_SESSION['system_userlastname'];
    $pet_status = $_POST["pet_status"];

    $query = "UPDATE pets SET pet_code = '$pet_code', pet_catid = '$pet_catid', pet_name = '$pet_name', pet_adopted = '$pet_adopted', pet_adoptedfrom = '$pet_adoptedfrom', pet_rescuedfrom = '$pet_rescuedfrom', pet_processdate = '$pet_processdate', pet_processby = '$pet_processby', pet_status = '$pet_status' WHERE pet_id = '$id'";

	if (!$result1 = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete

//Permanently Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM pets WHERE pet_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
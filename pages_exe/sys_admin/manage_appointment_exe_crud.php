<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
	$userid = $_POST["userid"];
	$date_sched = $_POST["date_sched"];
    $pet_id = $_POST["pet_id"];
	$status = $_POST["status"];
    $date_created = $_POST["date_created"];
    $purpose = $_POST["purpose"];

    
	$query="INSERT INTO appointments(
            userid,
            date_sched,
            pet_id,
            status,
            date_created,
            purpose
			) 
			VALUES (
            '$userid',
            '$date_sched',
            '$pet_id',
            '$status',
            '$date_created',
            '$purpose'
			)"; 
		$response = array();
	if (!$result = mysqli_query($db,$query)) {
        //exit(mysqli_error());
        $response=999;
    } else {
    	$response = 'ok';
    }
    echo json_encode($response);	
}

if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    $query = "SELECT * FROM appointments
        WHERE appointmentid = '$id'";
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
    $appointmentid = $_POST["appointments"];
    $userid = $_POST["userid"];
	$date_sched = $_POST["date_sched"];
    $pet_id = $_POST["pet_id"];
	$status = $_POST["status"];
    $date_created = $_POST["date_created"];
    $purpose = $_POST["purpose"];
    

	$query = "  UPDATE appointments 
                SET 
                appointmentid = '$appointments',
                userid = '$userid',
	            date_sched = '$date_sched',
                pet_id = '$pet_id',
	            status = '$status',
                date_created = '$date_created',
                purpose = '$purpose'
                WHERE
                    appointmentid = '$appointmentid'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];

    $query = "DELETE FROM appointments WHERE appointmentid = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
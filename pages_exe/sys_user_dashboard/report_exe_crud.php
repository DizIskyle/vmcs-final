<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
    $appointment_customerid = $_SESSION['system_username'];
    $appointment_vetid = $_POST['appointment_vetid'];
    $appointment_schedid = $_POST['appointment_schedid'];
    $appointment_code= "AP".rand(1,999);
    $appointment_reason = $_POST['appointment_reason'];
    $appointment_time = $_POST['appointment_time'];
    $appointment_status = "Pending";
    $appointment_come = "";
    $appointment_createddate = $currentdate;

    //Insert Data
    $query = "INSERT INTO appointment (appointment_customerid, appointment_vetid, appointment_schedid, appointment_code, appointment_reason,appointment_time, appointment_status, appointment_come, appointment_createddate) VALUES ('$appointment_customerid', '$appointment_vetid', '$appointment_schedid', '$appointment_code', '$appointment_reason','$appointment_time', '$appointment_status', '$appointment_come', '$appointment_createddate')";
    
	$response = array();
	if (!$result = mysqli_query($db,$query)) {
        $response=mysqli_error($db);
    } else {
        $response['status'] = 'success';
        $response = 'ok';
    }
    echo json_encode($response);	
}

//Read Selected Job Ticket
if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    
    $query = "SELECT * FROM appointment
    WHERE appointment_id = '$id'";
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
    $id=$_POST['appointment_id'];
    $appointment_customerid = $_SESSION['system_username'];
    $appointment_vetid = $_POST['appointment_vetid'];
    $appointment_schedid = $_POST['appointment_schedid'];
    $appointment_code= "AP".rand(1,999);
    $appointment_reason = $_POST['appointment_reason'];
    $appointment_time = $_POST['appointment_time'];
    $appointment_status = "Pending";
    $appointment_come = "";
    $appointment_createddate = $currentdate;

    $query = "UPDATE appointment SET appointment_customerid = '$appointment_customerid', appointment_vetid = '$appointment_vetid', appointment_schedid = '$appointment_schedid', appointment_code = '$appointment_code', appointment_reason = '$appointment_reason', appointment_time = '$appointment_time', appointment_status = '$appointment_status', appointment_come = '$appointment_come', appointment_createddate = '$appointment_createddate' WHERE appointment_id = '$id'";

	if (!$result1 = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

// //Delete
// if (isset($_POST["delete_selected"])) {
//     /*
//     Deleting a single record is done is not been implemented rather than we are changing the status to "Deleted" to keep the data hidden from the user.
//     */

//     $id=$_POST['crud_id'];
//     $query = "UPDATE stocks_category SET
//     stockcat_status = 'Deleted'
//     WHERE stockcat_id = '$id'";

//     if (!$result = mysqli_query($db,$query)) {
//         exit(mysql_error());
//     } 
// }

//Permanently Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM appointment WHERE appointment_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
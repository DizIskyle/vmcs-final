<?php
include '../../environment.php';
include '../../config/database.php';


//Book Now
if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    
    $query = "SELECT * FROM schedules
    WHERE sched_id = '$id'";
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

//Add
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
/* if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    
    $query = "SELECT * FROM schedules
    WHERE sched_id = '$id'";
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
} */

//Update
if (isset($_POST['update_btn'])) {
    $sched_id = $_POST['sched_id'];
    $sched_date = $_POST['sched_date'];
    $sched_starttime = $_POST['sched_starttime'];
    $sched_endtime = $_POST['sched_endtime'];
    $sched_consultingtime = $_POST['sched_consultingtime'];
    $sched_status = $_POST['sched_status'];
    $sched_createdby = $_SESSION['system_userid'];
    $sched_createddate = $currentdate;

    //get the day of a date
    $sched_day = date('l', strtotime($sched_date));

    //Update Data
    $query = "UPDATE schedules SET sched_date = '$sched_date', sched_day = '$sched_day', sched_starttime = '$sched_starttime', sched_endtime = '$sched_endtime', sched_consultingtime = '$sched_consultingtime', sched_status = '$sched_status', sched_createdby = '$sched_createdby', sched_createddate = '$sched_createddate' WHERE sched_id = '$sched_id'";

	if (!$result1 = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
if (isset($_POST["delete_selected"])) {
    /*
    Deleting a single record is done is not been implemented rather than we are changing the status to "Deleted" to keep the data hidden from the user.
    */

    $id=$_POST['crud_id'];
    $query = "UPDATE schedules SET
    sched_status = 'Deleted'
    WHERE sched_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

//Permanently Delete
if (isset($_POST["permanent_delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM schedules WHERE sched_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
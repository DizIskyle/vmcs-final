<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
	$stockcat_name = $_POST["stockcat_name"];
	$stockcat_processdate = $currentdate;
	$stockcat_processby = $_SESSION['system_userid'];
	$stockcat_status = $_POST["stockcat_status"];


    //Insert Data
    $query = "INSERT INTO stocks_category (stockcat_name, stockcat_processdate, stockcat_processby, stockcat_status) VALUES ('$stockcat_name', '$stockcat_processdate', '$stockcat_processby', '$stockcat_status')";

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
    
    $query = "SELECT * FROM stocks_category
    WHERE stockcat_id = '$id'";
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
    $id=$_POST['stockcat_id'];
    $stockcat_name = $_POST["stockcat_name"];
    $stockcat_processdate = $currentdate;
    $stockcat_processby = $_SESSION['system_userid'];
    $stockcat_status = $_POST["stockcat_status"];

    $query = "UPDATE stocks_category SET stockcat_name = '$stockcat_name', stockcat_processdate = '$stockcat_processdate', stockcat_processby = '$stockcat_processby', stockcat_status = '$stockcat_status' WHERE stockcat_id = '$id'";

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
    $query = "UPDATE stocks_category SET
    stockcat_status = 'Deleted'
    WHERE stockcat_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

//Permanently Delete
if (isset($_POST["permanent_delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM stocks_category WHERE stockcat_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
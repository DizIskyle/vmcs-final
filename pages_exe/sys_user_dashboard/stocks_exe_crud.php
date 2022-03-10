<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
	$stock_code = "S-".rand(0001,9999);
	$stock_catid = $_POST["stock_catid"];
	$stock_name = $_POST["stock_name"];
	$stock_quantity = $_POST["stock_quantity"];
	$stock_price = $_POST["stock_price"];
	$stock_expirationdate = $_POST["stock_expirationdate"];
	$stock_processdate = $currentday;
	$stock_processby = $_SESSION['system_username'];
	$stock_status = $_POST["stock_status"];

    $sql = "SELECT stock_name FROM stocks WHERE stock_name='$stock_name'";
    $query1=mysqli_query($db,$sql);
    $totalData=mysqli_num_rows($query1);
        $data=array();
        if($totalData > 0) {
            $response = 'This code is already in use';
        }else{
        //Insert Data
    $query = "INSERT INTO stocks (stock_code, stock_catid, stock_name, stock_quantity, stock_price, stock_expirationdate, stock_processdate, stock_processby, stock_status) VALUES ('$stock_code', '$stock_catid', '$stock_name', '$stock_quantity', '$stock_price', '$stock_expirationdate', '$stock_processdate', '$stock_processby', '$stock_status')";
  
		$response = array();
	if (!$result = mysqli_query($db,$query)) {
        $response=mysqli_error($db);
    } else {
        $response = 'ok';
    }
    echo json_encode($response);
}	
}

//Read Selected Job Ticket
if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    
    $query = "SELECT * FROM stocks
    WHERE stock_id = '$id'";
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
    $id=$_POST['stock_id'];
    $stock_code = "S-".rand(0001,9999);
    $stock_catid = $_POST["stock_catid"];
    $stock_name = $_POST["stock_name"];
    $stock_quantity = $_POST["stock_quantity"];
    $stock_price = $_POST["stock_price"];
    $stock_expirationdate = $_POST["stock_expirationdate"];
    $stock_processdate = $currentday;
    $stock_processby = $_SESSION['system_username'];
    $stock_status = $_POST["stock_status"];

    $query = "UPDATE stocks SET stock_code = '$stock_code', stock_catid = '$stock_catid', stock_name = '$stock_name', stock_quantity = '$stock_quantity', stock_price = '$stock_price', stock_expirationdate = '$stock_expirationdate', stock_processdate = '$stock_processdate', stock_processby = '$stock_processby', stock_status = '$stock_status' WHERE stock_id = '$id'";

	if (!$result1 = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
//if (isset($_POST["delete_selected"])) {
    /*
    Deleting a single record is done is not been implemented rather than we are changing the status to "Deleted" to keep the data hidden from the user.
    */

   // $id=$_POST['crud_id'];
    //$query = "UPDATE stocks SET
    //stock_status = 'Deleted'
    //WHERE stock_id = '$id'";

    //if (!$result = mysqli_query($db,$query)) {
    //    exit(mysql_error());
    //} 
//}

//Permanently Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM stocks WHERE stock_id = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
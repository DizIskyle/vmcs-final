<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {

    $pet_code = $_POST["pet_code"];
    $pet_name = $_POST["pet_name"];
    $pet_category = $_POST["pet_category"];
    $pet_pet_vaccine = $_POST["pet_vaccine"];
    $pet_Birthday = $_POST[" pet_Birthday"];
    $pet_gender = $_POST["pet_gender"];
    $pet_status = $_POST["pet_status"];
    $username = $_POST["username"];

	$query="INSERT INTO pets(
            pet_code,
            pet_name,
            pet_category,
            pet_vaccine,
            pet_Birthday,
            pet_gender,
            pet_status,
            username,
			) 
			VALUES (
            $pet_code,
            $pet_name,
            $pet_category,
            $pet_vaccine,
            $pet_Birthday,
            $pet_gender,
            $pet_status,
            $username,
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
    $id = $_POST["pet_id"];
    $pet_code = $_POST["pet_code"];
    $pet_name = $_POST["pet_name"];
    $pet_category = $_POST["pet_category"];
    $pet_vaccine = $_POST["pet_vaccine"];
    $pet_Birthday = $_POST["pet_Birthday"];
    $pet_gender = $_POST["pet_gender"];
    $pet_status = $_POST["pet_status"];
    $username = $_POST["username"];


	$query = "  UPDATE pets
                SET 
                pet_code = '$pet_code'
                pet_name = '$pet_name',
                pet_category = '$pet_category',
                pet_pet_vaccine = '$pet_vaccine',
                pet_Birthday = '$pet_Birthday',
                pet_gender = '$pet_gender',
                pet_status = '$pet_status',
                username = '$username',
                WHERE
                    pet_id = '$id'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];

    $query = "DELETE FROM pets WHERE pet_id = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
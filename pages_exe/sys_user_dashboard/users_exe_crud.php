<?php
include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {

	$username = $_POST["username"];
	$userfirstname = $_POST["userfirstname"];
	$usermiddlename = $_POST["usermiddlename"];
    $userlastname = $_POST["userlastname"];
    $useremail = $_POST["useremail"];
    $usercategory = $_POST["usercategory"];
    $userstatus = $_POST["userstatus"];

    //Password Hasing
	$password=$_POST["userpass"];
	$blowfish_pre='$2a$05$';
	$blowfish_end='$';

	$allowed_chars='ABSCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
	$char_len=63;

	$salt_len=21;
	$salt='';

	for ($i=0; $i<$salt_len ; $i++) { 
		$salt.=$allowed_chars[mt_rand(0,$char_len)];
	}

	$bcrypt_salt=$blowfish_pre.$salt.$blowfish_end;
	$hash_password=crypt($password,$bcrypt_salt);
	//End of password hashing


	$query="INSERT INTO users(
			username,
            usersalt,
            userpass,
			userfirstname,
			usermiddlename,
            userlastname,
            useremail,
            userstatus,
            usercategory
			) 
			VALUES (
			'$username',
			'$salt',
			'$hash_password',
			'$userfirstname',
			'$usermiddlename',
            '$userlastname',
            '$useremail',
            '$userstatus',
            '$usercategory'
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
    $query = "SELECT * FROM users
        WHERE userid = '$id'";
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
    $id = $_POST["userid"];
    $username = $_POST["username"];
	$userfirstname = $_POST["userfirstname"];
	$usermiddlename = $_POST["usermiddlename"];
    $userlastname = $_POST["userlastname"];
    $useremail = $_POST["useremail"];
    $userstatus = $_POST["userstatus"];
    $usercategory = $_POST["usercategory"];


	$query = "  UPDATE users 
                SET username = '$username',
                userfirstname = '$userfirstname',
                usermiddlename = '$usermiddlename',
                userlastname = '$userlastname',
                useremail = '$useremail',
                userstatus = '$userstatus',
                usercategory = '$usercategory', 
                WHERE
                    userid = '$id'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];

    $query = "DELETE FROM users WHERE userid = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
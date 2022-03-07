<?php
include '../environment.php';
include '../config/database.php';
 
if(isset($_POST['login_button'])) {
	$user_id = trim($_POST['user_employeeid']);
	$user_password = trim($_POST['user_password']);
	
	$sql = "SELECT * FROM users
			WHERE userstatus='activated'
			AND username='$user_id'";

	$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
	$row = mysqli_fetch_assoc($resultset);	
	
	CRYPT_BLOWFISH or die('No blowfish here.');

	$password=$user_password; //Change with actual password
	$blowfish_pre='$2a$05$';
	$blowfish_end='$';
	$salt=$row['usersalt'];

	$bcrypt_salt=$blowfish_pre.$salt.$blowfish_end;
	$hash_password=crypt($password,$bcrypt_salt);

	/*Verification
	$hash_pass=crypt($password,$blowfish_pre.$salt.$blowfish_end);
	if ($hash_pass==$hash_password) {
		echo "Password Verified";
	} else {
		echo "There was a problem with your username and password";
	}*/

	if($row['userpass']==$hash_password){
        $response = $row;
		$_SESSION['system_username'] = $row['username'];
		$_SESSION['system_userid'] = $row['userid'];
		$_SESSION['system_userfirstname'] = $row['userfirstname'];
		$_SESSION['system_usermiddlename'] = $row['usermiddlename'];
		$_SESSION['system_userlastname'] = $row['userlastname'];
		$_SESSION['system_usercategory'] = $row['usercategory'];
		$_SESSION['system_logged_in'] = true;	
		$_SESSION['timestamp']=time(); //use this timestamp to check if the user was inactive for too long
		
	} else {		
		$response = 999; 
	}	
	echo json_encode($response);	
} else{
 
}

//Your logout code write here
if(isset($_POST['logout'])) {
	session_destroy();
	$_SESSION['system_logged_in'] = false;
	echo "string";
}

//New user
if (isset($_POST['newuser_button'])) {
	//Creating Username
	$fiveRandomDigit = mt_rand(10000,99999);
	$uname=date('Y').'-'.$fiveRandomDigit; 
	//End of creating username

	//Password Hasing
	$password=$_POST["user_password"];
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

	$username = $uname;
	$usersalt = $salt;
    $userpass = $hash_password;
	$userfirstname = $_POST["user_firstname"];
    $usermiddlename = $_POST["user_middlename"];
    $userlastname = $_POST["user_lastname"];
    $useremail = $_POST["user_email"];
	$usercategory = $_POST["user_category"];
    $userstatus = "enable";

	$query="INSERT INTO users(
			username,
			usersalt,
            userpass,
			userfirstname,
            usermiddlename,
            userlastname,
            useremail,
			usercategory,
            userstatus
			) 
			VALUES (
			'$username',
			'$usersalt',
            '$userpass',
			'$userfirstname',
            '$usermiddlename',
            '$userlastname',
            '$useremail',
			'$usercategory',
            '$userstatus'
			)"; 
		$response = array();
	if (!$result = mysqli_query($db,$query)) {
        //exit(mysqli_error());
        $response=999;
    } else {
		//Reading your data inserted
		$last_id = mysqli_insert_id($db);
		$query = "SELECT * FROM users
			WHERE userid = '$last_id'";
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
		//End reading your data inserted

		//Sending Email

		//End of sending email

    	$response['insert_status'] = 204;
		$response['insert_message'] = "Data Inserted!";
    }
    echo json_encode($response);	
}

?>
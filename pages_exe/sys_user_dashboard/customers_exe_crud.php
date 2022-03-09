<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {
    // Get data from the form
    $useremail = $_POST['useremail'];

    //Verify email if already exist
    $sql = "SELECT useremail FROM users WHERE useremail = '$useremail'";    
    $query=mysqli_query($db,$sql);
    $totalData=mysqli_num_rows($query);

    $data=array();
    if($totalData > 0) {
        $data['message'] = "Email already exist";
        $data['code'] = "exist";      

    } else {
        CRYPT_BLOWFISH or die('No blowfish here.');

        //Hashing the password
        $password = $_POST['userpass'];
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
        //End of hashing the password

        //Insert data into the database
        $username = $_POST["username"];
        $userfirstname = $_POST["userfirstname"];
        $usermiddlename = $_POST["usermiddlename"];
        $userlastname = $_POST["userlastname"];
        $useremail = $_POST["useremail"];
        $usersalt = $salt;        
        $userpass = $hash_password;
        $usercategory = 3; //1 admin 2 vet 3 customer
        $userstatus = $_POST["userstatus"];;    

        $query="INSERT INTO users (
            username, 
            userfirstname, 
            usermiddlename, 
            userlastname, 
            useremail, 
            usersalt, 
            userpass, 
            usercategory,
            userstatus) 
            VALUES (
            '$username', 
            '$userfirstname', 
            '$usermiddlename', 
            '$userlastname', 
            '$useremail', 
            '$usersalt', 
            '$userpass', 
            '$usercategory',
            '$userstatus'
        )";

		$response = array();
        if (!$result = mysqli_query($db,$query)) {
            //exit(mysqli_error());
            $response=999;
        } else {
            $response = 'ok';
        }
        //echo json_encode($response);

        $data['message'] = "Email available";
        $data['code'] = "available";

       /*  //Send email to user
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = 'ragayveterinaryhealthcenter@gmail.com';
        $mail->Password = 'Zaq1Xsw2++';
        $mail->setFrom('ragayveterinaryhealthcenter@gmail.com', 'Ragay Veterinary Health Center');
        $mail->addReplyTo('ragayveterinaryhealthcenter@gmail.com', 'Ragay Veterinary Health Center');
        $mail->addAddress($user_email, '');
        $mail->Subject = 'Email Verification';
        $mail->msgHTML("<html><head><title>Email Verification</title></head><body><p>Hi,</p><p>Thank you for registering with us. Please click on the link below to verify your email address.</p><p><a href='http://localhost:81/vmcs/login.php?page=verifyemail&email=$user_email&hash=$usersalt'>Verify Email</a></p><p>Thank you,</p><p>Team</p></body></html>");
        $mail->AltBody = 'Thank you for registering with us. Please click on the link below to verify your email address.';
        //$mail->addAttachment('images/phpmailer_mini.png');
        if (!$mail->send()) {
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            $data['mailstatus']= "Email message not sent.";
        } else {
            //echo 'Message sent!';
            $data['mailstatus']= "Email message sent.";
        }   */      
    }    
    echo json_encode($data);   
}

//reset password
if (isset($_POST['resetpass_selected'])) {
    // Get data from the form
    $userid = $_POST['crud_id'];

    //Verify email if already exist
    $sql = "SELECT userid FROM users WHERE userid = '$userid'";    
    $query=mysqli_query($db,$sql);
    $totalData=mysqli_num_rows($query);

    $data=array();
    if($totalData > 0) {
         
        CRYPT_BLOWFISH or die('No blowfish here.');

        //Hashing the password
        $password = $_POST['newpassword'];
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
        //End of hashing the password

        //Insert new password into the database
        $query="UPDATE users SET userpass = '$hash_password', usersalt = '$salt' WHERE userid = '$userid'";
        if (!$result1 = mysqli_query($db,$query)) {
            exit(mysqli_error());
        } else {
            $data['message'] = "Password reset successful.";
            $data['code'] = "ok";
        }

    } else {
        $data['message'] = "User not found";
        $data['code'] = "not exist"; 
        
    }
    echo json_encode($data);
}


//Read Selected Job Ticket
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
    $update_userid = $_POST['update_userid'];
    $update_username = $_POST['update_username'];
    $update_userfirstname = $_POST['update_userfirstname'];
    $update_usermiddlename = $_POST['update_usermiddlename'];
    $update_userlastname = $_POST['update_userlastname'];
    $update_useremail = $_POST['update_useremail'];
    $update_userstatus = $_POST['update_userstatus'];

    //update query
    $query = "UPDATE users SET username = '$update_username', userfirstname = '$update_userfirstname', usermiddlename = '$update_usermiddlename', userlastname = '$update_userlastname', useremail = '$update_useremail', userstatus = '$update_userstatus' WHERE userid = '$update_userid'";

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
//     $query = "UPDATE users SET
//     userstatus = 'Deleted'
//     WHERE userid = '$id'";

//     if (!$result = mysqli_query($db,$query)) {
//         exit(mysql_error());
//     } 
// }

//Permanently Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];
    $query = "DELETE FROM users WHERE userid = '$id'";

    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>
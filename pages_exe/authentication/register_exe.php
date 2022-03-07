<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include '../../environment.php';
include '../../config/database.php';

if (isset($_POST['submit_btn'])) {

    // Get data from the form
    $user_email = $_POST['user_email'];

    //Verify email if already exist
    $sql = "SELECT useremail FROM users WHERE useremail = '$user_email'";    
    $query=mysqli_query($db,$sql);
    $totalData=mysqli_num_rows($query);

    $data=array();
    if($totalData > 0) {
        $data['message'] = "Email already exist";
        $data['code'] = "exist";      

    } else {
        CRYPT_BLOWFISH or die('No blowfish here.');

        //Hashing the password
        $password = $_POST['user_password'];
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
        $username = $_POST["user_username"];
        $userfirstname = $_POST["user_firstname"];
        $usermiddlename = $_POST["user_middlename"];
        $userlastname = $_POST["user_lastname"];
        $useremail = $_POST["user_email"];
        $usersalt = $salt;        
        $userpass = $hash_password;
        $usercategory=3;
        $userstatus = 'unactivated';    

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

        //Send email to user
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
        $mail->msgHTML("<html><head><title>Email Verification</title></head><body><p>Hi,</p><p>Thank you for registering with us. Please click on the link below to verify your email address.</p><p><a href='http://localhost:/vmcs-final/login.php?page=verifyemail&email=$user_email&hash=$usersalt'>Verify Email</a></p><p>Thank you,</p><p>Team</p></body></html>");
        $mail->AltBody = 'Thank you for registering with us. Please click on the link below to verify your email address.';
        //$mail->addAttachment('images/phpmailer_mini.png');
        if (!$mail->send()) {
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            $data['mailstatus']= "Email message not sent.";
        } else {
            //echo 'Message sent!';
            $data['mailstatus']= "Email message sent.";
        }        
    }    
    echo json_encode($data);   
}
?> 

<!--https://www.dropbox.com/home-->
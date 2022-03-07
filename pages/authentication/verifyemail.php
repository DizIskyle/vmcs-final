<?php
include 'environment.php';
include 'config/database.php';

if(isset($_GET['email']) && isset($_GET['hash'])){
    $email = $_GET['email'];
    $hash = $_GET['hash'];
    $query = "SELECT * FROM users WHERE useremail = '$email' AND usersalt = '$hash'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1){
        $query = "UPDATE users SET userstatus = 'activated' WHERE useremail = '$email'";
        $result = mysqli_query($db, $query);
        if($result){
            echo "<h1>Your Email Has Been Verified</h1>";
            echo "<p>You can now login to your account.</p>";
            echo "<a href='http://localhost/vmcs-final/login.php' class='btn btn-primary' >Login</a>";
        }
    }
}

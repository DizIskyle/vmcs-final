<?php
session_start();

// Connection variables 
$host= getenv('DB_HOST');
$user= getenv('DB_USERNAME');
$password= getenv('DB_PASSWORD');
$database= getenv('DB_DATABASE');
$port= getenv('DB_PORT');


// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password,$database,$port) or die("Could not connect to database");
//$db1 = mysqli_connect($host, $user, $password,$database1,$port) or die("Could not connect to database");

date_default_timezone_set(getenv('DB_TIMEZONE')); //Default Timezone
$currentdate = date('m/d/Y H:i:s'); //Current Date
$currentdate2 = date('m/d/Y h:i A', strtotime($currentdate)); //Current Date With AM & PM

?> 
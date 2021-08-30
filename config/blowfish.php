<?php 

CRYPT_BLOWFISH or die('No blowfish here.');

$password='password'; //Change with actual password
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

echo $salt;
echo $hash_password;
echo "<br>";
//Verification
$hash_pass=crypt($password,$blowfish_pre.$salt.$blowfish_end);
if ($hash_pass==$hash_password) {
	echo "Password Verified";
} else {
	echo "There was a problem with your username and password";
}

 ?>
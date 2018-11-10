<?php

$email = $_POST['email'];

$pass = $_POST['password'];

$con = mysqli_connect("localhost","root",'rootpassword','talent');

$query = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '$email' && `password` = '$pass'");

$num = mysqli_num_rows($query);

if($num == 0) {

	echo 'Wrong credentials! Please try again';
	
}

else {

	echo 'Success';

}

?>
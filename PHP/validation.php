<?php

session_start();


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_PORT','8889');
define('DB_NAME', 'userregistration');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);



$name=$_POST['full_name_1'];
$pass=$_POST['password_1'];

$s = "select * from usertable where name = '$name' && pass='$pass' ";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num ==1)
{
	$_SESSION['full_name_1'] = $name;
	header('location:test.html');
	echo "Login Valid";
}
else
{
	header('location:index.html');
}
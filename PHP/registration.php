<?php

session_start();
header('location:index.html');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_PORT','8889');
define('DB_NAME', 'userregistration');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);



$name=$_POST['full_name'];
$email=$_POST['your_email'];
$pass=$_POST['password'];


$s = "select * from usertable where name = '$name' ";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num ==1)
{
	echo " Username already exists";
}
else
{
	$reg= " insert into usertable(name , pass) values( '$name' , '$pass' )";
	mysqli_query($con , $reg);
	echo " Registration Successful";
}
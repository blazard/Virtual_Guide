<?php
session_start();
ob_start();
include("dbconnect.php");
$email=$_REQUEST["email"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$contact=$_REQUEST["contact"];
$password=$_REQUEST["password"];

$in="insert into persondetails(mobile,fname,lname,email,password) values($contact,'$fname','$lname','$email','$password');";
if(!mysqli_query($dbcnx,$in))
	echo"Error";
include("index.php");
?>
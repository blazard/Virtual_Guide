<?php
ob_start();
include("dbconnect.php");
if(isset($_POST["email"]))
{
	if(isset($_POST["pwd"]))
	{
		$user=$_POST["email"];
		$pass=$_POST["pwd"];
		$res=mysqli_query($dbcnx,"select * from login where email='$user' and password='$pass'");
		$row=mysqli_fetch_array($res);
		if($row){
			session_start();
			$_SESSION['name']=$row["Name"];
			$_SESSION['email']=$row["Email"];
		}
		else
			echo'<script> alert("USERNAME AND PASSWORD NOT MATCHING") </script>';
	}
}
header("location:index.php");
?>

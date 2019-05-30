<?php

session_start();
require "dbconnect.php";
$email_id=$_POST['email_id'];
$password=$_POST['password'];

$count=0;
$qry="SELECT * FROM `admin_table` WHERE email_id='".$email_id."' and password='".$password."'";
$qry1=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($qry1))
	{
		
		$email_id=$row['email_id'];
		$password=$row['password'];

		if ($email_id==$email_id && $password==$password) 
		{
			$count=1;
			$email_id=$row['email_id'];
			$id=$row['id'];

		
		}
	}
if ($count==1)
 	{
	
		$_SESSION['email_id']=$email_id;
		$_SESSION['id']=$id;
		echo $_SESSION['email_id'];
		header("location:dashboard.php");
	}
else
	{

		
		header("location:index.php");
		

	}

?>

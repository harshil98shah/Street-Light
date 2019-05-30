<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE worker_table SET is_active=$status WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:manageworker.php");
	}
}

?>
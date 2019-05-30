<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['area_id']))
{
	$area_id=$_GET['area_id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE area_table SET is_active=$status WHERE area_id=$area_id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:managearea.php");
	}
}

?>
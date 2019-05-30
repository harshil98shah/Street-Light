<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['complaint_id']))
{
	$complaint_id=$_GET['complaint_id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE complaint_table SET is_active=$status WHERE complaint_id=$complaint_id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:usercomplaint.php");
	}
}

?>
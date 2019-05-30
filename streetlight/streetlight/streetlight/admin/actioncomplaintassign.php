<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['comp_id']))
{
	$comp_id=$_GET['comp_id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE comp_assign_table SET is_active=$status WHERE comp_id=$comp_id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:complaint_assign_worker.php");
	}
}

?>
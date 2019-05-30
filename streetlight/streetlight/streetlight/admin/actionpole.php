<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['pole_id']))
{
	$pole_id=$_GET['pole_id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE pole_table SET is_active=$status WHERE pole_id=$pole_id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:managepole.php");
	}
}

?>
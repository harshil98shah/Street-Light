<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['com_prob_id']))
{
	$com_prob_id=$_GET['com_prob_id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE common_problems SET is_active=$status WHERE com_prob_id=$com_prob_id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:managecomplaint.php");
	}
}

?>
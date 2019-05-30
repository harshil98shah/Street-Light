<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$status=$_GET['status'];
	$cid=$_GET['cid'];
	$uid=$_GET['uid'];
	$is_active=1;
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE worker_table SET is_active=$status WHERE id=$id";
	$qry1="INSERT INTO comp_assign_table(user_id,complaint_id,id,is_active) VALUES($uid,$cid,$id,$is_active)";
	echo $qry1;
	
	$rs=mysqli_query($conn,$qry);
	$rs1=mysqli_query($conn,$qry1);

	if($rs)
	{
		header("location:usercomplaint.php");
	}
}

?>
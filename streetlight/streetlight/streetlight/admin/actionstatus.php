<?php

require "dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];

if($status==25)
{
	$qry="UPDATE complaint_table SET status=50 WHERE complaint_id=$id";
}
elseif ($status==50)
{
	$qry="UPDATE complaint_table SET status=75 WHERE complaint_id=$id";
}
elseif ($status==75)
{
	$qry="UPDATE complaint_table SET status=100 WHERE complaint_id=$id";
}
else
{
	$qry="UPDATE complaint_table SET status=100 WHERE complaint_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:usercomplaint.php");
}
else
{
	echo "update error";
}
?>
<?php

require "dbconnect.php";
session_start();


$complaint_id = $_GET['complaint_id'];

$qry = "UPDATE complaint_table SET is_active=2 WHERE complaint_id=$complaint_id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:usercomplaint.php");
}


?>
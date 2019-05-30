<?php
require "dbconnect.php";
session_start();

if(isset($_GET['ward_id']))
{
$ward_id = $_GET['ward_id'];
$status = $_GET['status'];
if($status==1)
{
	$status=0;
}
else
{
	$status=1;
}

$qry = "UPDATE ward_name_table SET is_active=$status WHERE ward_id=$ward_id";
$rs = mysqli_query($conn,$qry);
echo $status;
if($rs)
{
	//echo "Updated Successfully";
	header("location:manageward.php");
}
}
?>
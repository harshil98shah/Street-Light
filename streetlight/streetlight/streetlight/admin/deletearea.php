<?php

require "dbconnect.php";
session_start();


$area_id = $_GET['area_id'];

$qry = "UPDATE area_table SET is_active=2 WHERE area_id=$area_id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:managearea.php");
}


?>
<?php

require "dbconnect.php";
session_start();


$ward_id = $_GET['ward_id'];

$qry = "UPDATE ward_name_table SET is_active=2 WHERE ward_id=$ward_id";

$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:manageward.php");
}


?>
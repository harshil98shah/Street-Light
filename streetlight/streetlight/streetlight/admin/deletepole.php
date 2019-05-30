<?php

require "dbconnect.php";
session_start();


$pole_id = $_GET['pole_id'];

$qry = "UPDATE pole_table SET is_active=2 WHERE pole_id=$pole_id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:managepole.php");
}


?>
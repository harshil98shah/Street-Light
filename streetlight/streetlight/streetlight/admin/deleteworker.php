<?php

require "dbconnect.php";
session_start();


$id = $_GET['id'];

$qry = "UPDATE worker_table SET is_active=2 WHERE id=$id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:manageworker.php");
}


?>
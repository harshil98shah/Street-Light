<?php

require "dbconnect.php";
session_start();


$comp_id = $_GET['comp_id'];

$qry = "UPDATE comp_assign_table SET is_active=2 WHERE comp_id=$comp_id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:complaint_assign_worker.php");
}


?>
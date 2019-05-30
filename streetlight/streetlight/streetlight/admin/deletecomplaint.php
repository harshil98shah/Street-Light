<?php

require "dbconnect.php";
session_start();


$com_prob_id = $_GET['com_prob_id'];

$qry = "UPDATE common_problems SET is_active=2 WHERE com_prob_id=$com_prob_id";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:managecomplaint.php");
}


?>
<?php

require "dbconnect.php";
session_start();


$com_prob_id=$_GET['com_prob_id'];
$com_prob_name =$_GET['com_prob_name'];
$qry = "UPDATE common_problems SET com_prob_name='".$com_prob_name."' WHERE com_prob_id=$com_prob_id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) 
{

	echo "<script> alert('Problems update Successfully') </script>";
	echo "<script>document.location='managecomplaint.php'</script>";
	//header("location:managecomplaint.php");
}

?>
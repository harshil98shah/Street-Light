<?php

require "dbconnect.php";
session_start();


$area_id=$_GET['area_id'];
$area_name =$_GET['area_name'];
$qry = "UPDATE area_table SET area_name='".$area_name."' WHERE area_id=$area_id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) 
{
	echo "<script> alert('Area update Successfully') </script>";
	echo "<script>document.location='managearea.php'</script>";

	//header("location:managearea.php");
}

?>
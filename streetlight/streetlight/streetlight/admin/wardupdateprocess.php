<?php
require "dbconnect.php";
session_start();


if(isset($_GET['btn_sb']))
{
$ward_id=$_GET['ward_id'];
$ward_name =$_GET['ward_name'];
$area_id=$_GET['area_id'];

$qry = "UPDATE ward_name_table SET ward_name='".$ward_name."' WHERE ward_id='".$ward_id."'";
$rs = mysqli_query($conn,$qry);
if($rs) 
{
	echo "<script> alert('Ward update Successfully') </script>";
	echo "<script>document.location='manageward.php'</script>";
		//header("location:manageward.php");
}
}
?>
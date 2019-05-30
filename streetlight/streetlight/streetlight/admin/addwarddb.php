<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$area_id=$_GET['area_id'];
$ward_name=$_GET['ward_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM ward_name_table WHERE ward_name LIKE '".$ward_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);

	if($row>0)
	{
		header("location:addward.php?msg=ward already Exixts!");
	}
	else
	{
		$qry="INSERT INTO ward_name_table(area_id,ward_name,is_active) VALUES('".$area_id."','".$ward_name."',$isactive)";
		$rs=mysqli_query($conn,$qry) or die(mysqli_error($conn));

		echo "<script> alert('ward add Successfully') </script>";
		echo "<script>document.location='addward.php'</script>";
		//header("location:addarea.php");
	}
}
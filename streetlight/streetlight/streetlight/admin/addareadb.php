<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
//$id=$_GET['id'];
$area_name=$_GET['area_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM area_table WHERE area_name LIKE '".$area_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addarea.php?msg=Area already Exixts!");
	}
	else
	{
		$qry="INSERT INTO area_table(area_name,is_active) VALUES('".$area_name."',$isactive)";
		$rs=mysqli_query($conn,$qry);

		echo "<script> alert('Area add Successfully') </script>";
		echo "<script>document.location='addarea.php'</script>";
		//header("location:addarea.php");
	}
}
?>
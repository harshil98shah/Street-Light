
<?php
require "dbconnect.php";
session_start();


if(isset($_GET['btn_sb']))
{
	$pole_char=$_GET['pole_char'];
	$pole_int=$_GET['pole_int'];
	$area_name=$_GET['area_name'];
	$ward_name=$_GET['ward_name'];
	$pole_add=$_GET['pole_add'];
	$asset_type=$_GET['asset_type'];
	$bracket_type=$_GET['bracket_type'];
	$lamp_type=$_GET['lamp_type'];
	$longitude=$_GET['longitude'];
	$latitude=$_GET['latitude'];

	$qry = "UPDATE pole_table SET pole_char='".$pole_char."',pole_int=$pole_int,area_name='".$area_name."',ward_name='".$ward_name."',pole_add='".$pole_add."',asset_type='".$asset_type."',bracket_type='".$bracket_type."',lamp_type='".$lamp_type."',longitude=$longitude,latitude=$latitude WHERE pole_char='".$pole_char."'";
	$rs = mysqli_query($conn,$qry);
	echo $qry;
	
	if($rs) 
	{
		echo "<script> alert('pole update Successfully') </script>";
		echo "<script>document.location='managepole.php'</script>";
			//header("location:manageward.php");
	}
}
?>
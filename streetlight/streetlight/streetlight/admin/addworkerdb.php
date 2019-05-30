<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
	$name=$_GET['name'];
	$mobile=$_GET['mobile'];
	$email_id=$_GET['email_id'];
	$worker_id=$_GET['worker_id'];
	$type=$_GET['type'];
	$is_active=1;


$qry1="SELECT * FROM worker_table WHERE name LIKE '".$name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addworker.php?msg=worker Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO `worker_table`(`name`,`mobile`,`email_id`,`worker_id`,`type`,`is_active`) VALUES ('".$name."','$mobile','".$email_id."','$worker_id','".$type."',$is_active)";

		$rs=mysqli_query($conn,$qry) or die(mysqli_error($conn));
		echo "<script> alert('worker add Successfully') </script>";
		echo "<script>document.location='addworker.php'</script>";
		//header("location:addcomplaint.php");
	}
}
?>

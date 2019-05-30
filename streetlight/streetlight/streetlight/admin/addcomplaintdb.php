<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
//$com_prob_id=$_GET['com_prob_id'];
$com_prob_name=$_GET['com_prob_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM common_problems WHERE com_prob_name LIKE '".$com_prob_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addcomplaint.php?msg=Problem Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO common_problems(com_prob_name,is_active) VALUES('".$com_prob_name."',$isactive)";

		$rs=mysqli_query($conn,$qry) or die(mysqli_error($conn));
		echo "<script> alert('Problem add Successfully') </script>";
		echo "<script>document.location='addcomplaint.php'</script>";
		//header("location:addcomplaint.php");
	}
}

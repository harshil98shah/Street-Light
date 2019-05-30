<?php  
require 'dbconnect.php';
session_start();


if(isset($_POST['btn_sb']))
{

$name=$_POST['name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$isactive=1;
//select qry
$qry1="SELECT * FROM admin_table WHERE email_id LIKE '".$email_id."'";
    $rs1=mysqli_query($conn,$qry1);
    $row=mysqli_num_rows($rs1);
  if($row>0)
  {
     $qry="INSERT INTO admin_table(name,email_id,password,is_active) VALUES('".$name."','".$email_id."','".$password."',$isactive)";
    $rs=mysqli_query($conn,$qry);

    echo "<script> alert('Add Successfully') </script>";
    echo "<script>document.location='index.php'</script>"; 
  }
  else
  {
    echo "<script> alert('Error not Registered') </script>";
  }
}

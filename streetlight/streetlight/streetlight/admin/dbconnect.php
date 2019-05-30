<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="streetlight";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Server Connected successfully";
$db = mysqli_select_db($conn,$dbname);
if($db)
{
	//echo "Database Connected!";
}
else
{
	//echo "Database Error!";
}
?>
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
					$is_active=1;
					
					


					if(!$conn)
					{
						echo "<script>alert('Database is not connected with localhost')</script>";
					}
					else
					{
						
					$sql=mysqli_query($conn,"INSERT INTO `pole_table`(`pole_char`, `pole_int`,`area_name`,`ward_name`, `pole_add`, `asset_type`, `bracket_type`, `lamp_type`, `longitude`, `latitude`,`is_active`) VALUES ('$pole_char','$pole_int','$area_name','$ward_name','$pole_add','$asset_type','$bracket_type','$lamp_type','$longitude','$latitude','$is_active')");
							
					if(!$sql)
					{
						echo " <script> alert('Data Not Entered') </script>";
					}
					else
					{
						echo "<script> alert('Pole Add Successfully...')</script> ";
						echo "<script>document.location='addpole.php'</script>";
						
					}
					}
			}
			?>
						

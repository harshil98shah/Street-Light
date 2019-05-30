<?php

require "common/header.php";
require 'dbconnect.php';
session_start();


$qry = "SELECT * FROM pole_table WHERE is_active!=2";
$rs = mysqli_query($conn,$qry);


?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Street Light</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
          <?php
  require "common/navigation.php";
?> 

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Pole</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Pole TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>Pole Id</th>
                                            <th>Pole Char</th>
                                            <th>Pole Int</th>
                                            <th>Area Name</th>
                                            <th>Ward Name</th>
                                            <th>Pole Address</th>
                                            <th>Asset Type</th>
                                            <th>Bracket Type</th>
                                            <th>Lamp Type</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>
                                            <th>In/Active</th>
                                            <th>Action</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                            <?php
                                                                
                            if(mysqli_num_rows($rs) > 0)
                                {
                                    while($row = mysqli_fetch_assoc($rs))
                                    {
                            ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <td><?php echo $row['pole_id']; ?></td>
                                    <td><?php echo $row['pole_char'];?></td>
                                    <td><?php echo $row['pole_int'];?></td>
                                    <td><?php  $r1=mysqli_query($conn,"SELECT `area_name` FROM `area_table` where `area_id`=".$row['area_name']); if($c1=mysqli_fetch_assoc($r1)){echo $c1['area_name'];} ?>
                                    </td>
                                    <td><?php  $r1=mysqli_query($conn,"SELECT `ward_name` FROM `ward_name_table` where `ward_id`=".$row['ward_name']); if($c1=mysqli_fetch_assoc($r1)){echo $c1['ward_name'];} ?>
                                    </td>
                                    
                                    <td><?php echo $row['pole_add'];?></td>
                                    <td><?php echo $row['asset_type'];?></td>
                                    <td><?php echo $row['bracket_type'];?></td>
                                    <td><?php echo $row['lamp_type'];?></td>
                                    <td><?php echo $row['longitude'];?></td>
                                    <td><?php echo $row['latitude'];?></td>
                                    <th><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></th>
                                    <td><a href="actionpole.php?pole_id=<?php echo $row['pole_id']; ?>&status=<?php echo $row['is_active']; ?>">Change</a></td>
                                    <td><a href="editpole.php?pole_id=<?php echo $row['pole_id']; ?>">Edit</a></td>
                                    <td><a href="deletepole.php?pole_id=<?php echo $row['pole_id']; ?>">Delete</a></td>
                                    

                                </tr>
                            <?php   }
                                }
                                else
                                {
                                echo "0 Rows Returned!";
                                }
                            ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
     <!-- /. WRAPPER  -->
    <?php require "common/footer.php"; ?>
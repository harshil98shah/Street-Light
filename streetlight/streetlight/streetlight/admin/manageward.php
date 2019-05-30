<?php
require "common/header.php";
require 'dbconnect.php';
session_start();
$qry="SELECT * FROM area_table WHERE is_active!=0 ORDER BY area_id AND area_name";
$rs=mysqli_query($conn,$qry);
$qry2="SELECT ward_name_table.ward_id,ward_name_table.is_active,ward_name_table.ward_name,area_table.area_name FROM area_table INNER JOIN ward_name_table ON area_table.area_id = ward_name_table.area_id WHERE ward_name_table.is_active!=2 ORDER BY ward_name_table.ward_id";
$rs2=mysqli_query($conn,$qry2);


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
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
          <?php
  require "common/navigation.php";
?> 

                  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Ward</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Ward TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ward Name</th>
                                            <th>Area Name</th>
                                            <th>In/Active</th>
                                            <th>Action</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                            <?php
                                if(mysqli_num_rows($rs2)>0)
                                {
                                    while($row2=mysqli_fetch_assoc($rs2))
                                    {
                            ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <td><?php echo $row2['ward_id']; ?></td>
                                    <td><?php echo $row2['ward_name'];?></td>
                                    <td><?php echo $row2['area_name'];?></td>
                                    <th><?php if($row2['is_active']==1){echo "Active";}else{echo "Blocked";} ?></th>
                                    <td><a href="actionward.php?ward_id=<?php echo $row2['ward_id']; ?>&status=<?php echo $row2['is_active']; ?>">Change</a></td>
                                    <td><a href="editward.php?ward_id=<?php echo $row2['ward_id']; ?>">Edit</a></td>
                                    <td><a href="deleteward.php?ward_id=<?php echo $row2['ward_id']; ?>">Delete</a></td>
                                    

                                </tr>
                            <?php  
                                 }
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
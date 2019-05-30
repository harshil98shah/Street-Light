<?php

require "common/header.php";
require 'dbconnect.php';
session_start();


$qry = "SELECT com_prob_id, com_prob_name, is_active FROM common_problems WHERE is_active!=2";
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
                     <h2>Manage Problems</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Common Problems TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Problem Name</th>
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
                                    <td><?php echo $row['com_prob_id']; ?></td>
                                    <td><?php echo $row['com_prob_name'];?></td>
                                    <th><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></th>
                                    <td><a href="actioncomplaint.php?com_prob_id=<?php echo $row['com_prob_id']; ?>&status=<?php echo $row['is_active']; ?>">Change</a></td>
                                    <td><a href="editcomplaint.php?com_prob_id=<?php echo $row['com_prob_id']; ?>">Edit</a></td>
                                    <td><a href="deletecomplaint.php?com_prob_id=<?php echo $row['com_prob_id']; ?>">Delete</a></td>
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
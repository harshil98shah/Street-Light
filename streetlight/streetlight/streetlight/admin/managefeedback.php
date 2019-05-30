<?php

require "common/header.php";
require 'dbconnect.php';
session_start();


$qry = "SELECT feedback_id, complaint_id,description,user_id FROM feedback";
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
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
            </div>
        </nav>   
<?php
  require "common/navigation.php";
?> 

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Feedback</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             FEEDBACK TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>FEEDBACK ID</th>
                                            <th>complaint id</th>

                                            <th>complaint name</th>
                                            <th>description</th>
                                            <th>user Name</th>
                                            <th>Repeat</th>
                                            
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
                                    <td><?php echo $row['feedback_id']; ?></td>
                                    <td><?php echo $row['complaint_id']; ?></td>

                                    <td>
                                        <?php $id=$row['complaint_id'];
                                            $qry1="SELECT com_prob_name FROM complaint_table WHERE complaint_id=$id";
                                            $rs1=mysqli_query($conn,$qry1); 
                                             while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                        echo $row1['com_prob_name'];
                                                       } 
                                                    ?>
                                        </td>
                                    <td><?php echo $row['description'];?></td>
                                     <td>
                                        <?php $id=$row['user_id'];
                                            $qry1="SELECT name FROM users WHERE user_id=$id";
                                            $rs1=mysqli_query($conn,$qry1); 
                                             while($row1=mysqli_fetch_assoc($rs1))
                                                    {
                                                        echo $row1['name'];
                                                       } 
                                                    ?>
                                        </td>
                                    <td><a href="usercomplaint.php">Edit</a></td>

                                    

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
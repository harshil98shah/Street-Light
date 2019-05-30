<?php

require "common/header.php";
require 'dbconnect.php';
session_start();


$qry = "SELECT complaint_id,user_id, pole_number,com_prob_name,description,status, is_active FROM complaint_table WHERE is_active!=2";
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
                     <h2>Complaints</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Complaints TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User_Id</th>
                                            <th>Pole Number</th>
                                            <th>Problem Name</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Assign Worker</th>
                                            <th>status</th>
                                            <th>Status_action</th>
                                            <th>Is_Active</th>
                                            <th>Action</th>
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
                                    <td><?php echo $row['complaint_id']; ?></td>
                                    <td><?php echo $row['user_id']; ?></td>

                                    <td><?php echo $row['pole_number']; ?></td>
                                    <td><?php echo $row['com_prob_name'];?></td>
                                    <td><?php echo $row['description']; ?></td>



                                <form action="usercomplaintassign.php">
                                    
                                    <td>
                                        <select name="type">
                                            <option value="Electrician">Electrician</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Line Tester">Line Tester</option>
                                        </select>
                                    </td>
                                        
                                    <td>
                                        <input type="hidden" name="complaint_id" value="<?php echo $row['complaint_id']; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">


                                        <?php 
                                    $is_active = $row['is_active'];
                                    if($is_active=='0')
                                    {
                                        echo '<input type="submit" name="submit" value="Assign Worker" class="btn btn-primary" disabled />';
                                    }
                                    else
                                    {
                                        echo '<input type="submit" name="submit" value="Assign Worker" class="btn btn-primary">';
                                    }

                                    ?>
                                       
                                    </td>
                                </form>
                                <td><b><?php if($row['status']==25){ echo "pending";}elseif($row['status']==50){
                                  echo "on View";}elseif($row['status']==75){
                                  echo "on process";} else { echo "Completed";} ?></b></td>

                                <td><a href="actionstatus.php?id=<?php echo $row['complaint_id']; ?>&
                                      status=<?php echo $row['status']; ?>">Change</a></td>

                                    <th><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></th>
                                    
                                    <td><a href="actionusercomplaint.php?complaint_id=<?php echo $row['complaint_id']; ?>&status=<?php echo $row['is_active']; ?>">Change</a></td>
                                    <!--<td><a href="editusercomplaint.php?complaint_id=<?php echo $row['complaint_id']; ?>">Edit</a></td>!-->
                                    <td><a href="deleteusercomplaint.php?complaint_id=<?php echo $row['complaint_id']; ?>">Delete</a></td>
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
<!DOCTYPE html>
<html>
<head>
    <title></title>
<!--
<script type="text/javascript" src="tables/js/jquery.js"></script>
<script type="text/javascript" src="tables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="tables/js/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(".table").DataTable();
</script>
<script type="text/javascript">
    $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
</script>
-->

</head>
<body>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
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
                     <h2>Assign Worker</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                
                  <?php
            

                    require "common/header.php";
                    require 'dbconnect.php';
                    //session_start();
                    error_reporting(0);
                        $type1=$_GET['type'];
                        $complaint_id=$_GET['complaint_id'];
                        $user_id=$_GET['user_id'];
                    $qry = "SELECT id,name,mobile,email_id,worker_id,type,is_active FROM worker_table WHERE is_active!=2 AND type='".$type1."'";
                    $rs = mysqli_query($conn,$qry) or die(mysqli_error($conn));


                    ?>
                  <br><br>




                  <div class="row">
                <div class="col-md-12">
                      
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Assign Worker TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email_Id</th>
                                            <th>Worker_Id</th>
                                            <th>Type</th>
                                            <th>In/Active</th>
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
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['mobile'];?></td>
                                        <td><?php echo $row['email_id'];?></td>
                                        <td><?php echo $row['worker_id'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                       
                                       <th><?php if($row['is_active']==1){echo "Available";}else{echo "Busy";} ?></th>
                                        <td><a href="actionworkercomplaint.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['is_active'];?>&cid=<?php echo $complaint_id ?>&uid=<?php echo $user_id ?>">Assign Work</a></td>
                                       
                                        <td><a href=".php?id=<?php echo $row['id']; ?>">Delete</a></td>
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
                
                </div>
            </div>
        </div>
    </div> 
     <!-- /. WRAPPER  -->
    <?php require "common/footer.php"; 
  #}
  #  else{
   #       header("location:login.php");
     ?>
</body>
</html>

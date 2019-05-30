<?php
require 'common/header.php';
require 'dbconnect.php';
session_start();


$com_prob_id=$_GET['com_prob_id'];
$qry = "SELECT * FROM common_problems WHERE  com_prob_id=$com_prob_id";

$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
 ?>
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
        <!-- /. ROW  -->
        <hr />
      <div class="row">
        <div class="col-lg-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
              <div class="panel-heading">
                    Update Common Problems
              </div>
            <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" border=2 id="dataTables-example">
                      <form action="complaintupdateprocess.php" method="GET">

                        <thead>
                            <tr>
                            <input type="hidden" name="com_prob_id" value="<?php echo $com_prob_id; ?>">
                              <th>
                                Problems Name
                              </th>
                              <td><input type="text" name="com_prob_name" value="<?php echo $row['com_prob_name'];?>"></td>
                              </tr>
                              <tr>
                            <td>
                              <input type="submit" name="btn_sb" class="btn btn-success" value="Update">
                            </td>
                            <td></td>
                          </tr>
                        </thead>
                    </form>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        
         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>
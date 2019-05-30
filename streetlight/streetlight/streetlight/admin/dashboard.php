<?php
  require "common/header.php";
  require 'dbconnect.php';
  session_start();
$qry = "SELECT * FROM worker_table WHERE is_active=1";
$rs = mysqli_query($conn,$qry);
$name = mysqli_num_rows($rs);

$qry1 = "SELECT * FROM pole_table WHERE is_active=1";
$rs1 = mysqli_query($conn,$qry1);
$pole_int = mysqli_num_rows($rs1);

$qry2 = "SELECT * FROM complaint_table WHERE  is_active=1";
$rs2 = mysqli_query($conn,$qry2);
$complaint_id = mysqli_num_rows($rs2);

$qry3 = "SELECT * FROM ward_name_table WHERE  is_active=1";
$rs3 = mysqli_query($conn,$qry3);
$ward_name = mysqli_num_rows($rs3);


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
                     <h2>Dashboard</h2> 
                     <h4>Welcome</h4>  
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <a href="manageworker.php">
                        <span class="icon-box set-icon">
                        <!-- <i class="fa fa-envelope-o"></i> -->
                        <img src="img/worker.png" class="img-thumbnail" />
                        </span>
                      <div class="text-box">
                        <p class="main-text"><?php echo $name; ?></p>
                        <p class="text-muted">Workers</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <a href="managepole.php">
                        <span class="icon-box set-icon">
                        <!-- <i class="fa fa-envelope-o"></i> -->
                        <img src="img/pole.png" class="img-thumbnail" />
                        </span>
                      <div class="text-box" >
                        <p class="main-text"><?php echo $pole_int; ?></p>
                        <p class="text-muted">Poles</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <a href="usercomplaint.php">
                        <span class="icon-box set-icon">
                        <!-- <i class="fa fa-envelope-o"></i> -->
                        <img src="img/complaint.jpg" class="img-thumbnail"/>
                        </span>
                      <div class="text-box" >
                        <p class="main-text"><?php echo $complaint_id; ?></p>
                        <p class="text-muted">Complaints</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <a href="manageward.php">
                        <span class="icon-box set-icon">
                        <!-- <i class="fa fa-envelope-o"></i> -->
                        <img src="img/ward.png" class="img-thumbnail" />
                        </span>
                      <div class="text-box" >
                        <p class="main-text"><?php echo $ward_name; ?></p>
                        <p class="text-muted">Wards</p>
                      </div>
                    </div>
                  </div>       
                 <!-- /. ROW  -->
                  <hr />
            </div>
          </div>

     <!-- /. WRAPPER  -->
    <?php require "common/footer.php";
     ?>
  </div>
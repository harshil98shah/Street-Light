<?php
require 'common/header.php';
require 'dbconnect.php';
session_start();


$pole_id=$_GET['pole_id'];
$qry = "SELECT * FROM pole_table WHERE  pole_id=$pole_id";

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
          <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  
            <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
          </div>
      </nav>   
      <?php
        require "common/navigation.php";
      ?> 
  <div id="page-wrapper" >
    <div id="page-inner">
        <!-- /. ROW  -->
        <div class="row">
                    <div class="col-md-12">
                      <h2>Manage Pole</h2>  
                    </div>
        </div> 
        <hr/>
      <div class="row">
        <div class="col-lg-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
              <div class="panel-heading">
                    Update Pole
              </div>
            <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                      <form action="poleupdateprocess.php" method="GET">

                          <div class="col-md-12">
                              <div class="form-group">
                                <label>Pole Char</label>
                                <input type="text" class="form-control"  name="pole_char" value="<?php echo $row['pole_char']; ?>">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Pole Int</label>
                                      <input type="text" class="form-control"  name="pole_int" value="<?php echo $row['pole_int']; ?>">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                    <label>Area</label>
                                    <select  class="form-control" name="area_name">
                                    <?php
                                        include 'dbconnect.php';
                                        $r=mysqli_query($conn,"SELECT * FROM `area_table`");
                                        while($c=mysqli_fetch_assoc($r)):
                                    ?>
                                    <option value="<?php echo $c['area_id']; ?>"> <?php echo $c['area_name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                    <label>Ward</label>
                                    <select class="form-control" name="ward_name">
                                    <?php
                                        include 'dbconnect.php';
                                        $r=mysqli_query($conn,"SELECT * FROM `ward_name_table`");
                                        while($c=mysqli_fetch_assoc($r)):
                                    ?>
                                    <option value="<?php echo $c['ward_id']; ?>"> <?php echo $c['ward_name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Pole Address</label>
                                      <input  type="text" class="form-control"  name="pole_add" value="<?php echo $row['pole_add']; ?>">
                              </div>
                           </div>
                           <div class="col-md-12">
                                <div class="form-group">
                                    <label>Asset type</label></br>
                                       <input type="radio" name="asset_type"  value="street Lighting" id="asset_type" <?php
                                       echo ($row['asset_type']=="street Lighting"?'checked':'');?>>street Lighting
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bracket type</label></br>
                                       <input type="radio" name="bracket_type" value="single" id="bracket_type" <?php
                                       echo ($row['bracket_type']=="single"?'checked':'');?>>Single
                                       <input type="radio" name="bracket_type" value="double" id="bracket_type" <?php
                                       echo ($row['bracket_type']=="double"?'checked':'');?>>Double
                                       <input type="radio" name="bracket_type" value="three" id="bracket_type" <?php
                                       echo ($row['bracket_type']=="three"?'checked':'');?>>Three
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lamp type</label></br>
                                       <input type="radio" name="lamp_type" value="06 w" id="lamp_type" <?php
                                       echo ($row['lamp_type']=="06 w"?'checked':'');?>>06 W
                                       <input type="radio" name="lamp_type" value="12 w" id="lamp_type" <?php
                                       echo ($row['lamp_type']=="12 w"?'checked':'');?>>12 W
                                       <input type="radio" name="lamp_type" value="18 w" id="lamp_type" <?php
                                       echo ($row['lamp_type']=="18 w"?'checked':'');?>>18 W
                                </div>
                            </div>
                                 

                           
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label>Longitude</label>
                                      <input  type="text" class="form-control"  name="longitude" value="<?php echo $row['longitude']; ?>">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label>Latitude</label>
                                      <input  type="text" class="form-control"  name="latitude" value="<?php echo $row['latitude']; ?>">
                              </div>
                           </div>

                          <button class="btn btn-success btn-lg" name="btn_sb" type="submit">Update</button>
                      </form>
                  </table>
                </div>
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
<?php
require 'common/header.php';
require 'dbconnect.php';

session_start();

$msg="";
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo "$msg";
}

$qry="SELECT * FROM area_table WHERE is_active=1 ORDER BY area_id ";
$rs=mysqli_query($conn,$qry);

$qry2="SELECT ward_name_table.ward_id,ward_name_table.is_active,ward_name_table.ward_name,area_table.area_name,area_table.area_id FROM area_table INNER JOIN ward_name_table ON area_table.area_id = ward_name_table.area_id WHERE ward_name_table.is_active!=2 ORDER BY ward_name_table.ward_id";
$rs2=mysqli_query($conn,$qry2);
$row2 = mysqli_fetch_assoc($rs2);

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
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
<?php
  require "common/navigation.php";
?> 

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Ward</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                  <div class="col-md-12 col-sm-12 col-xs-12">
               
                       
                            <div class="form-group">
                                <label>Area Name</label>
                            </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <form action="addwarddb.php" method="GET">
                                      <select name="area_id">
                                        <?php
                                        if(mysqli_num_rows($rs) > 0)
                                           {
                                              while($row = mysqli_fetch_assoc($rs))
                                              {
                                        ?>

                                            <option value="<?php echo $row['area_id']; ?>">
                                              <?php echo $row['area_name'] ?></option>   
                                          <?php
                                           }
                                          }
                                        ?>
                                      </select>
                              
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                         
                            <div class="form-group">
                                <label>Ward Name</label>
                                <input type="text" class="form-control" name="ward_name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="btn_sb" class="btn btn-success btn-lg" value="ADD">
                            </div>
                        </form>
                    
                    </div>
            </div>
        </div>
     <!-- /. WRAPPER  -->
    <?php require "common/footer.php"; ?>
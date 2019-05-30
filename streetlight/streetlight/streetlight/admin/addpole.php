<?php
require 'common/header.php';
require 'dbconnect.php';
session_start();
/*echo date("d/m/Y");<--FOR DATE

echo date("h:i:sa");<--FOR TIME*/
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
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>   
        <?php
            require "common/navigation.php";
        ?> 
    
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add pole</h2>   
                    </div>
                </div>              
                  <hr/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="addpoledb.php" method="GET">
                            <div class="form-group">
                                <label>Pole Char</label>
                                <input style="width: 50%;" class="form-control" type="text" name="pole_char">
                            </div>
                            <div class="form-group">
                                <label>Pole Int</label>            
                                <input style="width: 50%;"  class="form-control" type="text" name="pole_int">         
                            </div>
                            <div class="form-group">
                                    <label>Area</label>
                                    <select style="width: 50%;" class="form-control" name="area_name">
                                    <?php
                                        include 'dbconnect.php';
                                        $r=mysqli_query($conn,"SELECT * FROM `area_table`");
                                        while($c=mysqli_fetch_assoc($r)):
                                    ?>
                                    <option value="<?php echo $c['area_id']; ?>"> <?php echo $c['area_name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label>Ward</label>
                                    <select style="width: 50%;" class="form-control" name="ward_name">
                                    <?php
                                        include 'dbconnect.php';
                                        $r=mysqli_query($conn,"SELECT * FROM `ward_name_table`");
                                        while($c=mysqli_fetch_assoc($r)):
                                    ?>
                                    <option value="<?php echo $c['ward_id']; ?>"> <?php echo $c['ward_name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>pole address</label>
                                <input style="width: 50%;" class="form-control" type="text" name="pole_add">
                            </div> 
                            <div class="form-group">
                                <label>Asset Type</label> &nbsp &nbsp <br>
                                <label><input  type="radio"  value="street Lighting" name="asset_type" id="asset_type"> Street Lighting</label>
                            </div>
                            <div class="form-group">
                                <label>Bracket Type</label> &nbsp &nbsp<br>
                                <label><input type="radio"  value="single" name="bracket_type" id="bracket_type">Single Arm &nbsp &nbsp</label>
                                <label><input type="radio"  value="double" name="bracket_type" id="bracket_type">Double Arm &nbsp &nbsp</label>
                                <label><input type="radio"  value="three" name="bracket_type" id="bracket_type">Three Arm</label>
                            </div>
                            <div class="form-group">
                                <label>Lamp Type</label> &nbsp &nbsp<br>
                                <label> <input type="radio"  value="06 w" name="lamp_type" id="lamp_type">06 W &nbsp &nbsp</label>
                                <label><input type="radio"  value="12 w" name="lamp_type" id="lamp_type">12 W &nbsp &nbsp</label>
                                <label><input type="radio"  value="18 w" name="lamp_type" id="lamp_type">18 W </label>      
                            </div>
                            <div class="form-group">
                                <label>longitude</label>
                                <input style="width: 50%;" class="form-control" type="text" name="longitude">
                            </div>
                            <div class="form-group">
                                <label >latitude</label>
                                <input style="width: 50%;" class="form-control"  type="text"name="latitude">
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="btn_sb" class="btn btn-success btn-lg" value="ADD">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
     <!-- /. WRAPPER  -->
<?php require "common/footer.php"; ?>
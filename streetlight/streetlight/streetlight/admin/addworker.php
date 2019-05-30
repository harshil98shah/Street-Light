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
                        <h2>Add Worker</h2>   
                    </div>
                </div>              
                  <hr/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="addworkerdb.php" method="GET">
                            <div class="form-group">
                                <label>Name</label>
                                <input style="width: 50%;" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Mobile No.</label>            
                                <input style="width: 50%;"  class="form-control" type="text" name="mobile">         
                            </div>
                            <div class="form-group">
                                <label>Email Id</label>
                                <input style="width: 50%;" class="form-control" type="text" name="email_id">
                            </div> 
                            <div class="form-group">
                                <label>Worker Id</label>
                                <input style="width: 50%;" class="form-control" type="text" name="worker_id">
                            </div> 
                            
                            <div class="form-group">
                                <label>Worker Type</label> &nbsp &nbsp <br>
                                <label><input  type="radio"  value="Electrician" name="type" id="type">Electrician </label> &nbsp &nbsp
                                <label><input  type="radio"  value="Civil" name="type" id="type">Civil Engineer </label> &nbsp &nbsp
                                <label><input  type="radio"  value="Line Tester" name="type" id="type">Line Tester</label> &nbsp &nbsp

                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="btn_sb" class="btn btn-success btn-lg" value="Submit">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
     <!-- /. WRAPPER  -->
<?php require "common/footer.php"; ?>
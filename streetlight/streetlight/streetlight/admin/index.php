<?php 

require "dbconnect.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin :Street Light</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <style type="text/css">
      body{
        background: url(img/bg.jpg);
        background-attachment: fixed;
        background-size: 100%;
      }
      
    </style>
</head>
<body>
  

    <div class="container">  
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6 text-center active"><h1 class="login_title">LOGIN</h1><hr style="border: 1px solid rgb(190,190,190);" /></div>
         <div class="col-lg-3">&nbsp;</div>
      </div>

      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6">
          <form role="form" action="checklogin.php" method="POST">
              <div class="form-group">
                 <label for="disabledSelect">Email Id</label>
                 <input class="form-control" type="text" placeholder="Email Id" name="email_id" required/>
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Password </label>
                  <input class="form-control" type="password" placeholder="password" name="password" required />
              </div>
              <div class="col-lg-3">&nbsp;</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
           <div class="col-lg-6">
                   <div>
                    <button type="submit" class="btn btn-primary pull-left" name="btn_sb">Log In</button>
                  </div>
                  <!--<div>
                      <button type="submit" class="btn btn-primary pull-right btn-modal " name="btn_sb" data-toggle="modal" data-target="#fsModal">
                     Create Account</button>
                  </div>-->
            </div>
             <div class="col-lg-3">&nbsp;</div>
        </div>
      </form>
    </div>

    <!--<div id="fsModal"class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog"> 
                  <div class="modal-content">   
                      <div class="modal-header">
                        <h1 id="myModalLabel" class="modal-title">
                            <div class="row">
                                <div class="col-lg-3">&nbsp;</div>
                                <div class="col-lg-6 text-center active"><h2>REGISTRATION</h2><hr></div>
                                 
                                 <div class="col-lg-3">&nbsp;</div>
                                
                              </div>
                        </h1>
                      </div>
                      <div class="modal-body">
                          <form  action="adduserdb.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">&nbsp;</div>
                                    <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="disabledSelect">Name</label>
                                             <input class="form-control" type="text" placeholder="Name" name="name" />
                                          </div>
                                          <div class="form-group">
                                             <label for="disabledSelect">Email Id</label>
                                             <input class="form-control" type="text" placeholder="Email Id" name="email_id" />
                                          </div>
                                          <div class="form-group">
                                              <label for="disabledSelect">Password </label>
                                              <input class="form-control" type="password" placeholder="password" name="password" />
                                          </div>
                                          <div class="col-lg-3">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">&nbsp;</div>
                                       <div class="col-lg-6">
                                               <div>
                                                <button type="submit" class="btn btn-primary pull-left" name="btn_sb">Register</button>
                                              </div>
                                        </div>
                                        <div class="col-lg-3">&nbsp;</div>
                                </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary"
                                  data-dismiss="modal">
                            Close
                          </button>
                      </div>
                  </div>
            </div>
    </div>-->

  <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
  <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
  <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
  <script src="js/dataTables/jquery.dataTables.js"></script>
  <script src="js/dataTables/dataTables.bootstrap.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTables-example').dataTable();
      });
    </script>
<script src="js/custom.js"></script>  
</body>
</html>
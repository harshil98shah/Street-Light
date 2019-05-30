<?PHP $page = basename($_SERVER['PHP_SELF']); ?>
  <!-- /. NAV TOP  -->
<html>
<body>              
     
  <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                     <li class="text-center">
                        <img src="img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a class = "<?PHP echo ($page=="dashboard.php") ? "active-menu" : ""; ?>"  href="dashboard.php"> Dashboard</a>
                       
                    </li>
                                  
                   
                    <li>
                        <a href="#" class="<?PHP echo ($page=="addarea.php") ? "active-menu" : ""; ?> <?PHP echo ($page=="managearea.php") ? "active-menu" : ""; ?>">Area Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addarea.php"  class = "">Add Area</a>
                            </li>
                            <li>
                                <a href="managearea.php">Manage Area</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="<?PHP echo ($page=="addcomplaint.php") ? "active-menu" : ""; ?> <?PHP echo ($page=="managecomplaint.php") ? "active-menu" : ""; ?>">Common Problem Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addcomplaint.php">Add Common Problem</a>
                            </li>
                            <li>
                                <a href="managecomplaint.php">Manage Common Problems</a>
                            </li>
                            
                        </ul>
                    </li>
                      <li>
                        <a href="#" class="<?PHP echo ($page=="addward.php") ? "active-menu" : ""; ?> <?PHP echo ($page=="manageward.php") ? "active-menu" : ""; ?>">Ward Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addward.php">Add Ward</a>
                            </li>
                            <li>
                                <a href="manageward.php">Manage Ward</a>
                            </li>
                            
                        </ul>
                      </li>
                            
                       <li>
                        <a href="#" class="<?PHP echo ($page=="addpole.php") ? "active-menu" : ""; ?> <?PHP echo ($page=="managepole.php") ? "active-menu" : ""; ?>">Pole Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addpole.php">Add Pole</a>
                            </li>
                            <li>
                                <a href="managepole.php">Manage Pole</a>
                            </li>
                            
                        </ul>
                      </li>

                      <li>
                        <a href="#" class="<?PHP echo ($page=="addworker.php") ? "active-menu" : ""; ?> <?PHP echo ($page=="manageworker.php") ? "active-menu" : ""; ?>">Worker Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addworker.php">Add Worker</a>
                            </li>
                            <li>
                                <a href="manageworker.php">Manage Worker</a>
                            </li>
                            
                        </ul>
                      </li>
                    <li>
                        <a href="#" class="<?PHP echo ($page=="usercomplaint.php") ? "active-menu" : ""; ?>">Complaint Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                <a href="usercomplaint.php">Manage Complaints</a>
                            </li>
                            
                        </ul>
                    </li>

                      <li>
                        <a href="#" class="<?PHP echo ($page=="complaint_assign_worker.php") ? "active-menu" : ""; ?>">Complaint Assign Worker<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="complaint_assign_worker.php">Manage Complaint Assign</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="<?PHP echo ($page=="managefeedback.php") ? "active-menu" : ""; ?>"> Manage FeedBack<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="managefeedback.php">Manage FeedBack</a>
                            </li>
                            
                        </ul>
                    </li>
                        
                </ul>        
            </div>
  </nav>
</body>
</html>
        
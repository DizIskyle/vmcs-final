<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">PDF Viewer</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo getenv('SYS_NAME') ?></a>
            </div> 
            <!-- /.navbar-header -->
            
            <ul class="nav navbar-top-links navbar-right">  
            <?php if (isset($_SESSION['system_logged_in'])==false) { ?>
                <li><a href="login.php">Login</a></li>
            <?php } else { ?>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="src/img/fixtures/default_employee_img.JPG" style="width: 30px" class="profile-image img-circle">   <?php echo $_SESSION['system_userlastname'] ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--li><a href="dashboard.php">Go to Dashoard</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php?page=help">Help</a></li>
                        <li><a href="index.php?page=settings">Settings</a></li>
                        <li><a href="index.php?page=changepass">Change Password</a></li-->
                        <li><a href="javascript:void(0);" onclick="logout('1');">Sign Out</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-sliders fa-fw"></i> Dashboard</a>
                        </li>
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder"></i> Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li> <a href="admin.php?page=customers" class="fa fa-users">  Customer</a></li>
                                <li> <a href="admin.php?page=veterinarians" class="fa fa-user-md">  Veterinarian</a></li>
                                <li> <a href="admin.php?page=admin" class="fa fa-user">  Admin</a></li>
            
                            </ul>
                            
                        </li>  
                        <li>
                            <a href="admin.php?page=schedule"><i class="fa fa-calendar fa-fw"></i> My Schedule</a>
                        </li>
                        <li>
                            <a href="admin.php?page=report"><i class="fa fa-calendar fa-fw"></i> Vet Customer Schedule</a>
                        </li>
                        <!--li>
                            <a href="admin.php?page=appointment"><i class="fa fa-calendar fa-fw"></i> Appointment</a>
                        </li-->
                        <!--li>
                            <a href="admin.php?page=pets"><i class="fa  fa-optin-monster fa-fw"></i> Pets</a>
                        </li-->
                        <li>
                            <a href="admin.php?page=pets-category"><i class="fa  fa-optin-monster fa-fw"></i> Pets Category</a>
                        </li>
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder fa-fw"></i> Inventory <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="admin.php?page=stocks">Item</a></li>
                                <li>  <a href="admin.php?page=stocks-category">Stock Category</a></li>
                                <li> <a href="admin.php?page=report">Reports</a></li>
                            </ul>
                        </li>  
    
                        <li>
                            <a href="admin.php?page=videocall"><i class="fa fa-video-camera fa-fw"></i> Start Meeting</a>
                        </li>
                                                  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <script>
            $('.nav_foldericon').click(function() {
                $(this).find('i').toggleClass('fa-folder fa-folder-open-o')
            });
        </script>

        
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
            <!--
            <ul class="nav navbar-top-links navbar-right">  
                <?php 
                    if (isset($_SESSION['mists_employee_logged_in'])==false) { 
                ?>
                <li><a href="index.php">Login</a></li>
                <?php 
                } else { ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="dist/img/fixtures/default_employee_img.jpg" style="width: 30px" class="profile-image img-circle">   <?php echo $_SESSION['mists_userlastname'] ?>  <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=docs">Documentation</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=help">Help</a></li>
                            <li><a href="index.php?page=settings">Settings</a></li>
                            <li><a href="index.php?page=changepass">Change Password</a></li>
                            <li><a href="javascript:void(0);" onclick="logout('1');">Sign Out</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>-->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php?page=dashboard"><i class="fa fa-sliders fa-fw"></i> Dashboard</a>
                        </li>
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Sales <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="index.php?page=jobs">Job Tickets</a></li>
                            </ul>
                        </li>  
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Coordinator <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="index.php?page=coordinator-toassign">To Assign</a></li>
                                <li> <a href="index.php?page=coordinator-review">To Review</a></li>
                                <li> <a href="index.php?page=coordinator-done">Done</a></li>
                            </ul>
                        </li>  
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Pre-press <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="index.php?page=ppress-todo">To Do</a></li>
                                <li> <a href="index.php?page=ppress-done">Done</a></li>
                            </ul>
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
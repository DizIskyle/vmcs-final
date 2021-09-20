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
                <?php 
                    if (isset($_SESSION['system_logged_in'])==false) { 
                ?>
                <li><a href="index.php">Login</a></li>
                <?php 
                } else { ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="dist/img/fixtures/default_employee_img.jpg" style="width: 30px" class="profile-image img-circle">   <?php echo $_SESSION['system_userlastname'] ?>  <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Go main page</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=help">Help</a></li>
                            <li><a href="index.php?page=settings">Settings</a></li>
                            <li><a href="index.php?page=changepass">Change Password</a></li>
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
                            <a href="dashboard.php"><i class="fa fa-sliders fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=profile"><i class="fa fa-address-book fa-fw"></i> Profile</a>
                        </li>
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Vitamins <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="dashboard.php?page=vitamins">List</a></li>
                                <li> <a href="dashboard.php?page=vitamins">Report</a></li>
                            </ul>
                        </li>  
                        <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Pets <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">Cat <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li> <a href="dashboard.php?page=vitamins">List</a></li>
                                        <li> <a href="dashboard.php?page=vitamins">Report</a></li>
                                    </ul>
                                </li>
                                <li> <a href="dashboard.php?page=pets">Dog</a></li>
                                <li> <a href="dashboard.php?page=coordinator-done">Others</a></li>
                            </ul>
                        </li>  
                        <?php 
                        $cat=$_SESSION['system_usercategory'];
                        if ($cat=="1") {
                            ?>
                            <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Admin <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="dashboard.php?page=ppress-todo">To Do</a></li>
                                <li> <a href="dashboard.php?page=ppress-done">Done</a></li>
                            </ul>
                        </li>  
                            <?php
                        } else if($cat=="2") {?>       
                                <li id="nav_foldericon">        
                                    <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Vet <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li> <a href="dashboard.php?page=ppress-todo">To Do</a></li>
                                        <li> <a href="dashboard.php?page=ppress-done">Done</a></li>
                                    </ul>
                                </li> 
                                <li id="nav_foldericon">        
                                    <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Vet <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li> <a href="dashboard.php?page=ppress-todo">To Do</a></li>
                                        <li> <a href="dashboard.php?page=ppress-done">Done</a></li>
                                    </ul>
                                </li>  
                                <li id="nav_foldericon">        
                                    <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Vet <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li> <a href="dashboard.php?page=ppress-todo">To Do</a></li>
                                        <li> <a href="dashboard.php?page=ppress-done">Done</a></li>
                                    </ul>
                                </li>    

                            <?php

                        } else if($cat=="3") {
                            ?>
  
  <li id="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Customer <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="dashboard.php?page=ppress-todo">To Do</a></li>
                                <li> <a href="dashboard.php?page=ppress-done">Done</a></li>
                            </ul>
                        </li>  
                            <?php
                        }else{

                        }
                        
                        
                        ?>
                        
                                                  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <script>
            $('#nav_foldericon').click(function() {
                $(this).find('i').toggleClass('fa-folder fa-folder-open-o')
            });
        </script>
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="src/img/fixtures/default_employee_img.JPG" style="width: 30px" class="profile-image img-circle">  <?php echo $_SESSION['system_userlastname'] ?>    <b class="caret"></b></a>
                        
                        <ul class="dropdown-menu">
                        <li><a href="index.php">Homepage</a></li>
                            <li role="separator" class="divider"></li>
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
                        <!--li>
                            <a href="dashboard.php?page=veterinarians"><i class="fa fa-address-card-o fa-fw"></i> Veterinarians</a>
                        </li-->
                        <li>
                            <a href="dashboard.php?page=profile"><i class="fa fa-address-book-o fa-fw"></i> Profile</a>
                        </li>
                        <!--li>
                            <a href="dashboard.php?page=customers"><i class="fa fa-address-book-o fa-fw"></i> Customers</a>
                        </li-->
                        
                        <!--li>
                            <a href="dashboard.php?page=admin"><i class="fa fa-address-book-o fa-fw"></i> Admin</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=schedule"><i class="fa fa-calendar fa-fw"></i> My Schedule</a>
                        </li-->
                        <li>
                            <a href="dashboard.php?page=pets"><i class="fa  fa-optin-monster fa-fw"></i> Pets</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=appointment"><i class="fa fa-calendar fa-fw"></i> Appointment</a>
                        </li>
                        
                        <!--li>
                            <a href="dashboard.php?page=pets-category"><i class="fa  fa-optin-monster fa-fw"></i> Pets Category</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=breeding"><i class="fa  fa-optin-monster fa-fw"></i> Breeding</a>
                        </li-->
                        <li>
                            <a href="dashboard.php?page=stocks"><i class="fa  fa-cube fa-fw"></i> Stocks</a>
                        </li>
                        
                        <!--li>
                            <a href="dashboard.php?page=stocks-category"><i class="fa  fa-cube fa-fw"></i> Stocks Category</a>
                        </li-->
                        <!-- <li class="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Sales <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="index.php?page=jobs">Job Tickets</a></li>
                            </ul>
                        </li> 
                        <li class="nav_foldericon">
                            <a href="#"><i  class="fa fa-folder-o fa-fw"></i> Pets <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="index.php?page=ppress-todo">To Do</a></li>
                                <li> <a href="index.php?page=ppress-done">Done</a></li>
                            </ul>
                        </li>  -->                            
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
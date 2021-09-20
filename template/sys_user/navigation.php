<nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"> ragay pet wellness center</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
        
            <img alt="Brand" src="src/img/fixtures/company_logo/company_logo2.2.png" width=45px; height=45px;>
           
        </a>
        <span class="Text"> RAGAY PET WELLNESS CENTER </span>
    </div> 
    <!-- /.navbar-header -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" id="vmcs_navigation">
        <ul class="nav navbar-nav navbar-right"> 
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#contact">Contact</a></li>   
            <li><a href="index.php?page=services">Services</a></li>            
            <li><a href="index.php?page=register">Register</a></li>
            <?php if (isset($_SESSION['system_logged_in'])==false) { ?>
                <li><a href="login.php">Login</a></li>
            <?php } else { ?>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="dist/img/fixtures/default_employee_img.jpg" style="width: 30px" class="profile-image img-circle">   <?php echo $_SESSION['system_userlastname'] ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="dashboard.php">Go to Dashoard</a></li>
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
    </div><!-- /.navbar-collapse -->
    
</nav>
<script>
    $('#nav_foldericon').click(function() {
        $(this).find('i').toggleClass('fa-folder fa-folder-open-o')
    });
</script>


<style>
    .Text {
    font-family: times new roman;
    font-weight: bold;
    color: black;
    line-height: 70px;
    margin-left: 5px;
    font-size: 165%;
}
</style>    


<div class="row">
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4  col-xs-offset-1 col-sm-offset-1 col-md-offset-4 pallet">
                <form class="form-login" method="POST" id="login-form">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >
                        <p style="font-size: 23px;margin-bottom: 0px; padding-bottom: 0px; line-height: 25px;"><?php echo  getenv('SYS_NAME')?></p>
                        <p style="padding-top: 0px; margin-top: 0px;">Create Your <?php echo  getenv('SYS_NAME')?> Account</p>
                        <br> 
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="error"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="user_username" id="user_username" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="user_firstname" id="user_firstname" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Middle Name" name="user_middlename" id="user_middlename" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="user_lastname" id="user_lastname" />
                            <span id="check-e"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="user_email" id="user_email" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="user_password" id="user_password" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="user_confirmpassword" id="user_confirmpassword" />
                            <span id="check-e"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block" name="submit_btn" id="submit_btn"> Submit</button>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="login.php" class="forgots"><b><u>Already have an Account?Sign In</u></b></a>
                    </div> 
                </form>
        </div>
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4  col-xs-offset-1 col-sm-offset-1 col-md-offset-4" style="margin-top: 15px;">
                <p style="font-size: 9px; color: white;">*Our website supports the latest browser versions to ensure your privacy and security. To ensure access and for best viewing experience, please upgrade to the latest versions of Mozilla Firefox, Google Chrome, Safari or Internet Explorer as soon as possible</p>
                <p style="font-size: 9px; color: white;">*Detailed instructions can be found <a href="index.php?page=instructions" class="logininfo"><b>here</b></a>.</p>
            </div>
        </div>


<script type="text/javascript">
    $('document').ready(function() { 
        /* handling form validation */
        $("#login-form").validate({
            rules: {
                user_username: {
                    required: true,
                    minlength: 5
                },
                user_firstname: {
                    required: true,
                    minlength: 2
                },
                
                user_lastname: {
                    required: true,
                    minlength: 2
                },
                user_email: {
                    required: true,
                    email: true
                },
                user_password: {
                    required: true,
                    minlength: 5
                },
                user_confirmpassword: {
                    required: true,
                    minlength: 5,
                    equalTo: "#user_password"
                }  
            },
            messages: {
                user_username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 5 characters"
                },
                user_firstname: {
                    required: "Please enter your first name",
                    minlength: "Your first name must consist of at least 2 characters"
                },
                user_lastname: {
                    required: "Please enter your last name",
                    minlength: "Your last name must consist of at least 2 characters"
                },
                user_email: "Please enter a valid email address",
                user_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                user_confirmpassword: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
            },
            submitHandler: loginsubmitForm   
        });    
        /* Handling login functionality */
        function loginsubmitForm() {     
            var data = $("#login-form").serialize();   
            console.log(data);             
            $.ajax({                
                type : 'POST', 
                url  : 'pages_exe/authentication/register_exe.php',
                data : data,
                success: function(data, status) {
                    console.log(data);
                    var newdata = JSON.parse(data);

                    console.log(newdata.code);


                    if (newdata.code == "exist") {
                        alert("Email already exist");
                    } else {
                        var conf = confirm("Successfully registered. Click OK to redirect to login page");
                        if (conf == true) {
                            setTimeout(' window.location.href = "login.php"; ',1000);                            
                        } else {
                            setTimeout(' window.location.href = "login.php"; ',1000);
                        }
                        
                    }
                }
            });
            return false;
        }   
    });
</script>
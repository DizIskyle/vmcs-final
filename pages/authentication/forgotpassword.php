

<div class="row">
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4  col-xs-offset-1 col-sm-offset-1 col-md-offset-4 pallet">
                <form class="form-login" method="POST" id="login-form">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >
                        <p style="font-size: 23px;margin-bottom: 0px; padding-bottom: 0px; line-height: 25px;"><?php echo  getenv('SYS_NAME')?></p>
                        <p style="padding-top: 0px; margin-top: 0px;">Forgot Your Password?</p>
                        <p style="padding-top: 0px; margin-top: 0px;">Enter the username you use to sign into your <?php echo  getenv('SYS_NAME')?> Account, which is usually your email address.</p>
                        <br> 
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="error"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="user_employeeid" id="user_employeeid" />
                            <span id="check-e"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block" name="login_button" id="login_button"> Submit</button>
                        </div>
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
                user_password: {
                    required: true,
                },
                user_employeeid: {
                    required: true,
                    email: false
                },  
            },
            messages: { 
                user_password:{
                  required: "Please enter your password"
                 },
                user_employeeid: "Please enter your Email",
            },
            submitHandler: loginsubmitForm   
        });    
        /* Handling login functionality */
        function loginsubmitForm() {     
            var data = $("#login-form").serialize();                
            $.ajax({                
                type : 'POST', 
                url  : 'pages_exe/login_exe.php',
                data : data,
                beforeSend: function(){ 
                    $("#error").fadeOut();
                    $("#login_button").html('Sending...');
                },
                success : function(data,status){
                    var module1 = JSON.parse(data);
                    if (data!=999) {
                        $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Signing In ...');
                        setTimeout(' window.location.href = "index.php"; ',1000);
                    } else {
                        $("#error").fadeIn(1000, function(){                        
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email or password does not exist. Or email not yet verified!</div>');
                            $("#login_button").html('Sign In');
                        });
                    }
                }
            });
            return false;
        }   
    });
</script>
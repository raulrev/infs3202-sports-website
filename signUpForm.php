<?php 
/* Main page with two forms: sign up and log in */
require 'databaseConnect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up/Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/sports.css">

</head>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['login'])) { //user logging in
            require 'login.php';
        }
        elseif (isset($_POST['register'])) { //user registering
            require 'register.php';
        }
    }
?>
<body>      
    <div id="testcontent" class="container-fluid text-center">
        <div class="row content">
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <!-- Title and logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="sport.php"><span class="fa fa-qq fa-1x"></span>   Web Name</a>
                </div>
            </div>
        </div>
    </div>
    
      <?php include 'sideNavigationMenu.php'; ?>
            <!-- center container col -->
    <div class="forma col-md-8" style="background-color:#f1f1f1;">    
        <ul class="tab-group">
            <li class="tab active"><a href="#login">Log In</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>
        
        <div class="tab-content ">

            <div id="login">   
            <h1>Welcome Back!</h1>
            
            <form action="signUpForm.php" method="post" autocomplete="off">
            
                <div class="field-wrap">
                <label>
                Email Address<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" name="email"/>
            </div>
            
            <div class="field-wrap">
                <label>
                Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" name="password"/>
            </div>
            
            <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
            
            <button class="button button-block" name="login" />Log In</button>
            
            </form>

            </div>
            
            <div id="signup">   
            <h1>Sign Up for Free</h1>
            
            <form action="signUpForm.php" method="post" autocomplete="off">
            
            <div class="top-row">
                <div class="field-wrap">
                <label>
                    First Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name='firstname' />
                </div>
            
                <div class="field-wrap">
                <label>
                    Last Name<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off" name='lastname' />
                </div>
            </div>

            <div class="field-wrap">
                <label>
                Email Address<span class="req">*</span>
                </label>
                <input type="email"required autocomplete="off" name='email' />
            </div>
            
            <div class="field-wrap">
                <label>
                Set A Password<span class="req">*</span>
                </label>
                <input type="password"required autocomplete="off" name='password'/>
            </div>
            
            <button type="submit" class="button button-block" name="register" />Register</button>
            
            </form>

            </div>  
            
        </div><!-- tab-content -->
        
    </div> <!-- /form -->
    </div>
    </div>
    <?php include 'include/footer.php';?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/signlog.js"></script>
    

</body>
</html>

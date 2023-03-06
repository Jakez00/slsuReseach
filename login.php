<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link href="css/tooplate-clean-work.css" rel="stylesheet">
    <style>
       body{
            background-image: url("assets/images/bg.JPG");
            background-repeat:no-repeat;
            background-size:cover; 
            height: 100%; 
        }
        #auth-left{
            background-color: rgba(255, 255, 255, 0.9);
            margin-top: 10px; 
            border-radius: 25px;
            margin-left: 30px;
            margin-right: 30px;
        }

        /* h5 {
            text-decoration: underline;
            } */
        
                    
        
    </style>
</head>

<body>

<div id="auth">    
    <div align="right" class="form-group  p-2 " id="front">
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn " href="front.php">Home</a>
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn " href="login.php">Sign in</a>
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn" href="registration.php">Sign up</b></a>           
    </div>
    <div class="row ">
        <div class="col-lg-6 col-xl-5 col-sm-8">
            <div id="auth-left">
                <h6 class="auth-title">Login Form</h6>
                <?php
                    if (isset($_SESSION['ErrorMsg'])){
                        echo '<div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i> '.$_SESSION['ErrorMsg'].'</div>';
                        unset($_SESSION['ErrorMsg']);
                    }
                ?>
                <form method="post" action="processlogin.php">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username" name = "email" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name = "password" required>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
                </form>
                <!-- <div class="text-left mt-4 text-lg fs-6">  
                    <h5><a class="font-bold" href="#">Forgot Password</a></h5>
                </div> -->
                <div class="text-left mt-2 text-lg fs-5">  
                    <p><a class="font-bold" href="registration.php">Don't have account? Register!</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block" >
            <div id="bg-cover">

            </div>
        </div>
    </div>

</div>
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link href="css/tooplate-clean-work.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css\styles.css">
    <style>
        body{
            background-image: url("assets/images/bg.JPG");
            background-repeat:no-repeat;
            background-size:cover; 
            height: 100dvh; 
        }
        #auth-left{
            background-color: rgba(255, 255, 255, 0.9);
            margin-top: 60px; 
            border-radius: 25px;
            margin-left: 30px;
            margin-bottom: 117px;
            margin-right: 30px;
            width: 500px;
        }
        footer{
            position: static;
        }
    </style>
</head>

<body>
<div id="auth">
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="assets\images\logo.png" alt="" >
        <p>Research and Innovation Monitoring and Evaluation System</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="front.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-nowrap" href="registration.php">SIGN UP</b></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-lg-6 col-xl-5 col-sm-8">
            <div id="auth-left"> 
                
                <form method="post" id="registrationform" >
                    <h1 class="auth-title text-nowrap">Sign Up</h1> 
                <div class = "row">
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>First Name</label>
                                <input type = "text" class = "form-control" name = "firstname" required>
                            </div>
                        </div>

                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Middle Name</label>
                                <input type = "text" class = "form-control" name = "middlename">
                            </div>
                        </div>

                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Last Name</label>
                                <input type = "text" class = "form-control" name = "lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Email Address</label>
                                <input type = "email" class = "form-control" name = "email" required>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Department</label>
                                <select class="form-control" name="department" id="department">
                                    <option value="CCSIT">CCSIT</option>
                                    <option value="COE">COE</option>
                                    <option value="COT">COT</option>
                                    <option value="CCJ">CCJ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Phone</label>
                                <input type = "text" class = "form-control" name = "phone" required>
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Password</label>
                                <input type = "password" class = "form-control" name = "password" required>
                                <input type = "hidden" name= "accounttype" value = '2'>
                            </div>
                        </div>
                        <div class = "col-lg-12 col-xs-12">
                            <div class = "form-group">
                                <label>Confirm Password</label>
                                <input type = "password" class = "form-control" name = "password2" required>
                                <input type = "hidden" class = "form-control" name = "external" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="notifmsg">
                        
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Register</button>
                </form>
                <div class="text-center  mt-2 text-lg fs-5">
                    <h4><a class="font-bold" href="login.php">Login?</a>.</h4>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="container">
        <div class="row">
        <div class="col-6">
        <h4 style="font-size: 12pt; line-height: 115%; font-family: 'Segoe UI', sans-serif;" class="mt-5"> <span class="text-nowrap"> Southern Leyte State University </span> © 2022 All Rights Reserved
                                    <br>San Roque, Sogod, Southern Leyte, 6606 Philippines.</h4>
        </div>
        <div class="col-6 text-right">
            <h6 class="mt-5" >Contact Us |
            <a href="mailto:president@southernleytestateu.edu.ph" target="_blank"><i class="fa-solid fa-envelope"></i></a> |
            <a href="https://www.facebook.com/southernleytestateu/" target="_blank"><i class="fa-brands fa-facebook"></i></a> |
            <a href="https://www.youtube.com/channel/UC5TNFQBosbjedGcuPa0UW1A" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </h6>
        <a href="https://gmail.com" target="_blank" style="text-decoration: none; color: white; font-weight: normal;"><i class="fa fa-envelope"></i> Southern Leyte State U Webmail Login</a>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            
        </div>
        </div>
    </div>
    </footer>
</div>

    <script>
        $("#registrationform").on("submit",function(){
            event.preventDefault();
            $.ajax({
            method: "POST",
            url: "processEmployee.php",
            data: $("#registrationform").serialize(),
        })
        .done(function( msg ) {
            if (msg == "1"){ 
                var msg = '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i>  Register Successful!</div>';
                $(".notifmsg").html(msg);
                $('#registrationform')[0].reset();
            }else{
                var msg = '<div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i> '+msg+'</div>';
                $(".notifmsg").html(msg);
            }
        
                
        });
        })
    </script>
</body>

</html>

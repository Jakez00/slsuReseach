<?php
    session_start();
?>

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
    <style>
        body{
            background-image: url("assets/images/bg.JPG");
            background-repeat:no-repeat;
            background-size:cover; 
            height: 100%; 
        }
        #auth-left{
            background-color: rgba(255, 255, 255, 0.9);
            margin-top: 70px; 
            border-radius: 25px;
            margin-left: 30px;
            margin-right: 30px;
        }
        #front ms-auto{

            column-count: 2;
            column-gap: 0px;
        }
        .li1 {
         border: 1px solid blue;
        }
    </style>
</head>

<body>
<div id="auth">
    <div align="right" class="form-group  p-2 " id="front">
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn " href="front.php">Home</a>
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn " href="login.php">Sign in</a>
        <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn" href="registration.php">Sign up</b></a>           
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-5 col-sm-8">
            <div id="auth-left"> 
                
                <form method="post" id="registrationform" >
                    <h1 class="auth-title">Registration</h1> 
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
                    
                    <p><a class="font-bold" href="login.php">Login?</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="bg-cover">

            </div>
        </div>
    </div>

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

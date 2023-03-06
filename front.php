<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="css/tooplate-clean-work.css" rel="stylesheet">
    <style>
        body{
            background-image: url("assets/images/Untitled design.png");
            background-repeat:no-repeat;
            background-blend-mode: multiply;
            background-size: cover; 
            height: 100%; 
        }
    </style>
</head>

<body>
    <div id="auth">
        <div id="front" align="right" class="form-group p-2" >
            <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn" href="front.php">home</a>
            <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn" href="login.php">Sign in</a>
            <a class="form-group custom-btn custom-border-btn custom-btn-bg-white btn" href="registration.php">Sign up</b></a>           
        </div>
    </div>
    
</body>

</html>

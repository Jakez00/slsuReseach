<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css\styles.css">
    <style>
        body{
            background-image: url("assets/images/bg.jpg");
            background-size: cover;
            height: 100dvh;
        }       
    </style>
</head>

<body>
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
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>

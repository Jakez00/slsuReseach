<?php
session_start();
    require_once('dbconnection.php');
    $password =  md5($_POST['password']); 
    $newpassword = md5($_POST['newpassword']); 
    $newpassword2 = md5($_POST['newpassword2']); 
    $userid = $_SESSION['empid'];
    if ($password <> $_SESSION['password']) {
       echo "Current password not match.";
    }else {
        if ($newpassword <> $newpassword2) {
            echo json_encode(array("message"=>"New password not match."));
        }else {
            $_SESSION['password'] = $newpassword;
            mysqli_query($db,"UPDATE users set password = '$newpassword' where accountholder = '$userid'");
            echo "1";
             

        }
    }
?>
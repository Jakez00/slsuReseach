<?php
    session_start();
    require_once('dbconnection.php');
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $msg = "";
    if (empty($email)){
        if (empty($msg)){
            $msg = "Empty Email";
        }else{
            $msg .= "<br>Empty Email";
        }
    }

    if (empty($password)){
        if (empty($msg)){
            $msg = "Empty Password";
        }else{
            $msg .= "<br>Empty Password";
        }
    }

    if (!empty($msg)){
        $_SESSION['ErrorMsg'] = $msg;
       header("Location: login.php");
        exit();
    }else{
        $sql = "SELECT u.*, e.firstname,e.lastname,e.department FROM users u 
                    LEFT OUTER JOIN employee e ON u.accountholder = e.id
                WHERE u.email='".$email."' and u.password='".md5($password)."'";
        $result = mysqli_query($db, $sql); 
        $user = mysqli_fetch_assoc($result);
   
        if (empty($user)){
            $_SESSION['ErrorMsg'] = "Your login credential don't match an account in our system";
            header("Location: login.php");
        }else{
         
            if ($user['isverify'] == 1) {
                $_SESSION['islogin'] = 1;
                $_SESSION['userid'] = $user['id'];
                $_SESSION['empid'] = $user['accountholder'];
                $_SESSION['fullname'] = $user['firstname']." ".$user['lastname'];
                $_SESSION['accounttype'] = $user['accounttype'];
                $_SESSION['department'] = $user['department'];
                $_SESSION['isverify'] = $user['isverify'];
                $_SESSION['password'] = md5($password);
                header("Location: index.php");
            }else { 
                $_SESSION['ErrorMsg'] = "Your account is not verified, please contact administrator!";
                header("Location: login.php");
            }
        }
    }
   
?>


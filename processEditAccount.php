<?php
    require_once('dbconnection.php');

    $accountholder = $_POST['accountholder'];
    $email = $_POST['email']; 
    $newpassword = $_POST['newpassword'];
    $newpassword2 = $_POST['newpassword2'];
    



    $msg = "";
 
    if (empty($newpassword&&$newpassword2)){
        if (empty($msg)){
            $msg = "Empty new password";
        }else{
            $msg .= "<br>Empty new password";
        }
    }

    if (!empty($msg)){
        echo $msg;
    }else{
        $sql = "SELECT * from users
                WHERE accountholder = '".$accountholder."'";
        $result = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($result);
     
            if($newpassword == $newpassword2){

                $query = "UPDATE users set email = '$email', password = md5($newpassword)
                       where accountholder = '$accountholder'";
                $res = mysqli_query($db, $query);
            echo "1";
            }
            else{
                echo "New password do not match!";
            } 
            
       
        
    }
?>
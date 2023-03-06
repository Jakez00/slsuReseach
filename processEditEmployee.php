<?php
    require_once('dbconnection.php');
    
    $id = $_POST['id'];

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $accounttype = $_POST['accounttype'];



    $msg = "";
    if (empty($firstname)){
        if (empty($msg)){
            $msg = "Empty First Name";
        }else{
            $msg .= "<br>Empty Name";
        }
    }

    if (empty($lastname)){
        if (empty($msg)){
            $msg = "Empty Last Name";
        }else{
            $msg .= "<br>Empty Last Name";
        }
    }

    if (empty($phone)){
        if (empty($msg)){
            $msg = "Empty Phone Number";
        }else{
            $msg .= "<br>Empty Phone Number";
        }
    }

    if (!empty($msg)){
        echo $msg;
    }else{
        $sql = "SELECT * from employee
                WHERE id = '".$id."'";
        $result = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($result);
        $naakapareha = false;
        if ($user['firstname']!=$firstname or $user['lastname']!=$lastname){
            $sql = "SELECT * from employee
            WHERE firstname = '".$firstname."' and lastname = '".$lastname."'";
            $result = mysqli_query($db, $sql);
            $user2 = mysqli_fetch_assoc($result);

            if (!empty($user2)){
                echo "Employee already exist!";
                $naakapareha = true;
            }
        }

        if (!$naakapareha){
            $query = "UPDATE employee set firstname = '$firstname', lastname = '$lastname', middlename ='$middlename', phone = '$phone', department = '$department'
                        where id = '$id'";
            $res = mysqli_query($db, $query);

            mysqli_query($db,"UPDATE users set accounttype = '$accounttype' where accountholder = '$id'");
            if ($res){
                echo "1";
            }else{
                echo "Error saving employee!";
            }
        }
       
        
    }
?>
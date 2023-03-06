<?php
    require_once('dbconnection.php');
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $accounttype = $_POST['accounttype'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pword = md5($_POST['password']);
    $pword2 = md5($_POST['password2']);

    if (!isset($_POST['external'])) {
        $status = 1;
    }else {
        $status = 0;
    }

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
    if (empty($email)){
        if (empty($msg)){
            $msg = "Empty Email Address";
        }else{
            $msg .= "<br>Empty Email Address";
        }
    }
    if (empty($phone)){
            if(empty($msg)){
                $msg = "Empty Phone number";
            }else{
                $msg .= "<br>Empty Phone Number";
            }
    }

    if (empty($pword)){
        if (empty($msg)){
            $msg = "Empty password";
        }else{
            $msg .= "<br>Empty password";
        }
    }
    if ($pword != $pword2) {
        $msg = "The two passwords do not match";
      }

    if (!empty($msg)){
        echo $msg;
    }else{

        $sql = "SELECT * from employee
                WHERE firstname='".$firstname."' and lastname='".$lastname."'";
        $result = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($result);
        if (empty($user)){
            $query = "INSERT INTO employee (firstname, lastname, middlename,phone,department)
                        VALUES('$firstname', '$lastname', '$middlename', '$phone', '$department')";
            $res = mysqli_query($db, $query);
            if ($res){
                echo "1";
                $id = mysqli_insert_id($db);
                $query = "INSERT INTO users (email, password, accounttype,accountholder,isverify) 
                        VALUES('$email', '$pword', '$accounttype', '$id','$status')";
            $res = mysqli_query($db, $query);
            }else{
                echo "Error saving employee!";
            }
        }else{
            echo "Employee already exist!";
        }
      
    }
?>
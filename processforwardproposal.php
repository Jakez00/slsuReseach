<?php
session_start();
date_default_timezone_set('Asia/Manila');
require_once('dbconnection.php');

$id = $_POST['proposal_id'];
$comment = $_POST['comment'];




$msg = "";
if (empty($comment)){
    if (empty($msg)){
        $msg = json_encode("Empty comment");
    }else{
        $msg .= json_encode("<br>Empty comment");
    }
}
if(empty($_FILES)){
    if (empty($msg)){
        $msg = json_encode("Empty file");
    }else{
        $msg .= json_encode("<br>Empty file");
    }
}



$userid = $_SESSION['empid'];

if (!empty($msg)){
    echo $msg;
}
else{

$sql = "SELECT * from newproposal WHERE id = '$id'";
$result = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($result);
 $entrylevel = $user['entrylevel'];
 $author = $user['employeeid'];
 $department = $user['department'];
 $title = $user['title'];
$filename = $_FILES['file']['name'];
    
        /* Location */
        $location = "upload/attachment/".$filename;
        $uploadOk = 1;

        $DateCreated = date('Y-m-d');
        $TimeCreated = date('H:i:s');
        mysqli_query($db,"INSERT INTO logs (proposalid,description,userid,comment,attachment,dateprocess,timeprocess,title) values ($id,'Forward proposal',$userid,'$comment','$filename','$DateCreated','$TimeCreated','$title')");
        
        if ($_FILES["file"]["size"] > "20971520") {
            $data = json_encode('Sorry, your file is too large.');
            echo $data;
            $uploadOk = 0;
        }
        /* Upload file */
        elseif(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            if ($_SESSION['accounttype'] == 2){
                $query = "UPDATE newproposal set proposalstatus = 3
                            where id = $id";
                $res = mysqli_query($db, $query);
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    $department = $_SESSION['department'];
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id'];
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','Proposal with form RI05 has been submitted!')"); 
                }else{
                    echo "forwarding fail";
                } 
            }
            if ($_SESSION['accounttype'] == 3){
                $query = "UPDATE newproposal set proposalstatus = 4
                            where id = $id";
                 $res = mysqli_query($db, $query);
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 4");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id'];

                    if ($entrylevel == 2) { 
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','Proposal with form RI05 forwarded by $department coordinator')"); 
                    }else {
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','New proposal forward  forward by $department coordinator')"); 
                    }
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been forwarded to director!')");
 
                }else{
                    echo "forwarding fail";
                } 
            }
            else if ($_SESSION['accounttype'] == 4){
                if ($entrylevel == 2) {
                    $query = "UPDATE newproposal set proposalstatus = 7
                    where id = $id";
                    $res = mysqli_query($db, $query);
                    if ($res){
                        echo "1";

                        $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 7");
                        $row = mysqli_fetch_array($coor_result);
                        $proponentid = $row['id']; 
     
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','New proposal forward by director')"); 
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been forwarded to Evaluation and Review!')");
                   
                    }else{
                        echo "forwarding fail";
                    } 
                }else {
                    $query = "UPDATE newproposal set proposalstatus = 5
                    where id = $id";
                    $res = mysqli_query($db, $query);
                    if ($res){
                        echo "1";

                        $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 5");
                        $row = mysqli_fetch_array($coor_result);
                        $proponentid = $row['id']; 
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','New proposal forward by director')");
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been forwarded to Evaluation and Review!')");
                    }else{
                        echo "forwarding fail";
                    } 
                }
                
            }
            else if ($_SESSION['accounttype'] == 5){
                $query = "UPDATE newproposal set proposalstatus = 6
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 6");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id']; 
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','New proposal forward by Evaluation and Review')");  
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been forwarded to Information System and Data Analytics!')");
                }else{
                    echo "forwarding fail";
                } 
            }
            else if ($_SESSION['accounttype'] == 6){
                $query = "UPDATE newproposal set proposalstatus = 7
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";  
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 7");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id']; 
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','New proposal forward by Information System & Data Analytics')");
                    
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been forwarded to Monitoring and Evaluation Head.')");  
                }else{
                    echo "forwarding fail";
                } 
            }
            else if ($_SESSION['accounttype'] == 7){
                $query = "UPDATE newproposal set proposalstatus = 2, entrylevel = 2 
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 7");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id']; 
                    if ($entrylevel == 2) {
                        $query = "UPDATE newproposal set entrylevel = 3 where id = $id";
                        $res = mysqli_query($db, $query);
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been signed and approved by Monitoring and Evaluation Head')");  
                    }else {
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been approved by Monitoring and Evaluation Head')");  
                    }
             
                }else{
                    echo "forwarding fail";
                } 
            }



        }
        else{
            echo "Unable to upload file.";
        }

}
?>


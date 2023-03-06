

<?php
session_start();

require_once('dbconnection.php');
date_default_timezone_set('Asia/Manila');
$id = $_POST['proposal_id'];
$comment = $_POST['comment'];


$msg = "";
if (empty($comment)){
    if (empty($msg)){
        $msg = json_encode("Add comment");
    }else{
        $msg .= "<br>Add comment";
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
$sql = "SELECT * from newproposal WHERE id = '".$id."'";
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
        mysqli_query($db,"INSERT INTO logs (proposalid,description,userid,comment,attachment,dateprocess,timeprocess,title) values ($id,'Return proposal',$userid,'$comment','$filename','$DateCreated','$TimeCreated','$title')");
        if ($_FILES["file"]["size"] > "20971520") {
            $data = json_encode('Sorry, your file is too large.');
            echo $data;
            $uploadOk = 0;
        }
        /* Upload file */
        elseif(move_uploaded_file($_FILES['file']['tmp_name'], $location)){ 
            if ($_SESSION['accounttype'] == 3){               
                
                $query = "UPDATE newproposal set proposalstatus = 2, entrylevel = 4
                            where id = $id";
                // $res = mysqli_query($db, $query);
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been returned by coordinator!')"); 
                }else{
                    echo "forwarding fail"; 
                } 
            }
            else if ($_SESSION['accounttype'] == 4){
          
                    $query = "UPDATE newproposal set proposalstatus = 3, entrylevel = 4
                    where id = $id";
                    $res = mysqli_query($db, $query);
                    if ($res){
                        echo "1";
 
                        $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                        $row = mysqli_fetch_array($coor_result);
                        $proponentid = $row['id'];
                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','You Proposal has been returned to coordinator by Director!')"); 

                        mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been returned to coordinator!')");
 
                    }
                    else{
                        echo "forwarding fail";
                    }  
                
            }
            else if ($_SESSION['accounttype'] == 5){
                $query = "UPDATE newproposal set proposalstatus = 3, entrylevel = 4
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1";
                    
                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id'];
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','Proposal has been returned by Evaluation and Review!')"); 

                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been returned by Evaluation and Review!')");
                }else{
                    echo "forwarding fail";
                } 
            }
            else if ($_SESSION['accounttype'] == 6){
                $query = "UPDATE newproposal set proposalstatus = 3, entrylevel = 4
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1"; 

                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id'];
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','Proposal has been returned by Information System & Data Analytics!')"); 

                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been returned by Information System & Data Analytics!')");
                }else{
                    echo "forwarding fail";
                } 
            }
            else if ($_SESSION['accounttype'] == 7){
                $query = "UPDATE newproposal set proposalstatus = 3, entrylevel = 4 
                            where id = $id";
                $res = mysqli_query($db, $query);
                if ($res){
                    echo "1"; 

                    $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                    $row = mysqli_fetch_array($coor_result);
                    $proponentid = $row['id'];
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$proponentid','Proposal has been returned by Monitoring and Evaluation Head!')"); 
                            
                            mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$userid','$author','Proposal has been returned by Monitoring and Evaluation Head!')");
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


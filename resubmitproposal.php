<?php
session_start();

require_once('dbconnection.php');

$id = $_POST['proposal_id']; 

$filename = $_FILES['file']['name'];
$DateCreated = date('Y-m-d');
$TimeCreated = date('H:i:s');
$proposalstatus = 3;
/* Location */
$location = "upload/".$filename;
$uploadOk = 1;

$employeeid1 = $_SESSION['empid'];
$department = $_SESSION['department'];


$sql = "SELECT * from newproposal WHERE id = '$id'";
$result = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($result);
$title = $user['title'];


if ($_FILES["file"]["size"] > "20971520") {
    $data = json_encode('Sorry, your file is too large.');
    echo $data;
    $uploadOk = 0;
}

/* Upload file */
elseif(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
     
        $query = "UPDATE newproposal set filename = '$location',proposalstatus = 3,entrylevel = 1 where id = '$id'";
        $res = mysqli_query($db, $query);
    
        if ($res){
            $query = "INSERT INTO logs (description,dateprocess,timeprocess,userid,proposalid,title) 
                        VALUES('Resubmit Proposal sucessfully submitted','$DateCreated','$TimeCreated',$employeeid1, '$id','$title')";
            $res = mysqli_query($db, $query);
        
            if ($res){

                $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                $row = mysqli_fetch_array($coor_result);
                $proponentid = $row['id'];
                mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates) values ('$employeeid1','$proponentid','Re-submitted proposal has been submitted!')"); 

                echo "1";

            }else{
                echo "forwarding fail";
            } 
        
        }

        else{
            echo "Error saving proposal!";
        }
  
}
else{
    echo "Unable to upload file.";
}
?>


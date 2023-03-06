<?php
    session_start();
    require_once('dbconnection.php');
    date_default_timezone_set('Asia/Manila');
    $DateCreated = date('Y-m-d');
    $TimeCreated = date('H:i:s');
    

    $id = $_POST['id'];
    $employeeid = $_SESSION['empid'];
    
    $rec = mysqli_query($db, "SELECT * FROM newproposal WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $title = $record['title'];
    if (empty($record)){
        echo "Invalid ID";
    }else{
        $query = "DELETE FROM newproposal WHERE id='$id'"; 
        $res = mysqli_query($db, $query);
        if ($res){
            $query = "INSERT INTO logs (description,dateprocess,timeprocess,userid,proposalid,title) 
                                VALUES('Proposal Deleted ','$DateCreated','$TimeCreated',$employeeid, $id,'$title')";
                $res = mysqli_query($db, $query);
            echo "1";
        }else{
            echo "Deleting failed, please try again";
        }
    }

        

?>
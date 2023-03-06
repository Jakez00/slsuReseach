<?php
    require_once('dbconnection.php');

    $id = $_POST['id'];
    $rec = mysqli_query($db, "SELECT * FROM employee WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    if (empty($record)){
        echo "Invalid ID";
    }else{
        $query = "DELETE FROM employee WHERE id='$id'"; 
        $res = mysqli_query($db, $query);

        if ($res){
            echo "1";
            $rec = mysqli_query($db, "DELETE FROM users WHERE accountholder='$id'");
            
        }else{
            echo "Deleting failed, please try again";
        }
    }
    
        

?>
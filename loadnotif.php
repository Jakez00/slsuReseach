<?php
    session_start();
    require_once('dbconnection.php');
    $id = $_SESSION['empid'];
    $notif = mysqli_query($db,"SELECT id from notifications where isread = 0 AND toid ='$id' ");
    
    if (mysqli_num_rows($notif) <> 0) {
        echo mysqli_num_rows($notif);
    }else {
       echo 0;
    }

?>
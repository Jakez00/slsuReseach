<?php
    session_start();
    require_once('dbconnection.php');

    $id = $_POST['id'];

    mysqli_query($db,"UPDATE users set isverify = '1' where accountholder = '$id'");

?>
<?php
    require_once('dbconnection.php');
    date_default_timezone_set('Asia/Manila');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $Author1 = $_POST['employee1'];
    $Author2 = $_POST['employee2'];
    $Author3 = $_POST['employee3'];
    $ia = $_POST['ia'];
    $ra = $_POST['ra'];
    $ca = $_POST['ca'];
    $pb = $_POST['pb'];
    $pd = $_POST['pd'];
    $key = $_POST['key'];
    $DateCreated = date('Y-m-d');
    $TimeCreated = date('H:i:s');




            $query = "UPDATE newproposal set title = '$title', employeeid = '$Author1', employeeid2 ='$Author2', employeeid3 = '$Author3', description = '$ia', ra = '$ra', ca = '$ca', pb = '$pb', pd = '$pd'
                        where id = '$id'";
            $res = mysqli_query($db, $query);
            mysqli_query($db,"INSERT INTO logs (proposalid,description,userid,dateprocess,timeprocess,title) values ($id,'Edited proposal',$Author1,'$DateCreated','$TimeCreated','$title')");

            echo '1';

?>
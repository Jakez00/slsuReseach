<?php
    session_start();
    require_once('dbconnection.php');
    date_default_timezone_set('Asia/Manila');
    $title = $_POST['title'];
    $ia = $_POST['ia']; 
    $ca = $_POST['ca'];
    $pd = $_POST['pd'];   
    $pb = $_POST['pb'];  
    $ra = $_POST['ra']; 
    $employeeid1 = $_POST['employee1'];
    $employeeid2 = $_POST['employee2'];
    $employeeid3 = $_POST['employee3'];        
    $tags = $_POST['key'];
    $DateCreated = date('Y-m-d');
    $TimeCreated = date('H:i:s');
    $proposalstatus = 3;
    
    

    $userid = $_SESSION['empid'];
    $department= $_SESSION['department'];
    $author= $_SESSION['fullname'];

    
    if ($_SESSION['accounttype'] == 2){
        $employeeid = $_SESSION['empid'];
    }else{
        $employeeid = $_POST['employee'];
    }
    

    
    $msg = "";

    if (empty($employeeid1)){
        if (empty($msg)){
            $msg = "Select Author";
        }else{
            $msg .= "<br>Select Author";
        }
    }
    if (empty($title)){
        if (empty($msg)){
            $msg = "Empty title";
        }else{
            $msg .= "<br>Empty title";
        }
    }
    if (empty($ia)){
        if (empty($msg)){
            $msg = "Empty Implementing Agencies";
        }else{
            $msg .= "<br>Empty Implementing Agencies";
        }
    }
   
    if (empty($ca)){
        if (empty($msg)){
            $msg = "Empty Collaboration Agencies";
        }else{
            $msg .= "<br>Empty Collaboration Agencies";
        }
    }
    if (empty($pd)){
        if (empty($msg)){
            $msg = "Empty Project Duration";
        }else{
            $msg .= "<br>Empty Project Duration";
        }
    }
    if (empty($pb)){
        if (empty($msg)){
            $msg = "Empty Proposed Budget";
        }else{
            $msg .= "<br>Empty Proposed Budget";
        }
    }
    
    if (empty($ra)){
        if (empty($msg)){
            $msg = "Empty Research Agenda";
        }else{
            $msg .= "<br>Empty Research Agenda";
        }
    }
    if (empty($tags)){
        if (empty($msg)){
            $msg = "Empty Keyword";
        }else{
            $msg .= "<br>Empty Keyword";
        }
    }
    if (empty($_FILES)){
        if (empty($msg)){
            $msg = "Empty file";
        }else{
            $msg .= "<br>Empty file";
        }
    }

    if (!empty($msg)){
        echo $msg;
    }
    else{

        
        $filename = $_FILES['file']['name'];
    
        /* Location */
        $location = "upload/".$filename;
        $uploadOk = 1;


        
        
        /* Upload file */
        if ($_FILES["file"]["size"] > "20971520") {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        elseif(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            
            $sql = "SELECT * from newproposal
                WHERE title='".$title."'";
            $result = mysqli_query($db, $sql);
            $user = mysqli_fetch_assoc($result);
            

            if (empty($user)){

                $query = "INSERT INTO newproposal (title, description,tags,filename,DateCreated,TimeCreated,proposalstatus,employeeid,employeeid2,employeeid3,ca,ra,pb,pd,department) 
                            VALUES('$title', '$ia','$tags', '$location','$DateCreated','$TimeCreated','$proposalstatus','$employeeid1','$employeeid2','$employeeid3','$ca','$ra','$pb','$pd','$department')";
                $res = mysqli_query($db, $query);

                
                $query = "INSERT INTO logs (description,dateprocess,timeprocess,userid,proposalid,title) 
                            VALUES('Proposal sucessfully created','$DateCreated','$TimeCreated',$employeeid1, ".mysqli_insert_id($db).",'$title')";
            
                $coor_result = mysqli_query($db, "SELECT e.id from employee as e LEFT JOIN users as u on e.id = u.accountholder  where u.accounttype = 3 AND e.department = '$department'");
                $row = mysqli_fetch_array($coor_result);
                $proponentid = $row['id'];
                mysqli_query($db,"INSERT INTO notifications (fromid, toid, updates,title) values ('$userid','$proponentid','New proposal has been submitted!','$title')"); 
                
                echo "1";

            }
            else{
                echo "Title already exist!";
            }
        }
        else{
            echo "Unable to upload file.";
        }
    }

?>
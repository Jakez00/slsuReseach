<?php
    session_start();
    require_once('dbconnection.php'); 
    include ('globaldeclare.php');
    $global = new GlobalDeclare();
?>
 

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <di class="row">
            <?php 
            $where = " where  np.employeeid = '".$_SESSION['empid']."'";
         
            $sql = "SELECT np.*, e.firstname,e.lastname FROM newproposal as np Left outer join employee e on np.employeeid = e.id ". $where."
                    order by np.title ";
            $result = mysqli_query($db, $sql); 
            if (mysqli_num_rows($result)<> 0) { 
                while($row = mysqli_fetch_array($result)) {
                    $global->setAccountType($row["proposalstatus"]);
                echo '<div class="col-md-3 task-card">
                <div class="cards">
                    <h5>Title: '.$row["title"].'</h5>  
                    <label>Date Submitted: '.date_format(date_create($row["DateCreated"]),"M d, Y").'</label>
                    <br><br>
                    <label>Status: '.$global->getAccountTypeString().'</label>
                </div>
            </div>';
                }
            }
            ?>
       
        </di>
    </div>
</section>
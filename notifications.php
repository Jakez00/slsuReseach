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
                <h3>Notifications</h3>
                <p class="text-subtitle text-muted"></p>
            </div> 
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <di class="row">

           <div class="col-md-12">
           <table class="table">
                <?php   
                $id = $_SESSION['empid'];
                $notif = mysqli_query($db,"SELECT notifications.*,CONCAT(e.firstname,' ',e.lastname) as employee from notifications left join employee as e on notifications.fromid = e.id where toid ='$id'  order by date_created DESC");
                mysqli_query($db,"UPDATE notifications set isread = '1' where toid ='$id'");
                    
                if(mysqli_num_rows($notif)<> 0) {
                    while($row = mysqli_fetch_array($notif)) { 
                        echo '<tr>
                            <td><b>From: </b>'.$row['employee'].' <br><b>Date: </b>'.date('F j, Y H:m:s' , strtotime($row["date_created"])).'<br><b>Message: </b>'.$row['updates'].'</td>
                        </tr>';
                    }
                }
                ?>
            </table>
           </div>
       
        </div>
    </div>
</section>
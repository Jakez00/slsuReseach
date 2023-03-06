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
                <h3>Logs</h3>
                <p class="text-subtitle text-muted"></p>
            </div> 
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <di class="row">

           <div class="card-body">
           <table class="table mt-3" id="datatable">

           <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                         
                    </tr>
                    </thead>
                
                <tbody>
                <?php   
                
                $id = $_SESSION['empid'];
                $logs = mysqli_query($db,"SELECT logs.*,CONCAT(n.employeeid) as newproposal from logs left join newproposal as n on logs.proposalid = n.id where userid ='$id'  order by dateprocess and timeprocess ASC");
                $but = "";
                    
                if(mysqli_num_rows($logs)<> 0) {
                    while($row = mysqli_fetch_array($logs)) { 
                        echo '<tr>
                            <td class = "text-nowrap">'.$row['title'].'</td>
                            <td class = "text-nowrap"> '.$row['description'].'</td>
                            <td class = "text-nowrap"> '.$row['comment'].'</td>
                            <td class = "text-nowrap">'.date('F j, Y', strtotime($row["dateprocess"])).'</td>
                            <td class = "text-nowrap">'.date('h:i a', strtotime($row["timeprocess"])).'</td>
                                
                        </tr>';
                        
                        
                    }
                }


                ?>
            </tbody>
            </table>
           </div>
       
        </div>
    </div>
</section>

<script>

    $(document).ready(function () {
    $('#datatable').DataTable();
});
</script>

<div class="row"> 
    <?php
    require_once('dbconnection.php');
    include ('globaldeclare.php'); 
    $global = new GlobalDeclare();
    $id = $_GET['id'];



    $comments = mysqli_query($db,"SELECT logs.*,e.firstname,e.lastname FROM logs left join employee as e on logs.userid = e.id where proposalid = $id");
    while ($value = mysqli_fetch_array($comments)) {
         if ($value["comment"] <> "") {
            echo '<div class="col-12">
                <h5><b>'.$value["firstname"].' '.$value["lastname"].'</b></h5>
                <p>'.$value["comment"].'</p>
            ';
         } 
       
    }


?>
</div>


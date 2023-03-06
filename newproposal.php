<?php
    session_start();
    require_once('dbconnection.php');
    include ('globaldeclare.php'); 
    $global = new GlobalDeclare();
?>

 <style>
    .bi-chat-dots{
        cursor: pointer;
    }
</style>


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Proposals</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Proposals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New proposals</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Proposals MasterList</h4>
            </div>
            <div class="card-body">
                <?php 
                // or $_SESSION['accounttype'] == 1
                if ($_SESSION['accounttype'] == 2 ){
                echo '<button type = "button" class = "btn btn-success btn-sm" data-bs-toggle = "modal" data-bs-target = "#modalproposal"><i class = "bi bi-plus"></i> Submit Proposal</button>';
             }
?>
                <div class = 'table-responsive'>
                <table class="table mt-3" id="datatable">   
                <thead>
                    <tr>
                        <th scope="col" style="width:150px;">Action</th>
                        <th scope="col">Reference #</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Department</th>
                        <th scope="col">Implementing Agency(ies)</th>
                        <th scope="col">Collaborating Agency(ies)</th>
                        <th scope="col">Project Duration</th>
                        <th scope="col">Project Budget</th>
                        <th scope="col">Research Agenda</th>
                        <th scope="col">Keyword</th>
                        <th scope="col">Date Submitted</th>
                        <th scope="col">Time Submitted(24hr)</th>
                        <th scope="col">File</th>
                        <th scope="col">Attachment Form</th>
                        <th scope="col">Status</th>
                         
                    </tr>
                    </thead>
                  
                    <tbody>
                    <?php  
                        $where = "";

                        if ($_SESSION['accounttype'] == 2){
                            $where .= " where np.employeeid = '".$_SESSION['empid']."'";
                        }elseif ($_SESSION['accounttype'] == 3){ 
                       
                            $where .= " where np.proposalstatus = '".$_SESSION['accounttype']."'  AND e.department = '".$_SESSION['department']."'";
                        
                        }elseif ($_SESSION['accounttype'] == 4){
                            $where .= " where np.proposalstatus = '".$_SESSION['accounttype']."'";
                        
                        }elseif ($_SESSION['accounttype'] == 5){
                            $where .= " where np.proposalstatus = '".$_SESSION['accounttype']."'";
                        
                        }elseif ($_SESSION['accounttype'] == 6){
                            $where .= " where np.proposalstatus = '".$_SESSION['accounttype']."'"; 
                        }elseif ($_SESSION['accounttype'] == 7){
                            $where .= " where np.proposalstatus = '".$_SESSION['accounttype']."'";
                        }
                        $sql = "SELECT np.*, e.firstname,e.lastname,e.department,(select attachment from logs where proposalid = np.id ORDER BY id DESC LIMIT 1) as attachment,(select comment from logs where proposalid = np.id ORDER BY id DESC LIMIT 1) as comment FROM newproposal np Left outer join employee e on np.employeeid = e.id ". $where."
                                order by np.title ";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            $ctr = 1; 
                            while($row = mysqli_fetch_assoc($result)) {
                                $but = "";
                                if ( $_SESSION['accounttype'] == 1){
                                    $but = "&nbsp;
                                    <a href='#'  ctr = '".$ctr."' data='". $row["id"]."' class='deleteproposal'><i class='bi bi-trash'></i></a>";
                                $global->setAccountType($row["proposalstatus"]);
                                echo  "<tr id = '".$ctr."'>
                                <td class = 'text-nowrap'>".$but."&nbsp;&nbsp;<a href='#' title='".(!empty($row["comment"])? $row["comment"]:"no comment")."' data-id='".$row["id"]."' class='comments' data-bs-toggle = 'modal' data-bs-target = '#commentsproposal'><i class='bi bi-chat-dots'></i></a></td>  
                                <td class = 'text-nowrap'>".$row["DateCreated"]."-".str_pad($row['id'], 4, "0", STR_PAD_LEFT)."</td> 
                                <td class = 'text-nowrap'>".$row["title"]."".($row["entrylevel"] == 2 ? ' - <b>RI05</b>':($row["entrylevel"] == 4 ? ' - <b class="text-danger">Returned</b><br>':($row["entrylevel"] == 3 ? ' - <b class="text-success">Proposal Approved</b>':'')))."</td>  
                                <td class = 'text-nowrap'>".$row["firstname"]." ".$row["lastname"]." , " .$row["employeeid2"]." , ".$row["employeeid3"]. " </td>
                                <td class = 'text-nowrap'>".$row["department"]."</td>
                                <td class = 'text-nowrap'>".$row["description"]."</td>
                                <td class = 'text-nowrap'>".$row["ca"]."</td>
                                <td class = 'text-nowrap'>".$row["pd"]."</td>
                                <td class = 'text-nowrap'>".$row["ra"]."</td>
                                <td class = 'text-nowrap'>".$row["pb"]."</td>
                                <td class = 'text-nowrap'>".$row["tags"]."</td>
                                <td class = 'text-nowrap'>".date('F j, Y', strtotime($row["DateCreated"]))."</td>
                                <td class = 'text-nowrap'>".date('h:i a', strtotime($row["TimeCreated"]))."</td>
                                <td class = 'text-nowrap'><a target = '_blank' href = '".$row['filename']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'><a target = '_blank' href = 'upload/attachment/".$row['attachment']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'>".$global->getAccountTypeString()."</td>
                                </tr>";
                                $ctr++;   
                                 }
                                if ($_SESSION['accounttype'] == 2 ){
                                    $but = "&nbsp;
                                    <a href='#' ctr = '".$ctr."' data='". $row["id"]."' class='editproposal'> <i class='bi bi-pencil-square'style='font-size: 25px'> </i></a> &nbsp;
                                    <a href='#'  ctr = '".$ctr."' data='". $row["id"]."' class='deleteproposal'> <i class='bi bi-trash' style='font-size: 25px'></i> </a>".($row["entrylevel"]== 2 ? " &nbsp;
                                    <a href='#' class='forwardprop'  data-ctr = '".$ctr."' data-id='". $row["id"]."' data-bs-toggle = 'modal' data-bs-target = '#forwardproposal' ><i class='bi bi-arrow-right-square-fill'style='font-size: 25px'></i></a>&nbsp;":"");
                                      $global->setAccountType($row["proposalstatus"]);
                                echo  "<tr id = '".$ctr."'>
                                <td class = 'text-nowrap'>".$but."&nbsp;&nbsp;<a href='#' title='".(!empty($row["comment"])? $row["comment"]:"no comment")."' data-id='".$row["id"]."' class='comments' data-bs-toggle = 'modal' data-bs-target = '#commentsproposal'><i class='bi bi-chat-dots'style='font-size: 25px'></i></a></td>  
                                <td class = 'text-nowrap'>".$row["DateCreated"]."-".str_pad($row['id'], 4, "0", STR_PAD_LEFT)."</td> 
                                <td class = 'text-nowrap'>".$row["title"]."".($row["entrylevel"] == 2 ? ' - <b>RI05</b>':($row["entrylevel"] == 4 ? ' - <b class="text-danger">Returned</b><br><a href="#" class="text-primary resubmit" data-bs-toggle = "modal" data-bs-target = "#resubmitproposal" data-id='.$row["id"].'>Re-submit Proposal</a>':($row["entrylevel"] == 3 ? ' - <b class="text-success">Proposal Approved</b>':'')))."</td>  
                                <td class = 'text-nowrap'>".$row["firstname"]." ".$row["lastname"]." <br> " .$row["employeeid2"]." <br> ".$row["employeeid3"]. " </td>
                                <td class = 'text-nowrap'>".$row["department"]."</td>
                                <td class = 'text-nowrap'>".$row["description"]."</td>
                                <td class = 'text-nowrap'>".$row["ca"]."</td>
                                <td class = 'text-nowrap'>".$row["pd"]."</td>
                                <td class = 'text-nowrap'>".$row["ra"]."</td>
                                <td class = 'text-nowrap'>".$row["pb"]."</td>
                                <td class = 'text-nowrap'>".$row["tags"]."</td>
                                <td class = 'text-nowrap'>".date('F j, Y', strtotime($row["DateCreated"]))."</td>
                                <td class = 'text-nowrap'>".date('h:i a', strtotime($row["TimeCreated"]))."</td>
                                <td class = 'text-nowrap'><a target = '_blank' href = '".$row['filename']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'><a target = '_blank' href = 'upload/attachment/".$row['attachment']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'>".$global->getAccountTypeString()."</td>
                                </tr>";
                                $ctr++;   
                                 }
                                 else if($_SESSION['accounttype'] >= 3){
                                    $but = "<a href='#' class='backprop'  data-ctr = '".$ctr."' data-id='".$row["id"]."' data-bs-toggle = 'modal' data-bs-target = '#returnproposal' ><i class='bi bi-arrow-left-square-fill'style='font-size: 25px'></i></a>&nbsp;
                                    <a href='#' class='forwardprop'  data-ctr = '".$ctr."' data-id='". $row["id"]."' data-bs-toggle = 'modal' data-bs-target = '#forwardproposal' ><i class='bi bi-arrow-right-square-fill'style='font-size: 25px'></i></a>";
                                    $global->setAccountType($row["proposalstatus"]);
                                echo  "<tr id = '".$ctr."'>
                                <td class = 'text-nowrap'>".$but."&nbsp;&nbsp;<a href='#' title='".(!empty($row["comment"])? $row["comment"]:"no comment")."' data-id='".$row["id"]."' class='comments' data-bs-toggle = 'modal' data-bs-target = '#commentsproposal'><i class='bi bi-chat-dots'style='font-size: 25px'></i></a></td>  
                                <td class = 'text-nowrap'>".$row["DateCreated"]."-".str_pad($row['id'], 4, "0", STR_PAD_LEFT)."</td> 
                                <td class = 'text-nowrap'>".$row["title"]."".($row["entrylevel"] == 2 ? ' - <b>RI05</b>':($row["entrylevel"] == 4 ? ' - <b class="text-danger">Returned</b>':''))."</td>  
                                <td class = 'text-nowrap'>".$row["firstname"]." ".$row["lastname"]." <br> " .$row["employeeid2"]." <br> ".$row["employeeid3"]. " </td>
                                <td class = 'text-nowrap'>".$row["department"]."</td>
                                <td class = 'text-nowrap'>".$row["description"]."</td>
                                <td class = 'text-nowrap'>".$row["ca"]."</td>
                                <td class = 'text-nowrap'>".$row["pd"]."</td>
                                <td class = 'text-nowrap'>".$row["ra"]."</td>
                                <td class = 'text-nowrap'>".$row["pb"]."</td>
                                <td class = 'text-nowrap'>".$row["tags"]."</td>
                                <td class = 'text-nowrap'>".date('F j, Y', strtotime($row["DateCreated"]))."</td>
                                <td class = 'text-nowrap'>".date('h:i a', strtotime($row["TimeCreated"]))."</td>
                                <td class = 'text-nowrap'><a target = '_blank' href = '".$row['filename']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'><a target = '_blank' href = 'upload/attachment/".$row['attachment']."'><i class = 'bi bi-cloud-download'></i></td>
                                <td class = 'text-nowrap'>".$global->getAccountTypeString()."</td>
                                </tr>";
                                $ctr++;   
                                }
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
         $(".forwardprop").on("click",function() {
            var id = $(this).data("id");
            $('.proposal_id').val(id); 
        })
         $(".backprop").on("click",function() {
            var id = $(this).data("id");
            $('.proposal_id').val(id); 
        })
         $(".resubmit").on("click",function() {
            var id = $(this).data("id");
            $('.proposal_id').val(id); 
        })

        


        $('.comments').on("click",function(){
            var id = $(this).data("id");
            $("#modal_comments").load("viewcomments.php?id="+id);
            // $.ajax({
            // method: "POST",
            // url: "viewcomments.php?id="+id, 
            // })
            // .done(function( msg ) {
                
                    
            // });
        }) 

    $(document).ready(function () {
    $('#datatable').DataTable();
});
</script>
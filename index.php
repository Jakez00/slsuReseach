<?php
    require_once('dbconnection.php');
    session_start();
    if (!isset($_SESSION['islogin'])){
      header("Location: front.php");
      exit();
    }

    include ('globaldeclare.php');
    $global = new GlobalDeclare();

    include ('backprop.php');
    $back = new backproposal();

    include ('accountrole.php');
    $account = new accountrole();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
     
    <link rel="stylesheet" type="text/css" href="assets/js/datatables.min.css"/>
 <script type="text/javascript" src="assets/js/datatables.min.js"></script>
 
    <!-- <script src="assets/js/jquery-3.6.1.js"></script> -->
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper ">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#" id = "profile" style="line-spacing:12px;"><?=$_SESSION['fullname']?></a>
                            <p style="font-size:14px;"><?php $global->setAccountType($_SESSION['accounttype']); echo $global->getAccountTypeString(); ?></p>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="sidebar-menu">
                   <?php
                   
                   switch ($_SESSION['accounttype'])
                   {
                        case 1:
                            include ("menuAdmin.php");
                            break;
                        case 2:
                            include ("menuContributor.php");
                            break;
                        case 3:
                            include ("menucoordinator.php");
                            break;
                        case 4:
                            include ("menudirector.php");
                            break;
                        case 5:
                            include ("menuER.php");
                            break;
                        case 6:
                            include ("menuIsda.php");
                            break;
                        
                        case 7:
                            include ("menuHUE.php");
                            break;
                   }
                   ?>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
             <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
            </header>
            <div id = "body"> 
                <!-- //diri mosud tanan design -->
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- <script src="assets/js/pages/dashboard.js"></script> -->

    <script src="assets/js/mazer.js"></script>
</body>

</html>


<form method="post" enctype="multipart/form-data" id = "frmProposal">
<div class="modal fade" id="modalproposal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Proposal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div id = "proposalmsg"></div>
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Author 1:</label>
                            
                            <?php 
                            
                                $sql = "SELECT * from employee where id = ".$_SESSION['empid'];
                                $result = mysqli_query($db, $sql);
                                $row = $result->fetch_array();
                               
                                    echo "<select class='form-control' id='exampleFormControlSelect1' name = 'employee1'>";
                                    echo  "<option value='".$row["id"]."'>".$row["firstname"]."  ". $row["lastname"]."</option>";
                                    echo "</select>";
                                

                            ?>

                        </select>
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Author 2:</label>
                            <input type = "text" class = "form-control" name = "employee2">
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Author 3:</label>
                            <input type = "text" class = "form-control" name = "employee3">
                        </div>
                    </div>
                </div>
            
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Proposed Title:</label>
                            <input type = "text" class = "form-control" name = "title">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Implementing Agency(ies):</label>
                            <input type = "text" class = "form-control" name = "ia"  >
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Collaborating Agency(ies):</label>
                            <input type = "text" class = "form-control" name = "ca"  >
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Project Duration:</label>
                            <input type = "text " class = "form-control" name = "pd"  >
                        </div>
                    </div>
                </div> 
                
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Proposed budget:</label>
                            <input type = "number" class = "form-control" name = "pb" placeholder="Philippine peso" >
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Research Agenda:</label>
                            <input type = "text" class = "form-control" name = "ra"  >
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Keyword:</label>
                            <input type = "text" class = "form-control" name = "key">
                        </div>
                    </div>
                </div>
                
                

                <div class = "row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input </label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class = "btn btn-success" id = "btnewroposal">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- forward -->
<form method="post" enctype="multipart/form-data" id = "frmforwardProposal">

<div class="modal fade" id="forwardproposal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Forward Proposal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id = "formsg"></div>
        <label>Comments:</label>
        <textarea type = "text" class = "form-control" name = "comment" placeholder="" rows="10" ></textarea>
        <input type="hidden" name="proposal_id" class="proposal_id">
        <div class = "row">
            <div class="mb-3">
                <label for="file" class="form-label">Attach form here:</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class = "btn btn-success" id = "btnforwardproposal">Forward to <?php $account->setAccountRole($_SESSION['accounttype']); echo $account->getAccountRoleString(); ?></button>
        
      </div>
    </div>
  </div>
</div>
</form>

<form method="post" enctype="multipart/form-data" id = "frmresubmitproposal">
<div class="modal fade" id="resubmitproposal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Re-submit Proposal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id = "resubmitmsg"></div> 
      <input type="hidden" name="proposal_id" class="proposal_id">
        <div class = "row">
            <div class="mb-3">
                <label for="file" class="form-label">Attach Proposal Revision:</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class = "btn btn-success" id = "btnreproposal">Submit Proposal</button>
      </div>
    </div>
  </div>
</div>
</form>


<form method="post" enctype="multipart/form-data" id = "frmreturnProposal">
<div class="modal fade" id="returnproposal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Return Proposal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id = "returnmsg"></div>
          <label>Comments:</label>
        <textarea type = "text" class = "form-control" name = "comment" placeholder="" rows="10" ></textarea>
        <input type="hidden" name="proposal_id" class="proposal_id">
        <div class = "row">
            <div class="mb-3">
                <label for="file" class="form-label">Attach form here:</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class = "btn btn-success" id = "btnreturnproposal">Return to <?php $back->setbackproposal($_SESSION['accounttype']); echo $back->getbackproposalString(); ?></button>
      </div>
    </div>
  </div>
</div>
</form>



<div class="modal fade" id="commentsproposal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Proposal Comments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal_comments" style="height: 400px; overflow: auto;">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


<!-- Form -->

 
<script>
 

    $(document).on("click","ul li",function(){
        $(this).addClass("active").siblings().removeClass("active"); 
    })
   
    $("form#frmProposal").submit(function(e){
        e.preventDefault();
        var fd = new FormData(this);
        var files = $('#formFile')[0].files[0];
        fd.append('file', files);

        $.ajax({
            url: 'processproposal.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response == 1){
                $("#frmProposal")[0].reset(); 
                $(".btn-close").click(); 
                $("#body").load("newproposal.php");
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Submit successful',
                showConfirmButton: false,
                timer: 1500
                })
                }else{
                    $("#proposalmsg").html("<div class = 'alert alert-danger'>"+response+"</div>");
                }
            },
        });
    })

    $("form#frmforwardProposal").submit(function(e) {
    e.preventDefault(); 
    let attachmentform = new FormData($(this)[0]);  
      
        url = 'processforwardproposal.php';
        fetch(url, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: attachmentform,
            })
            .then(response => response.json())
            .then(response => { 
                if(response == 1){
                    Swal.fire({
                        position: 'center',
                        icon:   'success',
                        title: 'Forward successful',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#frmforwardProposal")[0].reset(); 
                    $(".btn-close").click(); 
                    $("#body").load("newproposal.php");
                }else { 
                    $("#formsg").html("<div class = 'alert alert-danger'>"+response+"</div>");
                }

            })
            .catch(function(error) {
                console.log(error);
            });
             
    })

    
    $("form#frmresubmitproposal").submit(function(e) {
    e.preventDefault(); 
    let attachmentform = new FormData($(this)[0]);  
      
        url = 'resubmitproposal.php';
        fetch(url, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: attachmentform,
            })
            .then(response => response.json())
            .then(response => { 
                if(response == 1){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Forward successful',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#frmresubmitproposal")[0].reset(); 
                    $(".btn-close").click(); 
                    $("#body").load("newproposal.php");
                }else{
                    $("#resubmitmsg").html("<div class = 'alert alert-danger'>"+response+"</div>");
                }

            })
            .catch(function(error) {
                console.log(error);
            });
             
    })

    $("form#frmreturnProposal").submit(function(e) {
    e.preventDefault(); 
    let attachmentform = new FormData($(this)[0]);  
      
        url = 'processbackproposal.php';
        fetch(url, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: attachmentform,
            })
            .then(response => response.json())
            .then(response => { 
                if(response == 1){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Return proposal to proponents',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#frmreturnProposal")[0].reset(); 
                    $(".btn-close").click(); 
                    $("#body").load("newproposal.php");
                }else{
                    $("#returnmsg").html("<div class = 'alert alert-danger'>"+response+"</div>");
                }

            })
            .catch(function(error) {
                console.log(error);
            });
             
    })
    
 
    
    $("#body").load('<?php echo $_SESSION['accounttype'] == 2 ? "dashboard.php" :"newproposal.php"; ?>');
    
    $("#accounts").click(function(){
        $("#body").load("account.php");
        notif();
    })
    
    $("#logs").click(function(){
        $("#body").load("logs.php");
        notif();
    })

    $("#newproposal").click(function(){
        $("#body").load("newproposal.php");
        notif();
    })

    $("#dashboard").click(function(){
        $("#body").load("dashboard.php");
        notif();
    })

    $("#newemployee").click(function(){
        $("#body").load("newemployee.php");
        notif();
    })

    $("#myaccount").click(function(){
        $("#body").load("myaccount.php");
        notif();
    })
    $("#forms").click(function(){
        $("#body").load("forms.php");
        notif();
    })

    $("#employeelist").click(function(){
        $("#body").load("employeelist.php");
        notif();
    })
    $("#notification").click(function(){
        $("#body").load("notifications.php");
        notif();
    })
    notif();
    function notif(){
        $.ajax({
            method: "GET",
            url: "loadnotif.php", 
        })
        .done(function( msg ) {
            $("#notifitcount").html(msg);
        });
    }

    
    $(document).on("click", "#btnaccountedit", function(){
        $.ajax({
            method: "POST",
            url: "processEditAccount.php",
            data: $("#frmAddEmployee").serialize(),
        })
        .done(function( msg ) {
            if (msg == "1"){
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: msg,
                showConfirmButton: false,
                timer: 1500
                })
            }else{
                Swal.fire({
                position: 'center',
                icon: 'warning',
                title: msg,
                showConfirmButton: false,
                timer: 1500
                })
            }
        
                
        });
    });

    $(document).on("click", "#btnemployeesave", function(){
        $.ajax({
            method: "POST",
            url: "processEmployee.php",
            data: $("#frmAddEmployee").serialize(),
        })
        .done(function( msg ) {
            if (msg == "1"){ 
                var msg = '<div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i>Employee successfully saved!</div>';
                $(".notifmsg").html(msg);
                $('#frmAddEmployee')[0].reset();
            }else{
                var msg = '<div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i> '+msg+'</div>';
                $(".notifmsg").html(msg);
            }
                
        });
    });
    $(document).on("click", ".editaccount", function(e){
       e.preventDefault();
       var id=$(this).attr('data');
       $.ajax({
            method: "POST",
            url: "editaccount.php",
            data: { id:id },
        })
        .done(function( msg ) {
            $("#body").html(msg);
                
        });
    })

    $(document).on("click", "#btnemployeeedit", function(){
        $.ajax({
            method: "POST",
            url: "processEditEmployee.php",
            data: $("#frmAddEmployee").serialize(),
        })
        .done(function( msg ) {
            if (msg == "1"){
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Employee has been updated',
                showConfirmButton: false,
                timer: 1500
                })
            }else{
                Swal.fire({
                position: 'center',
                icon: 'warning',
                title: msg,
                showConfirmButton: false,
                timer: 1500
                })
            }
        
                
        });
    });
    $(document).on("click", "#btneditproposal", function(){
        $.ajax({
            method: "POST",
            url: "processeditproposal.php",
            data: $("#editproposal").serialize(),
        })
        .done(function( msg ) {
            if (msg == "1"){
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Proposal has been updated',
                showConfirmButton: false,
                timer: 1500
                })
                
                $("#body").load("newproposal.php");
            }
            else{
                Swal.fire({
                position: 'center',
                icon: 'warning',
                title: msg,
                showConfirmButton: false,
                
                })
            }
        
                
        });
    });

    $(document).on("click", ".editprofile", function(e){
       e.preventDefault();
       var id=$(this).attr('data');
       $.ajax({
            method: "POST",
            url: "editprofile.php",
            data: { id:id },
        })
        .done(function( msg ) {
            $("#body").html(msg);

        
                
        });
    })
    $(document).on("click", ".editemployee", function(e){
       e.preventDefault();
       var id=$(this).attr('data');
       $.ajax({
            method: "POST",
            url: "editemployee.php",
            data: { id:id },
        })
        .done(function( msg ) {
            $("#body").html(msg);

        
                
        });
    })
    $(document).on("click", ".editproposal", function(e){
       e.preventDefault();
       var id=$(this).attr('data');
       $.ajax({
            method: "POST",
            url: "editproposal.php",
            data: { id:id },
        })
        .done(function( msg ) {
            $("#body").html(msg);
                
        });
    })
    $(document).on("click", ".verifyemployee", function(e){
       e.preventDefault();
       var id=$(this).attr('data');
       $.ajax({
            method: "POST",
            url: "verifyemployee.php",
            data: { id:id },
        })
        .done(function( msg ) {
            Swal.fire(
                        'Verification!',
                        'User has been verified!',
                        'success'
                    )
            $("#body").load("employeelist.php"); 
        });
    })

    

    $(document).on("click", ".deleteproposal", function(e){
        var row = $(this).attr("ctr");
        e.preventDefault();

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var id=$(this).attr('data');
            $.ajax({
                method: "POST",
                url: "processdeleteproposal.php",
                data: { id:id },
            })
            .done(function( msg ) {
               if (msg == 1){
                   $("#"+row).hide();
                    Swal.fire(
                        'Deleted!',
                        'Proposal has been deleted.',
                        'success'
                    )
               }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })

               } 
            });
            
        }
        })


        
    })
    $(document).on("click", ".deleteemployee", function(e){
        var row = $(this).attr("ctr");
        e.preventDefault();

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var id=$(this).attr('data');
            $.ajax({
                method: "POST",
                url: "processdeleteemployee.php",
                data: { id:id },
            })
            .done(function( msg ) {
               if (msg == 1){
                   $("#"+row).hide();
                    Swal.fire(
                        'Deleted!',
                        'Proposal has been deleted.',
                        'success'
                    )
               }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })

               } 
            });
            
        }
        })
        
    })
    
</script>

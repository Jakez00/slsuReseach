<?php 
    require_once('dbconnection.php'); 
    $id = $_POST['id'];
    $rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $accountholder = $record['accountholder'];
    $email = $record['email'];

    
        
?>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Account</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Account</h4>
            </div>
            <div class="card-body">
                <div id = "resultmsg"></div>
                <form method = "post" action = "" id = "frmAddEmployee">
                <div class = "row">
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Email address</label>
                            <input type = "hidden" class = "form-control" name = "accountholder" value="<?=$accountholder?>">
                            <input type = "text" class = "form-control" name = "email" value="<?=$email?>">
                        </div>
                    </div>
                </div> 
                <div class = "row">
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>New password </label>
                            <input type = "password" class = "form-control" name = "newpassword"">
                        </div>
                    </div>
                    <div class = "col-lg-3 col-xs-12">
                            <div class = "form-group">
                            <label>Confirm new password </label>
                            <input type = "password" class = "form-control" name = "newpassword2"">
                            </div>
                        </div>       
                </div>
                </form>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <button class = "btn btn-success" id = "btnaccountedit"><i class="bi bi-save2-fill"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
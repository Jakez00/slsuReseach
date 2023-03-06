<?php 
require_once('dbconnection.php'); 


    $id = $_POST['id'];
    
    $rec = mysqli_query($db, "SELECT e.*,u.accounttype FROM employee as e left join users as u on e.id = u.accountholder WHERE e.id = $id");
    $record = mysqli_fetch_array($rec);
    $id = $record['id'];
    $firstname = $record['firstname'];
    $middlename = $record['middlename'];
    $lastname = $record['lastname'];
    $department = $record['department'];
    $phone = $record['phone'];
    $accounttype = $record["accounttype"]; 
        
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
                <h3>Employee</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Employee</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit employee</h4>
            </div>
            <div class="card-body">
                <div id = "resultmsg"></div>
                <form method = "post" action = "" id = "frmAddEmployee">
                <div class = "row">
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>First Name</label>
                            <input type = "hidden" class = "form-control" name = "id" value="<?=$id?>">
                            <input type = "text" class = "form-control" name = "firstname" value="<?=$firstname?>">
                        </div>
                    </div>

                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Middle Name</label>
                            <input type = "text" class = "form-control" name = "middlename"  value="<?=$middlename?>">
                        </div>
                    </div>

                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Last Name</label>
                            <input type = "text" class = "form-control" name = "lastname" value="<?=$lastname?>">
                        </div>
                    </div>
    
                </div>
                <div class="row">
                     <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Department</label>
                            <select class="form-control" name="department" id="department">
                                <option value="CCSIT" <?=$department =='CCSIT'?'selected':'';?> >CCSIT</option>
                                <option value="COE" <?=$department =='COE'?'selected':'';?> >COE</option>
                                <option value="COT" <?=$department =='COT'?'selected':'';?> >COT</option>
                                <option value="CCJ" <?=$department =='CCJ'?'selected':'';?> >CCJ</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Account Type</label>
                            <select class="form-control" name="accounttype" id="accounttype">
                                <option value="1" <?=$accounttype =='1'?'selected':'';?> >Admin</option>
                                <option value="2" <?=$accounttype =='2'?'selected':'';?> >Proponents</option>
                                <option value="3" <?=$accounttype =='3'?'selected':'';?> >Coordinator</option>
                                <option value="4" <?=$accounttype =='4'?'selected':'';?> >Director</option>
                                <option value="5" <?=$accounttype =='5'?'selected':'';?> >Evaluation and Review</option>
                                <option value="6" <?=$accounttype =='6'?'selected':'';?> >Information System & Data Analytics</option>
                                <option value="7" <?=$accounttype =='7'?'selected':'';?> >Monitoring and Evaluation Head</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class = "row">
                        <div class = "col-lg-3 col-xs-12">
                           <div class = "form-group">
                            <label>Phone Number</label>
                            <input type = "text" class = "form-control" name = "phone" value="<?=$phone?>">
                            </div>
                        </div>
                </div>
                
                </form>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <button class = "btn btn-success" id = "btnemployeeedit"><i class="bi bi-save2-fill"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
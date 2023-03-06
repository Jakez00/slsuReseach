<?php 
require_once('dbconnection.php'); 
session_start();

$id = $_POST['id'];

$rec = mysqli_query($db, "SELECT * FROM newproposal WHERE id=$id");
$record = mysqli_fetch_array($rec);
$id = $record['id'];
$title = $record['title'];
$Author1 = $record['employeeid'];
$Author2 = $record['employeeid2'];
$Author3 = $record['employeeid3'];
$ia = $record['description'];
$ra = $record['ra'];
$ca = $record['ca'];
$pb = $record['pb'];
$pd = $record['pd'];
$key = $record['tags'];
        
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
                <h3>Proposals</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Proposals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Proposal</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Proposal</h4>
            </div>
            <div class="card-body">
                <div id = "resultmsg"></div>
                <form method = "post" action = "" id = "editproposal">
                <div class = "row">
                    <div class = "col-lg-3 col-xs-12">
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
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Author 2:</label>
                            <input type = "hidden" class = "form-control" name = "id" value="<?=$id?>">
                            <input type = "text" class = "form-control" name = "employee2" value="<?=$Author2?>">
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-lg-3 col-xs-12">
                        <div class = "form-group">
                            <label>Author 3:</label>
                            <input type = "text" class = "form-control" name = "employee3" value="<?=$Author3?>">
                        </div>
                    </div>
                </div>
            
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Proposed Title:</label>
                            <input type = "text" class = "form-control" name = "title" value="<?=$title?>">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Implementing Agency(ies):</label>
                            <input type = "text" class = "form-control" name = "ia"  value="<?=$ia?>">
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Collaborating Agency(ies):</label>
                            <input type = "text" class = "form-control" name = "ca" value="<?=$ca?>" >
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Project Duration:</label>
                            <input type = "text" class = "form-control" name = "pd"  value="<?=$pd?>">
                        </div>
                    </div>
                </div> 
                
                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Proposed budget:</label>
                            <input type = "text" class = "form-control" name = "pb"  value="<?=$pb?>">
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Research Agenda:</label>
                            <input type = "text" class = "form-control" name = "ra"  value="<?=$ra?>">
                        </div>
                    </div>
                </div> 

                <div class = "row">
                    <div class = "col-lg-12 col-xs-12">
                        <div class = "form-group">
                            <label>Keyword:</label>
                            <input type = "text" class = "form-control" name = "key" value="<?=$key?>">
                        </div>
                    </div>
                </div>
                
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <button type = "button" class = "btn btn-success" id = "btneditproposal"><i class="bi bi-save2-fill"></i> Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
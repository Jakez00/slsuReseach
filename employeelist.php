<?php 
session_start();
require_once('dbconnection.php'); ?>
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
                        <li class="breadcrumb-item active" aria-current="page">Employees</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Employee MasterList</h4>
            </div>
            <div class="card-body">
                 <table class="table">   
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                    
                    </tr>
                    </thead>
                    <?php 
                        $sql = "SELECT employee.*,u.email,u.isverify from employee left JOIN users as u ON employee.id = u.accountholder order by lastname,firstname";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            $ctr = 1;
                            while($row = mysqli_fetch_assoc($result)) {
                                $delete = "<a href='#' ctr = '".$ctr."' data='". $row["id"]."' class='deleteemployee'><i class='bi bi-trash'></i></a>";
                                if ($_SESSION['empid']==$row["id"]){
                                    $delete = "";
                                }
                               echo  "<tr id = '".$ctr."'>
                                <td><a href='#' ctr = '".$ctr."' data='". $row["id"]."' class='editemployee'><i class='bi bi-pencil-square'></i></a> &nbsp;
                                ".$delete."</td>  
                                <td>". $row["firstname"]."</td>
                                <td>". $row["middlename"]."</td>
                                <td>". $row["lastname"]."</td>
                                <td>". $row["department"]."</td>
                                <td>". $row["phone"]."</td>
                                <td>". $row["email"]."</td>
                                <td>". ($row["isverify"] == 0? "<button type='button' data='". $row["id"]."' class='btn btn-primary btn-sm verifyemployee'>Verify</button>":"verified")."</td>
                                </tr>";
                                $ctr++;   
                            }
                        } else {
                            echo "0 results";
                        }

                    ?>
                </table>
            </div>
        </div>
    </section>
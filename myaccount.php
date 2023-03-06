<?php 
require_once('dbconnection.php'); 
     

?>
 

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
         
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb"> 

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Password</h4>
            </div>
            <div class="card-body">
                <div id = "resultmsg"></div>
                <form method = "post" action = "" id = "changepassword">
        

                <div class = "row">
                        <div class = "col-lg-3 col-xs-12">
                           <div class = "form-group">
                            <label>Current Password</label>
                            <input type = "password" class = "form-control" name = "password" >
                            </div>
                        </div>
                </div>

                <div class = "row">
                        <div class = "col-lg-3 col-xs-12">
                           <div class = "form-group">
                            <label>New Password</label>
                            <input type = "password" class = "form-control" name = "newpassword" >
                            </div>
                        </div>
                        <div class = "col-lg-3 col-xs-12">
                           <div class = "form-group">
                            <label>Confirm Password</label>
                            <input type = "password" class = "form-control" name = "newpassword2" >
                            </div>
                        </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <button type="submit" class = "btn btn-success" id = ""><i class="bi bi-save2-fill"></i> Save</button>
                        </div>
                    </div>
                </div>
                </form>
               
            </div>
        </div>
    </section>
</div>

<script>
        $("#changepassword").submit(function(e) {
        e.preventDefault(); 
        let changepassword = new FormData($(this)[0]);  
        
            url = 'updatepassword.php';
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    body: changepassword,
                })
                .then(response => response.json())
                .then(data => { 
                   
                    if(data == 1){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Password Change successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $("#changepassword")[0].reset();   
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Password not match!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                })
                .catch(function(error) {
                    Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Password not match!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                });
                
        })
        
</script>
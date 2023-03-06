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
                        <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Account</h4>
            </div>
            <div class="card-body">
                <div id = "resultmsg"></div>
                <form method = "post" action = "" id = "frmAddEmployee">
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>First Name</label>
                            <input type = "text" class = "form-control" name = "firstname" required>
                        </div>
                    </div>

                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Middle Name</label>
                            <input type = "text" class = "form-control" name = "middlename">
                        </div>
                    </div>

                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Last Name</label>
                            <input type = "text" class = "form-control" name = "lastname" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Email Address</label>
                            <input type = "text" class = "form-control" name = "email"  required>
                        </div>
                    </div>
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Department</label>
                            <select class="form-control" name="department" id="department" required>
                                <option value="CCSIT" >CCSIT</option>
                                <option value="COE" >COE</option>
                                <option value="COT" >COT</option>
                                <option value="CCJ" >CCJ</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Account Type</label>
                            <select class="form-control" name="accounttype" id="accounttype" required>
                                <option value="1" >Admin</option>
                                <option value="2" >Proponents</option>
                                <option value="3" >Coordinator</option>
                                <option value="4" >Director</option>
                                <option value="5" >Evaluation and Review</option>
                                <option value="6" >Information System & Data Analytics</option>
                                <option value="7" >Monitoring and Evaluation Head</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Phone</label>
                            <input type = "text" class = "form-control" name = "phone" required>
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Password</label>
                            <input type = "password" class = "form-control" name = "password" required>
                        </div>
                    </div>
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <label>Confirm Password</label>
                            <input type = "password" class = "form-control" name = "password2" required>
                        </div>
                    </div>
                </div>
                </form>
                <div class = "row">
                    <div class = "col-lg-4 col-xs-12">
                        <div class = "form-group">
                            <button class = "btn btn-success" id = "btnemployeesave"><i class="bi bi-save2-fill"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


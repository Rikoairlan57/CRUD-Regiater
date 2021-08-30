<?php include("includes/header.php") ?>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="first_name" class="form-control" placeholder="Enter your First Name">
                        </div>
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="last_name" class="form-control" placeholder="Enter your Last Name">
                        </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <div class="input-group"> 
                            <input type="password" name="password" class="form-control" data-toggle="password" placeholder="Enter password" />
                            <div class="input-group-append">
                              <div class="input-group-text"><i class="fa fa-eye"></i></div>
                            </div>
                          </div>
                          <!-- <input type="password" id="showpw" name="password" class="form-control"  placeholder="Enter your password"> -->
                        </div>
                        <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" name="phone_number" class="form-control"  placeholder="Enter your phone number">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>
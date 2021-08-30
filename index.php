<?php include("includes/header.php") ?>
<?php include("dbconfig.php") ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            App register
                            <a href="register.php" class="btn btn-primary float-right">Register</a>
                        </h4>
                        
                    </div>
                    <div class="card-body">
                      <?php
                        

                        $register = "SELECT * FROM register";
                        $register_run = mysqli_query($conn, $register);

                        if(mysqli_num_rows($register_run) > 0){

                          ?>
  
                        <table id="datatableid" class="table table-bordered content-table">
                           <thead>
                             <tr>
                              
                               <th scope="col" align="center">ID</th>
                               <th scope="col" align="center">First</th>
                               <th scope="col" align="center">Last</th>
                               <th scope="col" align="center">Email</th>
                               <th scope="col" align="center">Password</th>
                               <th scope="col" align="center">Phone Number</th>
                               <th scope="col" align="center">Edit</th>
                               <th scope="col" align="center">Delete</th>
                               <!-- <th scope="col">Confirm Delete</th> -->
                             </tr>
                           </thead>
                           <tbody>
                            <?php
                              while($reg_row = mysqli_fetch_assoc($register_run))
                              {
                             ?>
                             <tr>
                               
                               <th><?php echo $reg_row['id']; ?></th>
                               <td><?php echo $reg_row['fname']; ?></td>
                               <td><?php echo $reg_row['lname']; ?></td>
                               <td><?php echo $reg_row['email']; ?></td>
                               <td><?php echo $reg_row['password']; ?></td>
                               <td><?php echo $reg_row['phone']; ?></td>
                               <td>
                               <a href="register-edit.php?id=<?php echo $reg_row['id']; ?>" class="btn btn-info float-right">Edit</a>
                               </td>
                               <td>
                                 <form action="code.php" method="POST">
                                    <input type='hidden' name='delete-id' value="<?php echo $reg_row['id']; ?>">
                                    <button type="submit" name="register-delete-btn" class="btn btn-danger">Delete</button>
                                 </form>
                               </td>
                               <!-- <td>
                               <form action="code.php" method="POST">
                                 <input type="hidden" class="delete_id_value" value="<?php echo $reg_row['id']; ?>">
                                 <a href="javascript:void(0)" class="delete_btn_ajax btn btn-danger">Confirm Delete</a>
                               </td> -->
                             </tr>
                             <?php } ?>
                           </tbody>
                        </table>
                        <?php
                        }else{
                          echo "No Record Found";
                        }
                      ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>
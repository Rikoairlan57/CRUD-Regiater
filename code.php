<?php include('dbconfig.php') ?>
<?php

$conn = mysqli_connect('localhost','root','','register_crud');

if(isset($_POST['register_btn'])){

  
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];

    $query = "INSERT INTO register (fname,lname,email,password,phone) VALUES('$fname','$lname','$email','$password','$phone')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        // echo "Registred sukses"; 
        $_SESSION['status'] = 'Registered succesfully';
        $_SESSION['status_code'] = 'success';
        header('Location: index.php');  
    }
    else
    {
        // echo "Somthing went wrong";
        $_SESSION['status'] = 'Register failed';
        $_SESSION['status_code'] = 'error'; 
        header('Location: register.php'); 
    }
}

if(isset($_POST['register_btn_edit']))
{
    $update_id = $_POST['edit_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];

    $query_update = "UPDATE register SET fname='$fname',lname='$lname',email='$email',password='$password',phone='$phone' WHERE id='$update_id'";
    $query_update_run = mysqli_query($conn, $query_update);

    if($query_update_run)
    {
        $_SESSION['status'] = "edit sukses";
        $_SESSION['status_code'] = "success"; 
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = 'update failed';
        $_SESSION['status_code'] = 'error'; 
        header("Location: index.php");
    }
}

if(isset($_POST['register-delete-btn']))
{
    $delete_id = $_POST['delete-id'];

    $reg_query = "DELETE FROM register WHERE id='$delete_id' ";
    $reg_query_run = mysqli_query($conn, $reg_query);

    if($reg_query_run)
    {
        $_SESSION['status'] = 'delete sukses';
        $_SESSION['status_code'] = 'success'; 
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'delete failed';
        $_SESSION['status_code'] = 'error'; 
        header('Location: index.php');
    }
}

// if(isset($_POST['delete_btn_set']))
// {
//     $del_id = $_POST['delete_id']

//     $reg_query = "DELETE FROM register WHERE id='$del_id' ";
//     $reg_query_run = mysqli_query($conn, $reg_query);

// }

?>
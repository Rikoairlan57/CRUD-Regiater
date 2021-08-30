<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "register_crud";
$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connection failed : " . mysqli_error_string());
}

?>
<?php
session_start();
include("../config/dbcon.php");
if (isset($_POST["register_btn"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $c_password = mysqli_real_escape_string($conn, $_POST["c_password"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    if ($password == $c_password) {
        $insert_query = "INSERT INTO users(name,email,password,phone,address)
        VALUES('$name','$email','$password','$phone','$address')";
        $insert_query_run = mysqli_query($conn, $insert_query);

        if ($insert_query_run) {
            $_SESSION['message'] = 'Register Successfully';
            header('Location:../signin.php');
        } 
        else {
            $_SESSION['message'] = 'Something went wrong';
            header('Location:../signup.php');
        }
    }else{
        $_SESSION['message'] = 'Passwords do mot match';
        header('Location:../signup.php');
    }
}

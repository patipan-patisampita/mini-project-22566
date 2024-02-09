<?php session_start(); ?>
<?php
include("../config/dbcon.php");
if (isset($_POST["register_btn"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $c_password = mysqli_real_escape_string($conn, $_POST["c_password"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    $check_email_query = "SELECT email FROM users WHERE email='$email' ";
    $check_email_result = mysqli_query($conn, $check_email_query);
    if (mysqli_num_rows($check_email_result) > 0) {
        $_SESSION['message'] = 'Email Aleready registered';
        header('Location:../signup.php');
    } else {
        if ($password == $c_password) {
            $insert_query = "INSERT INTO users(name,email,password,phone,address)
            VALUES('$name','$email','$password','$phone','$address')";
            $insert_query_run = mysqli_query($conn, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = 'Register Successfully';
                header('Location:../signin.php');
            } else {
                $_SESSION['message'] = 'Something went wrong';
                header('Location:../signup.php');
            }
        } else {
            $_SESSION['message'] = 'Passwords do mot match';
            header('Location:../signup.php');
        }
    }
}
?>

<?php
if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $login_query = "SELECT * FROM users WHERE email='$email' and password='$password' ";
    $login_result = mysqli_query($conn, $login_query);
    if (mysqli_num_rows($login_result) > 0) {
        $_SESSION["auth"] = "true";
        $userdata = mysqli_fetch_array($login_result);
        $username = $userdata["name"];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail,
        ];

        $_SESSION['role_as'] = $role_as;
        if($role_as == 1){
            $_SESSION['message'] = "Welcome To Dashboard";
            header("Location: ../admin/index.php");
        }else{
            $_SESSION['message'] = "Logged In Successfully";
            header("Location: ../index.php");
        }
    } else {
        $_SESSION['message'] = "Invalid Credentials";
        header('Location:../signin.php');
    }
}
?>
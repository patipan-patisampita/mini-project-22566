<?php session_start(); ?>
<?php
if (isset($_SESSION["auth"])) {
    unset($_SESSION["auth"]);
    unset($_SESSION["auth_user"]);
    $_SESSION[] = "Logged Out Successfully";
}
header("Location: index.php");
?>
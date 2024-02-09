<?php
if (isset($_SESSION['auth'])) {
    if ($_SESSION['role_as'] != 1) {
        $_SESSION['message'] = 'You are not authorzed to access this page';
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['message'] = 'Login to continue';
        // header('Location:../signin.php');
    }
}
?>


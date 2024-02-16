<?php include("../functions/myfunctions.php") ?>
<?php
if (!isset($_SESSION['auth'])) {
    header("location: ../signin.php");
    exit(0);
} else {
    if ($_SESSION['role_as'] != 1) {
        redirect('../index.php', 'You are not authorzed to access this page');
        // $_SESSION['message'] = 'You are not authorzed to access this page';
        // header('Location: ../index.php');
        exit();
    } else if ($_SESSION['role_as'] == "") {
        redirect('../signin.php', "Login to continue");
        // $_SESSION['message'] = 'Login to continue';
        // header('Location: ../signin.php');
        exit(0);
    }
}
?>


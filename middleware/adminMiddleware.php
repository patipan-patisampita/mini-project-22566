<?php include("../functions/myfunctions.php") ?>

<?php
if (isset($_SESSION['auth'])) {
    if ($_SESSION['role_as'] != 1) {
        redirect('../index.php', 'You are not authorzed to access this page');
        exit();
    } else {
        $_SESSION['message'] = 'Login to continue';
        //redirect('../../signin.php', "Login to continue");
        // header('Location:../signin.php');
    }
}

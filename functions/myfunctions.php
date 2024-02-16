<?php
function redirect($url, $message)
{
    echo $url;
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}

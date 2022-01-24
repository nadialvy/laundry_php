<?php 
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: ../sign_in/sign_in_user.php");
    exit;

?>
<?php 
    session_start();
    
    $_SESSION['username'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['lastname'] = null;
    $_SESSION['user_email'] = null;
    $_SESSION['user_image'] = null;

    header("Location: ../index.php");
    die();
?>

<?php 
    session_start();
    session_destroy();
    header("Location: login-3.php");
    exit();
?>
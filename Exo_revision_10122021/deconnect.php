<?php
    session_start();
    unset($_SESSION['connect']);
    unset($_COOKIE['back']);
    header('location:index.php');
?>
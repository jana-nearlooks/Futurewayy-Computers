<?php

    session_start();
    include 'conixion.php';
    // Check if the user is not logged in
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        // Redirect to the login page if not logged in
        header("location:login.php");
        exit();
    }
?>
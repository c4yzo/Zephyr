<?php
    session_start();
    unset($_SESSION['logged-in']);
    unset($_SESSION['user-id']);
    unset($_SESSION['account-type']);
    header("Location: ../user/")
?>
<?php
    session_start();
    $_SESSION['RpId'] = $_POST['rpId'];
    $_SESSION['Checkin'] = $_POST['checkin'];
    $_SESSION['Checkout'] = $_POST['checkout'];
    $_SESSION['Rooms'] = $_POST['rooms'];
    $_SESSION['Adults'] = $_POST['adults'];
    $_SESSION['Children'] = $_POST['children'];
    echo "Success";
?>
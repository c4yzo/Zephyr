<?php
    $db_host = "host";
    $db_username = "username";
    $db_password = "password";

    $con=mysqli_connect($db_host,$db_username,$db_password);
    if(!$con)
    {
        die("Connection Error");
    }
    mysqli_select_db($con,"ZEPHYR");

    $tmpcon=mysqli_connect($db_host,$db_username,$db_password);
    if(!$tmpcon)
    {
        die("Connection Error");
    }
?>
<?php
    $db_host = "localhost";
    $db_username = "zephyr";
    $db_password = "Abhiac@1603";

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
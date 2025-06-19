<?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = [];
    if (empty($email) OR empty($password)) {
        $errors[] = "Enter the email and password";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }
    if (count($errors) > 0) {
        echo "<br><div class='warning'><span>{$errors[0]}</span><img src='../img/icons/warning.png'></div>";
    }
    else {
        require_once '../php/connection.php';
        $qry = "SELECT * FROM Register WHERE Email = '$email';";
        $result = mysqli_query($con, $qry);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["Password"])) {
                session_start();
                $_SESSION['logged-in'] = "y";
                $_SESSION['user-id'] = $user["Public_Id"];
                $_SESSION['account-type'] = $user["Type"];
                if ($user["Type"] == "admin") {
                    echo "
                        <script>
                            window.location.href = '../admin/';
                        </script>
                    ";
                }
                else {
                    if (isset($_SESSION['redirecting-location'])) {
                        $redirect = $_SESSION['redirecting-location'];
                        unset($_SESSION['redirecting-location']);
                    }
                    else {
                        $redirect = "../user/";
                    }
                    echo "
                        <script>
                            window.location.href = '{$redirect}';
                        </script>
                    ";
                }
            }
            else {
                echo "<br><div class='warning'><span>The username or password provided is incorrect</span><img src='../img/icons/warning.png'></div>";
            }
        }
        else {
            echo "<br><div class='warning'><span>The username or password provided is incorrect</span><img src='../img/icons/warning.png'></div>";
        }
    }
?>
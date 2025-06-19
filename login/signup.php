<?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    $type = $_POST["type"];
    $errors = [];
    if (empty($name) OR empty($email) OR empty($password) OR empty($passwordRepeat) OR empty($type)) {
        $errors[] = "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }
    if (strlen($password) < 4) {
        $errors[] = "Password must be at least 8 characters long";
    }
    if ($password != $passwordRepeat) {
        $errors[] = "Password does not match";
    }
    require_once '../php/connection.php';
    $qry = "SELECT * FROM Register WHERE Email = '$email';";
    $result = mysqli_query($con, $qry);
    if ((mysqli_num_rows($result)) > 0) {
        $errors[] = "Email already exists";
    }
    if (count($errors) > 0) {
        echo "<br><div class='warning'><span>{$errors[0]}</span><img src='../img/icons/warning.png'></div>";
    }
    else {
        if ($type == "user") {
            $today = date('Ymd');
            $timestamp = strval(((int)$today)%1000000);
            $db_data = mysqli_query($con,"SELECT Public_Id FROM Register ORDER BY Timestamp DESC LIMIT 1;");
            $tabledata = mysqli_fetch_row($db_data);
            if ($timestamp == substr($tabledata[0],0,6)) {
                $publicId = (int)($timestamp.substr(("00".strval((int)(substr($tabledata[0],-3))+1)),-3));
            }
            else {
                $publicId = (int)($timestamp."001");
            }
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $qry = "INSERT INTO Register (Public_Id, Email, Password, Type) VALUES ( ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($con);
            $prepareStmt = mysqli_stmt_prepare($stmt, $qry);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "isss", $publicId, $email, $passwordHash, $type);
                mysqli_stmt_execute($stmt);
                $qry = "INSERT INTO Users (Public_Id, Username) VALUES ( ?, ? )";
                $stmt = mysqli_stmt_init($con);
                $prepareStmt = mysqli_stmt_prepare($stmt, $qry);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "is", $publicId, $name);
                    mysqli_stmt_execute($stmt);
                    $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id = '$publicId';");
                    $tabledata = mysqli_fetch_row($db_data);
                    $dbId = $tabledata[0];
                    $TableName = "U".(dechex($dbId));
                    mysqli_select_db($con,"USERS");
                    $qry = "CREATE TABLE $TableName (
                            Id INT NOT NULL AUTO_INCREMENT,
                            Booking_Index VARCHAR(40) NOT NULL UNIQUE,
                            Status CHAR(9) NOT NULL,
                            Commented char(1),
                            PRIMARY KEY (Id)
                        );";
                    $result = mysqli_query($con, $qry);
                    echo "<br><div class='success'><span>Registration Successfull !</span><img src='../img/icons/success.png'></div>";
                }
            }
        }
        if ($type == "admin") {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            session_start();
            $details = [
                'username' => $name,
                'email' => $email,
                'password' => $passwordHash
            ];
            $_SESSION['New-Admin-Details'] = $details;
            echo "Success";
        }
    }
?>
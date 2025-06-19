<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../php/connection.php';

    session_start();
    $sessionData1 = $_SESSION['New-Admin-Details'];
    $sessionData2 = $_SESSION['New-Admin-Data'];
    $username = $sessionData1['username'];
    $email = $sessionData1['email'];
    $password = $sessionData1['password'];
    $type = "admin";

    $rName = $_POST['name'];
    $rAddress = $_POST['address'];
    $town = $_POST['town'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $about = $_POST['about'];
    $glocation = $_POST['glocation'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $rating = "3.0";
    $nofRating = 0;
    $ratingSummary = "Good";
    $pageViews = 0;

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
    $qry = "INSERT INTO Register (Public_Id, Email, Password, Type) VALUES ( ?, ?, ?, ? )";
    $stmt = mysqli_stmt_init($con);
    $prepareStmt = mysqli_stmt_prepare($stmt, $qry);
    mysqli_stmt_bind_param($stmt, "isss", $publicId, $email, $password, $type);
    mysqli_stmt_execute($stmt);
    $qry = "INSERT INTO Resorts (Public_Id, Username, Name, Town, District, State) VALUES ( ?, ?, ?, ?, ?, ? )";
    $stmt = mysqli_stmt_init($con);
    $prepareStmt = mysqli_stmt_prepare($stmt, $qry);
    mysqli_stmt_bind_param($stmt, "isssss", $publicId, $username, $rName, $town, $district, $state);
    mysqli_stmt_execute($stmt);

    $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id = '$publicId';");
    $tabledata = mysqli_fetch_row($db_data);
    $dbId = $tabledata[0];
    $dbName = "R".(dechex($dbId));
    $qry = "CREATE DATABASE $dbName;";
    $result = mysqli_query($con, $qry);
    mysqli_select_db($con,$dbName);

    $qry1 = "CREATE TABLE Details (
            Name VARCHAR(40) NOT NULL,
            Full_Address TINYTEXT NOT NULL,
            Description TEXT NOT NULL,
            Rating CHAR(3) NOT NULL,
            Nof_Rating INT NOT NULL,
            Rating_Summary VARCHAR(15) NOT NULL,
            Page_Views INT NOT NULL
        );
    ";
    $qry2 = "CREATE TABLE Images (
            Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Image MEDIUMBLOB NOT NULL,
            Mime_Type VARCHAR(255) NOT NULL,
            Image_Group TINYINT NOT NULL DEFAULT 0
        );
    ";
    $qry3 = "CREATE TABLE Location (
            Map TEXT NOT NULL,
            Latitude DOUBLE NOT NULL,
            Longitude DOUBLE NOT NULL
        );
    ";
    $qry4 = "CREATE TABLE Facilities (
            Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Facility INT NOT NULL,
            Highlight CHAR(1) NOT NULL
        );
    ";
    $qry5 = "CREATE TABLE Policies (
            Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Name VARCHAR(50) NOT NULL,
            Description TEXT NOT NULL,
            Description_Type CHAR(2) NOT NULL
        );
    ";
    $qry6 = "CREATE TABLE Room_Category (
            Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Name VARCHAR(40) NOT NULL,
            Total_Rooms INT NOT NULL,
            Starting_Room INT NOT NULL,
            Base_Rent INT NOT NULL,
            Cost_per_Adult INT NOT NULL,
            Cost_per_Child INT NOT NULL,
            Offer INT,
            Room_Size_m2 SMALLINT NOT NULL,
            Room_Size_ft2 SMALLINT NOT NULL,
            Room_Window_View VARCHAR(50) NOT NULL,
            Room_Beds VARCHAR(50) NOT NULL
        );
    ";
    $qry7 = "CREATE TABLE Booking_Log (
            Booking_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Sharing_Key VARCHAR(40) NOT NULL UNIQUE,
            User_Id INT NOT NULL,
            Room_Category VARCHAR(40) NOT NULL,
            Checkin DATE NOT NULL,
            Checkout DATE NOT NULL,
            Rooms INT NOT NULL,
            Adults INT NOT NULL,
            Children INT NOT NULL,
            Rent INT NOT NULL,
            Room_Numbers VARCHAR(100) NOT NULL,
            First_Name VARCHAR(25) NOT NULL,
            Last_Name VARCHAR(25) NOT NULL,
            Gender VARCHAR(6) NOT NULL,
            Phone_Number CHAR(20) NOT NULL,
            Email VARCHAR(50) NOT NULL,
            Current_Address TINYTEXT NOT NULL,
            Pincode INT NOT NULL,
            Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );            
    ";
    $qry8 = "CREATE TABLE Booking_History (
            Booking_Id INT NOT NULL PRIMARY KEY,
            Sharing_Key VARCHAR(100) NOT NULL UNIQUE,
            User_Id INT NOT NULL,
            Room_Category VARCHAR(40) NOT NULL,
            Checkin DATE NOT NULL,
            Checkout DATE NOT NULL,
            Rooms INT NOT NULL,
            Adults INT NOT NULL,
            Children INT NOT NULL,
            Rent INT NOT NULL,
            Room_Numbers VARCHAR(100) NOT NULL,
            First_Name VARCHAR(25) NOT NULL,
            Last_Name VARCHAR(25) NOT NULL,
            Gender VARCHAR(6) NOT NULL,
            Phone_Number CHAR(20) NOT NULL,
            Email VARCHAR(50) NOT NULL,
            Current_Address TINYTEXT NOT NULL,
            Pincode INT NOT NULL,
            Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );            
    ";
    $qry9 = "CREATE TABLE Reviews (
            Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            Name VARCHAR(40) NOT NULL,
            Travelers VARCHAR(40) NOT NULL,
            Country VARCHAR(30) NOT NULL,
            Rating TINYINT NOT NULL,
            About TINYTEXT NOT NULL,
            Comment MEDIUMTEXT NOT NULL,
            Room_Category VARCHAR(40) NOT NULL
        );            
    ";

    $result = mysqli_query($con, $qry1);
    $stmt = $con->prepare("INSERT INTO Details (Name, Full_Address, Description, Rating, Nof_Rating, Rating_Summary, Page_Views) VALUES ( ?, ?, ?, ?, ?, ?, ? )");
    $stmt->bind_param("ssssisi", $rName, $rAddress, $about, $rating, $nofRating, $ratingSummary, $pageViews);
    $stmt->execute();

    $result = mysqli_query($con, $qry2);
    $image_group = 0;
    if (is_array($_FILES['upload-img']['tmp_name'])) {
        // Loop through each uploaded file
        foreach ($_FILES['upload-img']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['upload-img']['name'][$key];
            $file_tmp = $_FILES['upload-img']['tmp_name'][$key];
            $file_type = $_FILES['upload-img']['type'][$key];
            // Check if file is a valid image
            if (in_array($file_type, array('image/jpeg', 'image/pjpeg', 'image/png'))) {
                // Read image data
                $img_data = file_get_contents($file_tmp);
                // Insert image data and MIME type into database
                $stmt = $con->prepare("INSERT INTO Images (Image, Mime_Type, Image_Group) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $img_data, $file_type, $image_group);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
            }
        }
    } else {
        echo "No files uploaded.";
    }

    $result = mysqli_query($con, $qry3);
    $stmt = $con->prepare("INSERT INTO Location (Map, Latitude, Longitude) VALUES ( ?, ?, ? )");
    $stmt->bind_param("sdd", $glocation, $latitude, $longitude);
    $stmt->execute();

    $result = mysqli_query($con, $qry4);
    $highlight = "y";
    foreach ($sessionData2['highlightArray'] as $value) {
        $stmt = $con->prepare("INSERT INTO Facilities (Facility, Highlight) VALUES ( ?, ? )");
        $stmt->bind_param("ss", $value, $highlight);
        $stmt->execute();
    }
    $highlight = "n";
    foreach ($sessionData2['facilityArray'] as $value) {
        $stmt = $con->prepare("INSERT INTO Facilities (Facility, Highlight) VALUES ( ?, ? )");
        $stmt->bind_param("ss", $value, $highlight);
        $stmt->execute();
    }

    $result = mysqli_query($con, $qry5);
    $descriptionType = "p";
    for ($i=1; $i <= $sessionData2['nofPolicy']; $i++) { 
        $stmt = $con->prepare("INSERT INTO Policies (Name, Description, Description_Type) VALUES ( ?, ?, ? )");
        $stmt->bind_param("sss", $_POST["policy-name-$i"], $_POST["policy-descrip-$i"], $descriptionType);
        $stmt->execute();
    }

    $result = mysqli_query($con, $qry6);
    $priority = 0;
    for ($i=1; $i <= $sessionData2['typesOfRooms']; $i++) { 
        $roomSizeft2 = intval($_POST["room-size-$i"] * 10.7639);
        $stmt = $con->prepare("INSERT INTO Room_Category (Name, Total_Rooms, Starting_Room, Base_Rent, Cost_per_Adult, Cost_per_Child, Offer, Room_Size_m2, Room_Size_ft2, Room_Window_View, Room_Beds) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
        $stmt->bind_param("siiiiiiiiss", $_POST["rc-name-$i"], $_POST["tno-rooms-$i"], $_POST["st-room-no-$i"], $_POST["room-rent-$i"], $_POST["cost-adult-$i"], $_POST["cost-child-$i"], $_POST["offer-$i"], $_POST["room-size-$i"], $roomSizeft2, $_POST["window-view-$i"], $_POST["bed-type-$i"]);
        $stmt->execute();
        $rcTName = "RC".substr(("0".strval($i)),-2);
        $qry10 = "CREATE TABLE $rcTName (
                Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                Room_Number INT NOT NULL UNIQUE,
                Priority INT NOT NULL,
                Checkin DATE,
                Checkout DATE
            );        
        ";
        $result = mysqli_query($con, $qry10);
        for ($j=$_POST["st-room-no-$i"]; $j < ($_POST["st-room-no-$i"] + $_POST["tno-rooms-$i"]); $j++) { 
            $stmt = $con->prepare("INSERT INTO $rcTName (Room_Number, Priority) VALUES ( ?, ? )");
            $stmt->bind_param("ii", $j, $priority);
            $stmt->execute();
        }
        if (is_array($_FILES["upload-img-$i"]['tmp_name'])) {
            // Loop through each uploaded file
            foreach ($_FILES["upload-img-$i"]['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES["upload-img-$i"]['name'][$key];
                $file_tmp = $_FILES["upload-img-$i"]['tmp_name'][$key];
                $file_type = $_FILES["upload-img-$i"]['type'][$key];
                // Check if file is a valid image
                if (in_array($file_type, array('image/jpeg', 'image/pjpeg', 'image/png'))) {
                    // Read image data
                    $img_data = file_get_contents($file_tmp);
                    // Insert image data and MIME type into database
                    $stmt = $con->prepare("INSERT INTO Images (Image, Mime_Type, Image_Group) VALUES (?, ?, ?)");
                    $stmt->bind_param("ssi", $img_data, $file_type, $i);
                    $stmt->execute();
                    $stmt->close();
                } else {
                    echo "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
                }
            }
        } else {
            echo "No files uploaded.";
        }
    }

    $result = mysqli_query($con, $qry7);
    $result = mysqli_query($con, $qry8);
    $result = mysqli_query($con, $qry9);

    echo "
        <script>
            alert('Registration Successfull !');
            location.href='./authentication.php';
        </script>
    ";
?>
</body>
</html>
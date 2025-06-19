<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephyr | Update Bookings</title>
    <link rel="icon" href="../img/logo/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        include './connection.php';
        $resorts = mysqli_query($con,"SELECT DB_Id FROM Resorts;");
        while($resort = mysqli_fetch_row($resorts)) {
            $dbId_R = $resort[0];
            $dbName_R = "R".(dechex($dbId_R));
            mysqli_select_db($con,$dbName_R);

            $db_data = mysqli_query($con,"SELECT * FROM Booking_Log WHERE DATE(Checkout) = '2024-05-30';");
            while($tabledata=mysqli_fetch_row($db_data)) {
                $qry = "INSERT INTO Booking_History (Booking_Id, Sharing_Key, User_Id, Room_Category, Checkin, Checkout, Rooms, Adults, Children, Rent, Room_Numbers, First_Name, Last_Name, Gender, Phone_Number, Email, Current_Address, Pincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $con->prepare($qry);
                $stmt->bind_param("isisssiiiisssssssi", $tabledata[0], $tabledata[1], $tabledata[2], $tabledata[3], $tabledata[4], $tabledata[5], $tabledata[6], $tabledata[7], $tabledata[8], $tabledata[9], $tabledata[10], $tabledata[11], $tabledata[12], $tabledata[13], $tabledata[14], $tabledata[15], $tabledata[16], $tabledata[17]);
                $stmt->execute();

                $bookingId = $tabledata[0];
                $sharingKey = $tabledata[1];
                $UserId = $tabledata[2];
                $roomCategory = $tabledata[3];
                $roomNumbers = $tabledata[10];

                $result = mysqli_query($con,"DELETE FROM Booking_Log WHERE Booking_Id = $bookingId;");

                $db_data = mysqli_query($con,"SELECT Id FROM Room_Category WHERE Name = '$roomCategory';");
                $tabledata = mysqli_fetch_row($db_data);
                $rcId = $tabledata[0];
                $rcTName = "RC".substr(("0".strval($rcId)),-2);

                $roomNumbers = explode(',', $roomNumbers);
                foreach ($roomNumbers as $roomNumber) {
                    $rnTName = "RN".strval($roomNumber);
                    $result = mysqli_query($con,"DELETE FROM $rnTName WHERE Booking_Id = $bookingId;");
                    $result = mysqli_query($con,"UPDATE $rcTName SET Checkin = NULL, Checkout = NULL, Priority = Priority - 1 WHERE Room_Number = $roomNumber;");
                }

                mysqli_select_db($con,"ZEPHYR");
                $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
                $tabledata = mysqli_fetch_row($db_data);
                $dbId_U = $tabledata[0];
                $dbName_U = "U".(dechex($dbId_U));
                mysqli_select_db($con,"USERS");
                $result = mysqli_query($con,"UPDATE $dbName_U SET Status = 'Completed', Commented = 'n' WHERE Booking_Index = $sharingKey;");
                mysqli_select_db($con,$dbName_R);
            }

            $db_data = mysqli_query($con,"SELECT Room_Category, Checkin, Checkout, Room_Numbers FROM Booking_Log WHERE DATE(Checkin) = '2024-05-30'");
            while($tabledata=mysqli_fetch_row($db_data)) {
                $roomCategory = $tabledata[0];
                $checkin = $tabledata[1];
                $checkout = $tabledata[2];
                $roomNumbers = $tabledata[3];

                $db_data = mysqli_query($con,"SELECT Id FROM Room_Category WHERE Name = '$roomCategory';");
                $tabledata = mysqli_fetch_row($db_data);
                $rcId = $tabledata[0];
                $rcTName = "RC".substr(("0".strval($rcId)),-2);

                $roomNumbers = explode(',', $roomNumbers);
                foreach ($roomNumbers as $roomNumber) {
                    $result = mysqli_query($con,"UPDATE $rcTName SET Checkin = '$checkin', Checkout = '$checkout' WHERE Room_Number = $roomNumber;");
                }
            }
        }
        mysqli_close($con);
        echo "
            <script>
                alert('Bookings Updated Successfully');
                window.location.href = '../user/';
            </script>
        ";
    ?>
</body>
</html>
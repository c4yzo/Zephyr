<html>
    <head>
        <title>Form | Add Review</title>
        <link rel="icon" href="../../../../img/logo/favicon.ico" type="image/x-icon">
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            session_start();
        ?>
    </head>
    <body>
        <?php
            if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
                header("Location: ../../../../admin/");
                exit;
            }
            if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "user" AND !empty($_SESSION['RpId']) AND !empty($_POST["comment"])) {

                $UserId = $_SESSION['user-id'];
                $RpId = $_SESSION['RpId'];
                $name = $_POST["name"];
                $rel = $_POST["rel"];
                $country = $_POST["country"];
                $rating = $_POST["rating"];
                $about = $_POST["about"];
                $comment = $_POST["comment"];
                $room = $_POST["room"];

                require_once '../../../../php/connection.php';
                
                $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id=$RpId;");
                $tabledata = mysqli_fetch_row($db_data);
                $dbId_R = $tabledata[0];
                $dbName_R = "R".(dechex($dbId_R));
                mysqli_select_db($con,$dbName_R);
                $qry = "INSERT INTO Reviews (Name, Travelers, Country, Rating, About, Comment, Room_Category) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = $con->prepare($qry);
                $stmt->bind_param("sssisss", $name, $rel, $country, $rating, $about, $comment, $room);
                $stmt->execute();
                $db_data = mysqli_query($con,"SELECT COUNT(*), AVG(Rating) FROM Reviews;");
                $tabledata = mysqli_fetch_row($db_data);
                $rNof_Rating = $tabledata[0];
                $rRating = $tabledata[1];
                $rRating = number_format($rRating, 1);
                if ($rRating >= 4.5) {
                    $rRatingSummary = "Excellent";
                }
                elseif ($rRating >= 3.5) {
                    $rRatingSummary = "Great";
                }
                elseif ($rRating >= 2.5) {
                    $rRatingSummary = "Good";
                }
                elseif ($rRating >= 1.5) {
                    $rRatingSummary = "Average";
                }
                else {
                    $rRatingSummary = "Below Average";
                }
                $qry = "UPDATE Details SET Rating = ?, Nof_Rating = ?, Rating_Summary = ?";
                $stmt = $con->prepare($qry);
                $stmt->bind_param("dis", $rRating, $rNof_Rating, $rRatingSummary);
                $stmt->execute();
                $Sharing_Key_tabledata = mysqli_query($con,"SELECT Sharing_Key FROM Booking_History WHERE User_Id=$UserId AND Room_Category='$room';");

                mysqli_select_db($con,"ZEPHYR");

                $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
                $tabledata = mysqli_fetch_row($db_data);
                $dbId_U = $tabledata[0];
                $dbName_U = "U".(dechex($dbId_U));
                mysqli_select_db($con,"USERS");
                while($Sharing_Key_data = mysqli_fetch_row($Sharing_Key_tabledata)) {
                    $result = mysqli_query($con,"UPDATE $dbName_U SET Commented='y' WHERE Booking_Index=$Sharing_Key_data[0]");
                }
            }
            else {
                header("Location: ../../../");
                exit;
            }
            mysqli_close($con);
            echo "
                <script>
                    alert('Review Added Successfully');
                    location.href='../';
                </script>
            ";
        ?>
    </body>
</html>
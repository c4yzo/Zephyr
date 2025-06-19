<?php
    $RpId = $_POST['rpId'];
    $rcId = $_POST['rcId'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    include './connection.php';
    $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id=$RpId;");
    $tabledata = mysqli_fetch_row($db_data);
    $dbId = $tabledata[0];
    $dbName = "R".(dechex($dbId));
    mysqli_select_db($con,$dbName);
    $rcTName = "RC".substr(("0".strval($rcId)),-2);
    $db_data = mysqli_query($con,"SELECT COUNT(*) FROM $rcTName WHERE Priority = 0;");
    $tabledata=mysqli_fetch_row($db_data);
    if ($rooms <= $tabledata[0]) {

        if (!empty($checkin) AND !empty($checkout)) {
            $checkin_date = new DateTime($checkin);
            $checkout_date = new DateTime($checkout);
            $interval = $checkin_date->diff($checkout_date);
            $days_staying = $interval->days;
        }
        else {
            $days_staying = 1;
        }

        $db_data = mysqli_query($con,"SELECT Base_Rent,Cost_per_Adult,Cost_per_Child,Offer FROM Room_Category WHERE Id=$rcId;");
        $tabledata=mysqli_fetch_row($db_data);
        if ($tabledata[3]=="") {
            $offer = 0;
        }
        else {
            $offer = $tabledata[3];
        }
        $rent = ($rooms * $tabledata[0] + ($adults - 1) * $tabledata[1] + $children * $tabledata[2]) * $days_staying;
        $finalRent = intval(($rent * (100 - $offer)) / 100);
        echo "
            <div>
        ";
        if ($offer > 0) {
            echo "
                <h5>Save {$offer}% Today!</h5>
            ";
        }
        echo "
                <div><h4 id='price1' class='strikethrough'>Rs. {$rent}</h4></div>
                <div><h3 id='price2'>Rs. {$finalRent}</h3></div>
            </div>
            <div class='spacer'></div>
            <div class='flex align-b'>
                <div><button class='button button-booknow button-square button-block button-effect-ujarak' type='button'  onclick='bookRoom({$rcId})'><span>BOOK NOW</span></button></div>
            </div>
        ";
    }
    else {
        echo "
            <div class='spacer'></div>
            <div class='flex align-b'>
                <div><button class='button button-booknow button-square button-block button-effect-ujarak' type='submit'><span>NOT AVAILABLE</span></button></div>
            </div>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <link rel="icon" href="../../../../img/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../../css/user/resorts/resort/book/stylesheet_06.css">
    <!-- Include the Razorpay checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if($_SESSION['booking-status'] == "ready" && !(isset($_POST['razorpay_payment_id']))) {
        $UserId = $_SESSION['user-id'];
        $RpId = $_SESSION['RpId'];
        $rcId = $_SESSION['RcId'];
        $checkIn = $_SESSION['Checkin'];
        $checkOut = $_SESSION['Checkout'];
        $rooms = $_SESSION['Rooms'];
        $adults = $_SESSION['Adults'];
        $children = $_SESSION['Children'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];

        $checkin_date = new DateTime($checkIn);
        $checkout_date = new DateTime($checkOut);
        $interval = $checkin_date->diff($checkout_date);
        $days_staying = $interval->days;
        $checkIn = date("Y-m-d", strtotime($checkIn));
        $checkOut = date("Y-m-d", strtotime($checkOut));
        require_once '../../../../php/connection.php';
        $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id=$RpId;");
        $tabledata = mysqli_fetch_row($db_data);
        $dbId = $tabledata[0];
        $dbName = "R".(dechex($dbId));
        mysqli_select_db($con,$dbName);
        $rcTName = "RC".substr(("0".strval($rcId)),-2);
        $db_data = mysqli_query($con,"SELECT COUNT(*) FROM $rcTName WHERE Priority = 0;");
        $tabledata=mysqli_fetch_row($db_data);
        if ($rooms <= $tabledata[0]) {
            $db_data = mysqli_query($con,"SELECT Name,Base_Rent,Cost_per_Adult,Cost_per_Child,Offer FROM Room_Category WHERE Id=$rcId;");
            $tabledata=mysqli_fetch_row($db_data);
            $roomCategoryName = $tabledata[0];
            if ($tabledata[4]=="") {
                $offer = 0;
            }
            else {
                $offer = $tabledata[4];
            }
            $rent = ($rooms * $tabledata[1] + ($adults - 1) * $tabledata[2] + $children * $tabledata[3]) * $days_staying;
            $finalRent = intval(($rent * (100 - $offer)) / 100);
            $roomNumbers = [];
            $roomNumbers_str = "";
            $db_data = mysqli_query($con,"SELECT Room_Number FROM $rcTName WHERE Priority = 0 LIMIT $rooms;");
            while($tabledata = mysqli_fetch_row($db_data)) {
                $roomNumbers[] = $tabledata[0];
                $roomNumbers_str = $roomNumbers_str . $tabledata[0] . ",";
            }
            $roomNumbers_str = rtrim($roomNumbers_str, ',');
            $currentTimestamp = time();
            $sharingKey = strval($RpId) . strval($UserId) . $currentTimestamp;
        }
        $data = [
            'UserId' => $UserId,
            'RpId' => $RpId,
            'rcId' => $rcId,
            'dbName' => $dbName,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'rooms' => $rooms,
            'adults' => $adults,
            'children' => $children,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'pincode' => $pincode,
            'rcTName' => $rcTName,
            'roomCategoryName' => $roomCategoryName,
            'finalRent' => $finalRent,
            'sharingKey' => $sharingKey,
            'roomNumbers' => $roomNumbers,
            'roomNumbers_str' => $roomNumbers_str
        ];
        $_SESSION['New-Booking-Data'] = $data;
        $phone = "+91".$phone;
    }
    elseif (!$_SESSION['booking-status']) {
        header("Location: ../../../");
        exit;
    }

    // Include Razorpay PHP SDK
    require('../../../../php/razorpay/Razorpay.php');
    use Razorpay\Api\Api;
    $apiKey = 'rzp_test_nR7c81R0xANSRm';
    $apiSecret = 'K1AmcXuXdHvOyGEdOzBVyvvh';
    $api = new Api($apiKey, $apiSecret);
    // Retrieve the amount from the query parameter
    $amount = $_SESSION['New-Booking-Data']['finalRent'];
    // Prepare the payment request
    $orderData = [
        'receipt'
        => 'order_rcptid_' . time(),
        'amount'
        => $amount * 100, // Amount in paisa
        'currency'
        => 'INR',
        'payment_capture' => 1 // Auto capture
    ];
    // Create an order
    $order = $api->order->create($orderData);
    // Retrieve the Razorpay order ID
    $orderId = $order['id'];
    // Check if the form is submitted and the payment is successful
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['razorpay_payment_id'])) {
        $razorpayPaymentId = $_POST['razorpay_payment_id'];
        if($_SESSION['booking-status'] == "ready") {
            $data = $_SESSION['New-Booking-Data'];
            $UserId = $data['UserId'];
            $RpId = $data['RpId'];
            $rcId = $data['rcId'];
            $dbName = $data['dbName'];
            $checkIn = $data['checkIn'];
            $checkOut = $data['checkOut'];
            $rooms = $data['rooms'];
            $adults = $data['adults'];
            $children = $data['children'];
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $gender = $data['gender'];
            $email = $data['email'];
            $phone = $data['phone'];
            $address = $data['address'];
            $pincode = $data['pincode'];
            $rcTName = $data['rcTName'];
            $roomCategoryName = $data['roomCategoryName'];
            $finalRent = $data['finalRent'];
            $sharingKey = $data['sharingKey'];
            $roomNumbers = $data['roomNumbers'];
            $roomNumbers_str = $data['roomNumbers_str'];
            $priority = 1;
            require_once '../../../../php/connection.php';
            mysqli_select_db($con,$dbName);
            $qry = "INSERT INTO Booking_Log (Sharing_Key, User_Id, Room_Category, Checkin, Checkout, Rooms, Adults, Children, Rent, Room_Numbers, First_Name, Last_Name, Gender, Phone_Number, Email, Current_Address, Pincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("sisssiiiisssssssi", $sharingKey, $UserId, $roomCategoryName, $checkIn, $checkOut, $rooms, $adults, $children, $finalRent, $roomNumbers_str, $firstname, $lastname, $gender, $phone, $email, $address, $pincode);
            $stmt->execute();
            $db_data = mysqli_query($con,"SELECT Booking_Id FROM Booking_Log WHERE Sharing_Key = '$sharingKey';");
            $tabledata = mysqli_fetch_row($db_data);
            $bookingId = $tabledata[0];
            foreach ($roomNumbers as $roomNumber) {
                $qry = "UPDATE $rcTName SET Priority = ? WHERE Room_Number = ?";
                $stmt = $con->prepare($qry);
                $stmt->bind_param("ii", $priority, $roomNumber);
                $stmt->execute();
                $rnTName = "RN".strval($roomNumber);
                $qry = "SHOW TABLES LIKE '$rnTName'";
                $result = mysqli_query($con, $qry);
                if ((mysqli_num_rows($result)) == 0) {
                    $qry = "CREATE TABLE $rnTName (
                            Booking_Id INT NOT NULL PRIMARY KEY,
                            Checkin DATE NOT NULL UNIQUE,
                            Checkout DATE NOT NULL UNIQUE
                        );";
                    $result = mysqli_query($con, $qry);
                }
                $qry = "INSERT INTO $rnTName (Booking_Id, Checkin, Checkout) VALUES (?, ?, ?)";
                $stmt = $con->prepare($qry);
                $stmt->bind_param("iss", $bookingId, $checkIn, $checkOut);
                $stmt->execute();
            }

            mysqli_select_db($con,"ZEPHYR");

            $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
            $tabledata = mysqli_fetch_row($db_data);
            $dbId_U = $tabledata[0];
            $dbName_U = "U".(dechex($dbId_U));
            mysqli_select_db($con,"USERS");
            $result = mysqli_query($con,"INSERT INTO $dbName_U (Booking_Index, Status) VALUES ($sharingKey, 'Confirmed')");

            unset($_SESSION['booking-status']);
            unset($_SESSION['New-Booking-Data']);
            unset($_SESSION['RpId']);
            unset($_SESSION['RcId']);
            unset($_SESSION['Checkin']);
            unset($_SESSION['Checkout']);
            unset($_SESSION['Rooms']);
            unset($_SESSION['Adults']);
            unset($_SESSION['Children']);
            echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('complete-payment').style.display = 'none';
                        openPopup();
                    });
                </script>
            ";
        }
    }
?>
    <div id="complete-payment">
        <h1 id="complete-payment-msg">Complete your payment</h1>
        <!-- Include the Razorpay payment form -->
        <form id="payment-form" action="" method="POST">
            <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo $apiKey; ?>"
            data-amount="<?php echo ($amount * 100); ?>"
            data-currency="INR"
            data-order_id="<?php echo $orderId; ?>"
            data-buttontext="Pay with Razorpay"
            data-name="Zephyr"
            data-description="Payment for booking"
            data-image="https://i.ibb.co/sRQZJ1d/1227835-fotor-20240421154434.png"
            data-prefill.name="<?php echo $firstname; ?>"
            data-prefill.email="<?php echo $email; ?>"
            data-prefill.contact="<?php echo $phone; ?>"
            data-theme.color="#FFD700"
            data-callback="handlePaymentSuccess"
            ></script>
            <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
        <script>
            function handlePaymentSuccess(payment_response) {
                console.log("Payment success callback called");
                // Hide the payment form
                document.getElementById('payment-form').style.display = 'none';
                // Submit the form after payment success
                document.getElementById('payment-form').submit();
            }
        </script>
        <?php
            if (!(isset($_POST['razorpay_payment_id']))) {
                echo "
                    <script>
                        const razorpayButton = document.querySelector('.razorpay-payment-button');
                        if (razorpayButton) { // Check if button exists before clicking
                            razorpayButton.click();
                        }
                    </script>
                ";
            }
        ?>
    </div>

    <div id="booking-confirmed">
        <div class="popup" id="popup">
            <img src="../../../../img/icons/tick.png">
            <h2>Thank You!</h2>
            <p>Your booking is confirmed</p>
            <span class="room-numbers-span">Your Room Numbers :</span>
            <div class="room-numbers">
            <?php
                foreach ($roomNumbers as $roomNumber) {
                    echo "
                        <div><b><span>$roomNumber</span></b></div>
                    ";
                }
            ?>
            </div>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>
    <script>
        let popup = document.getElementById('popup');
        function openPopup() {
            popup.classList.add("open-popup");
        }
        function closePopup() {
            popup.classList.remove("open-popup");
            window.location.href = "../../../bookings.php";
        }
    </script>
</body>
</html>
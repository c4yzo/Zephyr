<!DOCTYPE html>
<html>
    <head>
        <title>Form | Book Room</title>
        <link rel="icon" href="../../../../img/logo/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../../../css/user/resorts/resort/book/stylesheet_04.css">
        <?php
            session_start();
            if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
                header("Location: ../../../../admin/");
                exit;
            }
            if(!($_SESSION['logged-in'] == "y")) {
                $_SESSION['redirecting-location'] = "../user/resorts/resort/book/";
                header("Location: ../../../../login/authentication.php");
                exit;
            }
            if(isset($_SESSION['RpId']) AND isset($_SESSION['RcId']) AND isset($_SESSION['Checkin']) AND isset($_SESSION['Checkout']) AND isset($_SESSION['Rooms']) AND isset($_SESSION['Adults']) AND isset($_SESSION['Children'])) {
                $RpId = $_SESSION['RpId'];
                $rcId = $_SESSION['RcId'];
                $checkIn = $_SESSION['Checkin'];
                $checkOut = $_SESSION['Checkout'];
                $rooms = $_SESSION['Rooms'];
                $adults = $_SESSION['Adults'];
                $children = $_SESSION['Children'];
                $_SESSION['booking-status'] = "ready";
            } else {
                header("Location: ../../../");
                exit;
            }
        ?>
    </head>
    <body style="display: flex;height: 100vh; align-items: center;justify-content: center;">
    <form action="book_room.php" method="post">
        <div class="container">
            <h1 class="form-title">Reservation</h1>
            <div class="main-user-info">
                <div class="user-input-box">
                    <input
                        type="text"
                        id="firstname"
                        name="firstname"
                        placeholder="First Name"
                        required
                    />
                </div>
                <div class="user-input-box">
                    <input
                        type="text"
                        id="lastname"
                        name="lastname"
                        placeholder="Last name"
                        required
                    />
                </div>  
            </div>
            <div class="gender-details-box">
                <span class="gender-title"> Gender </span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="Male" />
                    <label for="Male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female" />
                    <label for="Female">Female</label>
                    <input type="radio" name="gender" id="other" value="Others" />
                    <label for="Others">Others</label>
                </div>
            </div>
            <div class="main-user-info">
                <div class="user-input-box">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email"
                        required
                    />
                </div>
                <div class="user-input-box">
                    <input
                        type="text"
                        id="phoneNumber"
                        name="phoneNumber"
                        placeholder="Phone Number"
                        required
                    />
                </div>
                <div class="user-input-box">
                    <input
                        type="text"
                        id="address"
                        name="address"
                        placeholder="Address"
                        required
                    />
                </div>
                <div class="user-input-box">
                    <input
                        type="text"
                        id="pincode"
                        name="pincode"
                        placeholder="Pincode"
                        required
                    />
                </div>
            </div>
            
            <div class="form-submit-btn">
                <input type="submit" value="Payment" />
            </div>
        </div>
    </form>
    </body>
</html>
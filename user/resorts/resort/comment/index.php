<!DOCTYPE html>
<html>
    <head>
        <title>Form | Add Review</title>
        <link rel="icon" href="../../../../img/logo/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../../../css/user/resorts/resort/comment/stylesheet_05.css">
        <?php
            error_reporting(0);
            //ini_set('display_errors', 1);
            session_start();
            if(isset($_SESSION['RpId'])) {
                $RpId = $_SESSION['RpId'];
            } else {
                header("Location: ../../../");
                exit;
            }
            if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
                header("Location: ../../../../admin/");
                exit;
            }
            if(!($_SESSION['logged-in'] == "y")) {
                header("Location: ../../../");
                exit;
            }
            include '../../../../php/connection.php';
            if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "user") {
                $UserId = $_SESSION['user-id'];
                $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
                $tabledata = mysqli_fetch_row($db_data);
                $dbId_U = $tabledata[0];
                $dbName_U = "U".(dechex($dbId_U));
                mysqli_select_db($con,"USERS");
                $db_data = mysqli_query($con,"SELECT COUNT(*) FROM $dbName_U WHERE Booking_Index LIKE '$RpId%' AND Status = 'Completed' AND Commented = 'n';");
                $tabledata = mysqli_fetch_row($db_data);
                if ($tabledata[0] > 0) {
                    mysqli_select_db($con,"ZEPHYR");
                    $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id='$RpId';");
                    $tabledata = mysqli_fetch_row($db_data);
                    $dbId_R = $tabledata[0];
                    $dbName_R = "R".(dechex($dbId_R));
                    mysqli_select_db($con,$dbName_R);
                    $Room_Category_tabledata = mysqli_query($con,"SELECT Room_Category FROM Booking_History WHERE User_Id='$UserId';");
                }
                else {
                    header("Location: ../../../");
                    exit;
                }
            }
        ?>
    </head>
    <body>
        <form action="add_comment.php" method="post">
            <div class="container">
                <h1 class="form-title">Add Review</h1>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Name"
                            required
                        />
                    </div>
                    <div class="user-input-box">
                        <select name="room" class="form-select">
                        <?php
                            while($Room_Category_data = mysqli_fetch_row($Room_Category_tabledata)) {
                                echo "
                                    <option value='{$Room_Category_data[0]}'>{$Room_Category_data[0]}</option>
                                ";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="user-input-box">
                        <input
                            type="text"
                            id="country"
                            name="country"
                            placeholder="Country"
                            required
                        />
                    </div>
                    <div class="user-input-box">
                        <select name="rel" class="form-select">
                            <option value="Solo traveler">Solo traveler</option>
                            <option value="Couple">Couple</option>
                            <option value="Family">Family</option>
                            <option value="Friends">Friends</option>
                            <option value="Group">Group</option>
                        </select>
                    </div>
                </div>
                <div class="rating-details-box">
                    <span class="rating-title"> Rating </span>
                    <div class="rating-category">
                        <input type="radio" name="rating" value='1'/>
                        <label>1⭐</label>
                        <input type="radio" name="rating" value='2'/>
                        <label>2⭐</label>
                        <input type="radio" name="rating" value='3'/>
                        <label>3⭐</label>
                        <input type="radio" name="rating" value='4' checked/>
                        <label>4⭐</label>
                        <input type="radio" name="rating" value='5'/>
                        <label>5⭐</label>
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box-full-size">
                        <textarea name="about" cols="60" rows="2" placeholder="About Resort" required></textarea>
                    </div>
                    <div class="user-input-box-full-size">
                        <textarea name="comment" cols="80" rows="2" placeholder="Comment" required></textarea>
                    </div>
                </div>
                
                <div class="form-submit-btn">
                    <input type="submit" value="Add Comment" />
                </div>
            </div>
        </form>
    </body>
</html>
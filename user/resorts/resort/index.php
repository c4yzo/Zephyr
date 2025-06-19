<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../../../img/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../../../css/user/resorts/resort/stylesheet_03.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../../../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../../../css/general/site/style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <?php
        //error_reporting(E_ALL);
        //ini_set('display_errors', 1);
        session_start();
        if(isset($_SESSION['RpId'])) {
            $RpId = $_SESSION['RpId'];
        } else {
            header("Location: ../../");
            exit;
        }
        if (isset($_SESSION['Rooms']) AND isset($_SESSION['Adults']) AND isset($_SESSION['Children'])) {
            $checkIn = $_SESSION['Checkin'];
            $checkOut = $_SESSION['Checkout'];
            $rooms = $_SESSION['Rooms'];
            $adults = $_SESSION['Adults'];
            $children = $_SESSION['Children'];
        } else {
            $rooms = 1;
            $adults = 2;
            $children = 0;
        }   
        include '../../../php/connection.php';
        $db_data = mysqli_query($con,"SELECT DB_Id FROM Resorts WHERE Public_Id=$RpId;");
        $tabledata = mysqli_fetch_row($db_data);
        $dbId = $tabledata[0];
        $dbName = "R".(dechex($dbId));
        mysqli_select_db($con,$dbName);
        $Details_tabledata = mysqli_query($con,"SELECT * FROM Details;");
        $Details_data = mysqli_fetch_row($Details_tabledata);
        echo "<title>{$Details_data[0]}</title>";
        $pageViews = $Details_data[6];
        $pageViews++;
        $qry = "UPDATE Details SET Page_Views = ? WHERE Name = ?";
        $stmt = $con->prepare($qry);
        $stmt->bind_param("is", $pageViews, $Details_data[0]);
        $stmt->execute();
        $Location_tabledata = mysqli_query($con,"SELECT * FROM `Location`;");
        $Location_data = mysqli_fetch_row($Location_tabledata);
    ?>
</head>
<body>
    <!-- Page preloader-->
    <div class="page-loader">
        <div>
          <div class="page-loader-body">
            <div class="loader">
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="door"></div>
              <div class="hotel-sign"><span>R</span><span>E</span><span>S</span><span>O</span><span>R</span><span>T</span></div>
            </div>
          </div>
        </div>
    </div>
    
    <div id="overview" class="automargin">
        <div id="resort-images-slider">
            <!-- Classic slider-->
            <section class="section">
            <!-- Swiper -->
                <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                    <div class="swiper-wrapper">
                    <?php
                        $Images_tabledata = mysqli_query($con,"SELECT * FROM Images WHERE Image_Group='0';");
                        while($Image_data = mysqli_fetch_row($Images_tabledata)) {
                            $base64_image = 'data:' . $Image_data[2] . ';base64,' . base64_encode($Image_data[1]);
                            echo "
                                <div class='swiper-slide' data-slide-bg='$base64_image'>
                                    <div class='swiper-slide-caption' style='margin-top: 240px;'>
                                        <div class='shell text-sm-left'>
                                            <h1 data-caption-animate='slideInDown' data-caption-delay='100'>$Details_data[0]</h1>
                                            <div class='slider-subtitle-group'>
                                                <div class='decoration-line' data-caption-animate='slideInDown' data-caption-delay='400'></div>
                                                <h4 data-caption-animate='slideInLeft' data-caption-delay='700'>$Details_data[1]</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div><br>
        <div>
            <table class="w1412">
                <tr>
                    <td id="main">
                        <div id="maindiv1">
                            <h3><?php echo $Details_data[0] ?></h3>
                            <h5><?php echo $Details_data[1] ?></h5>
                            <hr width="96%">
                            <p><?php echo $Details_data[2] ?></p><br>
                        </div>
                    </td>
                    <td rowspan="2">
                        <div id="maindiv2">
                            <div id="maindiv2-rating-block" class="subdiv automargin">
                                <div class="flex">
                                    <div class="rating-block flex">
                                        <div>
                                            <div id="rating-summary"><h3><?php echo $Details_data[5] ?></h3></div>
                                            <div><span><?php echo $Details_data[4] ?> reviews</span></div>
                                        </div>
                                    </div>
                                    <div class="rating-block">
                                        <div class="rating"><?php echo $Details_data[3] ?></div>
                                    </div>
                                </div>
                            </div>
                            <div id="maindiv2-map-block" class="subdiv automargin">
                                <?php echo $Location_data[0]; ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="maindiv3">
                            <h3>Highlights</h3>
                            <div class="align-c">
                                <div class="row">
                                <?php
                                    $Facilities_Highlight_tabledata = mysqli_query($con,"SELECT $dbName.Facilities.Facility,ZEPHYR.Facilities.Name
                                        FROM $dbName.Facilities
                                        INNER JOIN ZEPHYR.Facilities
                                        ON $dbName.Facilities.Facility = ZEPHYR.Facilities.Id
                                        WHERE $dbName.Facilities.Highlight='y';");
                                    while($Highlight_data = mysqli_fetch_row($Facilities_Highlight_tabledata)) {
                                        $fac_image = "../../../img/facilities/FI".substr(("00".$Highlight_data[0]),-3).".png";
                                        $fac_name = $Highlight_data[1];
                                        echo "
                                            <div class='col highlight-block'>
                                                <div><img src='$fac_image'></div>
                                                <div><span>$fac_name</span></div>
                                            </div>
                                        ";
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div id="maindiv4">
                            <h3>Facilities</h3>
                            <div class="align-c">
                                <div class="row">
                                <?php
                                    $facCategoryName = ["Food & Drinks","Wellness","Activities","Sports & Entertainment"];
                                    $facCategoryImg = ["../../../img/facilities/CI1.svg","../../../img/facilities/CI2.svg","../../../img/facilities/CI3.svg","../../../img/facilities/CI4.svg"];
                                    for ($i=1; $i < 5; $i++) { 
                                        $Facilities_C_tabledata = mysqli_query($con,"SELECT ZEPHYR.Facilities.Name
                                            FROM $dbName.Facilities
                                            INNER JOIN ZEPHYR.Facilities
                                            ON $dbName.Facilities.Facility = ZEPHYR.Facilities.Id
                                            WHERE $dbName.Facilities.Highlight='n' AND ZEPHYR.Facilities.Category='$i';");
                                        if (mysqli_num_rows($Facilities_C_tabledata) > 0) {
                                            echo "
                                                <div class='col facility-outer-block flex'>
                                                    <div><img src='{$facCategoryImg[$i-1]}'></div>
                                                    <div class='facility-inner-block'>
                                                        <h4>{$facCategoryName[$i-1]}</h4>
                                            ";
                                            while($Facility_data = mysqli_fetch_row($Facilities_C_tabledata)) {
                                                echo "
                                                        <div>
                                                            <img src='../../../img/facilities/FI000.png'>
                                                            <span>{$Facility_data[0]}</span>
                                                        </div>
                                                ";
                                            }
                                            echo "
                                                    </div>
                                                </div>
                                            ";
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="row row-cols-5 facility-others-block">
                            <?php
                                $Facilities_C_tabledata = mysqli_query($con,"SELECT ZEPHYR.Facilities.Name
                                    FROM $dbName.Facilities
                                    INNER JOIN ZEPHYR.Facilities
                                    ON $dbName.Facilities.Facility = ZEPHYR.Facilities.Id
                                    WHERE $dbName.Facilities.Highlight='n' AND ZEPHYR.Facilities.Category='5';");
                                if (mysqli_num_rows($Facilities_C_tabledata) > 0) {
                                    while($Facility_data = mysqli_fetch_row($Facilities_C_tabledata)) {
                                        echo "
                                            <div class='flex'>
                                                <div><img src='../../../img/facilities/FI000.png'></div>
                                                <div><span>{$Facility_data[0]}</span></div>
                                            </div>
                                        ";
                                    }
                                }
                            ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id="maindiv5" class="subdiv divset2 automargin">
            <h3>Rooms Available At <?php echo $Details_data[0] ?></h3>
            <div class="flex">
                <div id="room-details-block">
                <?php
                    $RC_Count = 0;
                    $Room_Category_tabledata = mysqli_query($con,"SELECT * FROM Room_Category;");
                    while($Room_Category_data = mysqli_fetch_row($Room_Category_tabledata)) {
                        $RC_Count++;
                        echo "
                            <div class='flex subdiv room-details-element'>
                                <div>
                                    <div class='swiper-container swiper-slider swiper-style-2 room-img' data-loop='false' data-autoplay='5500' data-simulate-touch='false' data-slide-effect='slide' data-direction='horizontal'>
                                        <div class='swiper-wrapper'>
                        ";
                        $ImagesofRC_tabledata = mysqli_query($con,"SELECT * FROM Images WHERE Image_Group='$Room_Category_data[0]';");
                        while($Image_data = mysqli_fetch_row($ImagesofRC_tabledata)) {
                            $base64_image = 'data:' . $Image_data[2] . ';base64,' . base64_encode($Image_data[1]);
                            echo "
                                            <img class='swiper-slide' src='data:" . $Image_data[2] . ";base64," . base64_encode($Image_data[1]) . "'>
                            ";
                        }
                        echo "
                                        </div>
                                        <div class='swiper-pagination'></div>
                                    </div>
                                </div>
                                <div class='room-details pl20'>
                                    <h4>{$Room_Category_data[1]}</h4>
                                    <div class='room-facility-details'>
                                        <div><img class='icon' src='../../../img/icons/room-size.png'><span>Room size: {$Room_Category_data[8]} m<sup>2</sup>/{$Room_Category_data[9]} ft<sup>2</sup></span></div>
                                        <div><img class='icon' src='../../../img/icons/window.png'><span>{$Room_Category_data[10]}</span></div>
                                        <div><img class='icon' src='../../../img/icons/bed.png'><span>{$Room_Category_data[11]}</span></div>
                                    </div>
                                    <div id='room-price-details_$RC_Count' class='room-price-details flex'></div>
                                </div>
                            </div>
                        ";
                    }
                ?>
                </div>
                <div id="check-availability-block">
                    <div class="hotel-booking-form">
                        <!-- RD Mailform-->
                        <div class="rd-mailform">
                            <div class="range range-sm-bottom spacing-20">
                                <div class="cell-lg-12 cell-md-4">
                                    <p class="text-uppercase">Rooms</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select id="selectNofRooms" class="form-input select-filter" data-minimum-results-search="-1" data-constraints="@Required" onchange='setList("rooms"); checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>);'>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                    <p class="text-uppercase">Arrival</p>
                                    <div class="form-wrap">
                                        <label id="date-in-label" class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                                        <input class="form-input" id="date-in" type="text" name="date" onchange='alert("Change detected!"); checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>)'>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                    <p class="text-uppercase">Departure</p>
                                    <div class="form-wrap">
                                        <label id="date-out-label" class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                                        <input class="form-input" id="date-out" type="text" name="date" onchange='checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>)'>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Adults</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select id="selectNofAdults" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="1" data-constraints="@Required" onchange='setList("adults"); checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>);'>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Children</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select id="selectNofChildren" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" onchange='setList("children"); checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>);'>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4">
                                    <button class="button button-primary button-square button-block button-effect-ujarak" onclick='checkAvailability(<?php echo "{$RpId},{$RC_Count}"; ?>)'><span>Check Availability</span></button>
                                </div>
                            </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="maindiv6" class="subdiv divset2 automargin">
            <h3>Reviews</h3>
            <?php
                $Reviews_tabledata = mysqli_query($con,"SELECT * FROM Reviews;");
                if (mysqli_num_rows($Reviews_tabledata) == 0) {
                    echo "<div id='no-reviews'><img src='../../../img/icons/no_reviews.jpg'></div>";
                } else {
                    while($Review_data = mysqli_fetch_row($Reviews_tabledata)) {
                        echo "
                            <div class='review'>
                                <div class='flex'>
                                    <h5>\"{$Review_data[5]}\"</h5>
                                    <span class='spacer'></span>
                                    <div>
                        ";
                        for ($i=0; $i < 5; $i++) { 
                            if ($Review_data[4] > $i) {
                                echo "<img src='../../../img/icons/star_1.png'>";
                            }
                            else {
                                echo "<img src='../../../img/icons/star_0.png'>";
                            }
                        }
                        echo "
                                    </div>
                                </div>
                                <p>{$Review_data[6]}</p><br>
                                <img class='icon' src='../../../img/icons/user.png'><span>{$Review_data[1]} from {$Review_data[3]}<br></span>
                                <img class='icon' src='../../../img/icons/baggage.png'><span>{$Review_data[2]}<br></span>
                                <img class='icon' src='../../../img/icons/bed.png'><span>{$Review_data[7]}</span>
                            </div>
                        ";
                    }
                }
                if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "user") {
                    $UserId = $_SESSION['user-id'];
                    mysqli_select_db($tmpcon,"ZEPHYR");
                    $db_data = mysqli_query($tmpcon,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
                    $tabledata = mysqli_fetch_row($db_data);
                    $dbId_U = $tabledata[0];
                    $dbName_U = "U".(dechex($dbId_U));
                    mysqli_select_db($tmpcon,"USERS");
                    $db_data = mysqli_query($tmpcon,"SELECT COUNT(*) FROM $dbName_U WHERE Booking_Index LIKE '$RpId%' AND Status = 'Completed' AND Commented = 'n';");
                    $tabledata = mysqli_fetch_row($db_data);
                    if ($tabledata[0] > 0) {
                        echo "<div id='add-review'><button class='button button-booknow button-square button-block button-effect-ujarak' type='submit' onclick='addComment();'><span>ADD COMMENT</span></button></div>";
                    }
                    else {
                        echo "<div id='add-review'><button class='button button-booknow button-square button-block button-effect-ujarak' type='submit' onclick='alert(\"Only registered users who have stayed at this resort can add comments.\")'><span>ADD COMMENT</span></button></div>";
                    }
                    unset($tmpcon);
                }
                elseif (!isset($_SESSION['logged-in'])) {
                    echo "<div id='add-review'><button class='button button-booknow button-square button-block button-effect-ujarak' type='submit' onclick='alert(\"Please log-in to add comments.\")'><span>ADD COMMENT</span></button></div>";
                }
            ?>
        </div>
        <div id="maindiv7" class="subdiv divset2 automargin">
            <h3>Map</h3>
            <div id="map" class="subdiv"></div>
        </div>
        <div id="maindiv8" class="subdiv divset2 automargin">
            <h3>Property policies</h3>
            <?php
                $Policies_tabledata = mysqli_query($con,"SELECT * FROM Policies;");
                while($Policy_data = mysqli_fetch_row($Policies_tabledata)) {
                    echo "<h4>{$Policy_data[1]}</h4>";
                    if ($Policy_data[3] == 'p') {
                        echo "<p>{$Policy_data[2]}</p>";
                    }
                    else {
                        echo "<ul class='policy-list'>";
                        $lines = explode("\n",$Policy_data[2]);
                        foreach ($lines as $line) {
                            echo "<li>$line</li>";
                        }
                        echo "</ul>";
                    }
                }
            ?>
            <p></p> 
        </div><br>
    </div>
    <!-- Javascript-->
    <script>
        $(document).ready(function() {
            // Get tomorrow's date
            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            // Initialize first date picker with minDate set to today
            $("#date-in").datepicker({
                minDate: tomorrow,
                onSelect: function(selectedDate) {
                    // Get the selected date and parse it
                    var date = new Date(selectedDate);
                    // Add one day to the selected date
                    date.setDate(date.getDate() + 1);
                    // Format the next day in mm/dd/yyyy format
                    var nextDay = $.datepicker.formatDate('mm/dd/yy', date);
                    // Set the minDate of the second date picker to the next day
                    $("#date-out").datepicker("option", "minDate", nextDay);
                    $("#date-in-label").hide();
                }
            });

            // Initialize second date picker with minDate set to the day after tomorrow
            var dayAfterTomorrow = new Date();
            dayAfterTomorrow.setDate(dayAfterTomorrow.getDate() + 2);
            var formattedDayAfterTomorrow = $.datepicker.formatDate('mm/dd/yy', dayAfterTomorrow);
            $("#date-out").datepicker({
                minDate: formattedDayAfterTomorrow,
                onSelect: function(selectedDate) {
                    $("#date-out-label").hide();
                }
            });
        });
    </script>
    <script src="../../../js/user/resorts/resort/script_03.js"></script>
    <script src="../../../js/general/site/core.min.js"></script>
    <script src="../../../js/general/site/script.js"></script>

    <!-- Date Picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        navigator.geolocation.getCurrentPosition((position) => {
            var currentLat = position.coords.latitude;
            var currentLon = position.coords.longitude;
            var map = L.map('map').setView([20.5937, 78.9629], 4); // Set initial map view

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            // Define the start and end points for directions
            var startPoint = L.latLng(currentLat,currentLon);
            var endPoint = L.latLng(<?php echo $Location_data[1] ?>,<?php echo $Location_data[2] ?>);

            // Add markers for start and end points
            L.marker(startPoint).addTo(map).bindPopup('Start Point');
            L.marker(endPoint).addTo(map).bindPopup('End Point');

            // Define the routing control for directions
            L.Routing.control({
                waypoints: [
                    startPoint,
                    endPoint
                ],
                routeWhileDragging: true
            }).addTo(map);
        }, (error) => {
            console.error('Error getting current location:', error);
        });
    </script>

    <?php
        if (!empty($checkIn) AND !empty($checkOut)) {
            echo "
                <script>
                    $('#date-in').val('$checkIn');
                    var date = new Date('$checkIn');
                    date.setDate(date.getDate() + 1);
                    var nextDay = $.datepicker.formatDate('mm/dd/yy', date);
                    $('#date-out').datepicker('option', 'minDate', nextDay);
                    $('#date-in-label').hide();
                    $('#date-out').val('$checkOut');
                    $('#date-out-label').hide();
                </script>
            ";
        }
        echo "
            <script>
                var selectNofRooms = document.getElementById('selectNofRooms');
                var selectNofAdults = document.getElementById('selectNofAdults');
                var selectNofChildren = document.getElementById('selectNofChildren');
                var selectNofRoomsText = document.getElementById('select2-chosen-1');
                var selectNofAdultsText = document.getElementById('select2-chosen-2');
                var selectNofChildrenText = document.getElementById('select2-chosen-3');
                selectNofRooms.value = $rooms;
                selectNofRoomsText.textContent = $rooms;
                setList('rooms');
                selectNofAdults.value = $adults;
                selectNofAdultsText.textContent = $adults;
                setList('adults');
                selectNofChildren.value = $children;
                selectNofChildrenText.textContent = $children;
                setList('children');
                checkAvailability($RpId,$RC_Count);
            </script>
        ";
    ?>
</body>
</html>
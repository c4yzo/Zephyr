
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Zephyr | Dashboard</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="../css/admin/stylesheet_02.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../css/general/site/style.css">
    <link rel="stylesheet" href="../css/admin/stylesheet_01.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <?php
      session_start();
      if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "user") {
        header("Location: ../user/");
        exit;
      }
      if(!isset($_SESSION['logged-in'])) {
        header("Location: ../login/authentication.php");
        exit;
      }
      $_SESSION['RpId'] = $_SESSION['user-id'];
      $AdminId = $_SESSION['user-id'];
      require_once '../php/connection.php';
      $db_data = mysqli_query($con,"SELECT DB_Id,Name FROM Resorts WHERE Public_Id = '$AdminId';");
      $tabledata = mysqli_fetch_row($db_data);
      $dbId = $tabledata[0];
      $rName = $tabledata[1];
      $dbName = "R".(dechex($dbId));
      mysqli_select_db($con,$dbName);
      $db_data = mysqli_query($con,"SELECT Rating,Nof_Rating,Rating_Summary,Page_Views FROM Details;");
      $tabledata = mysqli_fetch_row($db_data);
      $rRating = $tabledata[0];
      $rNofRating = $tabledata[1];
      $rRatingSummary = $tabledata[2];
      $rPageViews = $tabledata[3];
      $db_data = mysqli_query($con,"SELECT COUNT(*),SUM(Total_Rooms) FROM Room_Category;");
      $tabledata = mysqli_fetch_row($db_data);
      $rRcCount = $tabledata[0];
      $rTotalRooms = $tabledata[1];
      $db_data = mysqli_query($con,"SELECT COUNT(*) FROM Booking_Log WHERE DATE(Timestamp) = CURDATE();");
      $tabledata = mysqli_fetch_row($db_data);
      $rNewBookings = $tabledata[0];
      $rScheduledRooms = 0;
      for ($i=1; $i <= $rRcCount; $i++) { 
        $rcTName = "RC".substr(("0".strval($i)),-2);
        $db_data = mysqli_query($con,"SELECT COUNT(*) FROM $rcTName WHERE Checkin IS NOT NULL;");
        $tabledata = mysqli_fetch_row($db_data);
        $rScheduledRooms = $rScheduledRooms + $tabledata[0];
      }
      $rAvailableRoomsToday = $rTotalRooms - $rScheduledRooms;
      $rAvailableRoomsTodayPercentage = ($rAvailableRoomsToday / $rTotalRooms) * 100;
      $db_data = mysqli_query($con,"SELECT COUNT(*) FROM Booking_Log WHERE Checkin = CURDATE();");
      $tabledata = mysqli_fetch_row($db_data);
      $rCheckinToday = $tabledata[0];
      $db_data = mysqli_query($con,"SELECT COUNT(*) FROM Booking_Log WHERE Checkout = CURDATE();");
      $tabledata = mysqli_fetch_row($db_data);
      $rCheckoutToday = $tabledata[0];
      $db_data = mysqli_query($con,"SELECT COUNT(*),SUM(Rent) FROM Booking_Log;");
      $tabledata = mysqli_fetch_row($db_data);
      $rActiveBookingsCount = $tabledata[0];
      $rActiveBookingsTRent = $tabledata[1];
      $db_data = mysqli_query($con,"SELECT COUNT(*),SUM(Rent) FROM Booking_History;");
      $tabledata = mysqli_fetch_row($db_data);
      $rPastReservationsCount = $tabledata[0];
      $rPastReservationsTRent = $tabledata[1];
      $rTotalBookings = $rActiveBookingsCount + $rPastReservationsCount;
      $rEarnings = $rActiveBookingsTRent + $rPastReservationsTRent;
    ?>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
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
      <!-- Page Header-->
      <header class="page-header" style="padding-bottom: 24px">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <div style="display: flex;">
                    <div><div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="index.html"><img src="../img/logo/Zephyr.png" alt="" style="height: 80px;"/></a></div></div>
                    <div><span class="spark notranslate" translate="no" data-sized="true" data-status="loaded">Zephyr</span></div>
                  </div>
                </div>
                <div class="center-side">
                  <div class="rd-navbar-brand fullwidth-brand"></div>
                </div>
                <div class="right-side">
                  <div style="display: flex;">
                    <div style="display: flex; align-items: center; margin-right: 20px;"><h3><?php echo $rName; ?></h3></div>
                    <div><a class="button button-primary button button-square button-effect-ujarak button-lg" href="../login/signout.php"><span>Log Out</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar collapse toggle-->
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand mobile-brand">
                  <div style="display: flex;">
                    <div><div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="index.html"><img src="../img/logo/Zephyr.png" alt="" style="height: 80px;"/></a></div></div>
                    <div><span class="spark notranslate" translate="no" data-sized="true" data-status="loaded">Zephyr</span></div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-scroll-holder">
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index.php">Dashboard</a>
                      </li>
                      <li><a href="bookings.php">Bookings</a>
                      </li>
                      <li><a href="account.php">Account</a>
                      </li>
                      <li><a href="../user/resorts/resort/">Resort Page</a>
                      </li>
                      <li><a href="about-us.html">About Us</a>
                      </li>
                      <li><a href="contacts.html">Contacts</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section id="comp-kbgaghri" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-kbgaghri-container comp-kbgaghri wixui-section undefined" data-testid="section-container">
        <div id="bgLayers_comp-kbgaghri" data-hook="bgLayers" class="MW5IWV">
            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
            <div id="bgMedia_comp-kbgaghri" class="VgO9Yg"></div>
        </div>
        <div id="comp-ltii0xqc" class="QOX0dS JCRlLH comp-ltii0xqc-container comp-ltii0xqc wixui-box">
            <div class="AG_P7Z MAs5Tr wixui-box"></div>
            <div id="comp-ltii7cdd" class="QOX0dS JCRlLH comp-ltii7cdd-container comp-ltii7cdd wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div id="comp-ltiidh3q" class="QOX0dS JCRlLH comp-ltiidh3q wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box" 
                    style="
                      background-color:hsla(145,53%,77%,1);
                      background-image:
                      radial-gradient(at 0% 0%, hsla(139,100%,79%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 0%, hsla(184,100%,77%,1) 0px, transparent 50%),
                      radial-gradient(at 0% 100%, hsla(47,100%,73%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 100%, hsla(338,100%,76%,1) 0px, transparent 50%);"
                    ></div>
                    <div class="comp-ltiidh3q-container" data-testid="responsive-container-content">
                        <div id="comp-ltiilj26" class="KcpHeO tz5f0K comp-ltiilj26 wixui-rich-text" data-testid="richTextElement">
                            <h3 class="font_3 wixui-rich-text__text" style="padding-left: 10px;"><?php echo $rNewBookings; ?></h3>
                        </div>
                        <div id="comp-ltiinmxi" class="KcpHeO tz5f0K comp-ltiinmxi wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text"><span class="wixui-rich-text__text" style="padding-left: 10px;">New Bookings</span></p>
                        </div>
                        <div id="comp-ltiiqymh" data-testid="imageX" class="z4Uj6S comp-ltiiqymh wixui-image">
                            <wix-image id="img-comp-ltiiqymh" data-is-responsive="true" data-image-info="{&quot;containerId&quot;:&quot;comp-ltiiqymh&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_fe93b68e1beb4560af99dcdeeff0774a~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:492,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;bookmark.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                data-has-ssr-src="true" class="L4tPY9">
                                <picture><img src="../img/icons/new_bookings.png" alt="" style="object-fit:cover;object-position:50% 50%"
                                    /></picture>
                            </wix-image>
                        </div>
                    </div>
                </div>
                <div id="comp-ltijbajs" class="QOX0dS JCRlLH comp-ltijbajs wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box" 
                    style="
                      background-color:hsla(170,63%,80%,1);
                      background-image:
                      radial-gradient(at 0% 0%, hsla(326,100%,75%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 0%, hsla(187,100%,89%,1) 0px, transparent 50%),
                      radial-gradient(at 0% 100%, hsla(195,100%,78%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 100%, hsla(132,100%,82%,1) 0px, transparent 50%);"
                    ></div>
                    <div class="comp-ltijbajs-container" data-testid="responsive-container-content">
                        <div id="comp-ltijbajy1" class="KcpHeO tz5f0K comp-ltijbajy1 wixui-rich-text" data-testid="richTextElement">
                            <h3 class="font_3 wixui-rich-text__text" style="padding-left: 10px;"><?php echo $rScheduledRooms; ?></h3>
                        </div>
                        <div id="comp-ltijbak3" class="KcpHeO tz5f0K comp-ltijbak3 wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text"><span class="wixui-rich-text__text" style="padding-left: 10px;">Scheduled Rooms</span></p>
                        </div>
                        <div id="comp-ltijbak45" data-testid="imageX" class="z4Uj6S comp-ltijbak45 wixui-image">
                            <wix-image id="img-comp-ltijbak45" data-is-responsive="true" data-image-info="{&quot;containerId&quot;:&quot;comp-ltijbak45&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_8e413d749077430eb07065a78c460d27~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;calendar (1).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                data-has-ssr-src="true" class="L4tPY9">
                                <picture><img src="../img/icons/scheduled_rooms.png" alt=""
                                        style="object-fit:cover;object-position:50% 50%" /></picture>
                            </wix-image>
                        </div>
                    </div>
                </div>
                <div id="comp-ltijbkvd" class="QOX0dS JCRlLH comp-ltijbkvd wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box" 
                    style="
                      background-color:hsla(211,100%,85%,1);
                      background-image:
                      radial-gradient(at 0% 0%, hsla(161,100%,81%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 0%, hsla(224,100%,82%,1) 0px, transparent 50%),
                      radial-gradient(at 0% 100%, hsla(207,100%,86%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 100%, hsla(250,100%,79%,1) 0px, transparent 50%);"
                    ></div>
                    <div class="comp-ltijbkvd-container" data-testid="responsive-container-content">
                        <div id="comp-ltijbkw21" class="KcpHeO tz5f0K comp-ltijbkw21 wixui-rich-text" data-testid="richTextElement">
                            <h3 class="font_3 wixui-rich-text__text" style="padding-left: 10px;"><?php echo $rCheckinToday; ?></h3>
                        </div>
                        <div id="comp-ltijbkw37" class="KcpHeO tz5f0K comp-ltijbkw37 wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text" style="padding-left: 10px;">Check In</p>
                        </div>
                        <div id="comp-ltijbkw5" data-testid="imageX" class="z4Uj6S comp-ltijbkw5 wixui-image">
                            <wix-image id="img-comp-ltijbkw5" data-is-responsive="true" data-image-info="{&quot;containerId&quot;:&quot;comp-ltijbkw5&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_9ec8f5e5881643f6904f3de6fb642417~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;login.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                data-has-ssr-src="true" class="L4tPY9">
                                <picture><img src="../img/icons/checkin.png" alt="" style="object-fit:cover;object-position:50% 50%"
                                    /></picture>
                            </wix-image>
                        </div>
                    </div>
                </div>
                <div id="comp-ltijbu70" class="QOX0dS JCRlLH comp-ltijbu70 wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box" 
                    style="
                      background-color:hsla(93,75%,80%,1);
                      background-image:
                      radial-gradient(at 0% 0%, hsla(72,100%,81%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 0%, hsla(84,100%,81%,1) 0px, transparent 50%),
                      radial-gradient(at 0% 100%, hsla(317,100%,76%,1) 0px, transparent 50%),
                      radial-gradient(at 100% 100%, hsla(183,100%,82%,1) 0px, transparent 50%);"
                    ></div>
                    <div class="comp-ltijbu70-container" data-testid="responsive-container-content">
                        <div id="comp-ltijbu7n3" class="KcpHeO tz5f0K comp-ltijbu7n3 wixui-rich-text" data-testid="richTextElement">
                            <h3 class="font_3 wixui-rich-text__text" style="padding-left: 10px;"><?php echo $rCheckoutToday; ?></h3>
                        </div>
                        <div id="comp-ltijbu7p" class="KcpHeO tz5f0K comp-ltijbu7p wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text" style="padding-left: 10px;">Check Out</p>
                        </div>
                        <div id="comp-ltijbu7q4" data-testid="imageX" class="z4Uj6S comp-ltijbu7q4 wixui-image">
                            <wix-image id="img-comp-ltijbu7q4" data-is-responsive="true" data-image-info="{&quot;containerId&quot;:&quot;comp-ltijbu7q4&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_7d60c01a225641e39a0a68332b85c35d~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;logout (2).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                data-has-ssr-src="true" class="L4tPY9">
                                <picture><img src="../img/icons/checkout.png" alt=""
                                        style="object-fit:cover;object-position:50% 50%" /></picture>
                            </wix-image>
                        </div>
                    </div>
                </div>
            </div>
            <div id="comp-ltiv3b74" class="QOX0dS JCRlLH comp-ltiv3b74-container comp-ltiv3b74 wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div id="comp-ltil4jer" class="KcpHeO tz5f0K comp-ltil4jer wixui-rich-text" data-testid="richTextElement">
                    <h6 class="font_6 wixui-rich-text__text">Available Rooms Today</h6>
                </div>
                <div id="comp-ltiuwodp" class="comp-ltiuwodp _xg6_p">
                    <style>
                        .flex-wrapper {
                      display: flex;
                      flex-flow: row nowrap;
                    }
                    
                    .single-chart {
                      width: 300px;
                      justify-content: space-around ;
                    }
                    
                    .circular-chart {
                      display: block;
                    }
                    
                    .circle-bg {
                      fill: none;
                      stroke: #eee;
                      stroke-width: 3.8;
                    }
                    
                    .circle {
                      fill: none;
                      stroke-width: 2.8;
                      stroke-linecap: round;
                      animation: progress 1s ease-out forwards;
                    }
                    
                    @keyframes progress {
                      0% {
                        stroke-dasharray: 0 100;
                      }
                    }
                    
                    .circular-chart.orange .circle {
                      stroke: #ff9f00;
                    }
                    
                    .circular-chart.green .circle {
                      stroke: #4CC790;
                    }
                    
                    .circular-chart.blue .circle {
                      stroke: #3c9ee5;
                    }
                    
                    .percentage {
                      fill: #666;
                      font-family: sans-serif;
                      font-size: 0.5em;
                      text-anchor: middle;
                    }
                    </style>
                    <div style="margin: 10px;">
                        <div class="flex-wrapper">
                            <div class="single-chart">
                            <svg viewBox="0 0 36 36" class="circular-chart orange">
                                <path class="circle-bg"
                                d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                <path class="circle"
                                stroke-dasharray="<?php echo $rAvailableRoomsTodayPercentage; ?>, 100"
                                d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                <text x="18" y="20.35" class="percentage"><?php echo $rAvailableRoomsToday; ?></text>
                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="comp-ltivobm3" class="QOX0dS JCRlLH comp-ltivobm3 wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div class="comp-ltivobm3-container" data-testid="responsive-container-content">
                    <div id="comp-ltil0kx4" class="KcpHeO tz5f0K comp-ltil0kx4 wixui-rich-text" data-testid="richTextElement">
                        <h5 class="font_5 wixui-rich-text__text">Page Views</h5>
                    </div>
                    <div id="comp-ltil1kmk" class="KcpHeO tz5f0K comp-ltil1kmk wixui-rich-text" data-testid="richTextElement">
                        <h5 class="font_5 wixui-rich-text__text">Bookings</h5>
                    </div>
                    <div id="comp-ltival9o" class="QOX0dS JCRlLH comp-ltival9o-container comp-ltival9o wixui-box" style="opacity: 1;">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    </div>
                    <div id="comp-ltivewz9" class="QOX0dS JCRlLH comp-ltivewz9-container comp-ltivewz9 wixui-box" style="opacity: 1;">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    </div>
                    <div id="comp-ltiviiep" class="KcpHeO tz5f0K comp-ltiviiep wixui-rich-text" data-testid="richTextElement">
                        <h2 class="font_2 wixui-rich-text__text"><span class="wixui-rich-text__text"><?php echo $rPageViews; ?></span></h2>
                    </div>
                    <div id="comp-ltivllyd" class="KcpHeO tz5f0K comp-ltivllyd wixui-rich-text" data-testid="richTextElement">
                        <h2 class="font_2 wixui-rich-text__text"><span class="wixui-rich-text__text"><?php echo $rTotalBookings; ?></span></h2>
                    </div>
                </div>
            </div>
            <div id="comp-ltimvauh" class="QOX0dS JCRlLH comp-ltimvauh-container comp-ltimvauh wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div id="comp-ltin6dw7" class="QOX0dS JCRlLH comp-ltin6dw7-container comp-ltin6dw7 wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    <div id="comp-ltinl681" class="QOX0dS JCRlLH comp-ltinl681-container comp-ltinl681 wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltikrunt" class="KcpHeO tz5f0K comp-ltikrunt wixui-rich-text" data-testid="richTextElement">
                            <h2 class="font_2 wixui-rich-text__text"><span class="wixui-rich-text__text"><?php echo $rRating; ?></span></h2>
                        </div>
                        <div id="comp-ltin0j02" class="comp-ltin0j02 wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltin0j02" class="aizuI7 TcoJIb comp-ltin0j02"><svg preserveAspectRatio="none" data-bbox="19 20.5 162 159.001" viewBox="19 20.5 162 159.001" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation
                                    aria-hidden=true aria-label="">
<g>
<path d="M169.256 69.284h-36.377c-5.085 0-9.591-3.268-11.154-8.09L111.154 28.59c-3.498-10.786-18.811-10.787-22.307 0L78.274 61.195a11.72 11.72 0 0 1-11.154 8.09H30.744c-11.255 0-16.041 14.273-7.048 21.017l27.002 20.248a11.657 11.657 0 0 1 4.073 13.026l-13.536 40.502c-3.527 10.552 8.338 19.58 17.623 13.411l34.637-23.013a11.755 11.755 0 0 1 13.004 0l34.637 23.013c9.285 6.17 21.15-2.86 17.623-13.411l-13.536-40.502a11.658 11.658 0 0 1 4.074-13.026l27.002-20.248c8.999-6.747 4.213-21.018-7.043-21.018z"/>
</g>
</svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="comp-ltint8oq" class="QOX0dS JCRlLH comp-ltint8oq wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    <div class="comp-ltint8oq-container" data-testid="responsive-container-content">
                        <div id="comp-ltiks6dg" class="KcpHeO tz5f0K comp-ltiks6dg wixui-rich-text" data-testid="richTextElement">
                            <h5 class="font_5 wixui-rich-text__text"><?php echo $rRatingSummary; ?></h5>
                        </div>
                    </div>
                </div>
                <div id="comp-ltinx3kw" class="QOX0dS JCRlLH comp-ltinx3kw-container comp-ltinx3kw wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    <div id="comp-ltiktm6z" class="KcpHeO tz5f0K comp-ltiktm6z wixui-rich-text" data-testid="richTextElement">
                        <h5 class="font_5 wixui-rich-text__text">Reviews</h5>
                    </div>
                    <div id="comp-ltinwc6u" class="KcpHeO tz5f0K comp-ltinwc6u wixui-rich-text" data-testid="richTextElement">
                        <h2 class="font_2 wixui-rich-text__text" style="text-align:center;"><?php echo $rNofRating; ?></h2>
                    </div>
                </div>
                <div id="comp-ltixc8wx" class="QOX0dS JCRlLH comp-ltixc8wx-container comp-ltixc8wx wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    <div id="comp-ltixc8x03" class="KcpHeO tz5f0K comp-ltixc8x03 wixui-rich-text" data-testid="richTextElement">
                        <h5 class="font_5 wixui-rich-text__text">Room Category</h5>
                    </div>
                    <div id="comp-ltixc8x2" class="KcpHeO tz5f0K comp-ltixc8x2 wixui-rich-text" data-testid="richTextElement">
                        <h2 class="font_2 wixui-rich-text__text" style="text-align:center;"><?php echo $rRcCount; ?></h2>
                    </div>
                </div>
            </div>
            <div id="comp-ltiw3gmm" class="QOX0dS JCRlLH comp-ltiw3gmm-container comp-ltiw3gmm wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div id="comp-ltiw03fq" class="KcpHeO tz5f0K comp-ltiw03fq wixui-rich-text" data-testid="richTextElement">
                    <h6 class="font_6 wixui-rich-text__text">Total Rooms</h6>
                </div>
                <div id="comp-ltiw1uih" class="KcpHeO tz5f0K comp-ltiw1uih wixui-rich-text" data-testid="richTextElement">
                    <h2 class="font_2 wixui-rich-text__text"><?php echo $rTotalRooms; ?></h2>
                </div>
            </div>
            <div id="comp-ltiwdjs3" class="QOX0dS JCRlLH comp-ltiwdjs3-container comp-ltiwdjs3 wixui-box">
                <div class="AG_P7Z MAs5Tr wixui-box"></div>
                <div id="comp-ltil28e7" class="KcpHeO tz5f0K comp-ltil28e7 wixui-rich-text" data-testid="richTextElement">
                    <h2 class="font_2 wixui-rich-text__text">Earnings</h2>
                </div>
                <div id="comp-ltiwao3z" class="KcpHeO tz5f0K comp-ltiwao3z wixui-rich-text" data-testid="richTextElement">
                    <h2 class="font_2 wixui-rich-text__text"><span class="wixui-rich-text__text">₹ <?php echo $rEarnings; ?></span></h2>
                </div>
                <div id="comp-ltiwlltk" data-testid="imageX" class="z4Uj6S comp-ltiwlltk wixui-image">
                    <wix-image id="img-comp-ltiwlltk" data-is-responsive="true" data-image-info="{&quot;containerId&quot;:&quot;comp-ltiwlltk&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_12f88021267c4de193bc5bf5ef84eb14~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;wage.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                        data-has-ssr-src="true" class="L4tPY9">
                        <picture><img src="../img/icons/earnings.png" alt="" style="object-fit:cover;object-position:50% 50%"
                            /></picture>
                    </wix-image>
                </div>
            </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="page-footer text-left text-sm-left">
        <div class="shell-wide">
          <div class="page-footer-minimal">
            <div class="shell-wide">
              <div class="range range-50">
                <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
                  <div class="page-footer-minimal-inner">
                    <ul class="list-unstyled">
                      <li>
                        <p class="rights"><span>&copy;&nbsp;</span><span>2024</span><span>&nbsp;</span><span class="copyright-year"></span>Zephyr. All Rights Reserved. Design by Our Team</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="page-footer-minimal-inner">
                    <h4>Address</h4>
                    <ul class="list-unstyled">
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                          <dd><a class="link link-gray-darker" href="#"> 559G+9PJ, Thrikaripur, Kasaragod Dist, Udinur, Kerala 671349</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker">Call Us: <a class="link link-gray-darker" href="tel:#">+91 7510527674</a>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
                  <div class="page-footer-minimal-inner-subscribe">
                    <h4>Join Our Newsletter</h4>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform-inline form-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-email">Enter your e-mail</label>
                      </div>
                      <button class="button button-primary-2 button-effect-ujarak button-square" type="submit"><span>Subscribe</span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript-->
    <script src="../js/general/site/core.min.js"></script>
    <script src="../js/general/site/script.js"></script>

    <!-- Date Picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </body>
</html>
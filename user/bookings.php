
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Zephyr | Bookings</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="../css/user/stylesheet_02.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../css/general/site/style.css">
    <link rel="stylesheet" href="../css/user/stylesheet_01.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php
      session_start();
      if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
        header("Location: ../admin/");
        exit;
      }
      if(!isset($_SESSION['logged-in'])) {
        $_SESSION['redirecting-location'] = "../user/bookings.php";
        header("Location: ../login/authentication.php");
        exit;
      }
      else {
        $UserId = $_SESSION['user-id'];
        include '../php/connection.php';
        $db_data = mysqli_query($con,"SELECT DB_Id FROM Users WHERE Public_Id=$UserId;");
        $tabledata = mysqli_fetch_row($db_data);
        $dbId_U = $tabledata[0];
        $dbName_U = "U".(dechex($dbId_U));
        mysqli_select_db($con,"USERS");
        $active_bookings_keys = mysqli_query($con,"SELECT Booking_Index FROM $dbName_U WHERE Status = 'Confirmed';");
        $past_reservations_keys = mysqli_query($con,"SELECT Booking_Index FROM $dbName_U WHERE Status = 'Completed';");
      }
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
                      <li><a href="index.php">Home</a>
                      </li>
                      <li class="active"><a href="bookings.php">Bookings</a>
                      </li>
                      <li><a href="account.php">Account</a>
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
      <!-- Breadcrumbs & Page title-->
      <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
          <div class="range range-xs-center">
            <div class="cell-xs-12 cell-xl-11">
              <h2 class="text-white" style="color: #FFF; text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);">Bookings</h2>
              <ul class="breadcrumbs-custom">
                <li><a href="index.html">Home</a></li>
                <li class="active">Bookings</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6">
              <h3>Active Bookings</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#"><!--See All Photos--></a></div>
          </div>
          <hr>
        </div>
        <div>
        <?php
          mysqli_select_db($con,"ZEPHYR");
          if ((mysqli_num_rows($active_bookings_keys)) > 0) {
            while($active_booking_key = mysqli_fetch_row($active_bookings_keys)) {
              $key = $active_booking_key[0];
              $RpId = substr($key, 0, 9);
              $db_data = mysqli_query($con,"SELECT DB_Id,Name FROM Resorts WHERE Public_Id='$RpId';");
              $tabledata = mysqli_fetch_row($db_data);
              $dbId_R = $tabledata[0];
              $rName = $tabledata[1];
              $dbName_R = "R".(dechex($dbId_R));
              $active_booking_tabledata = mysqli_query($con,"SELECT $dbName_R.Booking_Log.Room_Category,$dbName_R.Booking_Log.Checkin,$dbName_R.Booking_Log.Checkout,$dbName_R.Booking_Log.Rooms,$dbName_R.Booking_Log.Adults,$dbName_R.Booking_Log.Children,$dbName_R.Booking_Log.Rent,$dbName_R.Booking_Log.Room_Numbers
                FROM USERS.$dbName_U
                INNER JOIN $dbName_R.Booking_Log
                ON USERS.$dbName_U.Booking_Index = $dbName_R.Booking_Log.Sharing_Key
                WHERE USERS.$dbName_U.Booking_Index = '$key';");
              $active_booking_data = mysqli_fetch_row($active_booking_tabledata);
              $rcName = $active_booking_data[0];
              $checkin = $active_booking_data[1];
              $checkout = $active_booking_data[2];
              $rooms = $active_booking_data[3];
              $adults = $active_booking_data[4];
              $children = $active_booking_data[5];
              $rent = $active_booking_data[6];
              $roomNumbers = $active_booking_data[7];
              $roomNumbers = explode(',', $roomNumbers);
              echo "
                <div id='comp-ltd4jtdy' tabindex='-1' data-block-level-container='Section' class='xuzjBY comp-ltd4jtdy-container comp-ltd4jtdy wixui-section undefined' data-testid='section-container'>
                  <div id='bgLayers_comp-ltd4jtdy' data-hook='bgLayers' class='MW5IWV'>
                      <div data-testid='colorUnderlay' class='LWbAav Kv1aVt'></div>
                      <div id='bgMedia_comp-ltd4jtdy' class='VgO9Yg'></div>
                  </div>
                  <div id='comp-ltd4klyw' class='QOX0dS JCRlLH comp-ltd4klyw-container comp-ltd4klyw wixui-box'>
                      <div class='AG_P7Z MAs5Tr wixui-box'></div>
                      <div id='comp-ltd4o8y3' class='QOX0dS JCRlLH comp-ltd4o8y3-container comp-ltd4o8y3 wixui-box'>
                          <div class='AG_P7Z MAs5Tr wixui-box' style='box-shadow: 0 8px 8px rgba(0, 0, 0, 0.4) !important;'></div>
                          <div id='comp-ltd4tvnk' class='KcpHeO tz5f0K comp-ltd4tvnk wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>Booking ID -</h6>
                          </div>
                          <div id='comp-ltd4y3ey' class='KcpHeO tz5f0K comp-ltd4y3ey wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>{$key}</h6>
                          </div>
                          <div id='comp-ltd52198' class='comp-ltd52198 JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd58l2o' class='KcpHeO tz5f0K comp-ltd58l2o wixui-rich-text' data-testid='richTextElement'>
                              <h2 class='font_2 wixui-rich-text__text'>{$rName}</h2>
                          </div>
                          <div id='comp-ltd5h9xy' class='KcpHeO tz5f0K comp-ltd5h9xy wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$rcName}</h4>
                          </div>
                          <div id='comp-ltd6a4qd' class='QOX0dS JCRlLH comp-ltd6a4qd-container comp-ltd6a4qd wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd62x69' data-testid='imageX' class='z4Uj6S comp-ltd62x69 wixui-image'>
                                  <wix-image id='img-comp-ltd62x69' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltd62x69&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_df38ebab50954be2b637240f7eff99db~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;login.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/checkin.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltd68022' class='KcpHeO tz5f0K comp-ltd68022 wixui-rich-text' data-testid='richTextElement'>
                                  <h4 class='font_4 wixui-rich-text__text'>Check In</h4>
                              </div>
                          </div>
                          <div id='comp-ltd6cx3q' class='QOX0dS JCRlLH comp-ltd6cx3q-container comp-ltd6cx3q wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd6cx40' data-testid='imageX' class='z4Uj6S comp-ltd6cx40 wixui-image'>
                                  <wix-image id='img-comp-ltd6cx40' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltd6cx40&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_b5177905aeb94d56af1c02a6826327e2~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;logout (2).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/checkout.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltd6cx45' class='KcpHeO tz5f0K comp-ltd6cx45 wixui-rich-text' data-testid='richTextElement'>
                                  <h4 class='font_4 wixui-rich-text__text'>Check Out</h4>
                              </div>
                          </div>
                          <div id='comp-ltd6jcow' class='KcpHeO tz5f0K comp-ltd6jcow wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$checkin}</h4>
                          </div>
                          <div id='comp-ltd6koaq' class='KcpHeO tz5f0K comp-ltd6koaq wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$checkout}</h4>
                          </div>
                          <div id='comp-ltd6oy4j' class='comp-ltd6oy4j JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd6rk4v' class='comp-ltd6rk4v JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd70hoo' class='KcpHeO tz5f0K comp-ltd70hoo wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>Room Numbers :</h6>
                          </div>
                          <div id='comp-ltd73tgf' class='QOX0dS JCRlLH comp-ltd73tgf-container comp-ltd73tgf wixui-box'>
                            <style>
                              .room-numbers {
                                display: flex;
                                align-items: center;
                                justify-content: space-evenly;
                              }
                              
                              .room-numbers div {
                                height: 90px;
                                width: 90px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                color: #333;
                                background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #FFFFAC 40%, transparent 80%),
                                  radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%);
                                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
                                border-radius: 10px;
                              }
                            </style>
                            <div class='AG_P7Z MAs5Tr wixui-box room-numbers'>
              ";
              foreach ($roomNumbers as $roomNumber) {
                echo "
                                <div><h4>$roomNumber</h4></div>
                ";
              }
              echo "
                            </div>
                          </div>
                          <div id='comp-ltd75wq9' class='QOX0dS JCRlLH comp-ltd75wq9-container comp-ltd75wq9 wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd8uzs4' class='KcpHeO tz5f0K comp-ltd8uzs4 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Rooms</h3>
                              </div>
                              <div id='comp-ltd8yg34' class='KcpHeO tz5f0K comp-ltd8yg34 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Adults</h3>
                              </div>
                              <div id='comp-ltd8yl93' class='KcpHeO tz5f0K comp-ltd8yl93 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Children</h3>
                              </div>
                              <div id='comp-ltd8yqra' class='KcpHeO tz5f0K comp-ltd8yqra wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$rooms}</h3>
                              </div>
                              <div id='comp-ltd8yyzb' class='KcpHeO tz5f0K comp-ltd8yyzb wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$adults}</h3>
                              </div>
                              <div id='comp-ltd8z4pe' class='KcpHeO tz5f0K comp-ltd8z4pe wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$children}</h3>
                              </div>
                          </div>
                          <div id='comp-ltd9gsv3' class='KcpHeO tz5f0K comp-ltd9gsv3 wixui-rich-text' data-testid='richTextElement'>
                              <h1 class='font_0 wixui-rich-text__text'>Rs. {$rent}</h1>
                          </div>
                          <div id='comp-ltd9rld2' class='comp-ltd9rld2 JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd9w6su' class='QOX0dS JCRlLH comp-ltd9w6su-container comp-ltd9w6su wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltdaagro' data-testid='imageX' class='z4Uj6S comp-ltdaagro wixui-image'>
                                  <wix-image id='img-comp-ltdaagro' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltdaagro&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_34947f41f72147d0a83c7985f5ca7689~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;invoice (2).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/invoice.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltdadu7p' class='KcpHeO tz5f0K comp-ltdadu7p wixui-rich-text' data-testid='richTextElement'>
                                  <h2 class='font_2 wixui-rich-text__text'>Invoice download</h2>
                              </div>
                              <div id='comp-ltdahoqs' data-testid='imageX' class='z4Uj6S comp-ltdahoqs wixui-image'>
                                  <wix-image id='img-comp-ltdahoqs' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltdahoqs&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_6b83ded206c3439fa1b449d350b02484~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;chevron.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/buttons/chevron.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              ";
            }
          }
          else {
            echo "
              <div class='cell-xs-6 cell-md-4'>
              <br><br><br>
              <article class='box-minimal'>
                <div class='box-minimal-icon-big'><img src='../img/icons/no_bookings.svg' style='width: 80px;'></div>
                <h4 class='box-minimal-title'>No active bookings found.</h4>
                <h4 class='box-minimal-title'>Start planning your next stay with us!</h4>
                <div class='box-minimal-divider'></div>
              </article>
              </div>
            ";
          }
        ?>
        </div>
      </section>
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6">
              <h3>Past Reservations</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#"><!--See All Photos--></a></div>
          </div>
          <hr>
        </div>
        <?php
          if ((mysqli_num_rows($past_reservations_keys)) > 0) {
            while($past_reservation_key = mysqli_fetch_row($past_reservations_keys)) {
              $key = $past_reservation_key[0];
              $RpId = substr($key, 0, 9);
              $db_data = mysqli_query($con,"SELECT DB_Id,Name FROM Resorts WHERE Public_Id='$RpId';");
              $tabledata = mysqli_fetch_row($db_data);
              $dbId_R = $tabledata[0];
              $rName = $tabledata[1];
              $dbName_R = "R".(dechex($dbId_R));
              $past_reservation_tabledata = mysqli_query($con,"SELECT $dbName_R.Booking_History.Room_Category,$dbName_R.Booking_History.Checkin,$dbName_R.Booking_History.Checkout,$dbName_R.Booking_History.Rooms,$dbName_R.Booking_History.Adults,$dbName_R.Booking_History.Children,$dbName_R.Booking_History.Rent,$dbName_R.Booking_History.Room_Numbers
                FROM USERS.$dbName_U
                INNER JOIN $dbName_R.Booking_History
                ON USERS.$dbName_U.Booking_Index = $dbName_R.Booking_History.Sharing_Key
                WHERE USERS.$dbName_U.Booking_Index = '$key';");
              $past_reservation_data = mysqli_fetch_row($past_reservation_tabledata);
              $rcName = $past_reservation_data[0];
              $checkin = $past_reservation_data[1];
              $checkout = $past_reservation_data[2];
              $rooms = $past_reservation_data[3];
              $adults = $past_reservation_data[4];
              $children = $past_reservation_data[5];
              $rent = $past_reservation_data[6];
              $roomNumbers = $past_reservation_data[7];
              $roomNumbers = explode(',', $roomNumbers);
              echo "
                <div id='comp-ltd4jtdy' tabindex='-1' data-block-level-container='Section' class='xuzjBY comp-ltd4jtdy-container comp-ltd4jtdy wixui-section undefined' data-testid='section-container'>
                  <div id='bgLayers_comp-ltd4jtdy' data-hook='bgLayers' class='MW5IWV'>
                      <div data-testid='colorUnderlay' class='LWbAav Kv1aVt'></div>
                      <div id='bgMedia_comp-ltd4jtdy' class='VgO9Yg'></div>
                  </div>
                  <div id='comp-ltd4klyw' class='QOX0dS JCRlLH comp-ltd4klyw-container comp-ltd4klyw wixui-box'>
                      <div class='AG_P7Z MAs5Tr wixui-box'></div>
                      <div id='comp-ltd4o8y3' class='QOX0dS JCRlLH comp-ltd4o8y3-container comp-ltd4o8y3 wixui-box'>
                          <div class='AG_P7Z MAs5Tr wixui-box'></div>
                          <div id='comp-ltd4tvnk' class='KcpHeO tz5f0K comp-ltd4tvnk wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>Booking ID -</h6>
                          </div>
                          <div id='comp-ltd4y3ey' class='KcpHeO tz5f0K comp-ltd4y3ey wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>{$key}</h6>
                          </div>
                          <div id='comp-ltd52198' class='comp-ltd52198 JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd58l2o' class='KcpHeO tz5f0K comp-ltd58l2o wixui-rich-text' data-testid='richTextElement'>
                              <h2 class='font_2 wixui-rich-text__text'>{$rName}</h2>
                          </div>
                          <div id='comp-ltd5h9xy' class='KcpHeO tz5f0K comp-ltd5h9xy wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$rcName}</h4>
                          </div>
                          <div id='comp-ltd6a4qd' class='QOX0dS JCRlLH comp-ltd6a4qd-container comp-ltd6a4qd wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd62x69' data-testid='imageX' class='z4Uj6S comp-ltd62x69 wixui-image'>
                                  <wix-image id='img-comp-ltd62x69' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltd62x69&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_df38ebab50954be2b637240f7eff99db~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;login.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/checkin.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltd68022' class='KcpHeO tz5f0K comp-ltd68022 wixui-rich-text' data-testid='richTextElement'>
                                  <h4 class='font_4 wixui-rich-text__text'>Check In</h4>
                              </div>
                          </div>
                          <div id='comp-ltd6cx3q' class='QOX0dS JCRlLH comp-ltd6cx3q-container comp-ltd6cx3q wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd6cx40' data-testid='imageX' class='z4Uj6S comp-ltd6cx40 wixui-image'>
                                  <wix-image id='img-comp-ltd6cx40' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltd6cx40&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_b5177905aeb94d56af1c02a6826327e2~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;logout (2).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/checkout.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltd6cx45' class='KcpHeO tz5f0K comp-ltd6cx45 wixui-rich-text' data-testid='richTextElement'>
                                  <h4 class='font_4 wixui-rich-text__text'>Check Out</h4>
                              </div>
                          </div>
                          <div id='comp-ltd6jcow' class='KcpHeO tz5f0K comp-ltd6jcow wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$checkin}</h4>
                          </div>
                          <div id='comp-ltd6koaq' class='KcpHeO tz5f0K comp-ltd6koaq wixui-rich-text' data-testid='richTextElement'>
                              <h4 class='font_4 wixui-rich-text__text'>{$checkout}</h4>
                          </div>
                          <div id='comp-ltd6oy4j' class='comp-ltd6oy4j JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd6rk4v' class='comp-ltd6rk4v JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd70hoo' class='KcpHeO tz5f0K comp-ltd70hoo wixui-rich-text' data-testid='richTextElement'>
                              <h6 class='font_6 wixui-rich-text__text'>Room Numbers :</h6>
                          </div>
                          <div id='comp-ltd73tgf' class='QOX0dS JCRlLH comp-ltd73tgf-container comp-ltd73tgf wixui-box'>
                            <style>
                              .room-numbers {
                                display: flex;
                                align-items: center;
                                justify-content: space-evenly;
                              }
                              
                              .room-numbers div {
                                height: 90px;
                                width: 90px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                color: #333;
                                background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #FFFFAC 40%, transparent 80%),
                                  radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%);
                                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
                                border-radius: 10px;
                              }
                            </style>
                            <div class='AG_P7Z MAs5Tr wixui-box room-numbers'>
              ";
              foreach ($roomNumbers as $roomNumber) {
                echo "
                                <div><h4>$roomNumber</h4></div>
                ";
              }
              echo "
                            </div>
                          </div>
                          <div id='comp-ltd75wq9' class='QOX0dS JCRlLH comp-ltd75wq9-container comp-ltd75wq9 wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltd8uzs4' class='KcpHeO tz5f0K comp-ltd8uzs4 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Rooms</h3>
                              </div>
                              <div id='comp-ltd8yg34' class='KcpHeO tz5f0K comp-ltd8yg34 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Adults</h3>
                              </div>
                              <div id='comp-ltd8yl93' class='KcpHeO tz5f0K comp-ltd8yl93 wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>Children</h3>
                              </div>
                              <div id='comp-ltd8yqra' class='KcpHeO tz5f0K comp-ltd8yqra wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$rooms}</h3>
                              </div>
                              <div id='comp-ltd8yyzb' class='KcpHeO tz5f0K comp-ltd8yyzb wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$adults}</h3>
                              </div>
                              <div id='comp-ltd8z4pe' class='KcpHeO tz5f0K comp-ltd8z4pe wixui-rich-text' data-testid='richTextElement'>
                                  <h3 class='font_3 wixui-rich-text__text'>{$children}</h3>
                              </div>
                          </div>
                          <div id='comp-ltd9gsv3' class='KcpHeO tz5f0K comp-ltd9gsv3 wixui-rich-text' data-testid='richTextElement'>
                              <h1 class='font_0 wixui-rich-text__text'>Rs. {$rent}</h1>
                          </div>
                          <div id='comp-ltd9rld2' class='comp-ltd9rld2 JGtLUp wixui-horizontal-line'></div>
                          <div id='comp-ltd9w6su' class='QOX0dS JCRlLH comp-ltd9w6su-container comp-ltd9w6su wixui-box'>
                              <div class='AG_P7Z MAs5Tr wixui-box'></div>
                              <div id='comp-ltdaagro' data-testid='imageX' class='z4Uj6S comp-ltdaagro wixui-image'>
                                  <wix-image id='img-comp-ltdaagro' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltdaagro&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_34947f41f72147d0a83c7985f5ca7689~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;invoice (2).png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/icons/invoice.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                              <div id='comp-ltdadu7p' class='KcpHeO tz5f0K comp-ltdadu7p wixui-rich-text' data-testid='richTextElement'>
                                  <h2 class='font_2 wixui-rich-text__text'>Invoice download</h2>
                              </div>
                              <div id='comp-ltdahoqs' data-testid='imageX' class='z4Uj6S comp-ltdahoqs wixui-image'>
                                  <wix-image id='img-comp-ltdahoqs' data-is-responsive='true' data-image-info='{&quot;containerId&quot;:&quot;comp-ltdahoqs&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_6b83ded206c3439fa1b449d350b02484~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;chevron.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                      data-has-ssr-src='true' class='L4tPY9'>
                                      <picture><img src='../img/buttons/chevron.png' alt='' style='object-fit:cover;object-position:50% 50%'
                                          /></picture>
                                  </wix-image>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              ";
            }
          }
          else {
            echo "
              <div class='cell-xs-6 cell-md-4'>
              <br><br><br>
              <article class='box-minimal'>
                <div class='box-minimal-icon-big'><img src='../img/icons/no_bookings.svg' style='width: 80px;'></div>
                <h4 class='box-minimal-title'>No past reservations found.</h4>
                <h4 class='box-minimal-title'>Plan your next stay with us and create unforgettable memories!</h4>
                <div class='box-minimal-divider'></div>
              </article>
              </div>
            ";
          }
        ?>
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
  </body>
</html>
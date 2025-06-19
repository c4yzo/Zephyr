
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
      $AdminId = $_SESSION['user-id'];
      require_once '../php/connection.php';
      $db_data = mysqli_query($con,"SELECT DB_Id,Name FROM Resorts WHERE Public_Id = '$AdminId';");
      $tabledata = mysqli_fetch_row($db_data);
      $dbId = $tabledata[0];
      $rName = $tabledata[1];
      $dbName = "R".(dechex($dbId));
      mysqli_select_db($con,$dbName);
      $active_bookings_booking_tabledata = mysqli_query($con,"SELECT Sharing_Key, Room_Category, Checkin, Checkout, Rooms, Adults, Children, Rent, Room_Numbers FROM Booking_Log;");
      $active_bookings_personal_tabledata = mysqli_query($con,"SELECT Sharing_Key, User_Id, First_Name, Last_Name, Gender, Phone_Number, Email, Current_Address, Pincode FROM Booking_Log;");
      $past_reservations_booking_tabledata = mysqli_query($con,"SELECT Sharing_Key, Room_Category, Checkin, Checkout, Rooms, Adults, Children, Rent, Room_Numbers FROM Booking_History;");
      $past_reservations_personal_tabledata = mysqli_query($con,"SELECT Sharing_Key, User_Id, First_Name, Last_Name, Gender, Phone_Number, Email, Current_Address, Pincode FROM Booking_History;");
    ?>

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/util.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/bookings/main.css">
    <meta name="robots" content="noindex, follow">
    <script nonce="94498d93-9395-4329-8685-b05d9d4fcbe3">
        try {
            (function(w, d) {
                ! function(du, dv, dw, dx) {
                    du[dw] = du[dw] || {};
                    du[dw].executed = [];
                    du.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    du.zaraz.q = [];
                    du.zaraz._f = function(dy) {
                        return async function() {
                            var dz = Array.prototype.slice.call(arguments);
                            du.zaraz.q.push({
                                m: dy,
                                a: dz
                            })
                        }
                    };
                    for (const dA of ["track", "set", "debug"]) du.zaraz[dA] = du.zaraz._f(dA);
                    du.zaraz.init = () => {
                        var dB = dv.getElementsByTagName(dx)[0],
                            dC = dv.createElement(dx),
                            dD = dv.getElementsByTagName("title")[0];
                        dD && (du[dw].t = dv.getElementsByTagName("title")[0].text);
                        du[dw].x = Math.random();
                        du[dw].w = du.screen.width;
                        du[dw].h = du.screen.height;
                        du[dw].j = du.innerHeight;
                        du[dw].e = du.innerWidth;
                        du[dw].l = du.location.href;
                        du[dw].r = dv.referrer;
                        du[dw].k = du.screen.colorDepth;
                        du[dw].n = dv.characterSet;
                        du[dw].o = (new Date).getTimezoneOffset();
                        if (du.dataLayer)
                            for (const dH of Object.entries(Object.entries(dataLayer).reduce(((dI, dJ) => ({ ...dI[1],
                                    ...dJ[1]
                                })), {}))) zaraz.set(dH[0], dH[1], {
                                scope: "page"
                            });
                        du[dw].q = [];
                        for (; du.zaraz.q.length;) {
                            const dK = du.zaraz.q.shift();
                            du[dw].q.push(dK)
                        }
                        dC.defer = !0;
                        for (const dL of [localStorage, sessionStorage]) Object.keys(dL || {}).filter((dN => dN.startsWith("_zaraz_"))).forEach((dM => {
                            try {
                                du[dw]["z_" + dM.slice(7)] = JSON.parse(dL.getItem(dM))
                            } catch {
                                du[dw]["z_" + dM.slice(7)] = dL.getItem(dM)
                            }
                        }));
                        dC.referrerPolicy = "origin";
                        dC.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(du[dw])));
                        dB.parentNode.insertBefore(dC, dB)
                    };
                    ["complete", "interactive"].includes(dv.readyState) ? zaraz.init() : du.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../css/general/site/style.css">
    <link rel="stylesheet" href="../css/admin/stylesheet_01.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

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
                      <li><a href="index.php">Dashboard</a>
                      </li>
                      <li class="active"><a href="bookings.php">Bookings</a>
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
      <!-- Breadcrumbs & Page title-->
      <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
          <div class="range range-xs-center">
            <div class="cell-xs-12 cell-xl-11">
              <h2 class="text-white" style="color: #FFF; text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);">Bookings</h2>
              <ul class="breadcrumbs-custom">
                <li><a href="index.html">Dashboard</a></li>
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
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#">
              <div style="display: flex; justify-content: end;">
                <div style="display: flex;"><h4>Personal Details</h4></div>
                <style>
                  .toggle-control {
                    display: block;
                    position: relative;
                    padding-left: 100px;
                    margin-bottom: 12px;
                    cursor: pointer;
                    font-size: 22px;
                    user-select: none;
                  }
                  .toggle-control input {
                    position: absolute;
                    opacity: 0;
                    cursor: pointer;
                    height: 0;
                    width: 0;
                  }
                  .toggle-control input:checked ~ .control {
                    background-color: dodgerblue;
                  }
                  .toggle-control input:checked ~ .control:after {
                    left: 55px;
                  }
                  .toggle-control .control {
                    position: absolute;
                    top: -10px;
                    left: 15px;
                    height: 50px;
                    width: 100px;
                    border-radius: 25px;
                    background-color: darkgray;
                    transition: background-color 0.15s ease-in;
                  }
                  .toggle-control .control:after {
                    content: "";
                    position: absolute;
                    left: 5px;
                    top: 5px;
                    width: 40px;
                    height: 40px;
                    border-radius: 25px;
                    background: white;
                    transition: left 0.15s ease-in;
                  }
                </style>
                <label class="toggle-control">
                  <input id="change-table1" type="checkbox" onchange="changeTable(1)">
                  <span class="control"></span>
                </label>  
              </div>                          
            </a></div>
          </div>
          <hr>
        </div>
        <div class="limiter">
          <div class="container-table100">
              <div class="wrap-table100">
                  <div class="table100 table-booking-info table-booking-info-AB">
                      <table>
                          <thead>
                              <tr class="table100-head">
                                  <th class="column1">Booking ID</th>
                                  <th class="column2">Room Category</th>
                                  <th class="column3">Checkin</th>
                                  <th class="column4">Checkout</th>
                                  <th class="column5">Rooms</th>
                                  <th class="column6">Adults</th>
                                  <th class="column7">Children</th>
                                  <th class="column8">Rent</th>
                                  <th class="column9">Room Numbers</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            while($active_booking_booking_data = mysqli_fetch_row($active_bookings_booking_tabledata)) {
                              echo "
                                <tr>
                                  <td class='column1'>{$active_booking_booking_data[0]}</td>
                                  <td class='column2'>{$active_booking_booking_data[1]}</td>
                                  <td class='column3'>{$active_booking_booking_data[2]}</td>
                                  <td class='column4'>{$active_booking_booking_data[3]}</td>
                                  <td class='column5'>{$active_booking_booking_data[4]}</td>
                                  <td class='column6'>{$active_booking_booking_data[5]}</td>
                                  <td class='column7'>{$active_booking_booking_data[6]}</td>
                                  <td class='column8'>{$active_booking_booking_data[7]}</td>
                                  <td class='column9'>{$active_booking_booking_data[8]}</td>
                                </tr>
                              ";
                            }
                          ?>
                          </tbody>
                      </table>
                  </div>
                  <div class="table100 table-personal-info table-personal-info-AB">
                      <table>
                          <thead>
                              <tr class="table100-head">
                                  <th class="column10">Booking ID</th>
                                  <th class="column11">User ID</th>
                                  <th class="column12">Name</th>
                                  <th class="column13">Gender</th>
                                  <th class="column14">Phone Number</th>
                                  <th class="column15">Email</th>
                                  <th class="column16">Address</th>
                                  <th class="column17">Pincode</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            while($active_booking_personal_data = mysqli_fetch_row($active_bookings_personal_tabledata)) {
                              echo "
                                <tr>
                                  <td class='column10'>{$active_booking_personal_data[0]}</td>
                                  <td class='column11'>{$active_booking_personal_data[1]}</td>
                                  <td class='column12'>{$active_booking_personal_data[2]} {$active_booking_personal_data[3]}</td>
                                  <td class='column13'>{$active_booking_personal_data[4]}</td>
                                  <td class='column14'>{$active_booking_personal_data[5]}</td>
                                  <td class='column15'>{$active_booking_personal_data[6]}</td>
                                  <td class='column16'>{$active_booking_personal_data[7]}</td>
                                  <td class='column17'>{$active_booking_personal_data[8]}</td>
                                </tr>
                              ";
                            }
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6">
              <h3>Past Reservations</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#">
            <div style="display: flex; justify-content: end;">
                <div style="display: flex;"><h4>Personal Details</h4></div>
                <label class="toggle-control">
                  <input id="change-table2" type="checkbox" onchange="changeTable(2)">
                  <span class="control"></span>
                </label>  
              </div>
            </a></div>
          </div>
          <hr>
        </div>
        <div class="limiter">
          <div class="container-table100">
              <div class="wrap-table100">
                  <div class="table100 table-booking-info table-booking-info-PR">
                      <table>
                          <thead>
                              <tr class="table100-head">
                                  <th class="column1">Booking ID</th>
                                  <th class="column2">Room Category</th>
                                  <th class="column3">Checkin</th>
                                  <th class="column4">Checkout</th>
                                  <th class="column5">Rooms</th>
                                  <th class="column6">Adults</th>
                                  <th class="column7">Children</th>
                                  <th class="column8">Rent</th>
                                  <th class="column9">Room Numbers</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            while($past_reservation_booking_data = mysqli_fetch_row($past_reservations_booking_tabledata)) {
                              echo "
                                <tr>
                                  <td class='column1'>{$past_reservation_booking_data[0]}</td>
                                  <td class='column2'>{$past_reservation_booking_data[1]}</td>
                                  <td class='column3'>{$past_reservation_booking_data[2]}</td>
                                  <td class='column4'>{$past_reservation_booking_data[3]}</td>
                                  <td class='column5'>{$past_reservation_booking_data[4]}</td>
                                  <td class='column6'>{$past_reservation_booking_data[5]}</td>
                                  <td class='column7'>{$past_reservation_booking_data[6]}</td>
                                  <td class='column8'>{$past_reservation_booking_data[7]}</td>
                                  <td class='column9'>{$past_reservation_booking_data[8]}</td>
                                </tr>
                              ";
                            }
                          ?>
                          </tbody>
                      </table>
                  </div>
                  <div class="table100 table-personal-info table-personal-info-PR">
                      <table>
                          <thead>
                              <tr class="table100-head">
                                  <th class="column10">Booking ID</th>
                                  <th class="column11">User ID</th>
                                  <th class="column12">Name</th>
                                  <th class="column13">Gender</th>
                                  <th class="column14">Phone Number</th>
                                  <th class="column15">Email</th>
                                  <th class="column16">Address</th>
                                  <th class="column17">Pincode</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            while($past_reservation_personal_data = mysqli_fetch_row($past_reservations_personal_tabledata)) {
                              echo "
                                <tr>
                                  <td class='column10'>{$past_reservation_personal_data[0]}</td>
                                  <td class='column11'>{$past_reservation_personal_data[1]}</td>
                                  <td class='column12'>{$past_reservation_personal_data[2]} {$past_reservation_personal_data[3]}</td>
                                  <td class='column13'>{$past_reservation_personal_data[4]}</td>
                                  <td class='column14'>{$past_reservation_personal_data[5]}</td>
                                  <td class='column15'>{$past_reservation_personal_data[6]}</td>
                                  <td class='column16'>{$past_reservation_personal_data[7]}</td>
                                  <td class='column17'>{$past_reservation_personal_data[8]}</td>
                                </tr>
                              ";
                            }
                          ?>
                          </tbody>
                      </table>
                  </div>
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
    <script src="../js/admin/bookings/jquery-3.2.1.min.js"></script>
    <script src="../js/admin/bookings/popper.js"></script>
    <script src="../js/admin/bookings/bootstrap.min.js"></script>
    <script src="../js/admin/bookings/select2.min.js"></script>
    <script src="../js/admin/bookings/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8625d8bf888e3b1c","version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous">
    </script>
    <script src="../js/general/site/core.min.js"></script>
    <script src="../js/general/site/script.js"></script>
    <script>
      function changeTable(val) {
        if (val == 1) {
          let bookingInfoTable = document.querySelector('.table-booking-info-AB');
          let personalInfoTable = document.querySelector('.table-personal-info-AB');
          let checkbox = document.getElementById("change-table1");
          if (checkbox.checked) {
            bookingInfoTable.style.transform = 'translateX(1286px)';
            setTimeout(function() {
              bookingInfoTable.style.display = 'none';
              personalInfoTable.style.display = 'block';
            }, 500);
            setTimeout(function() {
              personalInfoTable.style.transform = 'translateX(0)';
            }, 600);
          } else {
            personalInfoTable.style.transform = 'translateX(1286px)';
            setTimeout(function() {
              personalInfoTable.style.display = 'none';
              bookingInfoTable.style.display = 'block';
            }, 500);
            setTimeout(function() {
              bookingInfoTable.style.transform = 'translateX(0)';
            }, 600);
          }
        } else {
          let bookingInfoTable = document.querySelector('.table-booking-info-PR');
          let personalInfoTable = document.querySelector('.table-personal-info-PR');
          let checkbox = document.getElementById("change-table2");
          if (checkbox.checked) {
            bookingInfoTable.style.transform = 'translateX(1286px)';
            setTimeout(function() {
              bookingInfoTable.style.display = 'none';
              personalInfoTable.style.display = 'block';
            }, 500);
            setTimeout(function() {
              personalInfoTable.style.transform = 'translateX(0)';
            }, 600);
          } else {
            personalInfoTable.style.transform = 'translateX(1286px)';
            setTimeout(function() {
              personalInfoTable.style.display = 'none';
              bookingInfoTable.style.display = 'block';
            }, 500);
            setTimeout(function() {
              bookingInfoTable.style.transform = 'translateX(0)';
            }, 600);
          }
        }
      }
    </script>
  </body>
</html>
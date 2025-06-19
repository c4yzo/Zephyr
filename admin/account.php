
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Zephyr | Account</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../css/general/site/style.css">
    <link rel="stylesheet" href="../css/admin/stylesheet_01.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
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
      $db_data = mysqli_query($con,"SELECT Email FROM Register WHERE Public_Id = '$AdminId';");
      $tabledata = mysqli_fetch_row($db_data);
      $email = $tabledata[0];
      $db_data = mysqli_query($con,"SELECT Username,Name FROM Resorts WHERE Public_Id = '$AdminId';");
      $tabledata = mysqli_fetch_row($db_data);
      $username = $tabledata[0];
      $rName = $tabledata[1];
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
                      <li><a href="index.php">Dashboard</a>
                      </li>
                      <li><a href="bookings.php">Bookings</a>
                      </li>
                      <li class="active"><a href="account.php">Account</a>
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
      <section class="section-md text-center bg-image breadcrumbs-02">
        <div class="shell shell-fluid">
          <div class="range range-xs-center">
            <div class="cell-xs-12 cell-xl-11">
              <h2 class="text-white" style="color: #FFF; text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);">Account</h2>
              <ul class="breadcrumbs-custom">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Account</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">
              <div>
                <figure><img src="../img/icons/social.png" alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">
              <h2><?php echo "$username"; ?></h2>
              <h5>Admin Account</h5><br>
              <div style="display: flex; align-items: center;">
                <img src="../img/icons/id.png" style="height: 50px;padding-right: 10px;"><h3><?php echo "$AdminId"; ?></h3>
              </div><br>
              <div style="display: flex; align-items: center;">
                <img src="../img/icons/email.png" style="height: 50px;padding-right: 10px;"><h3><?php echo "$email"; ?></h3>
              </div>
              <a class="button button-primary button button-square button-effect-ujarak button-lg" href="../login/signout.php"><span>Log Out</span></a>
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
  </body>
</html>
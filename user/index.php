
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Zephyr | Home</title>
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

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <?php
      session_start();
      if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
        header("Location: ../admin/");
        exit;
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
                  <?php
                    if($_SESSION['logged-in'] == "y") {
                      echo "
                        <div><a class='button button-primary button button-square button-effect-ujarak button-lg' href='../login/signout.php'><span>Log Out</span></a></div>
                      ";
                    }
                    else {
                      echo "
                        <div class='first-child'><a class='button button-primary button button-square button-effect-ujarak button-lg' href='../login/authentication.php?authentication=sign-up&type=admin'><span>List your property</span></a></div>
                        <div><a class='button button-primary button button-square button-effect-ujarak button-lg' href='../login/authentication.php?authentication=sign-up'><span>Register</span></a></div>
                        <div><a class='button button-primary button button-square button-effect-ujarak button-lg' href='../login/authentication.php?authentication=sign-in'><span>Sign In</span></a></div>
                      ";
                    }
                  ?>
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
                      <li class="active"><a href="index.php">Home</a>
                      </li>
                      <li><a href="bookings.php">Bookings</a>
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
      <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-8 cell-xl-9">
              <!-- Classic slider-->
              <section class="section">
                <!-- Swiper -->
                <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="../img/user/swiper/slide-01.png">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Your Ultimate Booking Destination</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Discover a world of endless possibilities</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">and incredible getaways!</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="../img/user/swiper/slide-02.png">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Explore & Book</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Find your perfect escape with ease</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">and convenience</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="../img/user/swiper/slide-03.png">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Plan & Pamper</h1>
                          <div class="slider-subtitle-group"> 
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Unlock exclusive deals and packages</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">for unforgettable stays</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </section>
            </div>
            <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
              <div class="hotel-booking-form">
                <h3>Book a Resort</h3>
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="range range-sm-bottom spacing-20">
                    <div class="cell-lg-12 cell-md-4">
                      <p class="text-uppercase">Where To ?</p>
                      <div class="form-wrap">
                        <input class="form-input" id="place-searchbox" type="text" name="name" oninput="showAutocompleteForPlaceList()">
                        <label class="form-label" for="place-searchbox">Enter a destination or property</label>
                        <ul id="place-list" class="rounded-1"></ul>
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Arrival</p>
                      <div class="form-wrap">
                          <label id="date-in-label" class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                          <input class="form-input" id="date-in" type="text" name="date">
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Departure</p>
                      <div class="form-wrap">
                          <label id="date-out-label" class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                          <input class="form-input" id="date-out" type="text" name="date">
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p class="text-uppercase">Adults</p>
                      <div class="form-wrap form-wrap-validation">
                          <!--Select 2-->
                          <select id="selectNofAdults" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="1" onchange="setList('adults')">
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
                          <select id="selectNofChildren" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" onchange="setList('children')">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                          </select>
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4">
                        <button class="button button-primary button-square button-block button-effect-ujarak" onclick="searchResort()"><span>Search</span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About us-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center overflow-hidden">
            <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
              <div class="post-video post-video-border">
                <div class="post-video__image"><img src="../img/user/img_01.avif" alt="" width="1020" height="525"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Indoor Pool-->
      <section class="section section-md bg-secondary-4 text-center text-sm-left" style="padding: 0;">
        <div id="comp-ltcx8qim" class="QOX0dS JCRlLH comp-ltcx8qim wixui-box">
            <div class="AG_P7Z MAs5Tr wixui-box"></div>
            <div class="comp-ltcx8qim-container" data-testid="responsive-container-content">
                <div id="comp-ltcx9lez" class="KcpHeO tz5f0K comp-ltcx9lez wixui-rich-text" data-testid="richTextElement">
                    <h3 class="font_3 wixui-rich-text__text">Countless Options, Always Available.</h3>
                </div>
                <div id="comp-ltcxdbub" class="KcpHeO tz5f0K comp-ltcxdbub wixui-rich-text" data-testid="richTextElement">
                    <p class="font_7 wixui-rich-text__text">Endless Destinations. Seamless Booking. Unbeatable Value.</p>
                </div>
                <div id="comp-ltcxhvck" class="KcpHeO tz5f0K comp-ltcxhvck wixui-rich-text" data-testid="richTextElement">
                    <h2 class="font_2 wixui-rich-text__text">35+</h2>
                </div>
                <div id="comp-ltcxif4o" class="KcpHeO tz5f0K comp-ltcxif4o wixui-rich-text" data-testid="richTextElement">
                    <h2 class="font_2 wixui-rich-text__text">174,000+</h2>
                </div>
                <div id="comp-ltcxj3ky" class="KcpHeO tz5f0K comp-ltcxj3ky wixui-rich-text" data-testid="richTextElement">
                    <p class="font_7 wixui-rich-text__text">Countries</p>
                </div>
                <div id="comp-ltcxjmkk" class="KcpHeO tz5f0K comp-ltcxjmkk wixui-rich-text" data-testid="richTextElement">
                    <p class="font_7 wixui-rich-text__text">Hotels &amp; Homes</p>
                </div>
                <div id="comp-ltcxl8xh" class="RjQ762 comp-ltcxl8xh">
                    <div class="gwzcAr wixui-vertical-line"></div>
                </div>
                <div id="comp-ltcy3lkk" class="QOX0dS JCRlLH comp-ltcy3lkk-container comp-ltcy3lkk wixui-box">
                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                    <div id="comp-ltcyaqw4" class="QOX0dS JCRlLH comp-ltcyaqw4-container comp-ltcyaqw4 wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltcy6zaz" class="comp-ltcy6zaz wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltcy6zaz" class="aizuI7 TcoJIb R8rhQA comp-ltcy6zaz"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltcy7l0c" class="KcpHeO tz5f0K comp-ltcy7l0c wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">India</p>
                        </div>
                    </div>
                    <div id="comp-ltd3w2yc" class="QOX0dS JCRlLH comp-ltd3w2yc-container comp-ltd3w2yc wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltd3w2yz" class="comp-ltd3w2yz wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltd3w2yz" class="aizuI7 TcoJIb R8rhQA comp-ltd3w2yz"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltd3w2zj" class="KcpHeO tz5f0K comp-ltd3w2zj wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">Malaysia</p>
                        </div>
                    </div>
                    <div id="comp-ltd3w9nu" class="QOX0dS JCRlLH comp-ltd3w9nu-container comp-ltd3w9nu wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltd3w9nz" class="comp-ltd3w9nz wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltd3w9nz" class="aizuI7 TcoJIb R8rhQA comp-ltd3w9nz"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltd3w9o4" class="KcpHeO tz5f0K comp-ltd3w9o4 wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">Denmark</p>
                        </div>
                    </div>
                    <div id="comp-ltd3wfn3" class="QOX0dS JCRlLH comp-ltd3wfn3-container comp-ltd3wfn3 wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltd3wfn8" class="comp-ltd3wfn8 wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltd3wfn8" class="aizuI7 TcoJIb R8rhQA comp-ltd3wfn8"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltd3wfng" class="KcpHeO tz5f0K comp-ltd3wfng wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">Netherlands</p>
                        </div>
                    </div>
                    <div id="comp-ltd3wnm6" class="QOX0dS JCRlLH comp-ltd3wnm6-container comp-ltd3wnm6 wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltd3wnmc" class="comp-ltd3wnmc wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltd3wnmc" class="aizuI7 TcoJIb R8rhQA comp-ltd3wnmc"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltd3wnmf1" class="KcpHeO tz5f0K comp-ltd3wnmf1 wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">UK</p>
                        </div>
                    </div>
                    <div id="comp-ltd3wvzt" class="QOX0dS JCRlLH comp-ltd3wvzt-container comp-ltd3wvzt wixui-box">
                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                        <div id="comp-ltd3wvzz" class="comp-ltd3wvzz wixui-vector-image">
                            <div data-testid="svgRoot-comp-ltd3wvzz" class="aizuI7 TcoJIb R8rhQA comp-ltd3wvzz"><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true
                                    aria-label="">
    <g>
    <path d="M180 100c0 44.183-35.817 80-80 80s-80-35.817-80-80 35.817-80 80-80 80 35.817 80 80z"/>
    </g>
    </svg>
                            </div>
                        </div>
                        <div id="comp-ltd3ww04" class="KcpHeO tz5f0K comp-ltd3ww04 wixui-rich-text" data-testid="richTextElement">
                            <p class="font_7 wixui-rich-text__text">US</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- Portfolio-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6">
              <h3>Top destinations in India</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#"><!--See All Photos--></a></div>
          </div>
          <hr>
          <div class="isotope-wrap">
            <!-- Isotope Content-->
            <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
              <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer"></div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".1s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/New Delhi.webp" data-size="533x800" data-lightgallery="item"><img src="../img/user/city/New Delhi_146:105.webp" alt="" width="420" style="height: 584px !important;"/>
                  <figure></figure>
                  </a>
                  <div class="caption-city"><h3>New Delhi</h3></div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".2s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/Mumbai.webp" data-size="1199x800" data-lightgallery="item"><img src="../img/user/city/Mumbai.webp" alt="" width="420" style="height: 278px !important;"/>
                  <figure></figure>
                  </a>
                  <div class="caption-city"><h3>Mumbai</h3></div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".4s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/Goa.webp" data-size="584x800" data-lightgallery="item"><img src="../img/user/city/Goa_146:105.webp" alt="" width="420" style="height: 584px !important;"/>
                  <figure></figure>
                  </a>
                  <div class="caption-city"><h3>Goa</h3></div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".5s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/Chennai.webp" data-size="1200x800" data-lightgallery="item"><img src="../img/user/city/Chennai.webp" alt="" width="420" style="height: 278px !important;"/>
                  <figure></figure>
                  </a>
                  <div class="caption-city"><h3>Chennai</h3></div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".3s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/Bangalore.webp" data-size="1200x800" data-lightgallery="item"><img src="../img/user/city/Bangalore.webp" alt="" width="420" style="height: 278px !important;"/>
                  <figure></figure>
                  </a>
                  <div class="caption-city"><h3>Bangalore</h3></div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".6s"><a class="portfolio-item thumbnail-classic" href="../img/user/city/Kochi.webp" data-size="1200x798" data-lightgallery="item"><img src="../img/user/city/Kochi.webp" alt="" width="420" style="height: 278px !important;"/>
                  <figure></figure>
                  <div class="caption-city"><h3>Kochi</h3></div></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-sm bg-white text-center text-sm-left">
        <div class="shell-wide">
          <h3>Accommodation Promotions</h3>
          <hr>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel-stagePadding" data-items="1" data-sm-items="2" data-xl-items="3" data-dots="false" data-nav="true" data-stage-padding="0" data-lg-stage-padding="100" data-xl-stage-padding="100" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-class="[&quot;owl-button-prev fl-budicons-free-left161&quot;,&quot;owl-button-next  fl-budicons-free-right163&quot;]">
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image" href="https://www.agoda.com/en-in/HoliSaleIN?cid=1914473&ds=HMAjcDdVqlaGugPC">
                <figure><img src="../img/user/promotions/img_01.png" alt="" width="460" height="369"/>
                </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/OYOIN?cid=1901283&ds=HH6OWBQzBAAswUCH">
                <figure><img src="../img/user/promotions/img_02.png" alt="" width="460" height="369"/>
                </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/MidnightMadnessNoonDash?cid=1914474&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_03.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/EliteOffersAsia?cid=1914292&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_04.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/FromAsiaToTheWorld?cid=1914475&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_05.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/NightOwlSale?cid=1901202&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_06.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/BookEarlyPayless?cid=1914396&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_07.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/StayLongerforLess?cid=1914395&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_08.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/MidMonthSale?cid=1901260&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_09.png" alt="" width="460" height="369"/>
              </figure></a>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="https://www.agoda.com/en-in/TopDestinationsEMEA?cid=1914421&ds=HMAjcDdVqlaGugPC">
              <figure><img src="../img/user/promotions/img_10.png" alt="" width="460" height="369"/>
              </figure></a>
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
    <script src="../js/user/script_01.js"></script>
    <script src="../js/general/site/core.min.js"></script>
    <script src="../js/general/site/script.js"></script>

    <!-- Date Picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </body>
</html>
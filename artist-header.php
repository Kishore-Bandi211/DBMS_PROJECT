<?php
session_start();


?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo FRONT_SITE_NAME?></title> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                            <div class="welcome-area">
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    <li class="top-hover"><a href="#">Setting  <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="profile.php">Profile  </a></li>
                                           <!-- <li><a href="order_history.php">Order History</a></li> -->
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo" style="align-content:flex-start">
                                <a href="artist-paintings.php">
                                   <button style=" -moz-box-shadow:inset 0px 1px 0px 0px #cae3fc;
      -webkit-box-shadow:inset 0px 1px 0px 0px #cae3fc;
      box-shadow:inset 0px 1px 0px 0px #cae3fc;
      background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
      background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
      background-color:#79bbff;
     -moz-border-radius:6px;
     -webkit-border-radius:6px;
     border-radius:6px;
     border:1px solid #469df5;
     display:inline-block;
     color:#ffffff;
     font-family:arial;
     font-size:14px;
     font-weight:bold;
     padding:5px 14px;
     text-decoration:none;
     text-shadow:1px 1px 0px #287ace;
    cursor:pointer;">MY PAINTINGS</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                    <a href="login.php">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        <div class="login-text-content">
                                            <p>Register <br> or <span>Sign in</span></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="header-wishlist">
                                   &nbsp;
                                </div>
                                <div class="header-cart">
                                    <a href="insurance.php" target="blank">
                                        <div class="header-icon-style">
                                        </div>
                                        <div class="cart-text">
                                            <span class="digit"><h3><button  style=" -moz-box-shadow:inset 0px 1px 0px 0px #cae3fc;
      -webkit-box-shadow:inset 0px 1px 0px 0px #cae3fc;
      box-shadow:inset 0px 1px 0px 0px #cae3fc;
      background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
      background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
      background-color:#79bbff;
     -moz-border-radius:6px;
     -webkit-border-radius:6px;
     border-radius:6px;
     border:1px solid #469df5;
     display:inline-block;
     color:#ffffff;
     font-family:arial;
     font-size:20px;
     font-weight:bold;
     padding:5px 14px;
     text-decoration:none;
     text-shadow:1px 1px 0px #287ace;
    cursor:pointer;">Insurance</button></h3></span>
                                            <span class="cart-digit-bold"></span>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="artist-home.php">Home</a></li>
                                        <li><a href="artist-shop.php">Shop</a></li>
                                        <li><a href="artist-about-us.php">about</a></li>
                                        <li><a href="artist-contact-us.php">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
										<li><a href="shop.php">Home</a></li>
										<li><a href="about-us.php">About Us</a></li>
										<li><a href="contact-us.php">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>
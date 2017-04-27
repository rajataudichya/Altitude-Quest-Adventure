<?php


    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hello@altitudequest.comments";
    $email_subject = "Hi, Altitude Quest, I am interested in one of your events";
	$error_message = '';




    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['subject']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['comments']))

		{

			echo "Fields are not filled properly";
			die();
    }

    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$subject = $_POST['subject']; // required
	$subject = $_POST['phone']; // required
	$website = $_POST['comments'];


$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$email_message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Campers</title>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--CUSTOM CSS START-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP CSS START-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--COLOR CSS START-->
<link href="css/color.css" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--FONTAWESOME CSS START-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--Datepicker Css-->
<link href="css/datepicker.css" rel="stylesheet" type="text/css">
<!--ICONMOON Css-->
<link href="css/iconmoon.css" rel="stylesheet" type="text/css">
<!--FAVICON ICON-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--GOOGLE FONTS-->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600' rel='stylesheet' type='text/css'>
</head>
<body>
<!--Wrapper Start-->
<div id="wrapper" class="cp_travel-theme">
  <!--Headre Start-->
  <header id="header">
    <!--TOP BAR SECTION START-->
    <section class="topbar-section">
      <div class="container">
        <div class="col-md-6">
          <div class="top-social">
            <ul>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            </ul>
            <a href="mailto:" class="email"><i class="fa fa-envelope-o"></i>info@campers.com</a> </div>
        </div>
        <div class="col-md-6">
          <div class="register-login">
            <ul>
              <li><a href="#"><i class="fa fa-key"></i>Login</a></li>
              <li><a href="#"><i class="fa fa-unlock"></i>Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--TOP BAR SECTION END-->

    <!--LOGO SECTION START-->
    <section class="logo-section">
      <div class="container">
        <div class="col-md-6"><strong class="logo"><a href="index.html"><img src="images/logo.png" alt="logo"></a></strong></div>
        <div class="col-md-6">
          <div class="book-section"> <a href="#" class="btn-book">Book Now</a>
            <div class="number-box"> <i class="fa fa-phone"></i>
              <div class="number-text"> <span>Call us for any Query</span> <strong>44 01234 5678</strong> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--LOGO SECTION END-->

    <div id="cp-slide-search" class="cp_side-search">
      <form method="get">
        <input type="text" placeholder="Enter Your Search..." required>
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <!--MAIN NAVIGATION SECTION START-->
    <section class="main-navigation">
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="nav-outer">
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="nav">
                  <li class="active"><a href="index.html">Home<i class="fa fa-caret-down"></i></a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="#">Trips<i class="fa fa-caret-down"></i></a>
                    <ul>
                      <li><a href="trips-full.html">Trip Full</a></li>
                      <li><a href="trips-medium.html">Trips Medium</a></li>
                      <li><a href="trip-details.html">Trip Details</a></li>
                    </ul>
                  </li>
                  <li><a href="price-tables.html">Prices</a></li>
                  <li><a href="#">Events<i class="fa fa-caret-down"></i></a>
                    <ul>
                      <li><a href="events-large.html">Events Large</a></li>
                      <li><a href="events-medium.html">Events Medium</a></li>
                      <li><a href="events-small.html">Events Small</a></li>
                      <li><a href="event-details.html">Event Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog<i class="fa fa-caret-down"></i></a>
                    <ul>
                      <li><a href="blog-large.html">Blog Large</a></li>
                      <li><a href="blog-medium.html">Blog Medium</a></li>
                      <li><a href="blog-small.html">Blog Small</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pages<i class="fa fa-caret-down"></i></a>
                    <ul>
                      <li><a href="about.html">About us</a></li>
                      <li><a href="booking-form.html">Booking Form</a></li>
                      <li><a href="cost-calculator.html">Cost Calculator</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="#">Gallery</a>
                        <ul>
                          <li><a href="#">Gallery One</a></li>
                          <li><a href="#">Gallery Two</a></li>
                          <li><a href="#">Gallery Three</a></li>
                          <li><a href="#">Gallery Four</a></li>
                          <li><a href="#">Gallery Five</a></li>
                          <li><a href="#">Gallery Six</a></li>
                        </ul>
                      </li>
                      <li><a href="testimonials.html">Testimonials</a></li>
                      <li><a href="price-tables.html">Price Tables</a></li>
                      <li><a href="error.html">404 Error</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="register.html">Register</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
              <div class="nav-right-col">
                <div class="cart-box-outer">
                  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fa fa-shopping-cart"></i> </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li>
                        <div class="cart-box"> <strong class="title">You have <a href="#">1 item(s)</a> in your cart.</strong>
                          <div class="cart-row">
                            <div class="thumb"><a href="#"><img alt="img" src="images/cart-img.jpg"></a></div>
                            <div class="text-box"> <a class="close" href="#"><i class="fa fa-close"></i></a> <a href="#">BestWedding Camping Equipment</a> <strong class="amount">1 x $59.00</strong> </div>
                          </div>
                          <strong class="subtotal">Subtotal: <span>$59.00</span></strong>
                          <div class="btn-row"> <a class="btn-checkout" href="#">Checkout</a> </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="top-search"> <a href="#" class="search-icon" id="search-push"><i class="fa fa-search"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <!--MAIN NAVIGATION SECTION END-->
  </header>
  <!--Headre End-->

  <div id="main">
  <div id="banner">
    <div id="inner-banner">
      <h1>Contact us</h1>
      <div class="breadcrumb-area">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact us</li>
        </ol>
      </div>
    </div>
  </div>
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container">
        <section class="row">
          <section class="col-md-12 error-page-form">
              <h2>Thank You</h2>
              <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Thank -->
    <!--Footer Start-->
    <footer id="footer">
    <section class="instagram">
      <div class="container">
        <h2>We’re on Instagram</h2>
      </div>
      <ul>
        <li><a href="#"><img src="images/instagram/instagram-img-1.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-2.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-3.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-4.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-5.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-6.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-7.jpg" alt="img"></a></li>
        <li><a href="#"><img src="images/instagram/instagram-img-8.jpg" alt="img"></a></li>
      </ul>
    </section>

    <!--FOOTER SECTION 1 START-->
    <section class="footer-section-1">
      <div class="container">
        <div class="row">
          <div class="col-md-4"> <strong class="footer-logo"><a href="#"><img src="images/footer-logo.png" alt="logo"></a></strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam laboris nisi ut aliquip ex ea commodo conseque Duis aute irure dolor in reprehenderit</p>
            <a href="#" class="btn-style-2">Read More</a> </div>
          <div class="col-md-4">
            <h3>More Services</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="footer-box">
                  <ul>
                    <li><a href="#">Free Parking</a></li>
                    <li><a href="#">Free Wifi Area</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Free Hot Shower</a></li>
                    <li><a href="#">Swimming Pool</a></li>
                    <li><a href="#">Shaded Pitches</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="footer-box">
                  <ul>
                    <li><a href="#">Laundry</a></li>
                    <li><a href="#">Hairdresser</a></li>
                    <li><a href="#">Digs Area</a></li>
                    <li><a href="#">Barbecue Station</a></li>
                    <li><a href="#">Ping Pong Table</a></li>
                    <li><a href="#">Coffee Bar</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-box">
              <h3>Contact us</h3>
              <address>
              <ul>
                <li> <span><i class="fa fa-home"></i></span>
                  <div class="text-box">
                    <p>123 Lorem Ipsum Avenue,<br>
                      Campers Road, NY, U.S.A.</p>
                  </div>
                </li>
                <li> <span><i class="fa fa-phone"></i></span>
                  <div class="text-box">
                    <p>Call us for any Query</p>
                    <strong>44 01234 5678</strong> </div>
                </li>
                <li> <span><i class="fa fa-envelope-o"></i></span>
                  <div class="text-box">
                    <p>Send us email for any Information</p>
                    <a href="mailto:">info@campers.com</a> </div>
                </li>
                <li> <span><i class="fa fa-clock-o"></i></span>
                  <div class="text-box">
                    <p>Office Timings</p>
                    <strong>09:00 - 19:00</strong> </div>
                </li>
              </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--FOOTER SECTION 1 END-->

    <!--FOOTER SECTION 2 START-->
    <section class="footer-section-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-socila">
              <ul>
                <li><a href="#"><i class="fa fa-twitter"></i>twitter</a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i>facebook</a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i>google plus</a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i>linkedin</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6"><strong class="copy">2016 &copy; Campers, Powered by: <a href="http://crunchpress.com/" target="_blank">Crunchpress</a></strong></div>
        </div>
      </div>
    </section>
    <!--FOOTER SECTION 2 END-->
  </footer>
    <!--Footer End-->
  </div>
</div>
<!--Wrapper End-->

<!--JQUERY 1.12.1-->
<script src="js/jquery-1.12.2.min.js"></script>
<!--BOOTSTRAP JS-->
<script src="js/bootstrap.min.js"></script>
<!--Map Js-->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!--OWL CAROUSEL-->
<script src="js/owl.carousel.min.js"></script>
<!--SELECT MENU-->
<script src="js/jquery.noconflict.js"></script>
<script src="js/theme-scripts.js"></script>
<script src="js/migrate.js"></script>
<!--Datepicker js-->
<script src="js/zebra_datepicker.js"></script>
<!--IMAGE MOVING EFFECT-->
<script src="js/function.js"></script>
<!--RUNNING COUNTER-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!--CUSTOM JS-->
<script src="js/custom.js"></script>
</body>
</html>

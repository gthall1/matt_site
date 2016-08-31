<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "griff@getluckee.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


?>

<html>
  <head>
    <title>Noto Home Builders | Contact Submitted</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <!-- <h1><strong><a href="index.html">Spatial</a></strong> by Templated</h1> -->
        <a href="index.html"><img src="images/white_nav_logo.png" class="headerlogo" alt="" /></a>
        <nav id="nav">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="#">205-704-7097</a></li>
          </ul>
        </nav>
      </header>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="container">

          <header class="major special">
            <h2>Thank You</h2>
            <p>We will be in touch shortly</p>
          </header>


        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <ul class="icons">
            <li><a href="https://www.facebook.com/notohomebuilders" target="_blank" class="icon fa-facebook"></a></li>
            <li><a href="https://www.instagram.com/notohomebuilders" target="_blank" class="icon fa-instagram"></a></li>
          </ul>
          <ul class="copyright">
            <li>&copy; Noto Home Builders 2016</li>
          </ul>
          <a target="_blank" title="Click for the Business Review of Noto Home Builders, LLC, a Home Builders in Birmingham AL" href="https://www.bbb.org/csal/business-reviews/home-builders/noto-home-builders-in-birmingham-al-90164019#sealclick"><img alt="Click for the BBB Business Review of this Home Builders in Birmingham AL" style="border: 0;opacity: .3;" src="https://seal-centralalabama.bbb.org/seals/black-seal-120-61-notohomebuildersllc-90164019.png" /></a>
        </div>
      </footer>

  </body>
</html>

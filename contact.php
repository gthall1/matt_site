<!DOCTYPE HTML>
<!--
  Spatial by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title>Noto Home Builders | Contact</title>
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
      <header id="header" class="skels-layers-fixed">
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
            <h2>Contact Us</h2>
            <p>Please reach out with any questions or concerns you may have</p>
          </header>

          <?php
            if ($_POST["email"]<>'') {
                $ToEmail = 'griff@getluckee.com';
                $EmailSubject = 'New message from your website';
                $mailheader = "From: ".$_POST["email"]."\r\n";
                $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
                $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $MESSAGE_BODY = "Name: ".$_POST["name"]."";
                $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
                $MESSAGE_BODY .= "Phone: ".$_POST["phone"]."";
                $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."";
                mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
            ?>
            Your message was sent
            <?php
            } else {
            ?>
          <!-- Form -->
            <section>
              <!-- <h3>Form</h3> -->
              <form method="post" action="contact.php">
                <div class="row uniform 50%">
                  <div class="6u 12u$(xsmall)">
                    <input type="text" name="name" id="name" value="" placeholder="Name" />
                  </div>
                  <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                  </div>
                  <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="phone" id="phone" value="" placeholder="Phone Number" />
                  </div>
                  <div class="12u$">
                    <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                  </div>
                  <div class="12u$">
                    <ul class="actions">
                      <li><input type="submit" value="Send Message" class="special" /></li>
                      <!-- <li><input type="reset" value="Reset" /></li>  -->
                    </ul>
                  </div>
                </div>
              </form>
            </section>
          <?php
          };
          ?>


        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <ul class="icons">
            <li><a href="https://www.facebook.com/notohomebuilders" target="_blank" class="icon fa-facebook"></a></li>
            <li><a href="#" class="icon fa-instagram"></a></li>
          </ul>
          <ul class="copyright">
            <li>&copy; Noto Home Builders 2016</li>
          </ul>
        </div>
      </footer>

  </body>
</html>

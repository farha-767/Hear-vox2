<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- <meta name="theme-color" content="#33a16e" /> -->
    <title>Contact</title>
    <meta name="author" content="">
    <meta name="description" content="MCK KUTTY">
  <meta name="keywords"
    content="mck kutty, work">



    <!-- FAVICON FILES -->
    <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/favicon/fav.png" rel="apple-touch-icon">
  <link href="images/favicon/fav.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css"rel="stylesheet">
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "icd4ttazy5");
</script>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5P75J2');</script>
<!-- End Google Tag Manager -->
    
</head>

<body>
    
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5P75J2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get form data
    $name = $_POST["userName"];
    $place = $_POST["userPlace"];
    $phone = $_POST["userPhone"];
    $message = $_POST["userMessage"];

    // Validate form data (you can add your own validation logic here)

    // Set up the recipient email address
    $recipient = "hearvoxmangalore@gmail.com";

    // Set up the email headers
    $headers = "From: hearvox.in <$recipient>\r\n";
    $headers .= "Reply-To: $recipient\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email body
    $body = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th>Place</th>
                <td>$place</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
        </body>
      </html>
    ";

    // Attempt to send the email
    if (mail($recipient, "New Contact Form Submission", $body, $headers)) {
        echo '<script>alert("Thanks for your inquiry. We will contact you shortly.");</script>';
    } else {
        echo '<script>alert("Email sending failed, Try again");</script>';
    }
}
?>



   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <img src="images/logo-a.png" alt="">
      </a>

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="index">Home</a></li>
          <li><a class="nav-link scrollto" href="index#services">Services</a></li>
          <li><a class="nav-link scrollto" href="hearaids">Hearing Aids</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact Us</a></li>
          <li class="getstarted-li"><a class="getstarted scrollto" href="https://wa.me/+918971217700?text=Hello"><i class="bi bi-whatsapp"></i>Book an appointment</a></li>
        </ul>
        <a class="whatsapp" href="https://wa.me/+918971217700?text=Hello"><i class="bi bi-whatsapp"></i></a>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main>
    <div class="section-pad"></div>
    <div class="section-pad"></div>
    <section>
      <div class="container product">
        <div class="row">
          <div class="col-lg-6 cnt-page">
            <div class="cnt-head">
              <h3>
                Start your hearing health journey today.
              </h3>
            </div>
            <div class="line"></div>
            <div class="cnt-book"><p>Book an Appointment</p></div>
            <div class="cnt-dtl"><h4>Experiencing hearing loss or just want to get a check up? Give us a call or email us and we’ll set up an appointment for you!</h4></div>
            <div class="cnt-para"><p>Hear Vox TF2, Gold Palace Onyx, <br> Near Indiana Hospital, <br> Pumpwell, Mangaluru, <br> Karnataka 575007</p></div>
            <div class="cnt-para"><p>Call : <a href="tel:+918971217700">+918971217700</a></p></div>
            <div class="cnt-para"><p>Email : <a href="emailto:mangalore@hearvox.in">mangalore@hearvox.in</a></p></div>
          </div>

          <div class="col-lg-6 cnt-page">
            <div class="contact-form-sec">
              <form method="post">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="validationDefault01">Name</label>
                      <input type="text" class="form-control" id="validationDefault01" name="userName" placeholder="Name"  required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Phone</label>
                    <input type="text" class="form-control" id="inputAddress" name="userPhone" placeholder="Phone"required >
                  </div>
                  <div class="form-group col-md-12">
                    <label for="validationDefault01">Place</label>
                    <input type="text" class="form-control" id="validationDefault01" name="userPlace" placeholder="Place">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Message</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="userMessage" placeholder="Message"></textarea>
                    </div>
                  <button type="submit" name="send" class="btn">SEND</button>
                </form>
          </div>
            
          </div>
        </div>
      </div>
    </section>



  </main>

  
  <div class="section-pad"></div>
  <footer class="foot-a text-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <img class="img-fluid footer-logo" src="images/logo-a.png" alt="">
          <p class="footer-logo-para">Hear Vox is a state-of-the-art audiology clinic dedicated to providing comprehensive hearing healthcare services.</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="index">Home</a></li>
            <li><a href="index#services">Services</a></li>
            <li><a href="hearaids">Hearing Aids</a></li>
            <li><a href="contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Hearing Aids</h5>
          <ul class="list-unstyled">
            <li><a href="hearaids">Behind-the-Ear (BTE)</a></li>
            <li><a href="hearaids">Receiver-In-Canal (RIC)</a></li>
            <li><a href="hearaids">In-the-Canal(ITC)</a></li>
            <li><a href="hearaids">Completely-in-the-Canal (CIC)</a></li>
            <li><a href="hearaids">Invisible-In-the-Canal (IIC)</a></li>
            <li><a href="hearaids">Rechargeable-Hearing-Aid</a></li>
            <li><a href="hearaids">Waterproof-Hearing-Aid</a></li>
            <li><a href="hearaids">Bluetooth-Hearing-Aid</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Contact Us</h5>
          <p>Hear Vox TF2, Gold Palace Onyx, <br> Near Indiana Hospital, <br> Pumpwell, Mangaluru, <br> Karnataka 575007
          </p>
          <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
              <path
                d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"
                fill="rgba(255,255,255,1)"></path>
            </svg> mangalore@hearvox.in</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
              <path
                d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"
                fill="rgba(255,255,255,1)"></path>
            </svg> +918971217700</p>
        </div>
      </div>
    </div>
    <div class="bg-secondary py-2">
      <div class="container text-center">
        <p class="m-0">© 2023 All rights reserved. Powered by <a href="https://dostudio.co.in/">DO Studio</a></p>
      </div>
    </div>
  </footer>










    <!-- JS FILES -->
    <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src='js/jquery.parallax.min.js'></script>



  <script src="js/scripts.js"></script>





</body>

</html>
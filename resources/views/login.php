<?php
/* CREATING DB CONNECTION */
$servername ="localhost";
$db_name = "customers";
$username = "root";
$password = "";

/* $connect = new mysqli($connect, ('localhost', 'users', 'root', ''));
 */


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="images/images/sure logo.png" type="">
      
        <title> Sure Printing </title>

          <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="header_top">
          <div class="container-fluid ">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +250 782641094
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : SurePrinting@gmail.com
                </span>
              </a>
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location : Kigali, Ndamage building, 1<sup>st</sup>floor
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="header_bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php">
                <span>
                  Sure Printing
                </span>
              </a>
  
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="login.php"> <i class="fa fa-user" aria-hidden="true"></i> Login <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
    <section class="contact_section layout_padding-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-5 offset-md-1">
              <div class="heading_container">
                <h2>
                  register <span>here</span>
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-5 offset-md-1">
              <div class="form_container">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                 <?php {{ csrf_field(); }} ?>
                  <div>
                    <input type="text" placeholder="Your Name" name="name" required/>
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone" required/>
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email" required/>
                  </div>
                  <div>
                    <input type="password" placeholder="Password" name="password" required/>
                  </div>
                  <div class="btn_box">
                    <button type="submit" class="btn" name="button">
                      SEND
                    </button>
                  </div>
                </form>
              </div>
            </div>


            

                  








              <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

    
</body>
</html>
@auth

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
   }

   $currentHour = date('G');

   if ($currentHour >= 5 && $currentHour < 12) {
   $greeting = 'Good morning!';
 } elseif ($currentHour >= 12 && $currentHour < 18) {
   $greeting = 'Good afternoon!';
 } elseif ($currentHour >= 18 && $currentHour < 22) {
 $greeting = 'Good evening!';
 } else {
 $greeting = 'Good night!';
 }
 ?>



<!DOCTYPE html>
<html>

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
  <link rel="shortcut icon" href="images/images/surelogo.png" type="">

  <title> Sure Printing </title>


   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet"/>

<!-- Custom  -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet"/>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>




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
          <a class="navbar-brand" href={{route('index')}}>
            <span>
              Sure Printing
             </span>
          </a>

          <button class="navbar-toggler" id="menu-btn" onclick()  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href={{route('index')}}>Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('service')}}>Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('about')}}> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('contact')}}>Contact Us</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="post">
                @csrf
                <a class="nav-link"> <i class="fa fa-user" aria-hidden="true"></i><button class="logbtn">logout</button>
                </a>
              </form>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section">
    <div class="slider_bg_box">
      <img src="images/images/backgound2.jpg" alt="sure printing">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>Where imaginations Meets With Fabric</h1>
                  <p>At Sure Printing, we bring your visions to life through the artistry of screen printing. As a leading name in the industry, we take pride in delivering high-quality, vibrant, and precisely crafted prints that make a lasting impression. With a commitment to excellence and a passion for creativity, Sure Printing is your trusted partner for all your custom screen printing needs.</p>
                  <div class="alert">
                    <h3 class="alert"><?php echo $greeting;?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>Where imaginations Meets With Fabric</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?</p>
                  <div class="btn-box"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>Where imaginations Meets With Fabric</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?</p>
                  <div class="btn-box"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>
  </section>

  <!-- end slider section -->
</div>


<!-- service section -->

<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Our <span>Services</span>
        </h2>
        <p>
          At Sure Printing, we offer a comprehensive range of screen printing services  With our expertise,
          state-of-the-art equipment, and dedication to quality, we guarantee exceptional results that exceed
          your expectations. Explore our services below:
            </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/images/printing.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Screen printing services
              </h5>
              <p>
                Transform your clothing line, team uniforms, or promotional merchandise with our custom apparel printing services.
                 From T-shirts and hoodies to caps and jackets, we offer high-quality prints on a wide variety of fabrics, ensuring
                vibrant colors and lasting durability.
              </p>
              <a href={{route('service')}}>
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/images/teaching.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Teaching services
              </h5>
              <p>
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The
                point of using
              </p>
              <a href={{route('service')}}>
                Read More
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/images/graphic design.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                graphic designing
              </h5>
              <p>
                Bring your ideas to life with our graphic design services. Our team of experienced designers works
                closely with you to create eye-catching designs that reflect your brand identity and vision. Whether
                 you need a logo, artwork, or custom graphics, we ensure your prints are unique and impactful.
              </p>
              <a href={{route('service')}}>
                Read More
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/images/largeformat.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                largeformat services
              </h5>
              <p>
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The point of using
              </p>
              <a href={{route('service')}}>
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end service section -->


<!-- about section -->

<section class="about_section layout_padding-bottom">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About <span>Us</span>
            </h2>
          </div>
          <p>
          Welcome to Sure Printing, where passion for creativity meets the precision of screen printing craftsmanship.
          Established with a vision to redefine the art of printing, Sure Printing has evolved into a trusted name,
           offering a spectrum of customized printing solutions to bring your ideas to life.
          </p>
          <a href={{route('about')}}>
            Read More
          </a>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/images/workspace.jpg" alt="Sure Printing">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- end about section -->

<!-- track section -->

<section class="track_section layout_padding">
  <div class="track_bg_box">
    <img src="images/images/backround3.jpg" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading_container">
          <h2>
            Track Your staff
          </h2>
        </div>
        <p>
          Iste reprehenderit maiores facilis saepe cumque molestias. Labore iusto excepturi, laborum aliquid pariatur veritatis autem, mollitia sint nesciunt hic error porro.
          Deserunt officia unde repellat beatae ipsum sed. Aperiam tempora consectetur voluptas magnam maxime asperiores quas similique repudiandae, veritatis reiciendis harum fuga atque.
        </p>
        <form action="">
          <input type="text" placeholder="Enter Your Tracking Number" />
          <button type="submit">
            Track
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end track section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container mt-5 ">
    <div class="heading_container">
      <h2>
        What Says Our <span>Client</span>
      </h2>
    </div>
    <div class="client_container mt-5">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Testmorials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Add Testimony</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="client_container">
                    <div class="carousel-wrap">
                        <div class="owl-carousel">

                             @foreach($posts as $post)

                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>{{ $post->message }}</p>
                                    </div>
                                    <div class="client_id">
                                        <div class="name">
                                            <h6>{{ $post->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

                    <section class="contact_section layout_padding-top">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-4 col-md-5 offset-md-1">
                            </div>
                          </div>
                            <div class="col-lg-10 col-md-10 offset-md-3">
                              <div class="form_container contact-form">


                                <form action={{ route('posts.store') }} method="post">
                                  @csrf
                                  <div>
                                    <input type="text" placeholder="User Name" value="{{ old('name') }}" name="name" required/>
                                  </div>
                                  <div>
                                    <input type="text" class="message-box" placeholder="Message" value="{{ old('message') }}" name="message" required/>
                                  </div>
                                  <div class="btn_box">
                                    <button type="submit" class="btn" name="button">
                                      Add Testimony
                                    </button>
                                  </div>
                                </form>

                                @if(session('success'))
                               <div class="alert alert-success">
                               {{ session('success') }}
                              </div>
                              @endif

                              </div>
                            </div>
                </div>
            </div>
        </div>

    </div>
 </div>
</div>
</section>


<!-- end client section -->

<!-- contact section -->
<section class="contact_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact <span>Us</span>
        </h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="form_container contact-form">

          <form action={{route('index')}} method="post">
            <div>
              <input type="text" placeholder="Phone Number" name="phone" required/>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message"  name="message" required/>
            </div>
            <div class="btn_box">
              <button type="submit" class="btn" name="button">
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 px-0">
        <div class="map_container">
          <div class="map">
            <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.095967562538!2d30.0582882!3d-1.943165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca53bcedcec83%3A0x364181b3f977253d!2sSure%20Printing!5e0!3m2!1sen!2srw!4v1706353394552!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->

<!-- info section -->

<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_contact">
          <h4>
            Address
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location : Kigali, Ndamage building, 1<sup>st</sup>floor
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +250 782641094
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                SurePrinting@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="info_social">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_detail">
          <h4>
            Info
          </h4>
          <p>
            At Sure Printing, we are committed to providing unparalleled service,
             exceptional quality, and innovative solutions to meet your printing needs.
              Contact us today          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 mx-auto info_col">
        <div class="info_link_box">
          <h4>
            Links
          </h4>
          <div class="info_links">
            <a class="active" href={{route('index')}}>
              <img src="images/nav-bullet.png" alt="">
              Home
            </a>
            <a class="" href={{route('about')}}>
              <img src="images/nav-bullet.png" alt="">
              About
            </a>
            <a class="" href={{route('service')}}>
              <img src="images/nav-bullet.png" alt="">
              Services
            </a>

            <a class="" href={{route('contact')}}>
              <img src="images/nav-bullet.png" alt="">
              Contact Us
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col ">
        <h4>
          Subscribe
        </h4>
        <form action="#" method="POST">
          <input type="text" placeholder="Enter email" name="email" />
          <button type="submit" name="submit">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->

<!-- footer section -->
<section class="footer_section">
  <div class="container">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://php.design/">Arc Developer</a>
    </p>
  </div>
</section>
<!-- footer section -->

<!-- jQery -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

<!-- End Google Map -->

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


@else



<!DOCTYPE html>
<html>

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
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />


</head>

<body>

  <div class="hero_area">

    <!-- header section strats -->

  @include('navbar')

    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
        <div class="slider_bg_box">
          <img src="images/images/backgound2.jpg" alt="sure printing">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Where imaginations Meets With Fabric</h1>
                      <p>At Sure Printing, we bring your visions to life through the artistry of screen printing. As a leading name in the industry, we take pride in delivering high-quality, vibrant, and precisely crafted prints that make a lasting impression. With a commitment to excellence and a passion for creativity, Sure Printing is your trusted partner for all your custom screen printing needs.</p>
                      <div class="btn-box">
                        <a href={{route('create')}} class="btn1" name="btn1">
                          Join Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Where imaginations Meets With Fabric</h1>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?</p>
                      <div class="btn-box"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Where imaginations Meets With Fabric</h1>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?</p>
                      <div class="btn-box"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </section>


    <!-- end slider section -->

  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
          At Sure Printing, we offer a comprehensive range of screen printing services  With our expertise,
          state-of-the-art equipment, and dedication to quality, we guarantee exceptional results that exceed
          your expectations. Explore our services below:
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/images/printing.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Screen printing services
                </h5>
                <p>
                Transform your clothing line, team uniforms, or promotional merchandise with our custom apparel printing services.
                 From T-shirts and hoodies to caps and jackets, we offer high-quality prints on a wide variety of fabrics, ensuring
                vibrant colors and lasting durability.
                </p>
                <a href={{route('service')}}>
                    Read More
                  </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/images/teaching.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Teaching services
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href={{route('service')}}>
                    Read More
                  </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/images/graphic design.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  graphic designing
                </h5>
                <p>
                Bring your ideas to life with our graphic design services. Our team of experienced designers works
                closely with you to create eye-catching designs that reflect your brand identity and vision. Whether
                 you need a logo, artwork, or custom graphics, we ensure your prints are unique and impactful.
                </p>
                <a href={{route('service')}}>
                    Read More
                  </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/images/largeformat.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  largeformat services
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The point of using
                </p>
                <a href={{route('service')}}>
                    Read More
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
            Welcome to Sure Printing, where passion for creativity meets the precision of screen printing craftsmanship.
            Established with a vision to redefine the art of printing, Sure Printing has evolved into a trusted name,
             offering a spectrum of customized printing solutions to bring your ideas to life.
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/images/workspace.jpg" alt="Sure Printing">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- track section -->

  <section class="track_section layout_padding">
    <div class="track_bg_box">
      <img src="images/images/backround3.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading_container">
            <h2>
              Track Your staff
            </h2>
          </div>
          <p>
            Iste reprehenderit maiores facilis saepe cumque molestias. Labore iusto excepturi, laborum aliquid pariatur veritatis autem, mollitia sint nesciunt hic error porro.
            Deserunt officia unde repellat beatae ipsum sed. Aperiam tempora consectetur voluptas magnam maxime asperiores quas similique repudiandae, veritatis reiciendis harum fuga atque.
          </p>
          <form action="">
            <input type="text" placeholder="Enter Your Tracking Number" />
            <button type="submit">
              Track
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end track section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container mt-5 ">
      <div class="heading_container">
        <h2>
          What Says Our <span>Client</span>
        </h2>
      </div>
      <div class="client_container mt-5">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Testmorials</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Add Testimony</a>
              </li>
          </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                      <div class="client_container">
                          <div class="carousel-wrap ">
                            <div class="owl-carousel">
                              <div class="item">
                                <div class="box">
                                  <div class="detail-box">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                  </div>
                                  <div class="client_id">

                                    <div class="name">
                                      <h6>
                                        Adipiscing
                                      </h6>
                                      <p>
                                        Magna
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="box">
                                  <div class="detail-box">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                  </div>
                                  <div class="client_id">

                                    <div class="name">
                                      <h6>
                                        Adipiscing
                                      </h6>
                                      <p>
                                        Magna
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="box">
                                  <div class="detail-box">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                  </div>
                                  <div class="client_id">

                                    <div class="name">
                                      <h6>
                                        Adipiscing
                                      </h6>
                                      <p>
                                        Magna
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="box">
                                  <div class="detail-box">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                  </div>
                                  <div class="client_id">

                                    <div class="name">
                                      <h6>
                                        Adipiscing
                                      </h6>
                                      <p>
                                        Magna
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

                      <section class="contact_section layout_padding-top">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-lg-4 col-md-5 offset-md-1">
                              </div>
                            </div>
                              <div class="col-lg-10 col-md-10 offset-md-3">
                                <div class="form_container contact-form">
                                  <form action="" method="post">
                                    @csrf
                                    <div>
                                      <input type="text" placeholder="User Name" name="name" required/>
                                    </div>
                                    <div>
                                      <input type="text" class="message-box" placeholder="Message"  name="message" required/>
                                    </div>
                                    <div class="btn_box">
                                      <button type="submit" class="btn" name="button">
                                        Add Testimony
                                      </button>
                                    </div>
                                  </form>

                                  @if(session('success'))
                                 <div class="alert alert-success">
                                 {{ session('success') }}
                                </div>
                                @endif

                                </div>
                              </div>
                  </div>
              </div>
          </div>

      </div>
   </div>
  </div>
  </section>


  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container contact-form">

            <form action={{ route('posts.store') }} method="post">
              <div>
                <input type="text" placeholder="Phone Number" name="phone" required/>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message"  name="message" required/>
              </div>
              <div class="btn_box">
                <button type="submit" class="btn" name="button">
                  SEND
                </button>
              </div>
            </form>

          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.095967562538!2d30.0582882!3d-1.943165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca53bcedcec83%3A0x364181b3f977253d!2sSure%20Printing!5e0!3m2!1sen!2srw!4v1706353394552!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location : Kigali, Ndamage building, 1<sup>st</sup>floor
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +250 782641094
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  SurePrinting@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
            At Sure Printing, we are committed to providing unparalleled service,
             exceptional quality, and innovative solutions to meet your printing needs.
              Contact us today </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href={{route('index')}}>
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href={{route('about')}}>
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href={{route('service')}}>
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>

              <a class="" href={{route('contact')}}>
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#" method="POST">
            <input type="text" placeholder="Enter email" name="email" />
            <button type="submit" name="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://php.design/">Arc Developer</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

  <!-- End Google Map -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 </body>
  </html>



@endauth


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
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
        <link rel="shortcut icon" href="images/sure logo.png" type="">

        <title> Sure Printing </title>

          <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />
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

              <button class="navbar-toggler" id="menu-btn" onclick()  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href={{route('index')}}>Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{route('service')}}>Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{route('about')}}> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{route('contact')}}>Contact Us</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href={{route('create')}}> <i class="fa fa-user" aria-hidden="true"></i> Signup <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
    <section class="contact_section layout_padding-top">

            <div class="col-lg-4 col-md-5 offset-md-1">
              <div class="form_login">
                <div class="heading_container">
                  <h2>
                    sign<span>in</span>
                  </h2>
                </div>
                <form action={{route('signin')}} method="POST">
                  @csrf
                  <div>
                    <input type="text" placeholder="User Name" name="loginname"required/>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div>
                    <input type="password" placeholder="Password" name="loginpassword" required/>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="link">
                    <a  href={{route('create')}} id="signin" onclick="login()">Don't have an account ?</a><br>
                  </div>
                  <div class="btn_box">
                    <button type="submit" class="btn" name="button">
                      SIGN IN
                    </button>
                  </div>
                </form>
              </div>
            </div>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the menu toggle button and the navigation menu
    var menuBtn = document.getElementById('menu-btn');
    var navMenu = document.getElementById('navbarSupportedContent');

    // Add click event listener to the menu toggle button
    menuBtn.addEventListener('click', function() {
      // Toggle the 'show' class on the navigation menu to control its visibility
      navMenu.classList.toggle('show');
    });
  });
</script>

</body>
</html>

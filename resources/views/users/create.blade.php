<?php
// error messages
$errors = array();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];

if (empty($_POST["name"])) {
$errors[] = "Name is required";
} else {
$name = test_input($_POST["name"]);

// Check if the name contains only letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
$errors[] = "Only letters and white space allowed in the name";
}
}

// Validate Phone Number
if (empty($_POST["phone"])) {
$errors[] = "Phone Number is required";
} else {
$phone = test_input($_POST["phone"]);

// Check if the phone number is a valid format
if (!preg_match("/^\d{10}$/", $phone)) {
$errors[] = "Invalid phone number format. Please enter 10 digits.";
}
}
// Validate Email
if (empty($_POST["email"])) {
$errors[] = "Email is required";
} else {
$email = test_input($_POST["email"]);

// Check if the email address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors[] = "Invalid email format";
}
}

// Validate Password
if (empty($_POST["password"])) {
$errors[] = "Password is required";
} else {
$password = test_input($_POST["password"]);
}
// If there are no errors, you can proceed with further processing
if (empty($errors)) {
// Perform additional actions (e.g., database operations, sending emails)
// Redirect or display a success message}
}
header("Location: login.php");
exit();
}
// Function to sanitize and validate input data
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<!-- Display error messages, if any -->
<?php
if (!empty($errors)) {
echo '<div style="color: red;">';
foreach ($errors as $error) {
echo $error . '<br>';
}
echo '</div>';
}


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
              <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.095967562538!2d30.0582882!3d-1.943165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca53bcedcec83%3A0x364181b3f977253d!2sSure%20Printing!5e0!3m2!1sen!2srw!4v1706353394552!5m2!1sen!2srw">
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

      <div class="formx">
    <section class="contact_section layout_padding-top">

          <div class="rowone">
            <div class="col-lg-4 col-md-5 offset-md-1">
              <div class="form_create" id="create">
                <div class="heading_container">
                  <h2>
                    sign <span>up</span>
                  </h2>
                </div>
                <form action="{{ route('users.index') }}" method="POST">
                  @csrf
                  <div>
                    <input type="text" placeholder="Your Name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required/>
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) :'';?>" required/>
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required/>
                  </div>
                  <div>
                    <input type="password" placeholder="Password" name="password" required/>
                  </div>
                  <div class="link">
                    <a href="#" id="signin" onclick="login()">Already have an account ?</a><br>
                  </div>
                  <div class="btn_box">
                    <button type="submit" class="btn" name="button">
                      SIGN UP
                    </button>
                  </div>
                </form>
              </div>
            </div>




            <section class="contact_section layout_padding-top">

              <div class="col-lg-4 col-md-5 offset-md-1">
                <div class="form_login" id="login">
                  <div class="heading_container">
                    <h2>
                      sign<span>in</span>
                    </h2>
                  </div>
                  <form action="/signin" method="POST">
                    @csrf
                    <div>
                      <input type="text" placeholder="Your Name" name="loginname" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required/>
                    </div>
                    <div>
                      <input type="password" placeholder="Password" name="loginpassword" required/>
                    </div>
                    <div class="link">
                      <a href="#" id="sigin" onclick=signup()>Don't have an account ?</a><br>
                    </div>
                    <div class="btn_box">
                      <button type="submit" class="btn" name="button">
                        SIGN IN
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>








              <!-- jQery -->
  <script type="text/javascript" src="/public/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="/public/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="/public/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

    
</body>
</html>
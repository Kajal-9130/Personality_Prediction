<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">

     <!-- Google font -->
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">


    <title>CV</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Personality Prediction</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
    <li class="nav-item"><a href="UserRegistration.php" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="login.php" class="nav-link">Login </a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>
    </div>
    </nav>
    <header class="jumbotron back-image" 
    style="background-image:url(images/Banner1.jpg);">
        <div class="bottom-left myclass mainHeading">
            <h1 class="text-uppercase text-danger mt-5 font-weight-bold">Welcome  to Personality Prediction</h1>
            <a href="login.php" class="btn btn-success mr-4">Login</a>
            <a href="UserRegistration.php" class="btn btn-danger mr-4">Sign Up</a>
        </div>

    </header>
    <?php include('userRegistration.php') ?>
    <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">About Us</h3>
      <p>
      Admin can easily shortlist a candidate based on their online test marks and select the appropriate candidate for particular job profile. 
      ... This system will help the HR dept. 
    to easily shortlist the candidate based on their CV ranking policy.
    This system will focus not only in qualification and in experience but also focuses on other important aspects, 
    which are required for particular job position.
    </p>

    </div>
  </div>


  <div class="jumbotron bg-danger" id="Customer">
   
    <div class="container">
     
      <h2 class="text-center text-white">HR Team</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
         
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/hr1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Hiral shah</h4>
              <p class="card-text">
              Contact no:-456137890
            Email:- hiral@gmail.com</p>
            </div>
          </div>
        </div> 

        <div class="col-lg-3 col-sm-6">
         
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/hr2.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">
                Contact no:-456137890
                Email:- sonam@gmail.com</p>
            </div>
          </div>
        </div> 

        <div class="col-lg-3 col-sm-6">
      
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/hr3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Dhwani Shah</h4>
              <p class="card-text"> Contact no:-456137890
              Email:- dhwani@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
         
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/hr4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text"> Contact no:-456137890
              Email:- jyoti@gmail.com
              </p>
            </div>
          </div>
        </div> 
      </div> 
    </div> 
  </div> 

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

    <div class="col-md-8">
 <!--Start Contact Us 1st Column-->
 <form action="" method="post" >
  <input type="text" class="form-control" name="name" placeholder="Name"><br>
  <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
  <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
  <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
  <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
  
 </form>
</div> <!-- End Contact Us 1st Column-->

     

    
   <!-- Start Footer-->
   <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Kajal Chaudhari &copy; 2020.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Straight-fly</title>
       
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= 
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">straightfly@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 12345 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Straight <span>Fly </span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
       <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 


<div id="sectionAimprimer">
<style>
  .login {
  min-height: 100vh;
}

.bg-image {
  background-image: url(' https://c0.wallpaperflare.com/preview/519/987/648/adult-blur-business-trip-businessman.jpg');
  opacity:0.9;
  background-color: #000000;
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}
</style>
  <!-- ======= Hero Section ======= -->
  <div class="container-fluid ps-md-0 bg-gray">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container ">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
            <div class="container" data-aos="fade-up">
      <div class="section-title">
            <h3>Récaputilatif de vos <span>coordonnées</span></h3>
          
        </div></div>

              <!-- Sign In Form -->
              <div class="falign-items-center">
        <form action = "" method="POST" class="needs-validation" novalidate>
          @csrf
  <div class="form-row"> 
    <div class="col-md- mb-3">
      <label for="validationCustom01">Numéro du Vol</label>
      <input type="text" class="form-control" id="validationCustom01" name="validationCustom01" value="{{ $numvol }}" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom02">First name</label>
      <input type="text" class="form-control" id="validationCustom02" name="validationCustom02" value="{{ $r1 }}" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="form-row">
    <div class="col-md- mb-3">
      <label for="validationCustom01">Last name</label>
      <input type="text" class="form-control" id="validationCustom03" name="validationCustom03"value="{{ $r2 }}" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  <div class="form-row">
    <div class="col-md- mb-3">
      <label for="validationCustom03">Email</label>
      <input type="text" class="form-control" id="validationCustom04" name="validationCustom04" value="{{ $r3}}">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    
    <div class="col-md- mb-3">
      <label for="validationCustom05">Postal code</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $r4 }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom05">Adress</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $r5 }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom05">Number of passangers</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $r6 }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom05">Baggage</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $r7 }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom05">Number of passagenrs</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $r6 }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>
    <div class="col-md- mb-3">
      <label for="validationCustom05">prix</label>
      <input type="text" class="form-control" id="validationCustom05" name="validationCustom05" value="{{ $prix }}">
      <div class="invalid-feedback">
        Please provide a valid Postal code.
      </div>
    </div>

  

  
  </div>
  <button class="primary" onClick="imprimer('sectionAimprimer')">Imprimer</button>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- ======= Featured Services Section ======= -->
    
</div>
</div></div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      
    </section><!-- End Featured Services Section -->
    
  <!-- ======= Footer =======--> 
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
    <!--  <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>--> 

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      <!--   Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--> 
          Designed using <a href="https://bootstrap.com/">Bootstrap</a> 

      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  <script>
    function imprimer(divName) {
          var printContents = document.getElementById(divName).innerHTML;    
      var originalContents = document.body.innerHTML;      
      document.body.innerHTML = printContents;     
      window.print();     
      document.body.innerHTML = originalContents;
      }
  </script>
</body>
</html>


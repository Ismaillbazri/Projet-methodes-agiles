<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Straight-fly-InfoVol</title>
       
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
  <link href="../css/style1.css" rel="stylesheet">


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
  <div class="container" data-aos="fade-up">
      <div class="section-title">
            <h3>Détails du <span>vol</span></h3>

          
          <p>Quelques infos utils</p>
        </div></div>

  <main id="main">
	<!--special-offer start-->
  <style>
    .special-offer{
    position: relative;
    background: url("{{$vol->Duree}}")no-repeat center;
    background-size: cover;
    z-index: 1;
    height:100%;
}
  </style>
  <section class="special-offer ">
			<div class="container ">
				<div class="special-offer-content ">
					<div class="row ">
						<div class="col-sm-8 ">
									<h2 class="text-white">{{$vol->Depart}} <i class="bi bi-airplane-engines"></i> {{$vol->Arrivee}}</h2>
									<div class="packages-review special-offer-review">
						
									</div><!--/.packages-review-->
									<div class="packages-para special-offer-para">
										<p>
                    <span>
                      <i class="bi bi-alarm"></i> {{$vol->HeureDepart}} - {{$vol->HeureArrivee}}
											</span>
											<i class="bi bi-star-fill"></i> 5 star accomodation
										</p>
										<p>
											<span>
                      <i class="bi bi-calendar"></i> {{$vol->Date}}
											</span>
											<i class="bi bi-bookmark-plus"></i> food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
										</p>
										
									</div><!--/.packages-para-->
									<div class="offer-btn-group">
										
										<div class="about-btn">
                  
										</div><!--/.about-btn-->
									</div><!--/.offer-btn-group-->
								</div><!--/.single-special-offer-txt-->
							</div><!--/.single-special-offer-->
						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.special-offer-content-->
			</div><!--/.container-->

		</section><!--/.special-offer end-->
    <!-- ======= Featured Services Section ======= -->
   
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
    
        <div class="row ">
        <table  class="table table-sm">
                <thead>
                    <tr>
                        <th  scope="row">Numéro du vol</td>
                        <td>Départ</td>
                        <td>Arrivée</td>
                        <td>Compagnie</td>
                        <td>Date</td>
                        <td>   </td>
                        <td>Prix</td>
                        <td>   </td>

                    </tr>
                </thead> 
                <tbody>
                    <tr >
                        <th scope="row">{{$vol->NumVol}}</td>
                        <td>{{$vol->Depart}}</td>
                        <td>{{$vol->Arrivee}}</td>
                        <td>{{$vol->Compagnie}}</td>
                        <td>{{$vol->Date}}</td>
                        <td>          </td>
                        <td>{{$vol->Prix}}€</td>
                        <td>    </td>
                    </tr>
                </tbody>

            </table>
           
        </div>
        <br>
        <div class="d-flex justify-content-center">
        <a  href="{{route('réserver',$vol->id)}}">
											<button  class="about-view packages-btn">
												book now
											</button></a></div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer =======--> 
  <footer id="footer">

   
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Straightfly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
  
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

</body>
</html>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STEIL AUTOMOBILE</title>
  <meta content="pieces auto,reparation de vehicule,achat d'engin" name="description">
  <meta content="" name="keywords">
  <meta name='copyright' content='steilautomobile'>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- CDN link CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css"/>

  <!-- Main CSS -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" class="img-fluid">
        <h1>STEIL AUTOMOBILE</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show fa-regular fa-solid fa-bars"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>
      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="/" >ACCUEIL</a></li>
            <li><a href="/#get-started">A PROPOS</a></li>
            <li><a href="/#ours_services">SERVICES</a></li>
            <li><a href="/pieces_engin">PIECES AUTO / ENGIN / BUS</a></li>
            <li><a href="/reparation" class="active">GARAGE</a></li>
            <li><a href="/contact">CONTACT</a></li>
            <li><a href="/home"><i class="fa-solid fa-user"></i></a></li>

          </ul>
      </nav>

    </div>
  </header>


  <main id="main">

    <section class="big-banner section" style="background-image: url('https://fakeimg.pl/1024x800') ;">
		<div class="container">
			<h2 class="text-center text-dark">GARAGE</h2>
		</div>
	</section>

    <!-- ======= Services Section ======= -->
    <section id="services ours_services" class="services section-bg">
      <div class="container">

        <div class="section-header">
          <h2>NOS PRESTATIONS</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" >
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-toolbox"></i>
              </div>
              <h3>Entretien</h3>
              <p>Notre entretien automobile inclus vidange, remplacement de filtres, vérifications sécurité, diagnostic électronique
                 et rotation pneus, assurant longévité du véhicule et conformité normes constructeur, pour une tranquillité d'esprit totale.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" >
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <h3>Réparation du moteur</h3>
              <p>
                Nous réparons les moteurs avec précision : diagnostics, remplacement pièces, ajustements, tests approfondis pour retrouver performances optimales en toute sécurité.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-toolbox"></i>
              </div>
              <h3>Réparation de la transmission</h3>
              <p>Nous réparons les transmissions avec expertise : évaluation, remplacement pièces, ajustements et essais pour un fonctionnement optimal de votre véhicule.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <h3>Réparation de la climatisation et du système de refroidissement</h3>
              <p>Nous réparons climatisation et refroidissement : évaluation, réparation composants et tests pour un confort intérieur optimal et un moteur bien refroidi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-toolbox"></i>
              </div>
              <h3>Réparation du système électrique</h3>
              <p>
                Nous réparons le système électrique : évaluation, résolution des problèmes et tests pour un fonctionnement fiable de vos systèmes</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <h3>Réparation de la carrosserie</h3>
              <p>Nous réparons la carrosserie : évaluation, réparation et finitions pour une apparence retrouvée, à la fois fiable et esthétique.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" >

          <div class="section-header">
            <h2>NOS REALISATIONS</h2>

          </div>

          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

            <ul class="portfolio-flters"  >
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-entretien">Entretien</li>
              <li data-filter=".filter-carrosserie">Carrosserie</li>
              <li data-filter=".filter-climatisation">Climatisation</li>
              <li data-filter=".filter-reparation">Reparation</li>
            </ul>

            <div class="row gy-4 portfolio-container"  >

              <div class="col-lg-4 col-md-6 portfolio-item filter-entretien">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Entretien - 1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Entretien</h4>
                    <a href="assets/img/realisations/Entretien - 1.jpg" title="Entretien" data-gallery="portfolio-gallery-entretien" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-carrosserie">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Carrosserie - 1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Carrosserie</h4>
                    <a href="assets/img/realisations/Carrosserie - 1.jpg" title="Carrosserie" data-gallery="portfolio-gallery-carrosserie" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-climatisation">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Climatisation - 2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Climatisation</h4>
                    <a href="assets/img/realisations/Climatisation - 2.jpg" title="Climatisation" data-gallery="portfolio-gallery-climatisation" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-reparation">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Repartition - 1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Reparation</h4>
                    <a href="assets/img/realisations/Repartition - 1.jpg" title="Reparation" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-entretien">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Entretien - 2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Entretien</h4>
                    <a href="assets/img/realisations/Entretien - 2.jpg" title="Entretien" data-gallery="portfolio-gallery-entretien" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-carrosserie">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Carrosserie - 2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Carrosserie</h4>
                    <a href="assets/img/realisations/Carrosserie - 2.jpg" title="Carrosserie " data-gallery="portfolio-gallery-carrosserie" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-climatisation">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Reparation - 1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Reparation</h4>
                    <a href="assets/img/realisations/Reparation - 1.jpg" title="Reparation" data-gallery="portfolio-gallery-climatisation" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-reparation">
                <div class="portfolio-content h-100">
                  <img src="assets/img/realisations/Repartition - 2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Reparation </h4>
                    <a href="assets/img/realisations/Repartition - 2.jpg" title="Reparation" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="fa-solid fa-eye"></i></a>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>


    </section>


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <h2 class="text-uppercase title-section text-center mb-5">Temoignages</h2>

            <div class="slides-2 swiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial )
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
                                    <h3>{{$testimonial->nom}}</h3>
                                    <h4>{{$testimonial->fonction}}</h4>
                                    <p>
                                        <i class="fa-solid fa-quote-left"></i>
                                        {{$testimonial->message}}
                                        <i class="fa-solid fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="/" class="logo d-flex align-items-center mb-3">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid" style="max-height: 50px;">
                <h4 class="p-3">STEIL AUTOMOBILE</h4>
              </a>
              <p>
                Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord<br>
                <strong>Téléphone:</strong> +225 0707636245 <br> +225 0777424405 <br>
                <strong>Email:</strong> dafstephane@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Lien de Navigation</h4>
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="/#get-started">A Propos</a></li>
              <li><a href="/#ours_services">Services</a></li>
              <li><a href="/pieces_engin">Pièces Auto / Engin</a></li>
              <li><a href="/reparation">Reparation d'engin</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Prestations de reparation Auto</h4>
            <ul>
              <li><a href="#">Entretien</a></li>
              <li><a href="#">Réparation du moteur</a></li>
              <li><a href="#">Réparation de la transmission</a></li>
              <li><a href="#">Réparation de la climatisation et du système de refroidissement</a></li>
              <li><a href="#">Réparation du système électrique</a></li>
              <li><a href="#">Réparation de la carrosserie</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Steil Automobile</span></strong> tous droits réservés.
        </div>

      </div>
    </div>

</footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

  <div id="preloader"></div>


  <!-- CDN link JS -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>



 <script src="{{asset('assets/js/main.js')}}" ></script>

 <script src="{{asset('assets/eshop/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/bootstrap.min.js')}}"></script>

</body>

</html>

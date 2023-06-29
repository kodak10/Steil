<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STEIL AUTOMOBILE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- CDN link CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css"/>

  <link rel="stylesheet" href="{{asset('assets/eshop/css/owl-carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/eshop/css/slicknav.min.css')}}" >

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{asset('assets/eshop/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('assets/eshop/style.css')}}">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">


</head>

<body>


  <!-- ======= Modal du Message à la première visite du site ======= -->
  <div class="modal" tabindex="-1" id="welcome_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center align-items-center">
            <p style="font-size: 18px;" class="p-2">Bienvenue sur le site internet de <strong>STEIL AUTOMOBILE </strong>, anciennement connu sous le nom de [Ancien nom]</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">ACCEDER AU SITE</button>
          </div>
        </div>
      </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" class="img-fluid">
        <h1>STEIL AUTOMOBILE</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show fa-regular fa-solid fa-bars"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>
          <li><a href="">A Propos</a></li>
          <li><a href="">Services</a></li>
          <li><a href="/pieces_engin">Pièces Auto / Engin</a></li>
          <li><a href="/reparation">Reparation d'engin</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/login/admin"><i class="fa-solid fa-user"></i></a></li>

        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Site internet de <span style="color: #e41a20;">STEIL AUTOMOBILE</span></h2>
            <p data-aos="fade-up">Explorez, découvrez plusieurs pièces automobile dont vous avez besoins pour votre activité.</p>
            <br>
            <i class="fa-solid fa-chevrons-down"></i>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item img-fluid active" style="background-image: url({{asset('assets/img/hero-carousel/IMG-1.jpg')}}) "></div>
      <div class="carousel-item img-fluid" style="background-image: url({{asset('assets/img/hero-carousel/IMG-2.jpg')}}) "></div>
      <div class="carousel-item img-fluid" style="background-image: url({{asset('assets/img/hero-carousel/IMG-3.jpg')}}) "></div>
      <div class="carousel-item img-fluid" style="background-image: url({{asset('assets/img/hero-carousel/IMG-4.jpg')}}) "></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon fa-solid fa-arrow-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon fa-solid fa-arrow-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="get-started about" class="get-started section-bg">
      <div class="container-fluid">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content w-100">
              <h3>QUI SOMMES NOUS ?</h3>
              <p>
                Nous sommes spécialisés dans la vente de pièces automobiles de haute qualité. Nous proposons une large gamme de pièces détachées provenant de marques réputées, couvrant différents modèles et types de véhicules.
              </p>
              <P>
                Mais notre expertise ne s'arrête pas là. En plus de la vente de pièces auto, nous offrons également des services complémentaires tels que la location et la réparation d'engins.
              </P>
              <p>
                Chez <strong style="size: 23px;">STEIL AUTOMOBILE</strong>, nous mettons un point d'honneur à fournir des pièces et un service client de qualité. Notre équipe dévouée est là pour vous offrir des conseils d'experts et des solutions personnalisées, en travaillant en étroite collaboration avec vous pour répondre à vos besoins spécifiques.
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade">
            <div class="contact shadow p-3 mb-5 bg-body rounded text-center w-100" style="border-radius: 10px;">
                <h3>NOS CONTACTS</h3>
                <div class="content">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="info-item  d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Téléphone</h3>
                        <p>+225 0707636245</p>
                        <p>+225 0777424405</p><br>

                      </div>

                    </div>

                    <div class="col-lg-6">
                      <div class="info-item d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-envelope"></i>
                        <h3>Email</h3>
                        <p>dafstephane@gmail.com</p>
                        <br>
                      </div>

                    </div>

                    <div class="col-lg-12 mt-5">
                      <div class="info-item  d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-map-pin"></i>
                        <h3>Notre Adresse</h3>
                        <p>Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord</p><br>
                      </div>

                    </div>

                  </div>
                </div>

            </div>

          </div>

        </div>
    </section>

    <!-- ======= ActivitY Section ======= -->
    <section class="activite h-100" style="background-color: #000000;">
        <div class="container">
          <h2 class="text-center text-white mb-5">NOS SERVICES</h2>
            <div class="row">
                <div class="col-lg-4">
                    <a href="">
                      <div class="card pieces_auto  w-100" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center align-items-center">
                          <h5 class="card-title">VENTE DE PIECE AUTO</h5>
                        </div>
                      </div>
                    </a>
                </div>

                <div class="col-lg-4 mt-5 mb-5">
                    <a href="">
                      <div class="card reparation w-100" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center align-items-center">
                          <h5 class="card-title">REPARATION DE GROS ENGIN</h5>
                        </div>
                      </div>
                    </a>
                </div>

                <div class="col-lg-4 ">
                  <a href="">
                    <div class="card vente_vehicule w-100" style="min-height: 200px;">
                      <div class="card-body d-flex justify-content-center align-items-center">
                        <h5 class="card-title">VENTE ET LOCATION D'ENGIN</h5>
                      </div>
                    </div>
                  </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ======= New Pieces Section  ======= -->
    <section class="mb-3 h-100">
      <div class="container" data-aos="fade-up">

          <div class="d-flex justify-content-between">
            <h2 class="text-uppercase text-white title-home">Pieces récentes</h2>
            <a href="" class="fw-bold">Voir Tout</a>
          </div>
          <div class="row">
                @foreach ($pieces_recentes as $pieces_recente)
                    <div class="col-lg-3">
                        <div class="single-product">
                            <div class="product-img">

                                <a href="#">
                                    @foreach ($pieces_recente->images as $image )
                                            <img class="default-img" src="{{ asset($image->chemin) }}" alt="#" style="height: 550px !important; width:750px; !important">
                                            {{-- <img class="default-img" src="https://via.placeholder.com/550x750" alt="#"> --}}
                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#" style="height: 550px !important; width:750px; !important">
                                        @endforeach
                                    {{-- <img class="default-img" src="https://www.pieces-auto-44.fr/wp-content/uploads/2022/07/fotolia_124912791.jpg" alt="#">
                                    <img class="hover-img" src="https://www.pieces-auto-44.fr/wp-content/uploads/2022/07/fotolia_124912791.jpg" alt="#"> --}}
                                </a>
                                <div class="button-head " style="text-align: center !important;">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fa-solid fa-eye"></i><span>Détails</span></a>
                                    </div>
                                    <div class="product-action-2 text-center" >
                                        <a title="Add to cart" href="#">Appeler</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="#">{{$pieces_recente->nom}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach



          </div>


      </div>


    </section>

    <!-- ======= Modal Pieces ======= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
              </div>
              <div class="modal-body d-flex ">
                  <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                </div>
                            </div>
                        <!-- End Product slider -->
                    </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                          <div class="quickview-content">
                              <h2>Nom de l'article</h2>
                              <div class="quickview-ratting-review">
                                  <div class="quickview-stock">
                                      <span><i class="fa fa-check-circle-o"></i> En stock</span>
                                  </div>
                              </div>
                              <!-- <h3>$9000 FCFA</h3> -->
                              <div class="quickview-peragraph mt-5">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                              </div>

                              <div class="default-social">
                                  <h4 class="share-now">Partager le lien</h4>
                                  <ul>
                                      <li><a class="whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                      <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <!-- ======= Top Engin Section ======= -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="text-center">ENGIN DISPONIBLE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach ( $engins as $engin )
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        @foreach ($engin->images as $image )
                                            <img class="default-img" src="{{ asset($image->chemin) }}" alt="#" style="height: 550px !important; width:750px; !important">
                                            {{-- <img class="default-img" src="https://via.placeholder.com/550x750" alt="#"> --}}
                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#" style="height: 550px !important; width:750px; !important">
                                        @endforeach


                                    </a>

                                    <div class="button-head " style="text-align: center !important;">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fa-solid fa-eye"></i><span>Détails</span></a>
                                        </div>
                                        <div class="product-action-2 text-center" >
                                            <a title="" href="#">Appeler</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">{{$engin->nom}}</a></h3>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2 class="text-uppercase">Temoignages</h2>
          </div>

          <div class="slides-2 swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{asset('assets/img/testimonials_user.avif')}}" class="testimonial-img" alt="">
                    <h3>Nom</h3>
                    <h4>Poste / Entreprise</h4>
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{asset('assets/img/testimonials_user.avif')}}" class="testimonial-img" alt="">
                    <h3>Nom</h3>
                    <h4>Poste / Entreprise</h4>
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{asset('assets/img/testimonials_user.avif')}}" class="testimonial-img" alt="">
                    <h3>Nom</h3>
                    <h4>Poste / Entreprise</h4>
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{asset('assets/img/testimonials_user.avif')}}" class="testimonial-img" alt="">
                    <h3>Nom</h3>
                    <h4>Poste / Entreprise</h4>
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
    </section>

    <!-- ======= Marques Section ======= -->
    <section id="" class="marques">
      <div class="container-fluid" data-aos="fade-up">
        <h4 class="text-center mb-3">NOS MARQUES DE PIECES AUTO</h4>

        <div class="slides-3 swiper text-center">
          <div class="swiper-wrapper">

                @foreach ($marques as $marque )
                    <div class="swiper-slide">
                        <div class="marques-wrap">
                            <div class="marques-item">
                            <img src="{{ asset($marque->chemin) }}" class="marques-img" alt="" >

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
                <img src="assets/img/logo.png" alt="" class="img-fluid" style="max-height: 50px;">
                <h4 class="p-3">STEIL AUTOMOBILE</h4>
              </a>
              <p>
                Abidjan, ...<br><br>
                <strong>Téléphone:</strong> +225 0101010101<br>
                <strong>Email:</strong> info@gmail.com<br>
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
              <li><a href="">A Propos</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Pièces Auto / Engin</a></li>
              <li><a href="">Reparation d'engin</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Prestations de reparation Auto</h4>
            <ul>
              <li><a href="">Entretien</a></li>
              <li><a href="">Réparation du moteur</a></li>
              <li><a href="">Réparation de la transmission</a></li>
              <li><a href="">Réparation de la climatisation et du système de refroidissement</a></li>
              <li><a href="">Réparation du système électrique</a></li>
              <li><a href="">Réparation de la carrosserie</a></li>

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>


  <!-- Main JS  -->
  <script src="{{asset('assets/js/main.js')}}" ></script>

  <script src="{{asset('assets/eshop/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/eshop/js/jquery-migrate-3.0.0.js')}}"></script>
  <script src="{{asset('assets/eshop/js/jquery-ui.min.js')}}"></script>

  <script src="{{asset('assets/eshop/js/slicknav.min.js')}}"></script>
	<script src="{{asset('assets/eshop/js/owl-carousel.js')}}"></script>

	<script src="{{asset('assets/eshop/js/active.js')}}"></script>

</body>

</html>

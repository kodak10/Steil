<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="pieces auto,reparation de vehicule,achat d'engin" name="description">
	<meta name='copyright' content='steilautomobile'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title  -->
    <title>STEIL AUTOMOBILE</title>

	<!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Link CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="{{asset('assets/eshop/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/css/slicknav.min.css')}}" >

	<!-- StyleSheet -->
	<link rel="stylesheet" href="{{asset('assets/eshop/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/css/responsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">



	<style>
		a{
			text-decoration: none !important;
		}
	</style>

</head>
<body class="">

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		  <a href="/" class="logo d-flex align-items-center">
			<img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid">
			<h1>STEIL AUTOMOBILE</h1>
		  </a>

		  <i class="mobile-nav-toggle mobile-nav-show fa-regular fa-solid fa-bars"></i>
		  <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>
		  <nav id="navbar" class="navbar">
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="/#get-started">A Propos</a></li>
              <li><a href="/#ours_services">Services</a></li>
              <li><a href="/pieces_engin"  class="active">Pièces Auto / Engin</a></li>
              <li><a href="/reparation">Reparation d'engin</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/home"><i class="fa-solid fa-user"></i></a></li>

            </ul>
          </nav>

		</div>
	</header>

	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">

                @foreach ($banner_pieces as $banner_piece)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-banner">
                            <img src="{{ asset($banner_piece->couverture) }}" style="height: 370px !important; width:600px !important" alt="#">
                            <div class="content">
                                <p>Pièces auto</p>
                                <h3>{{$banner_piece->nom}}</h3>
                                <a  href="tel:+2250758265650">Appeler</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($banner_engins as $banner_engin)
                    <div class="col-lg-4 col-12">
                        <div class="single-banner tab-height">
                            <img src="{{ asset($banner_engin->couverture) }}" style="height: 370px !important; width:600px !important" alt="#">
                            <div class="content">
                                <p>Engin en vente</p>
                                <h3>{{$banner_engin->nom}}</h3>
                                <a  href="tel:+2250758265650">Appeler</a>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

	<!-- ======= Produits pièces auto Section ======= -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Catégories</h3>
                                <ul class="categor-list">
                                    <li><a href="#" data-categorie="" class="active">TOUTES LES PIECES</a></li>
                                    <li><a href="#" data-categorie="moteur">Moteur</a></li>
                                    <li><a href="#" data-categorie="pieces_detachees">Pièces détachées</a></li>

                                </ul>
                            </div>




                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit"><i class="ti-search"></i></button>
									</form>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($pieces as $piece )
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product" id="single-product">

                                    <div class="product-img">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img class="default-img" src="{{ asset($piece->couverture) }}" alt="#">
                                            <img class="hover-img" src="{{ asset($piece->couverture) }}" alt="#">
                                        </a>
                                        <div class="button-head " style="text-align: center !important;">
                                            <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fa-solid fa-eye"></i><span>Détails</span></a>
                                            </div>
                                            <div class="product-action-2 text-center" >
                                                <a  href="tel:+2250767754079">Appeler</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#" data-toggle="modal" data-target="#exampleModal">{{$piece->nom}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex text-center justify-content-center" id="pagination">
                            {{ $pieces->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="midium-banner">
		<div class="container">
			<div class="row">
                @foreach ($top_pieces_buys as $top_pieces_buy )
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner">
                            <img src="{{ asset($top_pieces_buy->couverture) }}" style="height: 370px !important; width:600px !important" alt="#">
                            <div class="content">
                                <h4>{{$top_pieces_buy->nom}}</h4>
                                <a  href="tel:+2250758265650">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

	<!-- ======= Engin disponible Section ======= -->
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
                                            <img class="default-img" src="{{ asset($engin->couverture) }}" alt="#">
                                            <img class="hover-img" src="{{ asset($engin->couverture) }}" alt="#">
                                    </a>

                                    <div class="button-head " style="text-align: center !important;">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fa-solid fa-eye"></i><span>Détails</span></a>
                                        </div>
                                        <div class="product-action-2 text-center" >
                                            <a  href="tel:+2250758265650">Appeler</a>
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

    <!-- ======= Marques Section ======= -->
    <section id="" class="marques">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-title">
                <h2 class="text-center">NOS MARQUES DE PIECES AUTO</h2>
            </div>

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

	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<div class="inner">
							<h4>BOITE AU LETTRE</h4>
							<p> Abonnez vous à la boite au lettre et recevez les nouveautés de pièces.</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Entrer votre adresse email" required="" type="email">
								<button class="btn">S'abonner</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body d-flex ">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<img src="https://via.placeholder.com/569x528" alt="#" class="w-100">

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
                    <strong>Téléphone:</strong>+225 0767754079 <br> +225 0767755112 <br> <br>+225 0767754095
                    <strong>Email:</strong> steilautocommercial@gmail.com<br>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

	<!-- Vendor Jquery -->
    <script src="{{asset('assets/js/main.js')}}" ></script>

    <script src="{{asset('assets/eshop/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/slicknav.min.js')}}"></script>
	<script src="{{asset('assets/eshop/js/owl-carousel.js')}}"></script>

	<!--  Jquery -->
    <script src="{{asset('assets/eshop/js/active.js')}}"></script>

    <script>
        // Lorsque l'on clique sur un lien de filtre
$('#filtres a').on('click', function(e) {
    e.preventDefault();

    var categorie = $(this).data('categorie');

    // Appel AJAX pour récupérer les résultats filtrés
    $.ajax({
        url: '/filtrer',
        type: 'GET',
        data: { categorie: categorie },
        success: function(response) {
            // Mettre à jour le contenu des résultats
            $('#single-product').html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});


    </script>

</body>
</html>

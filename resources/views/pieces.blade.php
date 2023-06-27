<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="{{asset('assets/eshop/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/css/slicknav.min.css')}}" >

	<!-- StyleSheet -->
	<link rel="stylesheet" href="{{asset('assets/eshop/css/reset.css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/eshop/css/responsive.css')}}">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

	<style>
		a{
			text-decoration: none !important;
		}
	</style>

</head>
<body class="js">

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
				<li><a href="/" >Accueil</a></li>
				<li><a href="">A Propos</a></li>
				<li><a href="">Services</a></li>
				<li><a href="/pieces" class="active">Pièces Auto / Engin</a></li>
				<li><a href="/reparation">Reparation d'engin</a></li>
				<li><a href="/contact">Contact</a></li>
                <li><a href="/login/admin"><i class="fa-solid fa-user"></i></a></li>

			  </ul>
		  </nav>

		</div>
	</header>

	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Pièces auto</p>
							<h3>Pneu</h3>
							<a href="#">Appeler</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Pièces auto</p>
							<h3>Vitre</h3>
							<a href="#">Appeler</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Engin en vente</p>
							<h3>Tracteur</h3>
							<a href="#">Appeler</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Produits pièces auto Section ======= -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>CATEGORIES DE PIECES</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Tout</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Categorie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Categorie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Categorie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Categorie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Categorie</a></li>
								</ul>
							</div>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="kids" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="essential" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="prices" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
														<h3><a href="#">Lorem ipsum dolor</a></h3>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div>
					<nav aria-label="Page navigation example">
						<ul class="pagination d-flex">
						  <li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
							  <span aria-hidden="true">&laquo;</span>
							</a>
						  </li>
						  <li class="page-item"><a class="page-link" href="#">1</a></li>
						  <li class="page-item"><a class="page-link" href="#">2</a></li>
						  <li class="page-item"><a class="page-link" href="#">3</a></li>
						  <li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
							  <span aria-hidden="true">&raquo;</span>
							</a>
						  </li>
						</ul>
					  </nav>
				</div>
            </div>
    </div>

	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<h4>Vitre triple impact</h4>

							<a href="#">Contactez Nous</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<h4>Vitre triple impact</h4>

							<a href="#" class="btn">Contactez Nous</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Engin disponible Section ======= -->
	<div class="product-area most-popular section">
		<div class="container">
			<div class="row">
		<div class="col-12">
		  <div class="section-title">
			<h2>ENGIN DISPONIBLES</h2>
		  </div>
		</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel popular-slider">
						<div class="single-product">
						<div class="product-img">
							<a href="#">
							<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
							<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
							<h3><a href="#">Excavatrice</a></h3>

						</div>
						</div>
						<div class="single-product">
										<div class="product-img">
											<a href="#">
												<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
												<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
											<h3><a href="#">Grue</a></h3>

										</div>
						</div>
						<div class="single-product">
										<div class="product-img">
											<a href="#">
												<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
												<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">

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
											<h3><a href="#">Bulldozer</a></h3>

										</div>
						</div>
						<div class="single-product">
										<div class="product-img">
											<a href="#">
												<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
												<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
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
											<h3><a href="#">Chargeuse sur pneus</a></h3>

										</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ======= Marques Section ======= -->
	<section id="" class="testimonials">
		<div class="container-fluid" data-aos="fade-up">
		<h4 class="text-center mb-3">NOS MARQUES DE PIECES AUTO</h4>
		  <div class="slides-3 swiper">
			<div class="swiper-wrapper">

			  <div class="swiper-slide">
				<div class="testimonial-wrap">
				  <div class="testimonial-item">
					<img src="../assets/img/logo/bmw.png" class="testimonial-img" alt="">

				  </div>
				</div>
			  </div>

			  <div class="swiper-slide">
				<div class="testimonial-wrap">
				  <div class="testimonial-item">
					<img src="../assets/img/logo/hyundai.jpg" class="testimonial-img" alt="">

				  </div>
				</div>
			  </div>

			  <div class="swiper-slide">
				<div class="testimonial-wrap">
				  <div class="testimonial-item">
					<img src="../assets/img/logo/Mercedes-Benz.png" class="testimonial-img" alt="">

				  </div>
				</div>
			  </div>

			  <div class="swiper-slide">
				<div class="testimonial-wrap">
				  <div class="testimonial-item">
					<img src="../assets/img/logo/Peugeot.jpg" class="testimonial-img" alt="">

				  </div>
				</div>
			  </div>

			  <div class="swiper-slide">
				<div class="testimonial-wrap">
				  <div class="testimonial-item">
					<img src="../assets/img/logo/toyota.webp" class="testimonial-img" alt="">

				  </div>
				</div>
			  </div>

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
					<a href="../index.html" class="logo d-flex align-items-center mb-3">
						<img src="../assets/img/logo.png" alt="" class="img-fluid" style="max-height: 50px;">
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
					<li><a href="../index.html">Accueil</a></li>
					<li><a href="../index.html#about">A Propos</a></li>
					<li><a href="../index.html#ours_services">Services</a></li>
					<li><a href="index.html">Pièces Auto / Engin</a></li>
					<li><a href="../reparation.html">Reparation d'engin</a></li>
					<li><a href="../contact.html">Contact</a></li>
				  </ul>
			  </div>

			  <div class="col-lg-4 col-md-6 footer-links">
				<h4>Prestations de réparation Auto</h4>
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


	<!-- Vendor Jquery -->


    <script src="{{asset('assets/js/main.js')}}" ></script>

    <script src="{{asset('assets/eshop/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('assets/eshop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/eshop/js/slicknav.min.js')}}"></script>
	<script src="{{asset('assets/eshop/js/owl-carousel.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

	<!--  Jquery -->
    <script src="{{asset('assets/eshop/js/active.js')}}"></script>

</body>
</html>

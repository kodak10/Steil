<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STEIL AUTOMOBILE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- CDN link CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

  <!-- Main CSS -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class=" d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" class="img-fluid">
        <h1>STEIL AUTOMOBILE</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show fa-regular fa-solid fa-bars"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="">A Propos</a></li>
          <li><a href="">Services</a></li>
          <li><a href="/pieces">Pièces Auto / Engin</a></li>
          <li><a href="/reparation">Reparation d'engin</a></li>
          <li><a href="/contact" class="active">Contact</a></li>
          <li><a href="/login/admin"><i class="fa-solid fa-user"></i></a></li>

        </ul>
      </nav>

    </div>
  </header>

  <main id="main bg-dark">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="/">Accueil</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="fa-solid fa-phone"></i>
              <h3>Téléphone</h3>
              <p>+225 0707636245</p>
              <p>+225 0777424405</p><br>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="fa-solid fa-envelope"></i>
              <h3>Email</h3>
              <p>dafstephane@gmail.com</p> <br> <br>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="fa-solid fa-map-pin"></i>
              <h3>Notre Adresse</h3>
              <p class="m-auto text-center">Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord</p><br>
            </div>
          </div>

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127109.37359526935!2d-3.998058399999977!3d5.391362400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1687642056615!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom Complet" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="phone" id="email" placeholder="Votre Numéro de télépone" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motif" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message à été envoyer avec succès</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>4
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>



<!-- Main JS  -->
<script src="assets/js/main.js"></script>

</body>

</html>

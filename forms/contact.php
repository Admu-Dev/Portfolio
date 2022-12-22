<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'Adrien.muzeaux@gmail.com';

  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];


  echo "<script>console.log('{$contact->to}' );</script>";
  echo "<script>console.log('{$contact->from_name}' );</script>";
  echo "<script>console.log('{$contact->from_email}' );</script>";
  echo "<script>console.log('{$contact->subject}' );</script>";
  echo "<script>console.log('-------------------------------------' );</script>";

  echo "<script>console.log('{$receiving_email_address}' );</script>";
  echo "<script>console.log('{$_POST['name']}' );</script>";
  echo "<script>console.log('{$_POST['email']}' );</script>";
  echo "<script>console.log('{$_POST['subject']}' );</script>";

  echo "<script>console.log('-------------------------------------' );</script>";
  echo "<script>console.log('-------------------------------------' );</script>";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

  ?>
  <?php

 // $receiving_email_address = 'Adrien.muzeaux@gmail.com';
  
 // $to = $receiving_email_address;
  // Sujet
 // $subject = $_POST['subject'];


 // $from_name = $_POST['name'];
 // $from_email = $_POST['email'];



 // $add_message( $_POST['name'], 'From');
 // $add_message( $_POST['email'], 'Email');
 // $add_message( $_POST['message'], 'Message', 10);

      // message
   //   $message = $add_message;
 
      // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    //  $headers[] = 'MIME-Version: 1.0';
   //   $headers[] = 'Content-type: text/html; charset=iso-8859-1';
 
      // En-têtes additionnels
    //  $headers[] = 'To: Adrien Muzeaux';
    //  $headers[] = 'From:' + $from_name + $from_email;
//
   //   if ( mail($to, $subject, $message, implode("\r\n", $headers))) {
   //     $info = "Nous avons envoyé un code de vérification à votre adresse e-mail - $mail";
   //     echo $info;
  //  } else {
    //  echo "Échec lors de l'envoi du code !";
 //   }
//?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adrien - Portfolio</title>
  <meta name="Content-Language" content="fr">
  <meta name="title" content="Adrien - Portfolio">
  <meta name="description" content="Basé à Paris, je me concentre sur la cybersécurité, le design interactif et l'expérience utilisateur">    
  <meta name="Identifier-Url" content="https://admu-dev.github.io/Portfolio/"><!-- Pas oublier de Mettre le lien du site !!!!!!!!! -->
  <meta name="keywords" content="cybersécurité, portfolio, Adrien - Portfolio, Adrien, admu">
  <meta name="Subject" content="Porfolio">
  <meta name="Copyright" content="Adrien - Portfolio">
  <meta name="Author" content="Adrien M.">
  <meta name ="robots" content ="all">
  <meta name="Rating" content="general">
  <meta name="Distribution" content="global">
  <meta name="Category" content="Porfolio">

  <meta property="og:type" content="web site">
  <meta name="title" property="og:title" content="Adrien - Portfolio">
  <meta property="og:site_name" content="Adrien - Portfolio">
  <meta property="og:url" content="https://admu-dev.github.io/Portfolio/"> <!-- Pas oublier de Mettre le lien du site !!!!!!!!! -->
  <meta property="og:description" content="Basé à Paris, je me concentre sur la cybersécurité, le design interactif et l'expérience utilisateur">    
  <meta name="image" property="og:image" content="https://admu-dev.github.io/Portfolio/assets/img/bg.webp"><!-- Pas oublier de Mettre le lien du site juste avant le lien de l'image-->
  <meta property="og:image:width" content="3893">
  <meta property="og:image:height" content="2494">

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@Admu" />
  <meta name="twitter:creator" content="@Admu" />
  <meta name="twitter:title" content="Adrien - Portfolio">
  <meta name="twitter:description" content="Basé à Paris, je me concentre sur la cybersécurité, le design interactif et l'expérience utilisateur">
  <meta name="twitter:image" content="https://admu-dev.github.io/Portfolio/assets/img/bg.webp" /><!-- Pas oublier de Mettre le lien du site juste avant le lien de l'image-->
  <meta name="twitter:url" content="https://admu-dev.github.io/Portfolio/" /><!-- Pas oublier de Mettre le lien du site !!!!!!!!! -->

  <link rel="canonical" href="https://admu-dev.github.io/Portfolio/" /><!-- Pas oublier de Mettre le lien du site !!!!!!!!! -->

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
  rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../assets/img/profile-img.webp" alt="Image de Profile" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="../index.html">Adrien Muzeaux</a></h1>
        <div class="social-links mt-3 text-center">
          <a aria-label="Lien qui mène au github du développeur" rel="noopener" href="https://github.com/Admu-Dev" target="_blank" class="twitter"><i class="bx bxl-github"></i></a>
          <a aria-label="Lien qui mène au facebook du développeur" rel="noopener" href="https://www.facebook.com/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a aria-label="Lien qui mène a l'instagram du développeur"rel="noopener" href="https://www.instagram.com" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a aria-label="Lien qui mène au twitter du développeur" rel="noopener" href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a aria-label="Lien qui mène au linkedin du développeur" rel="noopener" href="https://fr.linkedin.com" target="_blank" lass="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="../index.html#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="../index.html#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="../index.html#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="../index.html#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="../index.html#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="../index.html#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Email</h2>
          <ol>
            <li><a href="../index.html">Home</a></li>
            <li>Portfolio Email</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> Adrien</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
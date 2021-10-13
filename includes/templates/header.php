<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>GDLWebCamp</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Estilos css del sitio -->
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="stylesheet" href="/build/css/app.css.map" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="/FontAwesome/all.css" />
    <link rel="stylesheet" href="/FontAwesome/all.min.css" />

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap"/>

    <!-- Mapa con Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <meta name="theme-color" content="#fafafa" />

    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0d68b833e9944ffc540636dd4/4d8710adfdcca411404912518.js");</script>
  </head>

  <?php 
    $file = basename($_SERVER['PHP_SELF']);
    $page = str_replace('.php', '', $file);
  ?>

  <body class="<?php echo $page; ?>">
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <header class="site-header">
      <div class="hero">
        <div class="header-content container">
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
          <div class="event-info">
            <p class="fecha"><i class="fas fa-calendar-alt"></i>10-12 Dic</p>
            <p class="city"><i class="fas fa-map-marker-alt"></i>San Luis, Argentina</p>
          </div>
          <h1 class="site-name">GDLWebCamp</h1>
          <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
        </div>
      </div>
    </header>

    <div class="nav-bar">
      <div class="container intSection">
        <div class="logo-container">
          <a href="/index.php">
            <div class="logo"><img src="/build/img/logo.svg" alt="Logo GDLWebCamp" /></div>
          </a>
          <i id="btn-menu" class="fas fa-bars btn-menu"></i>
        </div>
        <nav id="principal-nav" class="principal-nav">
          <a href="/conferences.php">Conferencia</a>
          <a href="/calendary.php">Calendario</a>
          <a href="/guests.php">Invitados</a>
          <a href="/reservations.php">Reservaciones</a>
        </nav>
      </div>
    </div>

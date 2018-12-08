<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />


  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'|| $pagina=='index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }
    elseif($pagina=='conferencia'){
      echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
  ?>


</head>

<body class="<?php echo $pagina?>">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->


  <header class="site_header">

    <div class="hero">

      <div class="contenido_header">

        <nav class="redes_sociales">

          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>

        </nav>

        <div class="informacion_evento">
          <div class="clearfix">
            <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>CDMX, Polanco</p>
          </div>

          <h1 class="nombre_sitio">GdlgWebCamp</h1>
          <p class="slogan">La conferencia de <span>diseño Web</span></p>
        </div>
      </div>

    </div><!-- hero -->

  </header>

  <div class="barra">
    <div class="contenedor clearfix ">
      <div class="logo">

        <a href="index.php"><img src="img/logo.svg" alt="logo pagina"></a>
      </div>
      <div class="menu_movil">
        <span></span>
        <span></span>
        <span></span>

      </div>
      <nav class="navegacion_principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div><!-- Contenedor -->
  </div><!-- Barra -->

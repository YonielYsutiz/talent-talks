<!DOCTYPE html>
<html lang="es" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Haz parte del Primer Festival que conecta al talento TI con la industria que lo requiere.">
<meta name="author" content="">
<meta name="keywords" content="talentfest talent fest mintic ">
<title>Talent Fest - Kit</title>

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/owl.transitions.css" rel="stylesheet" />
<link href="../css/owl.carousel.css" rel="stylesheet" />
<link href="../css/owl.theme.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />
<!-- <link href="css/style2.css" rel="stylesheet" /> -->
<link href="../css/responsive.css" rel="stylesheet" />

</head>

<body>
<div class="se-pre-con"></div>
<section id="home" class="home drawer drawer--left">
  <div class="banner-title ">
    <center>
    <img src="../images/logo_talent_fest.png" width="350" alt="logo">
    </center>

    <div class="event-schedule">

    <span class="event-date"></i>KIT TALENT FEST</span> </div>
    <p class="event-description" style="padding: 0 3.5em;">El Kit Digital Talent Fest trae innumerables beneficios. Para poderlo descargar tendras que tener acumulados 100 puntos. Estos puntos se logran viendo 3 videos de Talent Talks, destapando al menos 3 ofertas laborales de tu interes y compartiendo tu experiencia Talent Fest en redes sociales</p>
    @guest
        <p class="event-description" style="padding: 0 3.5em;">Actualmente posees: 00 puntos</p>
    @else
        @if (Auth::user()->getPoints(Auth::user()->id) >= 100)
            <p class="event-description" style="padding: 0 3.5em;">Actualmente posees: {{ Auth::user()->getPoints(Auth::user()->id) }} puntos</p>
            <div class="register-now-section">  <a href="#" class="register-now-btn">Descargar Kit<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        @else
            <p class="event-description" style="padding: 0 3.5em;">Actualmente posees: {{ Auth::user()->getPoints(Auth::user()->id) }} puntos</p>
        @endif
    @endguest
    <div class="top-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"> <a href="" class="fa fa-instagram" aria-hidden="true"></a> 
    </div>
  </div>

  <nav class="navbar navbar-default main-menu hidden-xs menu"  >
    <div class="container-fluid">
       <div class="header-left">
            <p class="no-margin"><strong>Talent Fest</strong></p>
          </div>
          <div class="header-right">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main" data-target-2=".side-collapse-container"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav">
          <li><a href="/">Inicio</a></li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <div class="mobile-menu hidden-sm hidden-md hidden-lg">
    <div class="drawer-container">
      <div class="drawer-navbar-header">
        <button type="button" class="drawer-toggle drawer-hamburger"> <span class="sr-only">toggle navigation</span> <span class="drawer-hamburger-icon"></span> </button>
      </div>
      <nav class="drawer-nav" >
      <div class="header-left">
            <p class="no-margin"><strong>Talent Fest</strong></p>
          </div>
         <ul class="drawer-menu">
          <li><a href="/" class="drawer-menu-item">Inicio</a></li>
          <li><a href="/#talent-fest-talks" class="drawer-menu-item">Talent Talks</a></li>
          <li><a href="/#talent-fest-tour" class="drawer-menu-item">Talent Tour</a></li>
          <li><a href="/vacants/create" class="drawer-menu-item">Empresas</a></li>
          <li><a href="/vacants" class="drawer-menu-item">Vacantes</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<div id="elements" class="bottom-social" style="background-color: #f2f2f2;">
  <img width="300px" src="../images/sponsors/logo_mintic.png" alt="MinTIC">
  <img width="200px" style="margin: 0 25px 0 25px;" src="../images/sponsors/logo_tecnalia.png" alt="Tecnalia">
  <img width="250px" src="../images/sponsors/logo_cymetria.png" alt="Cymetria">
</div>
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="footer-left">
            <p class="no-margin"><strong>Talent Fest Logo</strong></p>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="footer-right hidden-xs">
            <ul>
              <li><a href="/">Inicio</a><span>|</span></li>
              <li><a href="/#talent-fest-talks">Talent Talks</a><span>|</span></li>
              <li><a href="/#talent-fest-tour">Talent Tour</a><span>|</span></li>
              <li><a href="/vacants/create">Empresas</a><span>|</span></li>
              <li><a href="/vacants">Vacantes</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="elements" class="bottom-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> <a href="" class="fa fa-instagram" aria-hidden="true"></a> </div>
  <div class="footer-bottom">
    <div class="copytight">
      <p>&copy; 2022 Talent Fest - Todos los derechos reservados</p>
    </div>
  </div>
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a> </footer>
<!-- .Footer --> 

<!-- attach JavaScripts --> 
<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
<!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>  -->

    <script>
      function initMap() {
        var uluru = {lat: 4.642280, lng: -74.079663};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom:14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnBukuPx3MQ3bJLLD-e4NKHL56g1nsRXM&callback=initMap"> </script>
<script src="../js/iscroll.js"></script> 
<script src="../js/menu.js" charset="utf-8"></script> 
<script src="../js/owl.carousel.min.js"></script> 
<script src="../js/classie.js"></script> 
<script type="text/javascript" src="../js/custom-menu.js"></script>
<script type="text/javascript" src="../js/eventpremium-script.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>
</html>
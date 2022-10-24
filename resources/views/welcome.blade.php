<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Haz parte del Primer Festival que conecta al talento TI con la industria que lo requiere.">
<meta name="author" content="">
<meta name="keywords" content="talentfest talent fest mintic ">
<title>Talent Fest</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
 
<!-- attach CSS styles -->


<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.transitions.css" rel="stylesheet" />
<link href="css/owl.carousel.css" rel="stylesheet" />
<link href="css/owl.theme.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- <link href="css/style2.css" rel="stylesheet" /> -->
<link href="css/responsive.css" rel="stylesheet" />

  <style>
      .card-header {
          background-color: #f25421;
      }

      label {
          color: #000;
      }

      .form-control {
          color: #212529 !important;
      }
      .card-body {
          color: #000;
      }
      .modal-content {
          color: #000;
      }
      .modal-header {
          display: inherit;
      }
      .small-now-btn {
            background-color: #f25421;
            border-radius: 50px;
            color: #fff;
            display: inline-block;
            font-family: "Montserrat-bold";
            font-size: 10px;
            margin-left: 20px;
            padding: 10px 20px;
            text-transform: uppercase;
            border-width: 0px;
        }
  </style>
  <script>
      function sendViewVideo(slug_video, id_user) {
        const url = 'http://127.0.0.1:8000/api/UsersViewVideo';
        const data = {
          user_id: parseInt(id_user),
          slug_video: slug_video
        }
        const params = {
          headers: {
            "Content-Type": "application/json;",
            "Accept": "application/json;",
            "Access-Control-Allow-Origin": "*",
          },
          body: JSON.stringify(data),
          method: "POST"
        };

        fetch(url, params).then(function(response) {
          return response.json();
        }).then(function(data) {
          console.log(data);
        }).catch(function(error) {
          console.log(error.message);
        });

      }
  </script>
</head>

<body>
<div class="se-pre-con"></div>
<!--  BODY PAGE CONTENT --> 
<!-- navigation panel --> 
<!-- first section - Home -->
<section id="home" class="home drawer drawer--left">
  <div class="banner-title ">
    <!--<h1><strong>Talent Fest</strong></h1>-->

    <center>
        <img src="../images/logo_talent_fest.png" width="350" alt="logo">    
    </center>

    <div class="event-schedule"> 

    <span class="event-date"><i class="fa fa-flag" aria-hidden="true"></i> 17 Noviembre</span> <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Medellín</span> </div>
    <p class="event-description" style="padding: 0 3.5em;">Se parte del primer festival que conecta talentos tecnológicos con empresas innovadoras.</p>
    <!-- <div class="register-now-section">  <a href="#" class="register-now-btn">Enterate de todo <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div> -->
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
          <li><a href="https://www.talent-fest.com/">Inicio</a><span>|</span></li>
          <li><a href="#talent-fest-talks">Talent Talks</a><span>|</span></li>
          <li><a href="#talent-fest-tour">Talent Tour</a><span>|</span></li>
          <li><a href="/vacants/create">Empresas</a><span>|</span></li>
          <li><a href="/vacants">Vacantes</a></li>
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
           <li><a href="https://www.talent-fest.com/" class="drawer-menu-item">Inicio</a></li>
          <li><a href="#talent-fest-talks" class="drawer-menu-item">Talent Talks</a></li>
          <li><a href="#talent-fest-tour" class="drawer-menu-item">Talent Tour</a></li>
          <li><a href="/vacants/create" class="drawer-menu-item">Empresas</a></li>
          <li><a href="/vacants" class="drawer-menu-item">Vacantes</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- /first section --> 


<!-- second section - About -->
<section id="conference" class="conference">
  <div class="container">
    <div class="row">
      <!--<h2><strong> Indicadores</strong></h2>-->
      <div class="count-down col-sm-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-sm-12 col-sm-12 col-xs-12">
            <div class="count-day"><span class="count-number" data-count="10" id="day">0</span><span class="count-label">ciudades</span></div>
            <div class="count-day"><span class="count-number" data-count="10" id="hours">0</span><span class="count-label">eventos</span></div>
            <div class="count-day"><span class="count-number" data-count="300" id="minutes">0</span><span class="count-label">empresas</span></div>
            <div class="count-day"><span class="count-number" data-count="14000" id="seconds">0</span><span class="count-label">asistentes</span></div>
          </div>
        </div>
        <p class="count-down-description">Únete a nuestros eventos híbridos en todo el país. </p>
        <a href="#schedule" class="register-now-btn">Talent Tour <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
    </div>
  </div>
</section>
<!-- /second section --> 

<!-- third section - Services -->
<section id="about" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12" style="text-align:center;">
        <p class="block-title"><strong>TALENT </strong> Fest</p>
        <!--<h3>¿Qué es Talent Fest?</h3>-->
        <p>Talent Fest Colombia 2022 es el festival de empleabilidad y conexión de talentos con la industria TI de la región. Una iniciativa liderada por el Ministerio de Tecnologías de Información y Comunicaciones (MinTIC), Tecnalia y CYMETRIA, líder en proyectos de talento y empleabilidad digital.</p>
      </div>
    </div>
  </div>
</section>
<!-- /third section --> 



<!-- Why Choose Us -->
<section id="our-conference-sec">
  <div class="conference-heading-bg white-heading">
      <div class="container">
          <div class="row text-center">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <!-- <span style="color: black; font-family: Montserrat-SemiBold;">Beneficios</span>-->
                  <h2 font-family: Montserrat-SemiBold;">Talent Fest 2022 te trae muchos beneficios:
</h2>
                  <hr>
              </div>
          </div>
      </div>
  </div>
  <div class="conference-list-bg">
      <div class="container">
          <div class="row">

              <div class="confrence-bg">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                          <div class="confrence-col-inn">
                              <div class="confrence-title">
                                  <i class="fa fa-check icon-box" aria-hidden="true"></i>
                                  <h3 style="color: black; font-family: Montserrat-SemiBold;">Acceso a contenidos de alto valor
</h3>
                              </div>
                              <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Podras acceder a conferencias, charlas y contenidos por demanda sobre habilidades blandas y habilidaes para empleabilidad.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                          <div class="confrence-col-inn">
                              <div class="confrence-title">
                                  <i class="fa fa-check icon-box" aria-hidden="true"></i>
                                  <h3 style="color: black; font-family: Montserrat-SemiBold; ">Kit de búsqueda laboral </h3>
                              </div>
                              <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Tendrás acceso al kit de busqueda laboral el cual te dará pautas y recursos invaluables para encontrar el empleo de tus sueños.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                          <div class="confrence-col-inn">
                              <div class="confrence-title">
                                  <i class="fa fa-check icon-box" aria-hidden="true"></i>
                                  <h3 style="color: black; font-family: Montserrat-SemiBold;">Acceso a vacantes laborales</h3>
                              </div>
                              <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Tenemos las mejores ofertas laborales de la industria nacional e internacional.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                          <div class="confrence-col-inn">
                              <div class="confrence-title">
                                  <i class="fa fa-check icon-box" aria-hidden="true"></i>
                                  <h3 style="color: black; font-family: Montserrat-SemiBold;">Networking </h3>
                              </div>
                              <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Podras realizar networking no solo entre empresas sino con otros talento como tu.</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
</section>
<!-- /End Why Choose Us -->




<section id="about" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12" style="text-align:center;">
        <p class="block-title"><strong>Kit Talent Fest</strong></p>
        <h3>¿Qué es el Kit De Empleabilidad?</h3>
        <p style="font-size: 20px; max-width:500px; margin: 0 auto;">El kit contiene una guía práctica para que los participantes encuentren su próximo empleo. Contiene increibles beneficios y claves para alcanzar el éxito en tu proceso de vinculación laboral.
        </p>
        <div class="register-now-section">  <a href="/kit" class="register-now-btn">Descargar Kit</a> </div>
      </div>
    </div>
  </div>
</section>

<!-- fourth section -->
<section class="speakers" id="talent-fest-talks">
  <div class="container">
    <div class="row">
      <h2 class="block-title"><strong>Talent Talks</strong></h2>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta">
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-1.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> <a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i></a>  </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-2.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_1', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-3.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_2', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-4.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_3', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-5.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_4', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-6.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_5', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="speaker-block"> <img src="images/speaker-7.jpg" alt="Event Premium" class="img-responsive">
          <div class="speaker-details"> <span class="speaker-name">Liderazgo Digital</span> <span class="speaker-designation">Luis Martínez</span>
            <p class="speaker-meta">Evoluciona tu perfil profesional de manera práctica y flexible.</p>
            <div class="social-meta"> 
              @guest
                <a href="#play-youtube" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @else
                <a href="#play-youtube" onclick="sendViewVideo('liderazgo_digital_6', '{{ Auth::user()->id }}')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- <p class="text-center"><a href="speakers.html" class="register-now-btn styles-button">Speakers Styles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p> -->
  </div>
</section>
<section id="schedule" class="schedule" id="talent-fest-tour">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p class="block-title"><strong>Talent Tour</strong></p>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#menu0">Bogotá</a></li>
          <li><a data-toggle="tab" href="#menu1">Soacha</a></li>
          <li><a data-toggle="tab" href="#menu2">Medellín</a></li>
          <li><a data-toggle="tab" href="#menu3">Cali</a></li>
          <li><a data-toggle="tab" href="#menu4">B/quilla</a></li>
          <li><a data-toggle="tab" href="#menu5">B/manga</a></li>
          <li><a data-toggle="tab" href="#menu6">Cartagena</a></li>
          <li><a data-toggle="tab" href="#menu7">Manizales</a></li>
            <li><a data-toggle="tab" href="#menu8">Pereira</a></li>
            <li><a data-toggle="tab" href="#menu9">Ibagué</a></li>
            <li><a data-toggle="tab" href="#menu10">Tunja</a></li>
        </ul>
        <div class="tab-content">
          <div id="menu0" class="tab-pane fade active in">
            <div class="speakers-list">
              <div class="col-sm-3  col-xs-12  left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" alt="Event Premium" class="img-responsive"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="#" class="fa fa-facebook" aria-hidden="true"></a> <a href="#" class="fa fa-twitter" aria-hidden="true"></a> <a href="#" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9  col-xs-12 ">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Bogotá.</h3>
                  <p class="topic-description">En Bogotá se sentirán truenos cargados de innovación. La ciudad capital será sede del Talent Fest Tour, uno de los eventos más esperados por talentos TI y empresarios. </p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> El Cubo de Colsubsidio </span> 
                  </div>
                
                </div>
              </div>
            </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image-1.png" alt="Event Premium" class="img-responsive"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Soacha</h3>
                  <p class="topic-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Coliseo Soacha </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu2" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image-2.png" alt="Event Premium" class="img-responsive"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a></a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Medellín</h3>
                  <p class="topic-description">La ciudad más innovadora de Colombia es una de las ciudades elegidas para conectar talentos de la industria TI con las empresas de la región. </p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> C4TA, Centro de Cuarta Revolución Industrial </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu3" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Cali</h3>
                  <p class="topic-description">En Cali no solo se baila salsa, también se disfruta con tecnología e innovación. Por eso será una de las sedes del Talent Fest Tour. Agéndate.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu4" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Barranquilla</h3>
                  <p class="topic-description">Curramba la bella ahora no solo celebra su carnaval, ahora también el festival de talento tecnológico más importante del país. Agéndate en tu ciudad.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu5" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Bucaramanga</h3>
                  <p class="topic-description">La ciudad bonita es otra de las sedes del Talent Fest Tour. La hermosa ciudad de los parques se vestirá de tecnología para una cita entre talentos y empresarios de la industria.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu6" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Cartagena</h3>
                  <p class="topic-description">La Heróica, ciudad de grandes eventos, será una de las sedes del gran Talent Fest 2022. Todo el talento TI de la región se conectará con las empresas que los requieran.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Casa Marquez </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu7" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Manizales</h3>
                  <p class="topic-description">En Manizales se abrirán las puertas para los desarrolladores de software, programadores y talentos TI que quieren conectar con las empresas de su región para hacer proyectos innovadores. Regístrate.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu8" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Pereira</h3>
                  <p class="topic-description">La capital del Eje Cafetero no solo huele a café, también a tecnología. Por eso, los miles de talentos TI de la región mostrarán su talento durante el Talent Fest Tour. Prográmate.</p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu9" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Ibagué</h3>
                  <p class="topic-description">La ciudad musical de Colombia albergará al talento TI y a las empresas que quieren conectar con ellos para cubrir sus necesidades. Inscríbete. </p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="menu10" class="tab-pane fade">
            <div class="speakers-list">
              <div class="col-sm-3 col-xs-12 left-section">
                <div class="col-sm-12 col-xs-12">
                  <div class="img-section"> <img src="images/speaker-round-image.png" class="img-responsive" alt="Event Premium"> </div>
                  <div class="speaker-social">
                    <span class="speaker-loaction" ><i class="fa fa-link" style="color: white;" aria-hidden="true"></i> Registro al evento</span>
                  </div>
                  <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </div> -->
                </div>
              </div>
              <div class="col-sm-9 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <h3 class="speaker-topic">Tunja</h3>
                  <p class="topic-description">De ser la cuna de la independencia, a ser una de las ciudades con mayor proyección de talentos tecnológicos. Por eso, esta ciudad será protagonista en el Talent Fest Tour. Reserva tu cupo. </p>
                  <div class="speaker-schedule">
                    <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                    <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am - 6:00pm</span> 
                    <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> UNAB, Auditorio Mayor </span> 
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <p class="text-center"><a href="schedules.html" class="register-now-btn styles-button">Schedules Styles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p> -->
  </div>
</section>
<!-- /fourth section -->



<!-- Fifth section - sponsors -->
<section  class="sponsors white">
  <div class="container">
    <div class="row">
        <h2 class="block-title"><strong>Aliados</strong></h2>
      <!-- <small class="column">Aliados</small> -->
      <div class="sponsors-logo">
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-graphic-unique.png" alt="Creative Graphic Unique" class="img-responsive"> </div>
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/graphic-design-genuine.png" alt="Graphic Design Genuine" class="img-responsive"> </div>
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-special.png" alt="Creative Special" class="img-responsive"> </div>
         <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-graphic-unique.png" alt="Creative Graphic Unique" class="img-responsive"> </div>
      </div>
      <div class="sponsors-logo">
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-design-unique.png" alt="Creative Design Special" class="img-responsive"> </div>
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-graphic.png" alt="Creative Graphic" class="img-responsive"> </div>
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/premium.png" alt="Event Premium" class="img-responsive"> </div>
        <div class="col-sm-3 col-xs-3 logo-item"> <img src="images/sponsors/creative-design-unique.png" alt="Creative Design Special" class="img-responsive"> </div>
      </div>
    </div>
  </div>
</section>
<!-- /Fifth section --> 

<!-- Prices -->
<!-- <section id="prices" class="prices">
  <div class="container">
    <div class="row">
      <p class="block-title"><strong>The</strong> Prices</p>
      <div class="col-sm-4 col-md-4 event-priceing">
        <div class="inner-pricing">
          <div class="plan-name">
            <h6>Personal</h6>
            <small>Basic Package</small> </div>
          <div class="plan-price">
            <p class="no-margin"><sup>$</sup>99</p>
          </div>
          <div class="plan-details">
            <ul>
              <li><i class="fa fa-check" aria-hidden="true"></i> Entrance</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Coffe Break</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Lunch</li>
              <li><i class="fa fa-times" aria-hidden="true"></i> Workshop</li>
              <li><i class="fa fa-times" aria-hidden="true"></i> Certificate</li>
            </ul>
            <a href="#" class="register-now-btn">Buy Ticket <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 event-priceing">
        <div class="inner-pricing">
          <div class="best-offer">
            <p class="no-margin">Best Offer</p>
          </div>
          <div class="plan-name">
            <h6 class="best-offer-padding">Business</h6>
            <small>Premium Package</small> </div>
          <div class="plan-price">
            <p class="no-margin"><sup>$</sup>149</p>
          </div>
          <div class="plan-details">
            <ul>
              <li><i class="fa fa-check" aria-hidden="true"></i> Entrance</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Coffe Break</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Lunch</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Workshop</li>
              <li><i class="fa fa-times" aria-hidden="true"></i> Certificate</li>
            </ul>
            <a href="#" class="register-now-btn">Buy Ticket <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 event-priceing">
        <div class="inner-pricing">
          <div class="plan-name">
            <h6>Coporate</h6>
            <small>Best Package</small> </div>
          <div class="plan-price">
            <p class="no-margin"><sup>$</sup>199</p>
          </div>
          <div class="plan-details">
            <ul>
              <li><i class="fa fa-check" aria-hidden="true"></i> Entrance</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Coffe Break</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Lunch</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Workshop</li>
              <li><i class="fa fa-check" aria-hidden="true"></i> Certificate</li>
            </ul>
            <a href="#" class="register-now-btn">Buy Ticket <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="get-in-touch">
      <p class="no-margin">Need additional pricing info? <a href="#">Get in touch</a> </p>
    </div>
  </div>
  <p class="text-center"><a href="price.html" class="register-now-btn styles-button">Price Styles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
</section> -->
<!-- /Prices --> 




<!-- section Talent Fest Tour -->
<section id="about" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12" style="text-align:center;">
        <p class="block-title"><strong>EMPRESAS</strong></p>
        <h3>¿Buscando talento?</h3>
        <p style="font-size: 20px; max-width:500px; margin: 0 auto;">En TALENT FEST encontraras miles de talentos tecnológicos en nuestros eventos híbridos. Registra tus ofertas laborales y nos encargaremos de conectar con el mejor talento de Latam.
        </p>
        <div class="register-now-section">  <a href="https://www.talent-fest.com/empresas" class="register-now-btn">Mas info</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- section Talent Fest Tour --> 




<!-- Testiominals -->
<section id="testiominal" class="testiominals">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <p class="block-title"><strong>Testimonios</strong></p>
        <!-- <h3>What People Say About Our Last Event Camp Premium.</h3> -->
        <div class="owl-testimonial">
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> En Talent Fest 2022 logré aprender todas las habilidades blandas necesarias para complementar mi formación en Mision TIC.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-1.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title">Luis Alfredo Martinez</h4>
                <p class="tm-designation">Programador Full Stack Java</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/22</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Encontrar talento se ha vuelto todo un reto para las empresas. En Qualitas apostamos a los talentos formados por el Ministerio TIC.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title">Mercedes Quintero</h4>
                <p class="tm-designation">CEO Qualitas Team.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/22</span> </div>
            </div>
          </div>
          <!--
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-1.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Kevin Ten</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Sara Pearson</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-1.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Kevin Ten</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Sara Pearson</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
        -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Testiominals --> 

<!-- Subscribe -->
<!-- <section id="subscribe" class="subscribe">
  <div class="container">
    <div class="row">
      <h2 class="block-title"><strong>Subscribe for</strong> Next eventary</h2>
      <div class="subscribe-form">
        <form>
          <div class="input-group margin-bottom-sm col-lg-5 col-md-5 col-sm-12  col-xs-12"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="First Name">
          </div>
          <div class="input-group margin-bottom-sm col-lg-5  col-md-5 col-sm-12  col-xs-12"> <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Email address">
          </div>
          <div class="col-sm-12 col-xs-12">
            <p class="no-margin subscribe-text">We guarantee 100% privacy. Your information will not be shared.</p>
            <a href="#" class="register-now-btn">Get Every Info of Our Next Camp Eventery</a> </div>
        </form>
      </div>
    </div>
  </div>
</section> -->
<!-- /Subscribe --> 

<!-- Contact Us  -->

<!-- /Contact Us --> 

<!-- Bottom Social -->
<!-- Logo Mintic, Tecnalia, Cymetria -->
<div id="elements" class="bottom-social" style="background-color: #f2f2f2;"> 
  <img width="300px" src="images/sponsors/logo_mintic.png" alt="MinTIC">  
  <img width="200px" style="margin: 0 25px 0 25px;" src="images/sponsors/logo_tecnalia.png" alt="Tecnalia">
  <img width="250px" src="images/sponsors/logo_cymetria.png" alt="Cymetria">
</div>
<!-- /Bottom Social --> 

<!-- Footer -->
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
              <li><a href="#talent-fest-talks">Talent Talks</a><span>|</span></li>
              <li><a href="#">Talent Tour</a><span>|</span></li>
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
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
</footer>
<!-- .Footer --> 

<div class="annual-model-box">
  <div class="modal  fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <iframe class="embed-responsive-item" id="ytplayer" src="https://www.youtube.com/embed/5Peo-ivmupE?&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal request authenticated -->
  @include('auth.modal-login')
</div>

<!-- attach JavaScripts --> 
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

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
<script src="js/iscroll.js"></script> 
<script src="js/menu.js" charset="utf-8"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/classie.js"></script> 
<script type="text/javascript" src="js/custom-menu.js"></script>
<script type="text/javascript" src="js/eventpremium-script.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>
</html>
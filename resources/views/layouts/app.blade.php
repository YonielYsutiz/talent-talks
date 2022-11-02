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

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- attach CSS styles -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/owl.transitions.css" rel="stylesheet" />
    <link href="/css/owl.carousel.css" rel="stylesheet" />
    <link href="/css/owl.theme.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />

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
        .modal-content {
            color: #000;
        }
        .modal-header {
            display: inline;
        }
        .well {
            color: #000;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav>
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
                                    <li>
                                        @guest
                                            <a href="/">Inicio</a><span>|</span>
                                        @else
                                            <a href="/home">Inicio</a><span>|</span>
                                        @endguest
                                    </li>
                                    <li><a href="/#talent-fest-talks">Talent Talks</a><span>|</span></li>
                                    <!-- <li><a href="#">Talent Tour</a><span>|</span></li> -->
                                    <li><a href="/vacants/create">Empresas</a><span>|</span></li>
                                    <li><a href="/vacants">Vacantes</a><span>|</span></li>
                                    @guest
                                        @if (Route::has('login'))
                                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a><span>|</span></li>
                                        @endif
                                        @if (Route::has('register'))
                                            <!-- <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
                                        @endif
                                    @else
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); localStorage.removeItem('user_id');
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Salir') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest

                                </ul>
                            </div>
                            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto">

                                </ul>

                                <ul class="navbar-nav ms-auto">
                                    @guest
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="mobile-menu hidden-sm hidden-md hidden-lg">
            <div class="drawer-container">
                <div class="drawer-navbar-header">
                    <button type="button" class="drawer-toggle drawer-hamburger"> <span class="sr-only">toggle navigation</span> <span class="drawer-hamburger-icon"></span> </button>
                </div>
                <nav class="drawer-nav">
                    <div class="header-left">
                        <p class="no-margin"><strong>Talent Fest</strong></p>
                    </div>
                    <ul class="drawer-menu">
                        <li><a href="https://www.talent-fest.com/" class="drawer-menu-item">Inicio</a></li>
                        <li><a href="#talent-fest-talks" class="drawer-menu-item">Talent Talks</a></li>
                        <li><a href="#talent-fest-tour" class="drawer-menu-item">Talent Tour</a></li>
                        <li><a href="https://www.talent-fest.com/empresas" class="drawer-menu-item">Empresas</a></li>
                        <li><a href="https://www.talent-fest.com/vacantes" class="drawer-menu-item">Vacantes</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- </section> -->
        <!-- /first section -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>



    <!-- attach JavaScripts -->
    <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script>
    <!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>  -->

    <script>
        function initMap() {
            var uluru = {
                lat: 4.642280,
                lng: -74.079663
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnBukuPx3MQ3bJLLD-e4NKHL56g1nsRXM&callback=initMap"> </script>
    <script src="/js/custom-login.js"></script>
    <script src="/js/iscroll.js"></script>
    <script src="/js/menu.js" charset="utf-8"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/classie.js"></script>
    <!-- <script type="text/javascript" src="/js/bootstrap.min.js"></script> -->
    <!-- <script type="text/javascript" src="/js/custom-menu.js"></script> -->
    <script type="text/javascript" src="/js/eventpremium-script.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
</body>

</html>
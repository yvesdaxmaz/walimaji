<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>

<body class="form-background">

<header id="map-header" class="map-header">
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper teal z-depth-3">
                <div class="container">
                    @guest

                    @else
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
                            <i class="material-icons">menu</i>
                        </a>
                    @endguest

                        <a href="{{route('home')}}" class="brand-logo">WalimajI</a>

                    @guest
                        <ul class="right">
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown-login">
                                    <i class="material-icons right">person_pin</i></a></li>
                        </ul>
                        <ul id="dropdown-login" class="dropdown-content">
                            <li><a href="{{route('login')}}">Connexion</a></li>
                            <li><a href="{{route('register')}}">Inscription</a></li>
                        </ul>

                    @else
                            <ul class="right">{{ Auth::user()->name }}
                                <li><a class="dropdown-button" href="#!" data-activates="dropdown-login">
                                        <i class="material-icons right">person_pin</i></a></li>
                            </ul>
                            <ul id="dropdown-login" class="dropdown-content">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                            </ul>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
    <!--/////////////////////////////// map header here ///////////////////////////////-->


    @guest

    @else
        <!--////////////////////////////////////// maps tab /////////////////////////////////////////////-->
            <div class="row col s12" style="margin-bottom: 0;">
                <ul class="tabs grey darken-4">
                    <div class="container">
                        <li class="tab col s3"><a href="#tab-map1" class="active">Traders</a></li>
                        <li class="tab col s3"><a href="#tab-map2"> Producteurs</a></li>
                        <li class="tab col s3"><a href="#tab-map3">Fournisseurs</a></li>
                        <li class="tab col s3"><a href="#tab-map4">Transformateur</a></li>
                    </div>
                </ul>
            </div>
            <!--////////////////////////////////////// maps tab /////////////////////////////////////////////-->
            <ul id="slide-out" class="side-nav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="../../images/default-cover.jpg" class="responsive-img">
                        </div>
                        <a href="#!user">
                            <img class="circle" src="../../images/profile.png">
                        </a>
                        <a href="#!name">
                            <span class="white-text name">username</span>
                        </a>
                        <a href="#!email">
                            <span class="white-text email">user@mail.com</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">person</i>mon profile</a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">show_chart</i> Mes activités</a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">maps</i> Carte</a>
                </li>
                <li>
                    <a href="#!">
                        <i class="material-icons">settings</i>Paramètres
                    </a>
                </li>
            </ul>
            <!--////////////////////////////////////// sidebar /////////////////////////////////////////////-->
    @endguest
</header>

<main>
    @yield("content")
</main>

@include("includes.default-footer")
</body>
</html>

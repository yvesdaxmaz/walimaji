<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>walimaji maps</title>

    <link rel="stylesheet" href="{{ asset("assets/css/style.css")  }}">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{asset("assets/leaflet/dist/leaflet.css")}}"/>
    <script src="{{"assets/leaflet/dist/leaflet.js"}}"></script>
</head>

<body>
<!--/////////////////////////////// map header here ///////////////////////////////-->
<header id="map-header" class="map-header">
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper teal z-depth-3">
                <div class="container">
                    <a href="index.html" class="brand-logo">WalimajI</a>



                {{--<!--@if(!user.connected === true)-->--}}
                    <ul class="right">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown-login">
                                <i class="material-icons right">person_pin</i></a></li>
                    </ul>
                    <ul id="dropdown-login" class="dropdown-content">
                        <li><a href="{{route('login')}}">Connexion</a></li>
                        <li><a href="{{route('register')}}">Inscription</a></li>
                    </ul>
                {{--<!--@endif-->--}}
                </div>
            </div>
        </nav>
    </div>
    <!--/////////////////////////////// map header here ///////////////////////////////-->


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


    <!--////////////////////////////////////// sidebar /////////////////////////////////////////////-->
{{--<!--@if(user.connected === true)-->--}}

    <!--////////////////////////////////////// sidebar /////////////////////////////////////////////-->
</header>
<main>
    <!--//////////////////////////////////////////  maps should be generated here///////////////////////////////-->
    <div id="tab-map1">
        <div class="map-container z-depth-3">
            <div class="map-container-content" id="map1" style="width: 100%; height: 550px"></div>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map2" class="col s12">
        <div class="map-container z-depth-3">
            <div class="map-container-content" id="map2" style="width: 100%; height: 550px"></div>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map3" class="col s12">
        <div class="map-container z-depth-3">
            <div class="map-container-content" id="map3" style="width: 100%; height: 550px"></div>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map4" class="col s12">
        <div class="map-container z-depth-3">
            <div class="map-container-content" id="map4" style="width: 100%; height: 550px"></div>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////  maps should be generated here///////////////////////////////-->
</main>
<!-- //////////////////////////////////// footer here //////////////////////////////////////////// -->
<footer class="page-footer transparent">
    <div class="parallax-container valign-wrapper map-banner" style="background: url('../../images/walimaji.jpg');">
        <div class="container map-banner-content">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="icon-block">
                            <h4 class="white-text hero-title">A propos</h4>
                            <p class="light white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Adipisci aperiam consequuntur cum
                                cupiditate dolores ducimus earum eligendi, est, in labore molestiae nostrum officiis
                                perspiciatis possimus quis rem reprehenderit sed ullam! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Eaque inventore tempore assumenda deleniti, ea alias blanditiis
                                delectus,
                                fugiat asperiores a cumque neque nobis labore officia eveniet nihil, possimus libero
                                explicabo? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, suscipit!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-banner-overlay"></div>
    </div>
    <div class="footer-copyright grey darken-4">
        <div class="container">
            © 2018 Copyright walimaji.org
            <a class="grey-text text-lighten-4 right" href="https://github.com/itotafrica/walimaji">code source</a>
        </div>
    </div>
</footer>



<script src="{{ asset("assets/js/bin/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/bin/materialize.min.js")  }}"></script>
<script src="{{ asset("assets/js/bin/app.init.js") }}"></script>
<script>
    var trader = JSON.parse( '<?php echo $list_trader ?>' );
    var producer = JSON.parse( '<?php echo $list_producer ?>' );
    var provider = JSON.parse( '<?php echo $list_provider ?>' );
    var transformer = JSON.parse( '<?php echo $list_transformer ?>' );
</script>
<script src="{{ asset("assets/js/bin/map.js") }}"></script>

</body>

</html>

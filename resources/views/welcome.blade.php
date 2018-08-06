<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Walimaji | Walimaji.org</title>
</head>

<body>

<main>
    <div class="hero-container grey darken-4">
        <div class="parallax-container section no-pad-bot valign-wrapper">
            <div class="container">
                <h1 class="header center white-text hero-title">Walimaji</h1>
                <div class="row center">
                    <h5 class="header col l6 offset-l3 s12 m12 light white-text">
                        Plateforme qui optimise la chaine de valeur agroalimentaire en résolvant l’asymétrie
                        d’information entre ses différents acteurs.</h5>
                </div>
                <div class="row center">
                    <a href="#" id="download-button"
                       class="btn-floating btn-large waves-effect waves-light teal">
                        <i class="material-icons">location_on</i>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</main>


<footer class="page-footer transparent">
    <div class="valign-wrapper map-banner" style="background: url({{ asset("images/walimaji.jpg")  }});">
        <div class="container map-banner-content">
            <div class="section">
                <div class="row">
                    <div class="col s12 m4 center-align">
                        <div class="icon-block">
                            <h2 class="white-text">
                                <i class="material-icons medium">shopping_cart</i>
                            </h2>
                            <h5 class="white-text">Speeds up development</h5>
                            <p class="light white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Adipisci aperiam consequuntur cum
                                cupiditate dolores ducimus earum eligendi, est, in labore molestiae nostrum officiis
                                perspiciatis possimus quis rem reprehenderit sed ullam!</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div class="icon-block">
                            <h2 class="white-text">
                                <i class="material-icons medium">maps</i>
                            </h2>
                            <h5 class="center white-text">User Experience Focused</h5>

                            <p class="light white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus, aut consequatur distinctio
                                dolore dolorem earum explicabo facere facilis, inventore ipsa itaque nam omnis pariatur
                                possimus rerum sequi similique sunt voluptatibus.</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div class="icon-block">
                            <h2 class="center white-text">
                                <i class="material-icons medium">location_on</i>
                            </h2>
                            <h5 class="center white-text">Easy to work with</h5>

                            <p class="light white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                                aperiam architecto aspernatur
                                consequuntur cumque dolor enim excepturi, exercitationem id itaque labore laboriosam
                                minus non numquam quis sint tempore, unde voluptatem?</p>
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
<script src="{{ asset("assets/js/bin/materialize.min.js") }} "></script>
<script src="{{ asset("assets/js/bin/app.init.js") }}"></script>
</body>

</html>

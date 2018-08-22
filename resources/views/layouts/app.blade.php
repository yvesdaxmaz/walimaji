<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include("includes.default-style")

    {{--///////// specific page ressources //////////--}}
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <b>W</b>LJ</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <b>WALI</b>MAJI</span>
            </a>
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ url('/') }}">Carte</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">S'indentifier <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('login') }}">Connexion</a></li>
                                    <li><a href="{{ route('register2') }}">Inscription</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('password.request') }}">Mot de passe oublié ?</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search" action="" method="GET">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="q" class="form-control" id="navbar-search-input" placeholder="Recherches...">
                            </div>
                        </form>
                    </div>
                </div>
        </header>
        @yield('content')
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>


<!--/// !!! Important -- import the background on the body ///-->

<body class="form-background">

<main>
    <div class="container">
        <div class="row col l4 m4 s12">
            <div class="form-title center-align">
                <h2 class="hero-title">
                    <a href="#" class="white-text">Walimaji</a>
                </h2>
                <p class="white-text light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut eos expedita facere, fugit
                    pariatur! At,<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut eos,

                </p>
            </div>

            <div class="card-panel z-depth-2 hoverable animated slideInLeft" id="loginBox">
                <form action="{{ route('login') }}" method="post" aria-label="{{ __('Login') }}" autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="input-field col s12">
                            <label for="email">email</label>
                            <input type="email" name="email" id="email"
                                   class="validate {{ $errors->has('email') ? ' invalid' : '' }}"
                                   value="{{ old('email') }}">
                            <span class="helper-text red-text">
                                 @if ($errors->has('email'))
                                    <strong>{{ $errors->first('email') }}</strong>
                                @endif
                            </span>
                        </div>


                        <div class="input-field col s12">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password"
                                   class="validate {{ $errors->has('email') ? ' invalid' : '' }}">
                            <span class="helper-text red-text">
                                @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row col s12" id="cookieOptions">
                            <input type="checkbox" class="filled-in teal"
                                   {{ old('remember') ? 'checked' : '' }} id="remember" name="remember" value='1'/>
                            <label for="remember">Rester connecté</label>
                        </div>

                        <div class="col s12" id="connectOptions">
                            <button type="submit" class="btn btn-flat waves-effect teal white-text" id="connect">
                                Connexion
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <a href="{{ route("register_") }}">Créer un compte</a>
                            <a href="{{ route('password.request') }}" class="forgot">Mot de passe oublié</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>


<!-- ////////////////////////////// footer here /////////////////////////////////////////////////// -->
<footer class="page-footer transparent">
    <div class="footer-copyright transparent">
        <div class="container">
            © 2018 Copyright walimaji.org
            <a class="grey-text text-lighten-4 right" href="https://github.com/itotafrica/walimaji">code source</a>
        </div>
    </div>
</footer>
<script src=../../assets/js/bin/jquery.min.js></script>
<script src="../../assets/js/bin/materialize.min.js"></script>
<script src="../../assets/js/bin/app.init.js"></script>
<!-- ////////////////////////////// footer here /////////////////////////////////////////////////// -->
</body>

</html>
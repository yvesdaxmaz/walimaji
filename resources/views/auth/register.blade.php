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
                    <a href="{{ route('welcome') }}" class="white-text">Walimaji</a>
                </h2>
                <p class="white-text light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
            </div>

            <div class="card-panel z-depth-2 hoverable animated slideInLeft" id="loginBox">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                    <div class="row">
                        <label>Qui êtes vous ?</label>
                        <div class="input-field col s12 ">
                            <select name="type" class="icons"  autofocus>
                                <option value="" disabled selected>Faites votre choix</option>
                                @foreach($typeList as $typeListElement)
                                    <option value="{{$typeListElement['id']}}" data-icon="{{url('storage/public/'.$typeListElement['icon'])}}" class="left circle">{{$typeListElement['designation']}}</option>
                                @endforeach
                            </select>

                            <span class="helper-text red-text">
                                @if($errors->has('type'))
                                    <strong>{{ $errors->first('type') }}</strong>
                                @endif
                            </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="name">name</label>
                            <input type="text" name="name" id="name"
                                   class="validate {{ $errors->has('name')? 'invalid' : ''  }}"
                                   value="{{ old('name')  }}">
                            <span class="helper-text red-text">
                                @if($errors->has('name'))
                                    <strong>{{ $errors->first('name') }}</strong>
                                @endif
                            </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="email">email</label>
                            <input type="email" name="email" id="email"
                                   class="validate {{ $errors->has('email')? 'invalid' : ''  }}"
                                   value="{{ old('email')  }}">
                            <span class="helper-text red-text">
                                @if($errors->has('email'))
                                    <strong>{{ $errors->first('email') }}</strong>
                                @endif
                            </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password"
                                   class="validate {{ $errors->has('password')? 'invalid' : '' }}">
                            <span class="helper-text red-text">
                                @if ($errors->has('password'))
                                    <strong>{{ $errors->first('password')  }}</strong>
                                @endif
                            </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="password-confirm">password (confirmation)</label>
                            <input type="password" name="password_confirmation" id="password-confirm"
                                   class="validate {{ $errors->has('password_confirmation') }}">
                            <span class="helper-text red-text">
                                @if ($errors->has('password_confirmation'))
                                    <strong>{{ $errors->first('password_confirmation')  }}</strong>
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12" id="connectOptions">
                            <button type="submit" class="btn btn-flat waves-effect teal white-text" id="connect">
                                Inscription
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <a href="{{ route("login")  }}" class="forgot">Me connecter</a>
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

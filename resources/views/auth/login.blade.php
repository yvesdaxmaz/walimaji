@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row col l4 m4 s12">
            <div class="form-title center-align">
                <h2 class="hero-title">
                    <a href="/" class="white-text">Walimaji</a>
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
                            <a href="{{ route("register") }}">Créer un compte</a>
                            <a href="{{ route('password.request') }}" class="forgot">Mot de passe oublié</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

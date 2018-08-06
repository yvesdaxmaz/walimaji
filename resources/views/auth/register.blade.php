@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row col l4 m4 s12">
            <div class="form-title center-align">
                <h2 class="hero-title">
                    <a href="{{ route("home") }}" class="white-text">Walimaji</a>
                </h2>
                <p class="white-text light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
            </div>

            <div class="card-panel z-depth-2 hoverable animated slideInLeft" id="loginBox">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}"
                      autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="input-field col s12 ">
                            <select class="icons" autofocus>
                                <option value="" disabled selected>Choose your option</option>
                                <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
                                <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
                                <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
                            </select>
                            <label>Qui êtes vous ?</label>
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
@endsection

@extends('layouts.auth')

@section('content')

    <div class="container">
        <div class="row col l4 m4 s12">
            <div class="form-title center-align">
                <h2 class="hero-title">
                    <a href="{{ url("/") }}" class="white-text">Walimaji</a>
                </h2>
                <p class="white-text light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
            </div>

            <div class="card-panel z-depth-2 hoverable animated slideInLeft" id="loginBox">
                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}"
                      autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="email">email</label>
                            <input type="email" name="email" id="email"
                                   class="validate {{ $errors->has('email')? 'invalid' : '' }} "
                                   value="{{ $email ?? old('email') }}">
                            <span class="helper-text red-txt">
                                @if($errors("email"))
                                    <strong>{{ $errors->first("email") }}</strong>
                                @endif
                             </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="name">password</label>
                            <input type="text" name="name" id="name" class="validate {{$errors->first('password')? 'invalid' : '' }}">
                            <span class="helper-text red-txt">
                                @if($errors('password'))
                                    <strong>{{ $errors->first('password') }}</strong>
                                @endif
                            </span>
                        </div>

                        <div class="input-field col s12">
                            <label for="password">password (confirmed)</label>
                            <input type="password" name="password" id="password"
                                   class="validate {{ $errors->has("password_confirmation")? 'invalid' : '' }}"
                            >
                            <span class="helper-text red-txt">
                                @if($errors('password_confirmation'))
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12" id="connectOptions">
                            <button type="submit" class="btn btn-flat waves-effect teal white-text" id="connect">
                                Confirmer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

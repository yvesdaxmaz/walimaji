@extends('layouts.auth')


@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/')  }}">
                <h1><strong>{{ config('app.name', 'Laravel') }}</strong></h1>
            </a>
        </div>


        <div class="login-box-body">
            <form action="{{ route('login') }}" method="POST" autocomplete="on">
                @csrf


                {{--///////// email ////////--}}
                <div class="form-group has-feedback {{ $errors->has('email')? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email" autofocus value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block">
                        @if($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                    </span>
                </div>


                {{--///////// password ////////--}}
                <div class="form-group has-feedback {{ $errors->has('password')? 'has-error' : ''  }}">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <span class="help-block">
                        @if($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                    </span>
                </div>


                {{--///////// remember ////////--}}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }} id="remember" name="remember" value='1' > Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">connexion</button>
                    </div>
                </div>
            </form>

            <br>
            <a href="{{ route('password.request') }}">Mot de passe oublié</a>
            <br>
            <a href="{{ route('register2')  }}" class="text-center">Créer un nouveau compte</a>
        </div>
    </div>


    {{--/////// needed script ///////--}}
    <script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
@endsection
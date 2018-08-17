@extends('layouts.auth')


@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <h1><strong>{{ config('app.name', 'Laravel') }}</strong></h1>
            </a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est tempora placeat sapiente a, fuga rerum! Explicabo ratione asperiores,
                quae vitae voluptate repudiandae nulla fuga, magnam eum ut, adipisci esse? Quod.
            </p>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="login-box-body">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="form-group has-feedback {{ $errors->has('email')? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email" autofocus value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block">
                        @if($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                    </span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Rénialiser mon mot de passe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
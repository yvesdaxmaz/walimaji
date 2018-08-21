@extends('layouts.auth')


@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/')  }}">
                <h1><strong>{{ config('app.name', 'Laravel') }}</strong></h1>
            </a>
        </div>

        <div class="login-box-body">
        <form action="{{ route('register2') }}" method="POST" autocomplete="off">
            @csrf

            {{--///////////// type ////////////--}}
            <div class="form-group {{ $errors->has('type')? 'has-error' : '' }}">
                <select class="form-control" name="type">
                    <option disabled selected>Qui êtes vous ?</option>
                    @foreach($typeList as $typeListElement)
                        <option value="{{$typeListElement['id']}}" data-icon="{{url('storage/public/'.$typeListElement['icon'])}}" >{{ $typeListElement['designation'] }}</option>
                    @endforeach
                </select>
                <span class="help-block">
                    @if($errors->has('type'))
                        <strong>{{ $errors->first('type') }}</strong>
                    @endif
                </span>
            </div>


            {{--///////////// name ////////////--}}
            <div class="form-group has-feedback {{ $errors->has('name')? 'has-error' : '' }}">
                <input type="text" name="name" class="form-control" placeholder="Nom" autofocus value="{{ old('name') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="help-block">
                    @if($errors->has('name'))
                        <strong>{{ $errors->first('name') }}</strong>
                    @endif
                </span>
            </div>


            {{--////////////// email //////////--}}
            <div class="form-group has-feedback {{ $errors->has('email')? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control" placeholder="Email" autofocus value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="help-block">
                    @if($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </span>
            </div>


            {{--///////////////// password ///////////////--}}
            <div class="form-group has-feedback {{ $errors->has('password')? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span class="help-block">
                    @if($errors->has('password'))
                        <strong>{{ $errors->first('password') }}</strong>
                    @endif
                </span>
            </div>


            {{--//////////////// password confirm /////////////--}}
            <div class="form-group has-feedback {{ $errors->has('password_confirmation')? 'has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password (confirmer)">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span class="help-block">
                    @if($errors->has('password_confirmation'))
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    @endif
                </span>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Inscription</button>
                </div>
            </div>
        </form>

        <br>
        <a href="{{ route('login') }}" class="text-center">Connexion</a>
        </div>
    </div>
@endsection
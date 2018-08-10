@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row col l4 m4 s12">
            <div class="form-title center-align">
                <h2 class="hero-title">
                    <a href="{{ url("/")  }}" class="white-text">Walimaji</a>
                </h2>
                <p class="white-text light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolor dolore doloribus earum
                    esse et ex exercitationem explicabo fugiat laboriosam, odio perferendis possimus quasi qui sequi
                    temporibus velit veniam voluptas!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aspernatur beatae cum
                    cupiditate deleniti dolore doloremque dolores eum exercitationem nisi non nostrum, perspiciatis quia
                    quibusdam sunt, voluptates. Perspiciatis, voluptatum!
                </p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="card-panel z-depth-2 hoverable animated slideInLeft" id="loginBox">
                <form  method="POST" action="{{ route('password.email') }}" autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="input-field col s12">
                            <label for="name">email</label>
                            <input type="email" name="email" id="email" class="validate {{ $errors->has('email')? 'invalid' : ''  }}" value="{{ old('email')  }}">
                            <span class="helper-text red-text">
                                @if ($errors->has('email'))
                                    <strong>{{ $errors->first('email') }}</strong>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn btn-flat waves-effect teal white-text">
                               Rénitialisation
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

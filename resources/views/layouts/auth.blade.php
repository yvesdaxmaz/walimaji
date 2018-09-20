<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include("includes.default-style")

    {{--///////// specific page ressources //////////--}}
    <link rel="stylesheet" href="{{ asset("assets/plugins/iCheck/square/blue.css") }}">
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
</head>

<body class="hold-transition login-page login-background">
    @yield('content')
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include("includes.default-style")

    {{--///////// specific page ressources //////////--}}
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
</head>

<body class="hold-transition skin-blue layout-top-nav">
    @yield('content')
</body>
</html>

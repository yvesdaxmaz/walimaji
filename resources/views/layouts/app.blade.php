<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include("includes.default-style")

    {{--///////// specific page ressources //////////--}}
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
</head>
<body class="hold-transition sidebar-mini skin-blue ">
    <div class="wrapper">
        @include('includes.default-auth-header')
        @yield('content')
    </div>


    <script src="{{ asset("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/fastclick/lib/fastclick.js") }}"></script>
    <script src="{{ asset("assets/dist/js/adminlte.min.js") }}"></script>
    <script src="{{ asset("assets/dist/js/demo.js") }}"></script>
    <script>
        var tab = '{{ $tab }}';
        var mapData = JSON.parse('{!! $data !!}');
    </script>
    <script src="{{ asset("assets/js/map.js") }}"></script>

</body>
</html>

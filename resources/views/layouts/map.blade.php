<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")


    <link rel="stylesheet" href="{{ asset("assets/vendor/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendor/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendor/Ionicons/css/ionicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/dist/css/skins/_all-skins.min.css") }}">

    {{--////////////// leaflet and mapbox API ressources /////////////--}}
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js"></script>
    <script src="{{ asset("assets/leaflet/dist/leaflet.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("assets/leaflet/dist/leaflet.css") }}">
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    @guest
    @include('includes.default-guest-header')
    @else
        @include('includes.default-auth-header')
    @endif


    <div class="nav-tabs-custom map-nav-tabs">
        <ul class="nav nav-tabs ">
            @foreach($types as $type)
                @if($tab == $type->designation)
                    <li class="active"><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                @else
                    <li><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>

    @yield('content')

    @include('includes.default-footer')
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
    console.log(mapData[0]['name']);
</script>
<script src="{{ asset("assets/js/map.js") }}"></script>
</body>
</html>

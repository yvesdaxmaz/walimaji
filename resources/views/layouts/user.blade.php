<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include('includes.default-style')


    {{--////////////// leaflet and mapbox API ressources /////////////--}}
    <link rel="stylesheet" href="{{ asset("assets/leaflet/dist/leaflet.css") }}">
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css">

    {{--///////////////// javascript for map //////////////////--}}
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js"></script>
    <script src="{{ asset("assets/leaflet/dist/leaflet.js") }}"></script>
    <script src="{{ asset("assets/js/map.js") }}"></script>
    @include('includes.default-script')
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    @include('includes.default-guest-header')
    @yield('content')
    @include('includes.default-footer')
</div>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")
    @include("includes.default-style")

    {{--///////// specific page ressources //////////--}}
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>

    {{--////////////// leaflet and mapbox API ressources /////////////--}}
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js"></script>
    <script src="{{ asset("assets/leaflet/dist/leaflet.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("assets/leaflet/dist/leaflet.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/leaflet/dist/leaflet-search.css") }}">
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @include('includes.default-script')
    @include('includes.default-datatable-script')
</head>
<body class="hold-transition sidebar-mini skin-blue ">
<div class="wrapper">
    @include('includes.default-auth-header')
    @yield('content')

</div>
<script src="{{ asset("assets/js/map.js") }}"></script>
@include("includes.default-script")
@include('includes.default-datatable-script')

</body>
</html>

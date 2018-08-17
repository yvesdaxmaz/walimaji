<!DOCTYPE html>
<html>
<head>
    @include("includes.default-meta")


    <link rel="stylesheet" href="{{ asset("assets/vendor/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendor/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendor/Ionicons/css/ionicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/dist/css/skins/_all-skins.min.css") }}">
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
        <ul class="nav nav-tabs">
            @foreach($types as $type)
                @if($type->designation == $tab)
                    <li class="active"><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                @else
                    <li><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>

    <div class="content-wrapper">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map1"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>


    @include('includes.default-footer')
</div>

<script src="{{ asset("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ asset("assets/vendor/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
<script src="{{ asset("assets/vendor/fastclick/lib/fastclick.js") }}"></script>
<script src="{{ asset("assets/dist/js/adminlte.min.js") }}"></script>
<script src="{{ asset("assets/dist/js/demo.js") }}"></script>
</body>
</html>

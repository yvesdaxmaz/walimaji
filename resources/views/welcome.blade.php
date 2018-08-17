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

        </ul>
    </div>

    <div class="content-wrapper">
        <div class="map-container">
            <div class="map-container-content" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.6698692087125!2d27.466621714831753!3d-11.646857137760964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x197239b7fd095f69%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1534326593321"
                        width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container">
            <section class="content">

            </section>
        </div>
    </div>


    <div class="page-footer transparent">
        <div class="valign-wrapper map-banner" style="background: url({{ public_path("images/walimaji.jpg") }});">
            <div class="container map-banner-content">
                <section class="features-icons bg-light text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex">
                                        <i class="icon-screen-desktop m-auto text-primary"></i>
                                    </div>
                                    <h3>Fully Responsive</h3>
                                    <p class="lead mb-0">This theme will look great on any device, no matter the
                                        size!</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex">
                                        <i class="glyphicon glyphicon-user m-auto text-primary"></i>
                                    </div>
                                    <h3>Bootstrap 4 Ready</h3>
                                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4
                                        framework!</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex">
                                        <i class="glyphicon glyphicon-user m-auto text-primary"></i>
                                    </div>
                                    <h3>Easy to Use</h3>
                                    <p class="lead mb-0">Ready to use with your own content, or customize the source
                                        files!</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex">
                                        <i class="glyphicon glyphicon-user m-auto text-primary"></i>
                                    </div>
                                    <h3>Easy to Use</h3>
                                    <p class="lead mb-0">Ready to use with your own content, or customize the source
                                        files!</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex">
                                        <i class="glyphicon glyphicon-user m-auto text-primary"></i>
                                    </div>
                                    <h3>Easy to Use</h3>
                                    <p class="lead mb-0">Ready to use with your own content, or customize the source
                                        files!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="map-banner-overlay"></div>
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

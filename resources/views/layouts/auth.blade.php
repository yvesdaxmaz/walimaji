<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>modules.auth login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include("includes.default-style");

    <link rel="stylesheet" href="../assets/plugins/iCheck/square/blue.css">
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
</head>

<body class="hold-transition login-page login-background">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html">
            <h1>
                <strong> Walimaji</strong>
            </h1>
        </a>
    </div>


    <!-- //////////////////////////// form //////////////////////-->
    <div class="login-box-body">
        <form action="../../index2.html" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">connexion</button>
                </div>
            </div>
        </form>

        <br>
        <a href="#">Mot de passe oublié</a>
        <br>
        <a href="register.html" class="text-center">Créer un nouveau compte</a>
    </div>
    <!-- /////////////////////////////// form ///////////////////////-->
</div>



<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
</body>

</html>

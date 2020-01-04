<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 23:25:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Edaacil - Agent password reset</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form">
                    <div class="header">
                        <img class="logo" src="{{ URL::to('assets/images/edaacil-logo.png') }}" alt="">
                        <h5>Reset Password</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="New Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Retype Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Powered by <a href="https://edaacil.com/" target="_blank">Edaacil</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ URL::to('assets/images/signin.svg') }}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ URL::to('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
</body>

</html>
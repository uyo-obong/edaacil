<!doctype html>
<html class="no-js " lang="en">
<head>
    <title>Edaacil - Login</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ URL::to('assets/images/signin.svg') }}" alt="Sign In"/>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <form id="form_validation" class="card auth_form" action="{{ route('manager.auth.login') }}" method="POST">
                    <div class="header">
                        <img style="width: 200px;" class="logo" src="{{ URL::to('assets/images/edaacil-logo.png') }}" alt="">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        @if(session()->has('invalid'))
                            <div class="alert alert-danger">{{ session()->get('invalid') }}</div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="/" target="_blank">Edaacil.com</a></span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ URL::to('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/bundles/vendorscripts.bundle.js') }}"></script>
<!-- Lib Scripts Plugin Js -->
</body>

</html>
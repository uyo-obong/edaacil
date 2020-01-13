<!doctype html>
<html class="no-js " lang="en">
<head>
    <title>Edaacil - Agent Login</title>
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
            <div class="col-lg-6 col-sm-12 mx-auto">
                <form id="form_validation" class="card auth_form" method="POST" action="">
                    <div class="header">
                        <img class="logo" src="assets/images/logo.svg" alt="">
                        <h1>Welcome Agent!</h1>
                    </div>
                    <div class="body">
                        @if(session()->has('invalid'))
                            <div class="alert alert-danger">{{ session()->get('invalid') }}</div>
                        @elseif(session()->has('disabled'))
                            <div class="alert alert-danger">{{ session()->get('disabled') }}</div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password"  name="password" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="{{ route('agent.auth.forgot') }}" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
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
</body>

</html>
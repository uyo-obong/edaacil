<!doctype html>
<html class="no-js " lang="en">
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
                <form class="card auth_form" method="POST" action="{{route('password')}}">
                    <div class="header">
                        <img class="logo" src="{{ URL::to('assets/images/edaacil-logo.png') }}" alt="">
                        <h5>Forgot Password?</h5>
                        <span>Enter your e-mail address below to reset your password.</span>
                    </div>
                    <div class="file-name">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="{{$agent->id}}" name="agentId">
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{$agent->email}}" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SUBMIT</button>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script> <a href="https://edaacil.com/" target="_blank">Edaacil</a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ URL::to('assets/images/signin.svg') }}" alt="Forgot Password"/>
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
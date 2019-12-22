<!doctype html>
<html class="no-js " lang="en">
<head>
    <title>Edaacil - @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    @stack('styles')
</head>

<body class="theme-blush">

<!-- Page Loader -->
{{--<div class="page-loader-wrapper">--}}
{{--    <div class="loader">--}}
{{--        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ URL::to('assets/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>--}}
{{--        <p>Please wait...</p>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Main Content -->
<section class="content">
        @yield('content')
</section>

</body>
<!-- Jquery Core Js -->
<script src="{{ URL::to('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/bundles/vendorscripts.bundle.js') }}"></script><!-- Lib Scripts Plugin Js -->

<!-- Jquery DataTable Plugin Js -->
<script src="{{ URL::to('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

<script src="{{ URL::to('assets/js/pages/tables/jquery-datatable.js') }}"></script>

<script src="{{ URL::to('assets/plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ URL::to('assets/js/pages/forms/form-validation.js') }}"></script>
</html>

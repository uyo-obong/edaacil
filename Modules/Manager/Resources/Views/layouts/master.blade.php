<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Edaacil - Manager</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/charts-c3/plugin.css') }}"/>

    <link rel="stylesheet" href="{{ URL::to('assets/plugins/morrisjs/morris.min.css') }}" />

    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ URL::to('assets/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
@include('manager::utiles.right-sidebar')

@include('manager::utiles.left-sidebar')

@include('manager::utiles.theme-settings')

@yield('content')

<!-- Jquery Core Js -->
<script src="{{ URL::to('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ URL::to('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ URL::to('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ URL::to('assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ URL::to('assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ URL::to('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/js/pages/index.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ URL::to('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

<script src="{{ URL::to('assets/js/pages/tables/jquery-datatable.js') }}"></script>

<script src="{{ URL::to('assets/plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ URL::to('assets/plugins/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->
<script src="{{ URL::to('assets/js/pages/forms/form-validation.js') }}"></script>
</body>

</html>
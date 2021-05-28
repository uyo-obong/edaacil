<!doctype html>
<html class="no-js " lang="en">
<head>
    <title>Edaacil - @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ URL::to('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <style>
        .content {
            margin: 0px 40px 0px 40px !important;
        }
    </style>
    @stack('css')
</head>

<body class="theme-blush">

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

<script src="{{ URL::to('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
<script src="{{ URL::to('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
<script src="{{ URL::to('assets/js/pages/forms/advanced-form-elements.js') }}"></script>

<script src="{{ URL::to('assets/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script> <!-- Bootstrap Notify Plugin Js -->
@include('manager::utiles.notifications.notify')

@stack('scripts')
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edaacil - Auto mobile insurance solutions for private and commercial uses.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ URL::to('favicon.ico') }}" rel="icon">
    <link href="{{ URL::to('favicon.ico') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ URL::to('client/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ URL::to('client/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('client/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('client/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('client/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('client/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ URL::to('client/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('client/style.css') }}" rel="stylesheet">
</head>

<body>

<!--==========================
Header
============================-->
@yield('content')

<!-- JavaScript Libraries -->
<script src="{{ URL::to('client/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::to('client/lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ URL::to('client/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::to('client/lib/easing/easing.min.js') }}"></script>
<script src="{{ URL::to('client/lib/mobile-nav/mobile-nav.js') }}"></script>
<script src="{{ URL::to('client/lib/wow/wow.min.js') }}"></script>
<script src="{{ URL::to('client/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ URL::to('client/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::to('client/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::to('client/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::to('client/lib/lightbox/js/lightbox.min.js') }}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ URL::to('client/contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ URL::to('client/js/main.js') }}"></script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>


</body>
</html>

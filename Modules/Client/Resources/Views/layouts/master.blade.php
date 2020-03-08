
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
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="/" class="scrollto"><h3>Edaacil</h3>
                {{--                <img src="{{ URL::to('client/img/logo.png') }}" alt="" class="img-fluid">--}}
            </a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#agent">Agent</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="{{ URL::to('client/img/car.svg') }}" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>We provide<br><span>auto insurance solutions</span></h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#services" class="btn-services scrollto">Our Services</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        EDAA Co-operative Ins. Ltd. is the first registered Cooperative Insurance in the state, memeber Association of Cooperative Insurance Society of Nigeria (ACISON). Affiliate of (NCIS) National Cooperative Insurance Soc. And one of the leading cooperative insurance society and financial services body in the country.
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-group"></i></div>
                        <h4 class="title"><a href="">Property</a></h4>
                        <p class="description">Your property/shop is covered</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-location-arrow"></i></div>
                        <h4 class="title"><a href="">Future</a></h4>
                        <p class="description">Your future is secured</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">Guaranty</a></h4>
                        <p class="description">You are well covered.</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{ URL::to('client/img/about-img.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Services</h3>
                <p>Aside from auto insurance, we offer different type of insurance in our company which includes:-</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-home-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Home Insurance</a></h4>
                        <p class="description">This insurance commonly called homeowner's insurance, which a type of property insurance that covers a private residence.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-person-outline" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Householder Insurance</a></h4>
                        <p class="description">This is a policy to cover your household contents and includes coverage for fatal injury to you as the insured.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Buildings insurance</a></h4>
                        <p class="description">Buildings insurance covers the cost of repairing damage to the structure of your property. Garages, sheds and fences are also covered.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-rainy-outline" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Marine Insurance</a></h4>
                        <p class="description">Marine insurance covers the loss or damage of ships, cargo, terminals, and any transport by which the property is acquired.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Policy Statement</h3>
                <p>We don't only insure but we <strong>indemnify.</strong></p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-6 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-diamond"></i>
                        <div class="card-body">
                            <h5 class="card-title">Vision Statement</h5>
                            <p class="card-text">Re-defining taste in Co-operative insurance business with a touch of Execelent and hope creation and protection.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-language"></i>
                        <div class="card-body">
                            <h5 class="card-title">Mission Statement</h5>
                            <p class="card-text">To unluck the potentials and quality of co-operative insurance using them to improve and maintain the quality of services through customer care protection and profitability</p>
                            <p>Caring,Quality,Reliability,Protection and Services.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,274</span>
                    <p>Certificate Issued</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">21</span>
                    <p>Agents</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">64</span>
                    <p>Branches</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">8</span>
                    <p>Partners</p>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
      Agent Section
    ============================-->
    <section id="agent" class="clearfix">
        <div class="container">
            <header class="section-header">
                <br>
                <h3 class="section-title">Our Agents</h3>
                <p> Co-operative's local agents help you stay covered</p>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <p>We believe that choosing to work with a local agent is the most important decision you can make when it comes to shopping for insurance.</p>

                    <p>Co-op agents live and work in the same communities as Co-op members. We're your neighbors and friends. We know our customers, provide great service, and give back to the places where we live.</p>

                    <p> As your life changes, so do your insurance needs, even when you don't realize it. Having a relationship with a local agent makes it easier to keep your coverage up to date so you have the protection you need when you need it.</p>

                    <p>Co-op agents use their experience and knowledge as insurance professionals to make recommendations based on your individual needs.</p>

                    <p>Contact our customer care for available agent in your locality <a href="tel:18475555555`" class="btn-services scrollto">09060961527</a> </p>
                </div>
            </div>

        </div>
    </section><!-- #agents -->


    <!--==========================
          Team Section
        ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Team</h3>
                <p>The team behind Edaa Cooperative Insurance Limited</p>
            </div>

            <div class="row">

                <div class="col-md-4 wow fadeInUp">
                    <div class="member">
                        <img src="{{ URL::to('CEO.jpeg') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Godwin Edoho</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{ URL::to('PM.jpeg') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Edoho</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{ URL::to('CTO.jpeg') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Abasiekeme Godwin</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                    <div class="member">--}}
{{--                        <img src="{{ URL::to('client/img/team-4.jpg') }}" class="img-fluid" alt="">--}}
{{--                        <div class="member-info">--}}
{{--                            <div class="member-info-content">--}}
{{--                                <h4>Amanda Jepson</h4>--}}
{{--                                <span>Accountant</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

        <div id="faq" class="container">

            <div class="section-header">
                <h3>FAQ</h3>

            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-12 col-md-4 col-xs-6">
                    <ul id="faq-list" class="wow fadeInUp">
                        <li>
                            <a data-toggle="collapse" class="collapsed" href="#faq1">Is the a limit to insuring with Edda Co-operative insurance? <i class="ion-android-remove"></i></a>
                            <div id="faq1" class="collapse" data-parent="#faq-list">
                                <p>
                                    The is no limit to insuring.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq2" class="collapsed">Can I change the car details on my policy online?<i class="ion-android-remove"></i></a>
                            <div id="faq2" class="collapse" data-parent="#faq-list">
                                <p>
                                    No. You will be required to forward your request to your insurer.

                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq3" class="collapsed">What are the minimum requirements?<i class="ion-android-remove"></i></a>
                            <div id="faq3" class="collapse" data-parent="#faq-list">
                                <p>
                                    The minimum requirement is third party policy
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq4" class="collapsed">Does anyone who drives my car insured? <i class="ion-android-remove"></i></a>
                            <div id="faq4" class="collapse" data-parent="#faq-list">
                                <p>
                                    YES, provided the person is driving with your permission/consent and the person has a valid driver’s license.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq5" class="collapsed">Can a policy be purchased via SMS or email on Edaa platform? <i class="ion-android-remove"></i></a>
                            <div id="faq5" class="collapse" data-parent="#faq-list">
                                <p>
                                    Yes it can, provided you patronized a genuine agent,with your car registration number or policy number.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <img class="contact-us" src="{{ URL::to('client/img/contact.jpg') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>#24 Banking layout, UYO</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>edaacil@gmail.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+234 80 5845 4125</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="{{ route('contact') }}" method="post" role="form" class="contactForm">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>Edaacil</h3>
                    <p> EDAA Co-operative Ins. Ltd. is the first registered Cooperative Insurance in the state, member Association of Cooperative Insurance Society of Nigeria (ACISON). Affiliate of (NCIS) National Cooperative Insurance Soc. And one of the leading cooperative insurance society and financial services body in the country.</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#intro">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#services">Services</a></li>
{{--                        <li><a href="#why-us">Terms o</a></li>--}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Banking layout <br>
                        Uyo,Akwa Ibom State<br>
                        Nigeria <br>
                        <strong>Phone:</strong> 0805 845 4125<br>
                        <strong>Email:</strong> edacil@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Edaacil</strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

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

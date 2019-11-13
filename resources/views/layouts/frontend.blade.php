<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mate IT Ltd. </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="{{asset('themes/L1.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('themes/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('themes/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('themes/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/bootstrap-datepicker.css')}}">


    <link rel="stylesheet" href="{{asset('themes/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('themes/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <link rel="stylesheet" href="{{asset('themes/css/style.css')}}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-4">
                        <h1 class="my-0 site-logo"><a href="index.html">MATE IT Ltd<span class="text-primary">.</span> </a></h1>
                    </div>
                    <div class="col-6 col-md-8">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">

                                <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                        <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                                    </a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                    <li><a href="#home-section" class="nav-link">Home</a></li>
                                    <li><a href="#what-we-do-section" class="nav-link">What We Do</a></li>
                                    <li><a href="#about-section" class="nav-link">About Us</a></li>
                                    <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                                    <li><a href="#studio-section" class="nav-link">Gallery</a></li>
                                    <li><a href="#news-section" class="nav-link">News</a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END .site-navbar-wrap -->

    @yield('content')

 <!-- END .site-section -->
<div class="site-section bg-light">
    <div class="site-section" id="news-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block">Recent News</span>
                    <h2 class="title text-primary">Come with a great surprise</h2>
                </div>
            </div>
        </div>
    </div> 		<!--End .site-selection-->

    @yield('contact')

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="footer-heading mb-4">About Us</h3>
                            <p>We provide software solution for mobile application, web application, web services or any services our client need. We also Business marketing solution aor any service required for our client business or marketing need.</p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-3 ml-auto">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Navigation</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#home-section" class="smoothscroll">Home</a></li>
                                <li><a href="#what-we-do-section" class="smoothscroll">What We Do</a></li>
                                <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                <li><a href="#team-section"  class="smoothscroll">Team</a></li>
                            </ul>
                        </div>

                    </div>

                </div>


                <div class="col-lg-4 mb-5 mb-lg-0">

                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                        @yield('subscribe')

                    </div>




                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="mb-4">
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                    <p>

                        <small class="block"><strong class="text-white">MATE IT Ltd.</strong> Est. 2019 <br> </small>
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('themes/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('themes/js/popper.min.js') }}"></script>
<script src="{{ asset('themes/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('themes/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themes/js/aos.js') }}"></script>
<script src="{{ asset('themes/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('themes/js/stickyfill.min.js') }}"></script>
<script src="{{ asset('themes/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('themes/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('themes/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('themes/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <script>
        @if(Session::has('success'))
        toastr.success('{{Session::get('success')}} ')
        @endif
        @if(Session::has('danger'))
        toastr.warning('{{Session::get('danger')}}')
        @endif
    </script>

</body>
</html>

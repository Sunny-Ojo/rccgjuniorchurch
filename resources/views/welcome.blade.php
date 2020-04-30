<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Welcome to RCCG Easter campout for 2020">
    <!--====== Title ======-->
    <title>Welcome to RCCG Easter campout for 2020</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/download.png')}}" class="rounded-circle">

    <!-- Styles -->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">



</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <nav class="navbar navbar-expand-md  sticky-top navbar-dark bg-dark shadow-sm">
        <a class="navbar-brand" href="{{ url('/') }}">
             Easter Campout
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="/campout/form">Teenagers</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/register/teacher">Teachers</a>
                        </li>
                    @guest

                    @if (Route::has('adminlogin'))

                         <li class="nav-item">
                            <a class="nav-link" href="/adminlogin">Admin</a>
                        </li>

                    @endif

                @else
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Dashboard</a>
                </li>
                     @guest
                     <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                     @endguest
                             <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                        </li>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}


                @endguest  <!-- Authentication Links -->

                </ul>
            </div>
    </nav>
    <!--====== HEADER PART ENDS ======-->
    {{-- COUNTDOWN  PART STARTS --}}
    @include('layouts.msg')


    <div class="text-center mt-5" ><h1 class="lead">Countdown Timer for the event</h1>
    <div data-countdown="2020/06/01"></div>
</div>
{{-- COUNTDOWN  PART ENDS --}}

    <!--====== ABOUT PART START ======-->


       <section class=" pt-100 mt-100 pb-100" style="background-color:lightsteelblue">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-6 col-xs-6 text-center">
                    <img
        class=" rounded-circle"
        style="width:40%; heigth:50px; "
        src="{{ 'img/download.png' }}"
        alt="Logo"
    />

                   </div>
                   <div class="col-lg-6 col-xs-6  mt-10">
    <p class="text-bold text-capitalize text-dark  text-center  ">The Redeemed christian church of god lagos province 33  welcomes you to  easter campout 2020!!! </p>
    <h3 class="mt-10   text-center">Theme: <span class="text-danger ml-10">Strong </span> <span class="round-circle text-dark">In</span> <span class="text-success">Faith</span></h3>
    <p class="text-center mt-10"><b class="text-dark  text-center">Hebrews 13:8 </b></p>

    <p class="text-dark mt-1 text-center"><marquee behavior="" direction="left">Jesus christ the same yesterday, and today and forever.</marquee></p>
                   </div>
               </div>
           </div>

        </section>
    <section id="about" class="about-area pb-130 pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mt-50 wow fadeInLeft" data-wow-duration="1s">
                    <img src="{{asset('img/traveler.jpg')}}" alt="About">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45 wow fadeInRight" data-wow-duration="1s">
                        <div class="section-title">
                            <h2 class="title lead">About RCCG Easter Campout</h2>
                        </div> <!-- section title -->

                        <p class="text mt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. <br> <br> Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <p class="date"><span>10<sup>th</sup></span>  - <span>13<sup>th</sup></span> April 2020.</p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== EVENT SCHEDULE PART START ======-->


    <!--====== FEATURES PART START ======-->

    <section id="features" class="features-area pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h2 class="title">Why You Should Attend?</h2>
                        <p class="text">Here are few reasons why you must not miss this year's Easter Camp out.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div  class="col-lg-4 col-md-6 col-sm-8">
                    <div style="border-radius:20px"class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="features-icon">
                            <h1 class=""> <i class=" text-danger  lni-microphone"></i></h1>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Great Speakers</a></h4>
                            <p class="text">You will meet great speakers who are successful and are able to influence your
                                life positively.
                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  class="col-lg-4 col-md-6 col-sm-8">
                    <div style="border-radius:20px"class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                            <h1 class=""> <i class=" text-danger  lni-users"></i></h1>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">New People</a></h4>
                            <p class="text">You have the opportunity to see and meet new people from other provinces and parishes..</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  class="col-lg-4 col-md-6 col-sm-8">
                    <div style="border-radius:20px"class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                            <h1 class=""> <i class=" text-danger  lni-bullhorn"></i></h1>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Global Event</a></h4>
                            <p class="text">It is not just for a particular parish, all the parishes under Lagos province 33 will be there.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  class="col-lg-4 col-md-6 col-sm-8">
                    <div style="border-radius:20px" class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                           <h1 class=""> <i class=" text-danger  lni-heart"></i></h1>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Get Inspired</a></h4>
                            <p class="text">You will be inspired and motivated  through <b>motivational talks</b>,and  <b>Seminars</b>  .</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  class="col-lg-4 col-md-6 col-sm-8" >
                    <div style="border-radius:20px" class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                           <h1> <i class="lni-cup text-danger"></i></h1>
                        </div>
                        <div class="">
                            <h4 class="pricing-title"><a href="#">Sports Activities</a></h4>
                            <p class="text">There will be outdoor activities like <b>Football</b>,
                                <b>Tennis</b>, <b>Chess</b> and other sports activities
                                .</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  class="col-lg-4 col-md-6 col-sm-8">
                    <div style="border-radius:20px" class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="features-icon">
                            <h1 class=""> <i class=" text-danger  lni-gallery"></i></h1>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Meet New Faces</a></h4>
                            <p class="text">It is an opportunity for teenagers to meet new faces and make new friends.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== TEAM PART START ======-->


    <!--====== ABOUT THE EVENT START ======-->

    <section id="" class="bg-secondary  text-bold " >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class=" text-center pb-10 card-body my-5 py-5 wow fadeInLeft"style="border:2px solid lightblue" data-wow-duration="1s" data-wow-delay="1.5s">
                        <h2 class="text-white">3 Days Event</h2>
                        <p class="text-white pt-5">RCCG Easter Camp out lasts for 3 days but has the capacity to
                            change your life physically, intellectually and spiritually...</p>

                            <p class=" p-2" style="color:black ;font-size:bold">You shouldn't miss this!!!</p>
                            <a href="/campout/form" class="btn btn-primary pt-10 mt-1">Register Now (Teens)</a>
                            <a href="register/teacher" class="btn btn-warning pt-10 mt-1">Register Now (Teachers)</a>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

                </div>
    </section>
    <!--====== ABOUT THE EVENT END ======-->


    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area bg_cover bg-info" >


        <div class="footer-widget">
            <div class="container">
                <div class="widget  pt-10 pb-10 pt mb-1 p-lg-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-address mt-40">
                                <h5 class="f-title">Venue Location</h5>
                                <p class="text">10 - 13 APRIL, 2020 <br> Reagan Memorial Baptist Girls Secondary School, Sabo Yaba.</p>
                            </div> <!-- footer address -->
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-contact mt-40">
                                <h5 class="f-title">Social Platforms</h5>
                                <p class="text">Don't be left out!  connect with us on social platforms for Any Proper Updates Anytime.</p>
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                    <div class=" pt-50  text-center text-white">

                     {{-- <p class="text"> <a href="/disclaimer " class="text-white">Disclaimer</a></p> --}}
                        &copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights
                        reserved...
                    </div>
                </div> <!-- widget -->
            </div> <!-- container -->
        </div> <!-- footer widget -->



    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!-- row -->










    <!--====== jquery js ======-->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>

    <!--====== Countdown js ======-->
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>


    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

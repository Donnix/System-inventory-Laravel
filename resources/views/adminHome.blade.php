<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('screen/assets/css/slick.css')}}"> 
        <link rel="stylesheet" href="{{asset('screen/assets/css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('screen/assets/css/bootsnav.css')}}">



        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('screen/assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('screen/assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('screen/assets/css/responsive.css')}}" />

        <script src="{{asset('screen/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">
                <div class="container"> 
                    <div class="attr-nav">
                    </div> 
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="{{asset('screen/assets/images/logo.png')}}" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>{{ __('Logout') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello">
                                <section id="about" class="about bg-yellow roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_about text-center">
                                <h1 class="text-black">Wikrama Restaurant</h1>
                                <h2 class="text-white">- & -</h2>
                                <h3 class="text-black text-uppercase">We love to serve the perfect</h3>

                                <a href="../masakans" class="btn btn-primary m-top-100">Main Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                            
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
        </div>

        <!-- JS includes -->

        <script src="{{asset('screen/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('screen/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('screen/assets/js/jquery.magnific-popup.js')}}"></script>
        <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
        <script src="{{asset('screen/assets/js/jquery.easing.1.3.js')}}"></script>
        <!--<script src="assets/js/slick.js"></script>-->
        <script src="{{asset('screen/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('screen/assets/js/js.isotope.js')}}"></script>
        <script src="{{asset('screen/assets/js/jquery.collapse.js')}}"></script>
        <script src="{{asset('screen/assets/js/bootsnav.js')}}"></script>

        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script src="{{asset('screen/assets/js/plugins.js')}}"></script>
        <script src="{{asset('screen/assets/js/main.js')}}"></script>



    </body>
</html>

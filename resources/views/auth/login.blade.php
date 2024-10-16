<!DOCTYPE html>
<!-- 
   Template Name: fervor
   Version: 3.0.0
    Author: Webstrot
   
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="fervor" />
    <meta name="keywords" content="fervor" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!--<div class="preloder" id="preloder">
        <div class="heart">
            <div class="heart-piece-0"></div>
            <div class="heart-piece-1"></div>
            <div class="heart-piece-2"></div>
            <div class="heart-piece-3"></div>
            <div class="heart-piece-4"></div>
            <div class="heart-piece-5"></div>
            <div class="heart-piece-6"></div>
            <div class="heart-piece-7"></div>
            <div class="heart-piece-8"></div>
            <p>loading...</p>
        </div>-->
    </div>
    <div class="main-singin-box">
        <div class="leftside">
            <div class="air-balloon one">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon two">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon three">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon foure">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
        </div>
        <div class="container">
            <div class="singin-box">
                <div class="singin-left">
                    <div class="logo">
                        <img src="{{ asset('frontend/images/ll.png') }}" alt="logo">
                    </div>
                    
                    <a href="sing-up.html" class="tag">Sign up</a>
                </div>
                <div class="singin-right">
                    <div class="main-form">
                        <h4>Welcome to The Link-Up Show </h4>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-input">
                                <input type="email" name="email" id="validationCustom02" placeholder="Email Address *"
                                    required="">
                                <label for="validationCustom02"><i class="fas fa-envelope"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" id="validationCustom04" placeholder="Password *"
                                    required="">
                                <label for="validationCustom04"><i class="fas fa-lock"></i></label>
                            </div>
                            <div class="form-input-checkbox">
                                <input type="checkbox" name="rememberme" id="rememberme">
                                <label for="rememberme">Remember me</label>
                                <a href="javascript:;">Forgot Password</a>
                            </div>
                            <div class="form-input">
                                <button class="main-btn" type="submit">Log In</button>
                            </div>
                        </form>
                        <p>New member? <a href="#">signup</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightside">
            <div class="air-balloon one">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon two">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon three">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon foure">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/range-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script>
        //$(window).on("load resize", function () {
         //   windowHeight = $(window).height();
         //   $(".main-singin-box").css({ "height": windowHeight });
        //});

    </script>
</body>

</html>
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


<!-- Mirrored from webstrot.com/html/fervor/html/sing-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 08:30:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>Register on Linkup</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        select {
    margin-top: 20px;
    width: 100%;
    position: relative;
    width: 100%;
    height: 50px;
    border: 1px solid #efefef;
    padding-left: 30px;
    outline: none;
}


select:focus {
    border-color: #fa2456;
}

select:focus+label {
    background: linear-gradient(to right, #fa2456, #fd735a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.counter {
            font-size: 0.9em;
            color: #666;
        }
        .error {
            color: #fa2456;
        }
    </style>

</head>

<body>
   <!-- <div class="preloder" id="preloder">
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
                </div>
                <div class="singin-right">
                    {{-- Success message --}}
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>

                        {{-- Redirect to home page after 4 seconds --}}
                        <script>
                            setTimeout(function() {
                                window.location.href = "{{ route('home') }}";
                            }, 4000);
                        </script>
                    @endif
                    <div class="main-form">
                        <h4>Sign Up To The Link-up Show</h4>
                        <form action="{{ route('form_register') }}" method="POST">
                            @csrf
                            <div class="form-input">
                                <input type="text" name="firstname" id="validationCustom01" placeholder="First Name"
                                    required="">
                                <label for="validationCustom01"><i class="fas fa-user"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="lastname" id="validationCustom01" placeholder="Last Name"
                                    required="">
                                <label for="validationCustom01"><i class="fas fa-user"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="email" name="email" id="validationCustom02" placeholder="Email Address"
                                    required="">
                                <label for="validationCustom02"><i class="fas fa-envelope"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="tel" name="phone" id="validationCustom02" placeholder="Phone Number"
                                    required="">
                                <label for="validationCustom02"><i class="fas fa-phone"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="address" id="validationCustom01" placeholder="Home Address"
                                    required="">
                                <label for="validationCustom01"><i class="fas fa-house"></i></label>
                            </div>

                            <div class="form-input">
                                <select name="gender" id="validationCustom01" required="">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>  
                            </div>
                            
                            <div class="form-input">
                                <input type="text" name="age" id="validationCustom01" placeholder="Age"
                                    required="">
                                <label for="validationCustom01"><i class="fas fa-cake-candles"></i></label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="occupation" id="validationCustom01" placeholder="Occupation"
                                    required="">
                                <label for="validationCustom01"><i class="fas fa-person-walking-luggage"></i></label>
                            </div>
                            <div class="form-input">
                                <select name="religion" id="validationCustom01" required="">
                                    <option value="" disabled selected>Select Religion</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Other">Other</option>
                                </select>  
                            </div>
                            <div class="form-input">
                                <textarea name="idealpartner" maxlength="250" id="validationCustom01" class="description" required="" cols="30" rows="10" placeholder="What you're looking for in a partner"></textarea>
                                <div class="counter">
                                    <span id="charCount">0</span>/250
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea name="selfdescription" maxlength="250" id="validationCustom01" class="about" required="" cols="30" rows="10" placeholder="Describe yourself"></textarea>
                                <div class="counter">
                                    <span id="charCount">0</span>/250
                                </div>
                            </div>
                            
                            <!--<div class="form-input-checkbox">
                                <input type="checkbox" name="rememberme" id="rememberme">
                                <label for="rememberme">Remember me</label>
                                <a href="javascript:;">Forgot Password</a>
                            </div>
                            -->
                            <div class="form-input">
                                <button class="main-btn" type="submit">Register</button>
                            </div>
                        </form>
                        <p>Already A member? <a href="{{ route('login') }}">Login</a> </p>
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
        /*$(window).on("load resize", function () {
            windowHeight = $(window).height();
            $(".main-singin-box").css({ "height": windowHeight });
        }); */

        const textarea = document.querySelector('.description'); // Using querySelector for better precision
        const charCount = document.getElementById('charCount');

// Add event listener to the textarea
    textarea.addEventListener('input', () => {
    // Update the character count
    const currentLength = textarea.value.length;
    charCount.textContent = currentLength;

    // Ensure input is truncated if it exceeds the maxlength
    if (currentLength >= textarea.maxLength) {
        textarea.value = textarea.value.slice(0, textarea.maxLength);
    }
});
    </script>
</body>

</html>
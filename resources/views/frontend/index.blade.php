<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>The Link-up Show</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="fervor" />
	<meta name="keywords" content="fervor" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('frontend/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}"> --}}
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/navigation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
		</div>
	</div> -->
	<a href="javascript:;" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
	<div id="header">
		
		<header class="w-100 float-start">
			<div class="main-header w-100 float-start">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-2 col-6 p-0">
							<div class="main-header-logo">
								<a href="#">
									<img src="{{ asset('frontend/images/ll.png') }}" class="img-fluid" alt="logo">
								</a>
							</div>
						</div>
						<div class="col-lg-10 col-6 p-0">
							<div class="main-menu w-100 float-end">
								<div class="overlay d-block d-lg-none"></div>
								<ul class="float-end" id="cssmenu">
									<li class="d-block d-lg-none">
										<a href="javascript:;" class="b-none">
											<img src="{{ asset('frontend/images/ll.png') }}" alt="logo">
										</a>
									</li>
									<li class="search d-block d-lg-none">
										<input type="text" name="search" placeholder="Search....">
										<span><i class="fas fa-search"></i></span>
									</li>
									<li><a href="#" style="color: black; font-size:22px">Home</a></li>
									<li><a href="#" style="color: black; font-size:22px">Membership</a></li>							
									<li><a href="#" style="color: black; font-size:22px">Contact</a></li>
									<li class="d-block d-lg-none"><a href="{{ route('register') }}">Register</a></li>
									<li class="d-none d-lg-block"><a href="javascript:;" class="sidebar-toggle"><span
												class="sidebar-toggle-1"></span><span
												class="sidebar-toggle-2"></span></a>
									</li>
								</ul>

								<div class="main-btn float-end d-none d-lg-block">
									<div class="menuBtn ">
										<a href="{{ route('register') }}">Register</a>
									</div>
								</div>
								<div class="mobToggle d-flex d-lg-none">
									<button class="js-toggle-dark-mode" type="button">
										<i class="fa fa-sun-o darkSunMode" aria-hidden="true"></i>
										<i class="fa fa-moon-o darkMoonMode" aria-hidden="true"></i>
									</button>
									<div class="toggle-btn">
										<div class="icon-left"></div>
										<div class="icon-right"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-shap">
				<img src="{{ asset('frontend/images/banner-shape1.png') }}" alt="banner-shape1" class="img-fluid">
				<img src="{{ asset('frontend/images/banner-shape2.png') }}" alt="banner-shape2" class="img-fluid">
			</div>
			<div class="shadow-img">
			</div>
		</header>
	</div>
	<section class="example">
		<article class="content">
			<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
				data-alias="classic4export" data-source="gallery"
				style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
				<div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;"
					data-version="5.4.1">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-3045" data-transition="zoomout" data-slotamount="default"
							data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
							data-easeout="Power4.easeInOut" data-masterspeed="2000"
							data-thumb="{{ asset('frontend/images/banner-1-100x50.jpg') }}" data-rotate="0" data-fstransition="fade"
							data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
							data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4=""
							data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
							data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/images/pex1.jpg') }}" alt="img" data-bgposition="center center" data-bgfit="cover"
								data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3045-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap;">The Link-Up Show
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3045-layer-4"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap;">Love is just a click away</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-3045-layer-8"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; cursor:default;"><i
									class="pe-7s-refresh"></i> </div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-3046" data-transition="fadetotopfadefrombottom" data-slotamount="default"
							data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
							data-easeout="Power3.easeInOut" data-masterspeed="1500"
							data-thumb="{{ asset('frontend/images/banner-2-100x50.jpg') }}" data-rotate="0" data-saveperformance="off"
							data-title="Find Match" data-param1="" data-param2="" data-param3="" data-param4=""
							data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
							data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/images/pex2.jpg') }}" alt="img" data-bgposition="center center" data-bgfit="cover"
								data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 4 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
								id="slide-3046-layer-1" data-x="['center','center','center','center']"
								data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
								data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']"
								data-lineheight="['70','70','70','50']" data-width="none" data-height="none"
								data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap;">Find your perfect <br> match today on <br>The Link-Up Show!</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
								id="slide-3046-layer-4" data-x="['center','center','center','center']"
								data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
								data-voffset="['52','52','52','51']" data-width="none" data-height="none"
								data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap;"></div>

							<!-- LAYER NR. 6 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1"
								id="slide-3046-layer-8" data-x="['center','center','center','center']"
								data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
								data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none"
								data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; cursor:default;">
								<i class="pe-7s-mouse"></i>
							</div>

							<!-- LAYER NR. 7 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-8" id="slide-3046-layer-10"
								data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
								data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
								data-responsive_offset="on"
								data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 11;border-width:0px;">
								<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20"
									data-enddeg="360" data-speed="35" data-origin="50% 50%"><img
										src="{{ asset('frontend/images/blurflake4.png') }}" alt="img"
										data-ww="['240px','240px','240px','240px']"
										data-hh="['240px','240px','240px','240px']" width="240" height="240"
										data-no-retina> </div>
							</div>

							<!-- LAYER NR. 8 -->
							<div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="slide-3046-layer-11"
								data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
								data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
								data-responsive_offset="on"
								data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 12;border-width:0px;">
								<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px"
									data-origin="50% 50%"><img src="images/blurflake3.png" alt="img"
									data-ww="['170px','170px','170px','170px']"
									data-hh="['170px','170px','170px','170px']" width="170" height="170"
									data-no-retina> </div>
							</div>

							<!-- LAYER NR. 9 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-3046-layer-12"
								data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
								data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
								data-responsive_offset="on"
								data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
								<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20"
									data-enddeg="360" data-speed="20" data-origin="50% 50%"><img
										src="{{ asset('frontend/images/blurflake4.png') }}" alt="img" data-ww="['50px','50px','50px','50px']"
										data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina>
								</div>
							</div>

							<!-- LAYER NR. 10 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-6" id="slide-3046-layer-13"
								data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
								data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
								data-responsive_offset="on"
								data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 14;border-width:0px;">
								<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10"
									data-origin="50% 50%"><img src="{{ asset('frontend/images/blurflake1.png') }}" alt="img"
										data-ww="['120px','120px','120px','120px']"
										data-hh="['120px','120px','120px','120px']" width="120" height="120"
										data-no-retina> </div>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-3047" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
							data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
							data-masterspeed="2000" data-thumb="{{ asset('frontend/images/banner-3-100x50.jpg') }}" data-rotate="0"
							data-saveperformance="off" data-title="Create Profile" data-param1="" data-param2=""
							data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
							data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/images/pex4.jpg') }}" alt="img" data-bgposition="center center" data-kenburns="on"
								data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
								data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
								data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 11 -->
							<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme" id="slide-3047-layer-9"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
								data-width="500" data-height="140" data-whitespace="nowrap" data-type="shape"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 15;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);border-width:0px;">
							</div>

							<!-- LAYER NR. 12 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3047-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap;">Register
							</div>

							<!-- LAYER NR. 13 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3047-layer-4"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 17; white-space: nowrap;">WITH EASE
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
							data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
							data-masterspeed="2000" data-thumb="{{ asset('frontend/images/banner-4-100x50.jpg') }}" data-rotate="0"
							data-saveperformance="off" data-title="Start Dating" data-param1="" data-param2=""
							data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
							data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/images/pex3.jpg') }}" alt="img" data-bgposition="center center" data-kenburns="on"
								data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
								data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
								data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 18 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3049-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]" style="z-index: 22; white-space: nowrap;">Experience <br> the excitement of <br>new connections
							</div>

							<!-- LAYER NR. 19 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3049-layer-4"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 23; white-space: nowrap;"></div>

							<!-- LAYER NR. 20 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-3049-layer-8"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
								data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
								data-responsive_offset="on"
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]" style="z-index: 24; white-space: nowrap;cursor:default;"><i
									class="pe-7s-diamond"></i> </div>
						</li>
					</ul>
					<div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
				</div>
			</div><!-- END REVOLUTION SLIDER -->
		</article>
	</section>
	<div class="dating-wapper w-100 float-start">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-6 col-md-12 col-12 order-lg-1">
					<div class="dating-content">
						<div class="heading">
							<h2>Find <strong> Love and Friendship </strong> Live on Air</h2>
							<div class="heart-line">
								<i class="fas fa-heart"></i>
							</div>
						</div>
						<p>Are you ready to take a chance on love and friendship? Our live radio show offers a unique opportunity to connect with someone
							special while sharing your most pressing questions and concerns with our supportive audience.
							<br>
							<br>
							If you're serious about finding a meaningful connection, come prepared to ask your date the questions that matter most to you. Our show provides a safe and encouraging space to explore the possibilities of love and friendship.

						</p><br>
						<p>
							<h5>
								Disclaimer!!: By signing up, you agree that you are solely responsible for any interactions and outcomes outside the scope of the show. 
							Participation requires completing both stages of the process. All information provided must be accurate and truthful. 
							Failure to comply may result in removal from the show.
							</h5>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12 order-lg-12">
					<img src="{{ asset('frontend/images/dating-img.png') }}" alt="dating-img" class="img-fluid">
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="how-it-work bg-color2 w-100 float-start">
		<div class="container">
			<div class="heading center-heading">
				<h2>How <strong>It</strong> Works</h2>
				<div class="heart-line">
					<i class="fas fa-heart"></i>
				</div>
				<p>Meet Someone New and Enjoy a Unique Radio Experience.  Even if the sparks don't fly, <br> you'll still enjoy an unforgettable experience with our favorite radio personalities.
					</p>
			</div>
			<div class="w-100 float-start">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="counter-box">
							<div class="counter-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<defs>
										<linearGradient id="header-shape-gradient5" x1="17.5001" y1="32" x2="17.5001"
											y2="2.9711">
											<stop offset="0" stop-color="var(--color-stop)" />
											<stop offset="1" stop-color="var(--color-bot)" />
										</linearGradient>
									</defs>
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
								</svg>
								<span>1</span>
							</div>
							<div class="counter-text">
								<h5>Tell us who you are!</h5>
								<span>You register online, and <br> fill in the information required </span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="counter-box">
							<div class="counter-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<defs>
										<linearGradient id="header-shape-gradient6" x1="17.5001" y1="32" x2="17.5001"
											y2="2.9711">
											<stop offset="0" stop-color="var(--color-stop)" />
											<stop offset="1" stop-color="var(--color-bot)" />
										</linearGradient>
									</defs>
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
								</svg>
								<span>2</span>
							</div>
							<div class="counter-text">
								<h5>Blind date on the weekend.</h5>
								<span>Head out for a date <br> to explore the connection.</span>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 col-12">
						<div class="counter-box">
							<div class="counter-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<defs>
										<linearGradient id="header-shape-gradient7" x1="17.5001" y1="32" x2="17.5001"
											y2="2.9711">
											<stop offset="0" stop-color="var(--color-stop)" />
											<stop offset="1" stop-color="var(--color-bot)" />
										</linearGradient>
									</defs>
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
								</svg>
								<span>3</span>
							</div>
							<div class="counter-text">
								<h5> Date evaluation with Precious Aniezi</h5>
								<span>Come on air to review the date on Thursday <br> and decide—friends or more?</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="footer">
		<div class="w-100 float-start main-search">
			<div class="container">
				<div class="heading center-heading heading-white">
					<h2>Subscribe<strong>for updates</strong></h2>
					<p>and exclusive invites to upcoming dates and show reviews</p>
				</div>
				<div class="search-box">
					<input type="text" name="search" placeholder="Enter Your Email">
					<button type="button" class="main-btn main-btn-iocn">
						<span class="d-none-btn">Subscribe</span>
						<span class="icon">
							<i class="fas fa-paper-plane"></i>
						</span>
					</button>
				</div>
			</div>
		</div>
		<div class="contact-section w-100 float-start">
			<div class="container">
				<div class="heading center-heading">
					<h2>Get <strong>In</strong> Touch</h2>
					<div class="heart-line">
						<i class="fas fa-heart"></i>
					</div>
					<p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
						favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
				</div>
				<div class="w-100 float-start position-relative">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="contact-detail">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-12">
										<div class="contact-detail-box">
											<h4>Contact Details</h4>
											<div class="contact-detail-list">
												<div class="contact-detail-text">
													<p>Head Office:</p>
													<p>14, Akila Machunga Street, Jos, Plateau State</p>
												</div>
												<div class="contact-detail-text">
													<p>Phone:</p>
													<p>+234 701 000 7235 <br>
														</p>
												</div>
												<div class="contact-detail-text">
													<p>Email:</p>
													<p>
														<a href="javascript:;">preciousaniezi361@gmail.com</a> <br>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-12 col-12"></div>
						<div class="col-lg-9 col-md-12 col-12">
							<div class="form-box">
								<div class="row">
									<div class="col-lg-5 col-md-12 col-12"></div>
									<div class="col-lg-7 col-md-12 col-12">
										<div class="main-form">
											<h4>For any Query Please Leave A Messege</h4>
											<form>
												@csrf
												<div class="form-input">
													<input type="text" id="validationCustom01" placeholder="Full Name *"
														required>
													<label for="validationCustom01"><i class="fas fa-user"></i></label>
												</div>
												<div class="form-input">
													<input type="email" id="validationCustom02"
														placeholder="Email Address *" required>
													<label for="validationCustom02"><i class="fas fa-envelope"></i></label>
												</div>
												<div class="form-input">
													<input type="text" id="validationCustom03" placeholder="Subject"
														required>
													<label for="validationCustom03"><i class="fas fa-share"></i></label>
												</div>
												<div class="form-input">
													<input type="tel" id="validationCustom04" placeholder="Phone" required>
													<label for="validationCustom04"><i class="fas fa-share"></i></label>
												</div>
												<div class="form-input">
													<textarea id="validationTextarea" placeholder="Message"
														required></textarea>
													<label for="validationTextarea"><i class="fas fa-share"></i></label>
												</div>
												<div class="form-input">
													<button class="main-btn" type="submit">Send Now</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="w-100 float-start">
			<div class="container">
				<div class="main-footer-logo">
					<a href="index-2.html">
						<img src="{{ asset('frontend/images/ll.png') }}" class="img-fluid" alt="logo">
					</a>
				</div>
				<div class="footer-content text-center">
					<!--<p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
						favorites, view gifts and read messages, edit privacy settings without even seeing .
					</p>-->
					<ul class="media-icon">
						<li><a href="https://web.facebook.com/jayfmjos"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/jayfmjos/"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://x.com/jayfmjos"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.youtube.com/@jaytvjos"><i class="fab fa-youtube"></i></a></li>
						
						
					</ul>
				</div>
				<div class="bootem-footer">
					<p>© Copyright 2024 by <span>Chijindu Iheanacho</span> .
					</p>
					<ul>
						<li><a href="contact.html">Conatct Us</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('frontend/js/range-slider.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('frontend/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('frontend/js/custom.js') }}"></script>
	<script>
		var tpj = jQuery;
		var revapi1078;
		tpj(document).ready(function () {
			if (tpj("#rev_slider_1078_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_1078_1");
			} else {
				revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "revolution/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "zeus",
							enable: true,
							hide_onmobile: true,
							hide_under: 600,
							hide_onleave: true,
							hide_delay: 200,
							hide_delay_mobile: 1200,
							tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 30,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 30,
								v_offset: 0
							}
						},
						bullets: {
							enable: true,
							hide_onmobile: true,
							hide_under: 600,
							style: "metis",
							hide_onleave: true,
							hide_delay: 200,
							hide_delay_mobile: 1200,
							direction: "horizontal",
							h_align: "center",
							v_align: "bottom",
							h_offset: 0,
							v_offset: 30,
							space: 5,
							
						}
					},
					viewPort: {
						enable: true,
						outof: "pause",
						visible_area: "80%",
						presize: false
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [937, 740, 590, 510],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						type: "mouse",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		});	/*ready*/
	</script>
	<script>
		// counter js start
		$(document).ready(function ($) {
			function isScrolledIntoView(elem) {
				var docViewTop = $(window).scrollTop();
				var docViewBottom = docViewTop + $(window).height();
				var elemTop = $(elem).offset().top;
				var elemBottom = elemTop + $(elem).height();
				return ((elemBottom <= docViewBottom));
			}
			function countUp() {
				$('.counter').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');

					$({ countNum: $this.text() }).animate({
						countNum: countTo
					},

						{

							duration: 8000,
							easing: 'linear',
							step: function () {
								$this.text(Math.floor(this.countNum));
							},
							complete: function () {
								$this.text(this.countNum);
								//alert('finished');
							}

						});
				});
			}
			$(document).scroll(function () {
				if (isScrolledIntoView(".counter")) {
					countUp();
				}
			});
		});

	</script>
</body>
</html>
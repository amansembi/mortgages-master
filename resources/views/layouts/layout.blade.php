<?php
$site_url = 'http://'.$_SERVER['SERVER_NAME'].'/mortgages';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mortgages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
	<!-- <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('resources/css/semantic-ui.css')}}">
	<link rel="stylesheet" href="{{asset('resources/css/bootstrap.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

	<link rel="stylesheet" href="{{asset('resources/css/main.css')}}">
	<!--<link rel="stylesheet" href="{{asset('resources/css/style.css')}}">-->

	<script src="{{asset('resources/js/jquery.min.js')}}"></script>
	
	<script src="{{asset('resources/js/app.js')}}"></script>
	<script src="{{asset('resources/js/popper.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
	<div class="wrapper">
		@section('header')
		<header class="header-sec  home-header-sec<?php //if($pagename == 'home-page'){echo 'home-header-sec';} ?>">
			<section class="main-header bg-blue text-white">
				<div class="container">
					<div class="navbar">
						<a class="navbar-brand" href="{{url('/')}}">
							<img src="{{asset('resources/img/Logo.png')}}" alt="Logo">
						</a>

						<ul class="navbar-nav flex-row">
							<li class="d-none d-sm-block"><a href="javascript:void(0);">Apply Now</a></li>
							<li class="d-none d-sm-block"><a class="phone" href="tel:(+44) 111-222-333">(+44) 111-222-333</a></li>
							<li class="h-lines">
								<a class="bar-li" href="javascript:void(0);" onclick="openNav()">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</li>
						</ul>
					</div><!-- navbar -->					
				</div><!-- container -->
			</section>

			<nav id="mySidenav" class="sidenav">
				<div class="container">
					<div class="menu-sec">
						<div class="row justify-content-between px-3 py-2 mb-4">
							<ul class="navbar-nav flex-row d-sm-none mobile-contact">
								<li><a href="javascript:void(0);">Apply Now</a></li>
								<li><a class="phone" href="tel:(+44) 111-222-333">(+44) 111-222-333</a></li>
							</ul>
							<div>
								<a href="javascript:void(0)" class="closebtn bar-li" onclick="closeNav()">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
						
						<div class="row web-menu-bx">
							<div class="col-lg-3 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="{{url('/mortgageGuide')}}">Mortgage Guide</a>
										<ul class="sub-menu">
											<li><a href="{{url('/mortgageGuide/firstTimeBuyer')}}">first-time-buyer</a></li>
										</ul>
									</li>

									<li>
										<a href="{{url('/mortgageCalculators')}}">Calculators</a>
										<ul class="sub-menu">
											<li><a href="{{url('/mortgageCalculators/buyerMortgageCalculators')}}">Buyer Mortgage Calculators</a></li>
											<li><a href="{{url('/mortgageCalculators/mortgageCalculatorsDetail')}}">Mortgage Calculators Detail</a></li>
										</ul>
									</li>
									
									<li>
										<a href="{{url('/lifeInsurance')}}">Life Insurance</a>
									</li>

									<li>
										<a href="{{url('/ourValues')}}">Our Values</a>
									</li>
								</ul>
							</div><!-- col -->

							<div class="col-lg-3 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="{{url('/conveyancing')}}">Conveyancing</a>
									</li>

									<li>
										<a href="{{url('/bestGuysBuyer')}}">Mortgage Best buy</a>
									</li>

									<li>
										<a href="{{url('/customerReviews')}}">Reviews</a>
									</li>

									<li>
										<a href="{{url('/news')}}">News & Insight</a>
									</li>
								</ul>
							</div><!-- col -->

							<div class="col-lg-3 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="{{url('/about')}}">About</a>
									</li>

									<li>
										<a href="{{url('/awards')}}">Awards</a>
									</li>

									<li>
										<a href="{{url('/career')}}">Careers</a>
									</li>

									<li>
										<a href="{{url('/contact')}}">Contact Us</a>
									</li>
								</ul>
							</div><!-- col -->

							<div class="col-lg-3 col-sm-6">
								<ul class="login-menu">
									<li>
										@guest
										<a class="white-btn" href="{{ route('layouts/login') }}">Log In</a>
										@if (Route::has('register'))
										<a class="white-btn" href="{{ route('layouts/register') }}">Register</a>
										@endif
										@else
										<a class="white-btn" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">Log Out</a>
										@endguest
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</div><!-- col -->
						</div><!-- web row -->

						<div class="mobile-menu-bx">
							<ul class="row">
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-1.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Mortgage Guide</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-2.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Calculators</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-3.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Life Insurance</p>
									</a>
								</li><!-- col -->

								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-4.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Our Values</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-5.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Conveyancing</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-6.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Mortgage Best buy</p>
									</a>
								</li><!-- col -->

								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-7.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Reviews</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-8.png')}}" alt="Menu Icon"></span>
										</div>
										<p>News & Insight</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-9.png')}}" alt="Menu Icon"></span>
										</div>
										<p>About</p>
									</a>
								</li><!-- col -->

								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-10.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Awards</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-11.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Careers</p>
									</a>
								</li><!-- col -->
								<li class="col-4">
									<a class="m-icon-dv" href="javascript:void(0);">
										<div class="icon">
											<span><img src="{{asset('resources/img/m-Icons/Menu-12.png')}}" alt="Menu Icon"></span>
										</div>
										<p>Contact Us</p>
									</a>
								</li><!-- col -->
							</ul><!-- row -->

						</div><!-- mobile menu -->
						
					</div><!-- menu-sec -->
				</div><!-- container -->
			</nav>
		</header><!-- header -->

		@show


		<div class="content">
			@section('content')
			
			@show
		</div>
		
		
		@section('footer')
		<!-- Footer -->

		<footer class="footer-sec bg-black">	
			<section class="footer-top text-center">
				<div class="container">
					<ul class="navbar-nav flex-row flex-wrap justify-content-center">
						<li><a href="javascript:void(0);">First time buyer</a></li>
						<li><a href="javascript:void(0);">Buying a home</a></li>
						<li><a href="javascript:void(0);">Remortgage your home</a></li>
						<li><a href="javascript:void(0);">Buy to Let</a></li>
					</ul>
				</div><!-- container -->
			</section><!-- footer-top -->

			<section class="main-footer common-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="footer-bx footer-1">
								<a class="navbar-brand" href="{{url('/')}}">
									<img src="{{asset('resources/img/Logo.png')}}" alt="Logo">
								</a>
								<div class="entry-txt mt-3">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
								</div>
							</div><!-- footer-bx -->
						</div><!-- col -->

						<div class="col-lg-2">
							<div class="footer-bx footer-2">
								<h3 class="footer-title">Quik links</h3>
								<ul class="navbar-nav">
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/about')}}">About us</a></li>
									<li><a href="{{url('/contact')}}">Contact</a></li>
									<li><a href="{{url('/')}}">Blog</a></li>
								</ul>
							</div><!-- footer-bx -->
						</div><!-- col -->

						<div class="col-lg-2">
							<div class="footer-bx footer-3">
								<h3 class="footer-title">Information</h3>
								<ul class="navbar-nav">
									<li><a href="{{url('/news')}}">News</a></li>
									<li><a href="{{url('/ourValues')}}">Our Values</a></li>
									<li><a href="{{url('/')}}">Privacy Policy</a></li>
								</ul>
							</div><!-- footer-bx -->
						</div><!-- col -->

						<div class="col-lg-4">
							<div class="footer-bx footer-4">
								<h3 class="footer-title">Subscribe Our Letters</h3>

								<form>
									<div class="subscribe-email d-flex">
										<div class="input-email">
											<input type="text" class="form-control" id="email" placeholder="Enter email">
										</div>
										<div class="submit">
											<button type="submit" class="common-btn">submit</button>
										</div>
									</div>
								</form>

								<div class="review-bx mt-4">
									<div class="img">
										<img src="{{asset('resources/img/Google-Logo.png')}}" alt="Review">
									</div>
									<div class="review-dv">
										<span><i class="fa fa-star" aria-hidden="true"></i></span>
										<span><i class="fa fa-star" aria-hidden="true"></i></span>
										<span><i class="fa fa-star" aria-hidden="true"></i></span>
										<span><i class="fa fa-star" aria-hidden="true"></i></span>
										<span><i class="fa fa-star" aria-hidden="true"></i></span>
									</div>
									<p class="text">View Our Reviews on Google</p>
								</div>

							</div><!-- footer-bx -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</section><!-- footer-top -->

			<section class="footer-bottom text-center">
				<div class="container">
					<div class="social-links d-flex flex-wrap justify-content-center">
						<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div><!-- social-links -->

					<div class="entry-txt">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					</div><!-- entry-txt -->
				</div><!-- container -->
			</section><!-- footer-top -->
		</footer><!-- footer -->
		@include('floaticon')
		<!-- Footer -->
		<section class="copyright-bx text-center bg-light-black">
			<div class="container">
				<div class="copyright">© 2019 Mortgage. All Rights Reserved by Digimantra Labs</div>
			</div><!-- container -->
		</section><!-- footer-top -->

		@show
	</div><!-- wrapper -->
	<script src="{{asset('resources/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('resources/js/custom.js')}}"></script>
</body>
</html>
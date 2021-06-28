@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">About Us</h1>
			<div class="banner-desc">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			</div>
			<div class="links mt-5">
				<a class="white-btn" href="javascript:void(0);">Buy Property</a>
				<a class="white-btn" href="javascript:void(0);">Remortgage</a>
			</div>
		</div><!-- caption-bx -->

		<nav class="breadcrumb-bx" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About</li>
			</ol>
		</nav>
	</div><!-- container -->
</section><!-- banner-sec -->

<section class="schedule-sec mg-schedule-sec">
<div class="schedule_submit">
	@include('scheduleForm')	
	</div>
</section><!-- schedule-sec -->

<main class="main-bx">
	<section class="common-sec type-mortgage-sec">
		<div class="container">
			<div class="title-bx text-center">
				<span class="sub-title">Type of Mortgages</span>
				<h2 class="entry-title m-0">How can we help you?</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="row mt-5 text-center">
				<div class="col-lg-3 col-sm-6">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/house-1.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">First time buyer</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/house-2.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Buying a home</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/house-3.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Remortgage your home</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/house-4.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Buy to Let</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="about-services mt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="img img-cover h-100">
							<img src="{{asset('resources/img/blog-1.png')}}" alt="Image">
						</div>
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">Some important information about our service</h2>
							<div class="entry-txt">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
							</div><!-- entry-txt -->
						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- about-services -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec bg-img-sec text-white text-center call-us-today" style="background-image:url(resources/img/CTA.png);">
		<div class="container z-index1">
			<h2 class="entry-title">Call us to start saving today 111-222-333</h2>
			<p class="text">Or continue online - Do you want to</p>
			<div class="links muti-links mt-5">
				<a class="white-btn" href="javascript:void(0);">Buy Property</a>
				<a class="white-btn" href="javascript:void(0);">Remortgage</a>
			</div>
		</div><!-- container -->
	</section>

	<section class="common-sec our-team-sec text-center">
		<div class="container">
			<div class="title-bx">
				<h2 class="entry-title m-0">Our Team</h2>
				<span class="bot-bar"></span>
			</div>

			<div class="row">
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="team-bx">
						<div class="img">
							<div class="profile-image">
								<img src="{{asset('resources/img/team-1.jpg')}}" alt="Profile Image">
							</div>
						</div>
						<div class="entry-txt box-shadow p-3">
							<h4 class="name text-black mt-3">Lara</h4>
							<p class="designation">Sales Director</p>
							<div class="social-links d-flex flex-wrap justify-content-center">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
						</div><!-- entry-txt -->
					</div><!-- team-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="team-bx">
						<div class="img">
							<div class="profile-image">
								<img src="{{asset('resources/img/team-2.jpg')}}" alt="Profile Image">
							</div>
						</div>
						<div class="entry-txt box-shadow p-3">
							<h4 class="name text-black mt-3">Tom</h4>
							<p class="designation">Sales Director</p>
							<div class="social-links d-flex flex-wrap justify-content-center">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
						</div><!-- entry-txt -->
					</div><!-- team-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="team-bx">
						<div class="img">
							<div class="profile-image">
								<img src="{{asset('resources/img/team-3.jpg')}}" alt="Profile Image">
							</div>
						</div>
						<div class="entry-txt box-shadow p-3">
							<h4 class="name text-black mt-3">James</h4>
							<p class="designation">Sales Director</p>
							<div class="social-links d-flex flex-wrap justify-content-center">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
						</div><!-- entry-txt -->
					</div><!-- team-bx -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="team-bx">
						<div class="img">
							<div class="profile-image">
								<img src="{{asset('resources/img/team-4.jpg')}}" alt="Profile Image">
							</div>
						</div>
						<div class="entry-txt box-shadow p-3">
							<h4 class="name text-black mt-3">Peter</h4>
							<p class="designation">Sales Director</p>
							<div class="social-links d-flex flex-wrap justify-content-center">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
						</div><!-- entry-txt -->
					</div><!-- team-bx -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- common-sec -->
</main><!-- main -->

<section class="common-sec schedule-form-sec bg-gray">
	<div class="container">
		<div class="title-bx text-center mb-5">
			<h2 class="entry-title m-0">We Find Best Mortgage For You!</h2>
			<span class="bot-bar"></span>
		</div><!-- title-bx -->
		<div class="schedule_submit">
			@include('scheduleForm')
		</div>
	</div><!-- container -->
</section><!-- common sec -->
@endsection
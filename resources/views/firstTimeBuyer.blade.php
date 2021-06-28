@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(../resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">First Time Buyer Mortgage</h1>
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
				<li class="breadcrumb-item"><a href="{{url('/mortgageGuide')}}">Mortgage Guide</a></li>
				<li class="breadcrumb-item active" aria-current="page">First Time Buyer</li>
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
	<section class="common-sec mortgage-guide-top-sec">
		<div class="container">
			<div class="title-bx text-center">
				<span class="sub-title">Type of Mortgages</span>
				<h2 class="entry-title m-0">How can we help you?</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="row text-center justify-content-center">
				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/Document-1.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">First time buyer</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/Document-2.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Buying a home</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/Document-3.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Remortgage your home</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/Document-4.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Buy to Let</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/Document-5.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">Life Insurance</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... <a href="javascript:void(0);">Read More</a></p>
					</div><!-- common-icon-bx -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="about-services mt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="img img-cover h-100">
							<img src="{{asset('resources/img/feature2.png')}}" alt="Image">
						</div>
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">Helpful Guides for First Time Buyers</h2>
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

	<section class="common-sec buyer-guides-link-sec bg-gray">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<h2 class="entry-title m-0">First time buyer guides</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			<div class="box-shadow">
				<ul class="cta-link-sec">
					<li>
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="text-black">How much deposit do I need to buy a house?</span>
									<a href="" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span class="text-black">Japanese Knotweed: What is it and will it affect your mortgage?</span>
									<a href="" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">Mortgage Broker Fees</span>
									<a href="" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec bg-img-sec text-white text-center call-us-today" style="background-image:url(../resources/img/CTA.png);">
		<div class="container z-index1">
			<h2 class="entry-title">Call us to start saving today 111-222-333</h2>
			<p class="text">Or continue online - Do you want to</p>
			<div class="links muti-links mt-5">
				<a class="white-btn" href="javascript:void(0);">Buy Property</a>
				<a class="white-btn" href="javascript:void(0);">Remortgage</a>
			</div>
		</div><!-- container -->
	</section>
</main><!-- main -->

<section class="common-sec schedule-form-sec">
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
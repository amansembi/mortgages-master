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
				<li class="breadcrumb-item"><a href="{{url('/mortgageCalculators')}}">Mortgage Calculators</a></li>
				<li class="breadcrumb-item active" aria-current="page">Mortgage Calculators Detail</li>
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
			<div class="about-services mt-5">
			@foreach($first_time_buyers as $firstTimeBuyers)
				<div class="row">
					<div class="col-lg-6">
						<div class="img img-cover h-100">
							<img src="{{url($firstTimeBuyers->image1)}}" alt="Image">
						</div>
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">{{$firstTimeBuyers->title}}</h2>
							<div class="entry-txt">
								{!! $firstTimeBuyers->description !!}								
							</div><!-- entry-txt -->
						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->
				@endforeach
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

	<section class="common-sec practical-gadgets-sec text-center">
		<div class="container">

			<div class="title-bx">
				<span class="sub-title">Practical gadgets to help keep things simple</span>
				<h2 class="entry-title m-0">Handy tools and calculators for first time buyers</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="row text-center justify-content-center">
				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/icon-111.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">How much can I borrow?</h5>
						<p>A quick check to find out what size mortgage you can get on your income.</p>
						<div class="link">
							<a class="common-btn btn-radius" href="javascript:void(0);">How much can I borrow?</a>
						</div>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/icon-112.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">How much will my mortgage payments be?</h5>
						<p>Find out what your mortgage is going to cost each month.</p>
						<div class="link">
							<a class="common-btn btn-radius" href="javascript:void(0);">Calculate mortgage payments</a>
						</div>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/icon-113.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">How much stamp duty will I pay?</h5>
						<p>Find out how much you'll need to put aside for stamp duty.</p>
						<div class="link">
							<a class="common-btn btn-radius" href="javascript:void(0);">Stamp duty calculator</a>
						</div>
					</div><!-- common-icon-bx -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="link mt-5 text-center">
				<a class="common-btn btn-large btn-radius h3 px-5" href="javascript:void(0);">See All Mortgage Calculators</a>
			</div>
		</div><!-- container -->		
	</section><!-- common sec -->

	<section class="common-sec bg-gray mortgage-offers-sec">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<h2 class="entry-title m-0">Latest Mortgage Offers</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="latest-offers-bx">
				<div class="latest-offers-dv p-4 box-shadow bg-white">
					<div class="row m-0">
						<div class="img box-shadow">
							<img src="{{asset('resources/img/Mortgage-Logo.png')}}" alt="Image">
						</div><!-- img -->
						<div class="entry-txt px-4 d-flex flex-wrap justify-content-between">
							<div class="txt-bx mr-sm-3">
								<div class="based">Based on a mortgage of £125,000 at 50% LTV</div>
								<div class="initial-rate">Initial rate <span class="text-black">0.98% then 4.24% (variable)</span></div>
								<div class="overall-cost">Overall cost for comparison <span class="text-black">3.7% APRC</span></div>
							</div>
							<div class="link">
								<div class="bd">
									<a class="btn-border btn-radius" href="javascript:void(0);">Learn More</a>
								</div>
							</div>
						</div><!-- entry-txt -->
					</div><!-- row -->
				</div><!-- latest-offers-dv -->
				<div class="speak-to-expert bg-blue py-2 px-3">
					Speak to an expert mortgage adviser on <a href="tel:111-222-3333">111-222-3333</a>
				</div>
			</div><!-- latest-offers-bx -->

			<div class="latest-offers-bx">
				<div class="latest-offers-dv p-4 box-shadow bg-white">
					<div class="row m-0">
						<div class="img box-shadow">
							<img src="{{asset('resources/img/Mortgage-Logo.png')}}" alt="Image">
						</div><!-- img -->
						<div class="entry-txt px-4 d-flex flex-wrap justify-content-between">
							<div class="txt-bx mr-sm-3">
								<div class="based">Based on a mortgage of £125,000 at 50% LTV</div>
								<div class="initial-rate">Initial rate <span class="text-black">0.98% then 4.24% (variable)</span></div>
								<div class="overall-cost">Overall cost for comparison <span class="text-black">3.7% APRC</span></div>
							</div>
							<div class="link">
								<div class="bd">
									<a class="btn-border btn-radius" href="javascript:void(0);">Learn More</a>
								</div>
							</div>
						</div><!-- entry-txt -->
					</div><!-- row -->
				</div><!-- latest-offers-dv -->
				<div class="speak-to-expert bg-blue py-2 px-3">
					Speak to an expert mortgage adviser on <a href="tel:111-222-3333">111-222-3333</a>
				</div>
			</div><!-- latest-offers-bx -->

			<div class="latest-offers-bx">
				<div class="latest-offers-dv p-4 box-shadow bg-white">
					<div class="row m-0">
						<div class="img box-shadow">
							<img src="{{asset('resources/img/Mortgage-Logo.png')}}" alt="Image">
						</div><!-- img -->
						<div class="entry-txt px-4 d-flex flex-wrap justify-content-between">
							<div class="txt-bx mr-sm-3">
								<div class="based">Based on a mortgage of £125,000 at 50% LTV</div>
								<div class="initial-rate">Initial rate <span class="text-black">0.98% then 4.24% (variable)</span></div>
								<div class="overall-cost">Overall cost for comparison <span class="text-black">3.7% APRC</span></div>
							</div>
							<div class="link">
								<div class="bd">
									<a class="btn-border btn-radius" href="javascript:void(0);">Learn More</a>
								</div>
							</div>
						</div><!-- entry-txt -->
					</div><!-- row -->
				</div><!-- latest-offers-dv -->
				<div class="speak-to-expert bg-blue py-2 px-3">
					Speak to an expert mortgage adviser on <a href="tel:111-222-3333">111-222-3333</a>
				</div>
			</div><!-- latest-offers-bx -->

			<div class="link mt-5 text-center">
				<a class="common-btn btn-radius h4 m-0" href="javascript:void(0);">See All Mortgage best buys</a>
			</div>
			
		</div><!-- container -->
	</section>
	
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
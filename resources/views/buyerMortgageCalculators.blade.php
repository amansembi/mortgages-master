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
				<li class="breadcrumb-item active" aria-current="page">Buyer Mortgage calculators</li>
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
	<section class="common-sec mortgage-calculators-top-sec">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<h2 class="entry-title m-0">First Time Buyer Mortgage calculators</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="description text-center">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
			</div>

			<div class="row mt-5">
				<div class="col-md-6">
					<div class="calculate-form form-bx">
						<h3 class="title text-black">How much can I borrow?</h3>

						<form id="borrow-calculate-form" action="" method="post">
							<div class="form-group">
								<label class="text-black">Annual Salary</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="250,000">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="text-black">Partner Annual Salary (if applicable)</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>

							<div class="submit">
								<button type="submit" class="common-btn btn-radius px-5">Calculate</button>
							</div>
						</form>
					</div><!-- form-bx -->
				</div><!-- col-lg-6 -->

				<div class="col-md-6">
					<div class="calculate-form form-bx">
						<h3 class="title text-black">How much will it cost?</h3>

						<form id="cost-calculate-form" action="" method="post">
							<div class="form-group">
								<label class="text-black">How much do you want to borrow?</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="25">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="text-black">Remaining mortgage term</label>
								<div class="input-field row mx-0 align-items-center">
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="text-black">Rate</label>
								<div class="input-field row mx-0 align-items-center">
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>

							<div class="submit">
								<button type="submit" class="common-btn btn-radius px-5">Calculate</button>
							</div>
						</form>
					</div><!-- form-bx -->
				</div><!-- col-lg-6 -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec practical-gadgets-sec text-center bg-gray">
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

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/icon-5.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">What will my loan to value percentage be?</h5>
						<p>Find out what your mortgage is going to cost each month.</p>
						<div class="link">
							<a class="common-btn btn-radius" href="javascript:void(0);">Calculate loan to value</a>
						</div>
					</div><!-- common-icon-bx -->
				</div><!-- col -->

				<div class="col-lg-4 col-sm-6 mt-5">
					<div class="common-icon-bx">
						<div class="img">
							<span class="icon"><img src="{{asset('resources/img/icon-7.png')}}" alt="Icon"></span>
						</div>
						<h5 class="text-black mb-4">What will happen if rates change?</h5>
						<p>Find out how much you'll need to put aside for stamp duty.</p>
						<div class="link">
							<a class="common-btn btn-radius" href="javascript:void(0);">Rate change calculator</a>
						</div>
					</div><!-- common-icon-bx -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="link mt-5 text-center">
				<a class="common-btn btn-large btn-radius h3 px-5" href="javascript:void(0);">All Calculators</a>
			</div>
		</div><!-- container -->		
	</section><!-- common sec -->
	
	<section class="common-sec bg-img-sec text-white text-center call-us-today" style="background-image:url(../resources/img/CTA.png);">
		<div class="container z-index1">
			<h2 class="entry-title">Call us to start saving today 111-222-333</h2>
			<p class="text">Or continue online - Do you want to</p>
			<div class="links muti-links mt-5">
				<a class="white-btn" href="javascript:void(0);">Buy Property</a>
				<a class="white-btn" href="javascript:void(0);">Remortgage</a>
			</div>
		</div><!-- container -->
	</section><!-- common sec -->

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
		</div><!-- container -->
	</section><!-- common sec -->
</main><!-- main -->

<section class="common-sec schedule-form-sec bg-gray">
	<div class="container">
		<div class="title-bx text-center mb-5">
			<h2 class="entry-title m-0">We Find Best Mortgage For You!</h2>
			<span class="bot-bar"></span>
		</div><!-- title-bx -->

		@include('scheduleForm')
	</div><!-- container -->
</section><!-- common sec -->
@endsection
@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Life Insurance</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Life Insurance</li>
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
			<div class="mt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="img img-cover h-100">
							<img src="{{asset('resources/img/feature2.png')}}" alt="Image">
						</div>
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">Mortgage Calculators</h2>
							<div class="entry-txt mb-4">
								<p>Protection for you and your family might not cost as much as you think.</p>
								<p>For example, a 30 year old non smoker could have £100,000 worth of life insurance over 25 years for just £5.26 a month. And adding the same amount of valuable critical illness cover could cost as little as £18 extra.</p>
								<p>It’s easy to find out exactly how much you can afford with our online quote tool.</p>
							</div><!-- entry-txt -->

							<div class="entry-txt">
								<h4 class="text-black">Choose a Section</h4>
								
								<div class="cta-link-sec small">
									<div class="row">
										<div class="col-sm-6 mb-4">
											<div class="card">
												<div class="card-header" id="headingOne">
													<h6 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<span class="text-black">What is life cover?</span>
														<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
													</h6>
												</div>
											</div>
										</div><!-- col -->

										<div class="col-sm-6 mb-4">
											<div class="card">
												<div class="card-header" id="headingOne">
													<h6 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<span class="text-black"> BMI calculator</span>
														<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
													</h6>
												</div>
											</div>
										</div><!-- col -->

										<div class="col-sm-6 mb-4">
											<div class="card">
												<div class="card-header" id="headingOne">
													<h6 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<span class="text-black"> What will it cost? Get a quote now</span>
														<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
													</h6>
												</div>
											</div>
										</div><!-- col -->
									</div><!-- row -->
								</div><!-- cta-link-sec -->

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
				<h2 class="entry-title m-0">The key things you need to know about protection</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			<div class="box-shadow">
				<ul class="cta-link-sec">
					<li>
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="text-black">What is life cover?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span class="text-black">What is critical illness cover?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">What is family income benefit?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">What is income protection?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">Life insurance vs assurance</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">What do I need for my life insurance application?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>
					
					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">Louis' story</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">Luke’s story</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>

					<li>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0 d-flex justify-content-between align-items-center">
									<span class="text-black">What type of life insurance do I need?</span>
									<a href="javascript:void(0);" class="icon"><img src="{{asset('resources/img/document.png')}}" alt="Icon"></a>
								</h5>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="link mt-5 text-center">
				<a class="common-btn btn-large btn-radius" href="javascript:void(0);">See all guides</a>
			</div>

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
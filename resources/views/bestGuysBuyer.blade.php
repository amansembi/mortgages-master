@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
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
				<li class="breadcrumb-item active" aria-current="page">Best Guys Buyer</li>
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
	<section class="common-sec best-guys-top-sec">
		<div class="container">
			<div class="title-bx text-center">
				<h2 class="entry-title m-0">Compare 1000 of first time buyer mortgage rates & deals</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="description mt-5 text-center">
				Our best buy tables are a great starting point to give you an idea of what rates are available, but to find out which deals you actually qualify for use our Online Mortgage Finder or speak to one of our expert advisers. Whichever one you choose you’ll benefit from our expert help and support throughout the entire mortgage process.
			</div>

			<div class="calculate-form bestguys-calculate-form form-bx">
				<h3 class="title text-black mb-4">Calculator</h3>

				<form id="bestguys-calculate-form" action="" method="post">
					<div class="row">
						<div class="col-lg-4 col-sm-6 mt-5">
							<div class="form-group">
								<label class="text-black">Loan Type</label>
								<div class="input-radio row mx-0 align-items-center">
									<div class="input">
										<input type="radio" name="loan-type" id="l-payment">
										<label class="radio-btn" for="l-payment">Repayment</label>
									</div>
									<div class="input">
										<input type="radio" name="loan-type" id="l-interest" checked>
										<label class="radio-btn" for="l-interest">Interest Only</label>
									</div>
								</div>
							</div>
						</div><!-- col -->

						<div class="col-lg-4 col-sm-6 mt-5">
							<div class="form-group">
								<label class="text-black">House Price</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="250,000">
									</div>
								</div>
							</div>
						</div><!-- col -->

						<div class="col-lg-4 col-sm-6 mt-5">
							<div class="form-group">
								<label class="text-black">Mortgage Term</label>
								<div class="input-field row mx-0 align-items-center">
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>
						</div><!-- col -->

						<div class="col-lg-4 col-sm-6 mt-5">
							<div class="form-group">
								<label class="text-black">Mortgage Amount</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>
						</div><!-- col -->

						<div class="col-lg-4 col-sm-6 mt-5">
							<div class="form-group">
								<label class="text-black">Interest only Amount</label>
								<div class="input-field row mx-0 align-items-center">
									<span class="icon"><i class="fa fa-gbp" aria-hidden="true"></i></span>
									<div class="input">
										<input type="text" class="form-control" id="" placeholder="0">
									</div>
								</div>
							</div>
						</div><!-- col -->
					</div><!-- row -->

					<div class="submit text-center mt-5">
						<button type="submit" class="common-btn btn-large btn-radius px-5">Find Mortgages</button>
					</div>
				</form>
			</div><!-- form-bx -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec matching-mortgages-sec bg-gray">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<h2 class="entry-title m-0">Matching Mortgages</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			<div class="row">
				<div class="col-lg-3 bg-white box-shadow">
					<div class="row p-3 justify-content-between">
						<div class="title-bx filters-title-bx">
							<h4 class="entry-title m-0 pb-0">Filters</h4>
							<span class="bot-bar"></span>
						</div>

						<div class="title-bx">
							<a href="javascript:void(0);" class="h4 text-blue m-0 pb-0">Reset All</a>
						</div>
					</div>

					<div class="filter-sec pt-3">
						<div class="filter-cat-dv mb-4">
							<div class="row px-2">
								<div class="col-sm-6 px-1">
									<div class="cat-input">
										<input type="radio" name="perchase_remortgage" id="purchase" checked>
										<label class="radio-btn" for="purchase">Purchase</label>
									</div>
								</div><!-- col -->

								<div class="col-sm-6 px-1">
									<div class="cat-input">
										<input type="radio" name="perchase_remortgage" id="remortgage">
										<label class="radio-btn" for="remortgage">Remortgage</label>
									</div>
								</div><!-- col -->

								<div class="col-sm-6 px-1">
									<div class="cat-input">
										<input type="radio" name="residential_buytolet" id="residential" checked>
										<label class="radio-btn" for="residential">Residential</label>
									</div>
								</div><!-- col -->

								<div class="col-sm-6 px-1">
									<div class="cat-input">
										<input type="radio" name="residential_buytolet" id="buy_to_let">
										<label class="radio-btn" for="buy_to_let">Buy - To- Let</label>
									</div>
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- filter-cat -->

						<div class="filter-dv mb-4">
							<h4 class="text-black mb-3">Types of Mortgage</h4>
							<div class="filter-options">
								<div class="radio">
									<input id="radio-1" name="fixed" type="checkbox" checked>
									<label for="radio-1" class="radio-label">Fixed</label>
								</div>
								<div class="radio">
									<input id="radio-2" name="variable" type="checkbox">
									<label  for="radio-2" class="radio-label">Variable</label>
								</div>
							</div><!-- filter-options -->
						</div><!-- filter-dv -->

						<div class="filter-dv mb-4">
							<h4 class="text-black mb-3">Product Period</h4>
							<div class="filter-options">
								<div class="radio">
									<input id="radio-3" name="Upto_years2" type="checkbox" checked>
									<label for="radio-3" class="radio-label">Up to 2 years</label>
								</div>
								<div class="radio">
									<input id="radio-4" name="years3" type="checkbox">
									<label  for="radio-4" class="radio-label">3 years</label>
								</div>
								<div class="radio">
									<input id="radio-5" name="years5" type="checkbox">
									<label  for="radio-5" class="radio-label">5 years</label>
								</div>
								<div class="radio">
									<input id="radio-6" name="morethan_years5" type="checkbox">
									<label  for="radio-6" class="radio-label">More than 5 years</label>
								</div>
							</div><!-- filter-options -->
						</div><!-- filter-dv -->

						<div class="filter-dv mb-4">
							<h4 class="text-black mb-3">Others Features</h4>
							<div class="filter-options">
								<div class="radio">
									<input id="radio-7" name="helpto_buy" type="checkbox" checked>
									<label for="radio-7" class="radio-label">Help To Buy</label>
								</div>
								<div class="radio">
									<input id="radio-8" name="offset" type="checkbox">
									<label  for="radio-8" class="radio-label">Offset</label>
								</div>
								<div class="radio">
									<input id="radio-9" name="early_repayment_charge" type="checkbox">
									<label  for="radio-9" class="radio-label">No Early repayment charge</label>
								</div>
							</div><!-- filter-options -->
						</div><!-- filter-dv -->

						<div class="link text-center">
							<a class="common-btn btn-radius px-5" href="javascript:void(0);">Update</a>
						</div>
					</div><!-- filter-sec -->
				</div><!-- col -->

				<div class="col-lg-9">
					<div class="matching-mortgages-offers">
						<div class="latest-offers-bx">
							<div class="latest-offers-dv p-4 box-shadow bg-white">
								<p class="text-black font-weight-bold">Max LTV 60%: Base +0.43% to 31/12/21</p>
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
											<h4 class="text-red mb-0">Annual cost</h4>
											<p class="text-black">£6,376</p>
											<div class="links-dv d-inline-flex flex-column">
												<div class="bd mb-3">
													<a class="btn-border" href="javascript:void(0);">Enquire</a>
												</div>
												<div class="bd">
													<a class="btn-border" href="javascript:void(0);">More</a>
												</div>
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
								<p class="text-black font-weight-bold">Max LTV 60%: Base +0.43% to 31/12/21</p>
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
											<h4 class="text-red mb-0">Annual cost</h4>
											<p class="text-black">£6,376</p>
											<div class="links-dv d-inline-flex flex-column">
												<div class="bd mb-3">
													<a class="btn-border" href="javascript:void(0);">Enquire</a>
												</div>
												<div class="bd">
													<a class="btn-border" href="javascript:void(0);">More</a>
												</div>
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
								<p class="text-black font-weight-bold">Max LTV 60%: Base +0.43% to 31/12/21</p>
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
											<h4 class="text-red mb-0">Annual cost</h4>
											<p class="text-black">£6,376</p>
											<div class="links-dv d-inline-flex flex-column">
												<div class="bd mb-3">
													<a class="btn-border" href="javascript:void(0);">Enquire</a>
												</div>
												<div class="bd">
													<a class="btn-border" href="javascript:void(0);">More</a>
												</div>
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
								<nav class="pagination-bx">
									<h4 class="text-center text-black">Next to Another Page</h4>
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<span class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
										</li>
										<li class="page-item disabled">
											<span class="page-link"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active" aria-current="page">
											<span class="page-link">
												2
												<span class="sr-only">(current)</span>
											</span>
										</li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
										</li>
									</ul>
								</nav>
							</div><!-- latest-offers-dv -->
						</div><!-- latest-offers-bx -->

					</div><!-- matching-mortgages-offers -->
				</div><!-- col -->
			</div><!-- row -->
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
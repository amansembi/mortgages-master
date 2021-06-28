@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Customer Reviews</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Customer Reviews</li>
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
	<section class="common-sec customer-reviews-sec">
		<div class="container">
			<div class="title-bx text-center mb-4">
				<span class="sub-title">Reviews</span>
				<h2 class="entry-title m-0">Customer Reviews</h2>
				<span class="bot-bar"></span>
			</div>

			<div class="description text-center mb-5">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
			</div><!-- description -->

			<div class="row">
				<div class="col-lg-8">
					<div class="entry-content">
						<div class="customer-reviews">
							<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus vitae animi voluptas libero obcaecati culpa accusantium fugit sapiente qui fuga, necessitatibus molestiae ducimus nihil architecto harum aperiam earum dolor dignissimos.</p>
							<div class="c-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<h3 class="name text-blue mt-3">Cheryelle Robinson</h3>
						</div><!-- customer-reviews -->
						<hr>

						<div class="customer-reviews">
							<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus vitae animi voluptas libero obcaecati culpa accusantium fugit sapiente qui fuga, necessitatibus molestiae ducimus nihil architecto harum aperiam earum dolor dignissimos.</p>
							<div class="c-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<h3 class="name text-blue mt-3">Cheryelle Robinson</h3>
						</div><!-- customer-reviews -->
						<hr>

						<div class="customer-reviews">
							<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus vitae animi voluptas libero obcaecati culpa accusantium fugit sapiente qui fuga, necessitatibus molestiae ducimus nihil architecto harum aperiam earum dolor dignissimos.</p>
							<div class="c-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<h3 class="name text-blue mt-3">Cheryelle Robinson</h3>
						</div><!-- customer-reviews -->
						<hr>
					</div><!-- entry-content -->

					<nav class="pagination-bx mt-5">
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
				</div><!-- col -->

				<div class="col-lg-4">
					<div class="sidebar-sec">
						<div class="sidebar-bx">
							<div class="entry-txt text-center">
								<div class="img my-4">
									<span class="icon">
										<img src="{{asset('resources/img/side-bar.png')}}" alt="Call Us">
									</span>
								</div>
								<h3>Call us to start saving today <a href="tel:111-222-333">111-222-333</a></h3>
							</div>
						</div><!-- sidebar-bx -->

						<div class="c-review-slider-dv text-center">
							<h3 cl
							ass="review-title text-blue">Our Online Review</h3>
							<div class="img">
								<img src="{{asset('resources/img/Google-Logo.png')}}" alt="Review">
							</div>

							<div class="c-review-slider mt-4">
								<div>
									<div class="c-review-content">
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quis quae quisquam non laborum modi nisi sit!.
										</div>
										<p class="small my-2">Posted 1 month Ago</p>
									</div>
								</div>

								<div>
									<div class="c-review-content">
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quis quae quisquam non laborum modi nisi sit!.
										</div>
										<p class="small my-2">Posted 1 month Ago</p>
									</div>
								</div>

								<div>
									<div class="c-review-content">
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quis quae quisquam non laborum modi nisi sit!.
										</div>
										<p class="small my-2">Posted 1 month Ago</p>
									</div>
								</div>
							</div><!-- c-review-slider -->
							<h6 class="text-blue">Review</h6>
						</div><!-- c-review-slider-dv -->

					</div><!-- sidebar-bx -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
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
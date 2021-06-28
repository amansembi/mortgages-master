@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">News</h1>
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
				<li class="breadcrumb-item"><a href="{{url('/news')}}">News</a></li>
				<li class="breadcrumb-item active" aria-current="page">News Detail</li>
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
	<section class="common-sec news-blog-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="entry-content">
						<div class="news-bx">
							<h2 class="entry-title text-black mb-2">Shared ownership boost for lower earners</h2>
							<div class="meta-bx d-flex flex-wrap text-black mb-3">
								<div class="posted">
									<span class="icon"><img src="{{asset('resources/img/News-User.png')}}" alt="Icon"></span>
									<span class="posted-txt">Posted by admin</span>
								</div>
								<div class="date">
									<span class="icon"><img src="{{asset('resources/img/News-Calender.png')}}" alt="Icon"></span>
									<span class="date-txt">June 09 2019</span>
								</div>
							</div><!-- meta-bx -->
							<div class="img mb-3">
								<a href="javascript:void(0);">
									<img src="{{asset('resources/img/newsimage.jpg')}}" alt="News Feature">
								</a>
							</div><!-- img -->
							<div class="entry-txt">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							</div>
							
							<div class="share-link-bx mt-5">
								<h4 class="text-black">Follow Us on</h4>
								<div class="social-links d-flex flex-wrap mt-4">
									<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								</div>
							</div><!-- share-links -->
						</div><!-- news-bx -->

					</div><!-- entry-content -->
				</div><!-- col -->

				<div class="col-lg-4">
					<div class="sidebar-sec">
						<div class="sidebar-bx">
							<h2 class="sidebar-title">Categories</h2>
							<div class="entry-txt">
								<ul>
									<li><a href="javascript:void(0);">Buy to Let</a></li>
									<li><a href="javascript:void(0);">Conveyancing</a></li>
									<li><a href="javascript:void(0);">Critical Illness</a></li>
									<li><a href="javascript:void(0);">First Time Buyer</a></li>
									<li><a href="javascript:void(0);">Fixes Rate Mortgages</a></li>
									<li><a href="javascript:void(0);">House Prices</a></li>
									<li><a href="javascript:void(0);">Large Mortgages</a></li>
									<li><a href="javascript:void(0);">Life Insurance</a></li>
									<li><a href="javascript:void(0);">Moving Home</a></li>
									<li><a href="javascript:void(0);">Remortgage</a></li>
									<li><a href="javascript:void(0);">Stamp Duty</a></li>
									<li><a href="javascript:void(0);">Tax</a></li>
									<li><a href="javascript:void(0);">What the Paper Say</a></li>
								</ul>
							</div>
						</div><!-- sidebar-bx -->

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
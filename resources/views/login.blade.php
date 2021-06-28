@extends('layouts/layout')
@section('content')
<section class="banner-sec home-banner" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="caption-bx text-white d-flex flex-column justify-content-center">
					<div>
						<h1 class="page-title">Trusted Advice</h1>
						<div class="banner-desc">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</div>
						<div class="links mt-5">
							<a class="white-btn" href="javascript:void(0);">Buy Property</a>
							<a class="white-btn" href="javascript:void(0);">Remortgage</a>
						</div>
					</div>
				</div><!-- caption-bx -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- banner-sec -->

<section class="schedule-sec home-schedule-sec mg-schedule-sec">
	<?php //include('schedule-form.php'); ?>
	<div class="schedule_submit">
	@include('scheduleForm')
	</div>
</section><!-- schedule-sec -->

<main class="main-bx">
	<section class="common-sec how-works-sec text-center">
		<div class="container">
			<div class="title-bx">
				<span class="sub-title">4 Simple Step</span>
				<h2 class="entry-title m-0">See How We Work</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="row align-items-center work-bg-curve">
				<div class="col-xl-3 col-sm-6 mt-4">
					<div class="work-bx d-flex flex-column justify-content-center">
						<div class="icon-dv">
							<span class="icon">
								<img class="white-icon" src="{{asset('resources/img/icon-1.png')}}" alt="Icon">
								<img class="blue-icon" src="{{asset('resources/img/Blue-icon-1.png')}}" alt="Icon">
							</span>
						</div>
						<div class="heading-dv">
							<span class="sub-heading">Step 1</span>
							<h4 class="heading">Compare & check</h4>
						</div>
						<div class="entry-txt">
							You won't have to tell us any info twice, we'll keep it and put it in the form so you can check it and apply by phone or online.
						</div>
					</div><!-- work-bx -->
				</div><!-- col -->

				<div class="col-xl-3 col-sm-6 mt-4">
					<div class="work-bx d-flex flex-column justify-content-center">
						<div class="icon-dv">
							<span class="icon">
								<img class="white-icon" src="{{asset('resources/img/icon-2.png')}}" alt="Icon">
								<img class="blue-icon" src="{{asset('resources/img/Blue-icon-2.png')}}" alt="Icon">
							</span>
						</div>
						<div class="heading-dv">
							<span class="sub-heading">Step 2</span>
							<h4 class="heading">See if you Qualify</h4>
						</div>
						<div class="entry-txt">
							You won't have to tell us any info twice, we'll keep it and put it in the form so you can check it and apply by phone or online.
						</div>
					</div><!-- work-bx -->
				</div><!-- col -->

				<div class="col-xl-3 col-sm-6 mt-4">
					<div class="work-bx d-flex flex-column justify-content-center">
						<div class="icon-dv">
							<span class="icon">
								<img class="white-icon" src="{{asset('resources/img/icon-3.png')}}" alt="Icon">
								<img class="blue-icon" src="{{asset('resources/img/Blue-icon-3.png')}}" alt="Icon">
							</span>
						</div>
						<div class="heading-dv">
							<span class="sub-heading">Step 3</span>
							<h4 class="heading">Apply Online</h4>
						</div>
						<div class="entry-txt">
							You won't have to tell us any info twice, we'll keep it and put it in the form so you can check it and apply by phone or online.
						</div>
					</div><!-- work-bx -->
				</div><!-- col -->

				<div class="col-xl-3 col-sm-6 mt-4">
					<div class="work-bx d-flex flex-column justify-content-center">
						<div class="icon-dv">
							<span class="icon">
								<img class="white-icon" src="{{asset('resources/img/icon-4.png')}}" alt="Icon">
								<img class="blue-icon" src="{{asset('resources/img/Blue-icon-4.png')}}" alt="Icon">
							</span>
						</div>
						<div class="heading-dv">
							<span class="sub-heading">Step 4</span>
							<h4 class="heading">Track & chase</h4>
						</div>
						<div class="entry-txt">
							You won't have to tell us any info twice, we'll keep it and put it in the form so you can check it and apply by phone or online.
						</div>
					</div><!-- work-bx -->
				</div><!-- col -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="meet-you-sec pb-5">
		<div class="container-fluid">		
		@foreach($love_to_meet as $custom_posts)		
			<div class="row">
				<div class="col-lg-6">
					<div class="img h-100">
						<div class="row h-100">						
							<div class="col-xl-5 col-lg-12 col-sm-6 p-0 mb-3">							
								<div class="img-1"><img src="{{url($custom_posts->image1)}}" alt="Image"></div>
							</div><!-- col -->
							<div class="col-xl-7 col-lg-12 col-sm-6 mb-3">
								<div class="img-2"><img src="{{url($custom_posts->image2)}}" alt="Image"></div>
							</div>
							<div class="col-md-6 pl-0">
								<div class="img-3"><img src="{{url($custom_posts->image3)}}" alt="Image"></div>
							</div>							
							<div class="col-md-6 text-center">
								<div class="link">
									<a class="common-btn btn-large btn-radius" href="{{url('/contact')}}">Contact Us</a>
								</div>
							</div>							
						</div><!-- row -->
					</div>
				</div><!-- col -->
				<div class="col-lg-6">
					<div class="entry-txt">					
						<h2 class="entry-title text-black">{{$custom_posts->title}}</h2>
						<div class="txt">
							<p>{!! $custom_posts->description !!}</p>
						</div>
					</div><!-- entry-txt -->
				</div><!-- col -->
			</div><!-- row -->
			@endforeach
		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec save-mortgage-sec text-center">
		<div class="container">
			<div class="title-bx">
				<span class="sub-title">Save Money</span>
				<h2 class="entry-title m-0">See how much save you with Mortgage </h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="min-max-dv d-flex justify-content-between mt-5">
				<div class="min-max min-dv mr-3">
					<h3 class="text-blue">$4600</h3>
					<h4 class="text-black m-0">Save with Mortgage</h4>
				</div>
				<div class="min-max max-dv">
					<h3 class="text-blue">$2500</h3>
					<h4 class="text-black m-0">Monthly E.M.I</h4>
				</div>
			</div>

			<div class="range-bx mt-5">
				<div class="rangeslider-wrap">
					<span class="min-max min float-left">$0</span>
					<input type="range" min="0" max="200000" step="" labels="">
					<span class="min-max max float-right">$2,00,000</span>
				</div>
			</div>
		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="call-us-sec">
		<section class="common-sec bg-img-sec text-white link-sec text-center" style="background-image:url(resources//img/CTA.png);">
			<div class="container z-index1">
				<h2 class="entry-title">Call us to start saving today 111-222-333</h2>
				<p class="text">Or continue online - Do you want to</p>
				<div class="links mt-5">
					<a class="white-btn" href="javascript:void(0);">Buy Property</a>
					<a class="white-btn" href="javascript:void(0);">Remortgage</a>
				</div>
			</div><!-- container -->
		</section><!-- link-sec -->

		<section class="list-sec">
			<div class="container">
				<div class="row m-0 justify-content-center mx-auto align-items-center">
					<div class="mortgage-bx bg-blue text-white btn-radius box-shadow">
						<h3 class="text-center">Mortgage</h3>
						<ul>
							<li>At no cost to you - no broker or hidden fees.</li>
							<li>Online, over the phone or in-person</li>
							<li>Access to multiple Banks & lenders</li>
							<li>Licensed independent, unbiased advice</li>
							<li>Lifetime Mortgage Management</li>
						</ul>
					</div>
					<div class="localbank-bx btn-radius box-shadow text-black">
						<h4 class="text-center">Your Local Bank</h4>
						<ul>
							<li>Prioritizes the bank’s interest and bottom line</li>
							<li>By appointment only</li>
							<li>Only offer one product and their own rates</li>
							<li>Unlicensed "sales" agents</li>
							<li>Longer approval process</li>
						</ul>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- link-sec -->
	</section><!-- common-sec -->

	<section class="common-sec testimonial-sec text-center">
		<div class="container">
			<div class="title-bx mb-5">
				<span class="sub-title">Testimonial</span>
				<h2 class="entry-title m-0">Fast and very easy application process here</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			<div class="testimonial-bx">
				<div class="testimonial-image-slider">
				@foreach($testimonial as $testimg)
					<div>
						<div class="img">
							<img src="{{url($testimg->image)}}" alt="Display Image">
						</div>
					</div>
				@endforeach
					
				</div><!-- testimonial-image-slider -->

				<div class="testimonial-txt-slider">
				@foreach($testimonial as $testimonialdata)
					<div>
						<div class="entry-txt">
							<div class="desc">{!! $testimonialdata->testimonial !!}</div>
							<h4 class="name text-black">{{$testimonialdata->fullname}}</h4>
							<div class="desig text-black">{{$testimonialdata->companyName}}</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					@endforeach
					
				</div><!-- testimonial-txt-slider -->
			</div><!-- testimonial-bx -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec blog-sec bg-gray text-center">
		<div class="container">
			<div class="title-bx">
				<span class="sub-title">Blogs</span>
				<h2 class="entry-title m-0">Latest Articles</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			
			<div class="row">
			@foreach($updatepost as $lpost)			
			@php	$created_at = date('M, Y, d', strtotime($lpost->created_at)) @endphp
			@php	$date = explode(',',$created_at) @endphp			
				<div class="col-lg-4 mt-4">
					<div class="blog-dv">
						<div class="img">
							<a class="h-100" href="javascript:void(0);"><img src="{{url($lpost->postimage)}}" alt="Image"></a>
							<div class="date">
								<span class="day">{{$date[2]}}</span>
								<span class="month">{{$date[0]}}</span>
							</div>
						</div>
						<div class="entry-txt">
							<h4 class="text-black">{{ $lpost->title }}</h4>
								
							<p class="m-0">{!!strlen($lpost->description) > 100 ? substr($lpost->description,0,100) : $lpost->description !!}</p><a href="{{URL::to('/fullPost', [$lpost->id, $lpost->slug])}}">Read</a></p>
						</div><!-- entry-txt -->
					</div>
				</div><!-- col -->
			@endforeach
			</div><!-- row -->


		</div><!-- container -->
	</section><!-- common-sec -->
</main><!-- main -->

<section class="common-sec schedule-form-sec">
	<div class="container">
		<div class="title-bx text-center mb-5">
			<h2 class="entry-title m-0">We Find Best Mortgage For You!</h2>
			<span class="bot-bar"></span>
		</div><!-- title-bx -->

		<?php ///include('schedule-form.php'); ?>
		<div class="schedule_submit">
		@include('scheduleForm')
		</div>
	</div><!-- container -->
</section><!-- common sec -->

<script src="https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js"></script>
<script>
	// input range
	$('input[type="range"]').rangeslider({
		polyfill: false,

    // Default CSS classes
    rangeClass: 'rangeslider',
    disabledClass: 'rangeslider--disabled',
    horizontalClass: 'rangeslider--horizontal',
    fillClass: 'rangeslider__fill',
    handleClass: 'rangeslider__handle',

    // Callback function
    onInit: function() {
    	$rangeEl = this.$range;
      // add value label to handle
      var $handle = $rangeEl.find('.rangeslider__handle');
      var handleValue = '<div class="rangeslider__handle__value">' + this.value + '</div>';
      $handle.append(handleValue);
      
      // get range index labels 
      var rangeLabels = this.$element.attr('labels');
      rangeLabels = rangeLabels.split(', ');
      
      // add labels
      $rangeEl.append('<div class="rangeslider__labels"></div>');
      $(rangeLabels).each(function(index, value) {
      	$rangeEl.find('.rangeslider__labels').append('<span class="rangeslider__labels__label">' + value + '</span>');
      })
  },

    // Callback function
    onSlide: function(position, value) {
    	var $handle = this.$range.find('.rangeslider__handle__value');
    	$handle.text(this.value);
    },

    // Callback function
    onSlideEnd: function(position, value) {}
});
</script>

@endsection
@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url('../../resources/img/Image-JPG.png');">
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
	
	
	@php	$created_at = date('M d Y', strtotime($fullpostdata->created_at)) @endphp
	@php	$date = explode(',',$created_at) @endphp
	
<main class="main-bx">
	<section class="common-sec news-blog-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="entry-content">
						<div class="news-bx">
						
							<h2 class="entry-title text-black mb-2">{!! $fullpostdata->title !!}</h2>
							<div class="meta-bx d-flex flex-wrap text-black mb-3">
								<div class="posted">
									<span class="icon"><img src="{{asset('resources/img/News-User.png')}}" alt="Icon"></span>
									<span class="posted-txt">Posted by admin</span>
								</div>
								<div class="date">
									<span class="icon"><img src="{{asset('resources/img/News-Calender.png')}}" alt="Icon"></span>
									<span class="date-txt">{{$created_at}}</span>
								</div>
							</div><!-- meta-bx -->
							<div class="img mb-3">
								<a href="javascript:void(0);">
									<img src="{{url($fullpostdata->postimage)}}" alt="News Feature">
								</a>
							</div><!-- img -->
							<div class="entry-txt">{!!$fullpostdata->description!!}
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
								@foreach($allcat as $cat)
									<li><a href="{{URL::to('/fullPost', [$cat->id, $cat->slug])}}">{!!$cat->cattitle!!}</a></li>
									
									@endforeach
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
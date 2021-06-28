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
				<li class="breadcrumb-item active" aria-current="page">News</li>
			</ol>
		</nav>
	</div><!-- container -->
</section><!-- banner-sec -->

<section class="newasscheduleH schedule-sec mg-schedule-sec">
	<div class="schedule_submit">
		@include('scheduleForm')	
		</div>
	<div class="row">
		<div class="container">
			<div class="news_success_schedule">
				
			@if(Session::get('schedule'))       
				  <div class="alert alert-success">
					<button class="close" data-dismiss="alert">x</button>
					<strong>{{Session::get('schedule')}}    </strong>
				  </div>
				  @endif
			</div>
		</div>
	</div>
</section><!-- schedule-sec -->

<main class="main-bx">
	<section class="common-sec news-blog-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
				
					
				
					<div class="entry-content">
					@foreach($allpost as $post)
					
						@php	$created_at = date('M d Y', strtotime($post->created_at)) @endphp
						@php	$date = explode(',',$created_at) @endphp				
						<div class="news-bx">
							<h2 class="entry-title text-black mb-2">{{$post->title}}</h2>
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
									<img src="{{url($post->postimage)}}" alt="News Feature">
								</a>
							</div><!-- img -->
							<p class="desc">{!! strlen($post->description) > 300 ? substr($post->description,0,300) : $post->description !!}</p>
							<div class="link">
								<a class="common-btn btn-large btn-radius" href="{{URL::to('/fullPost', [$post->id, $post->slug])}}">Read More</a>
							</div>
						</div><!-- news-bx -->

						<hr>
							@endforeach
						
					</div><!-- entry-content -->
					
					<nav class="pagination-bx mt-5">
						<h4 class="text-center text-black">Next to Another Page</h4>
						<ul class="pagination justify-content-center">
							
							
							<li class="page-item">{{ $allpost->links() }}</li>
								
						
							
						</ul>
					</nav>
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

<section class="newasscheduleF common-sec schedule-form-sec bg-gray">
	<div class="container">
		<div class="title-bx text-center mb-5">
			<h2 class="entry-title m-0">We Find Best Mortgage For You!</h2>
			<span class="bot-bar"></span>
		</div><!-- title-bx -->
		<div class="schedule_submit">
		@include('scheduleForm')
		</div>
		<div class="row">
		<div class="container">
			<div class="news_success_schedule">				
			@if(Session::get('schedule'))       
				  <div class="alert alert-success">
					<button class="close" data-dismiss="alert">x</button>
					<strong>{{Session::get('schedule')}}    </strong>
				  </div>
				  @endif
			</div>
		</div>
	</div>
	</div><!-- container -->
</section><!-- common sec -->

@endsection
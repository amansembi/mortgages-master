@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Our Awards</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Our Awards</li>
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
	<section class="common-sec latest-awars-sec">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<span class="sub-title">Mortgages Awards</span>
				<h2 class="entry-title m-0">Our Latest Awards</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="row">
			@foreach($awards_data as $awards)
				<div class="col-md-6 mt-4">
					<div class="latest-awars d-flex flex-wrap box-shadow">
						<div class="img d-flex flex-column justify-content-center">
							<span><img src="{{url($awards->postimage)}}" alt="Award"></span>
							<p class="text-black font-weight-bold">{{$awards->awardyear}}</p>
						</div>
						<div class="entry-txt">
							<h4 class="text-black mb-2">{{$awards->title}}</h4>
							<p class="description">{!! $awards->description !!}</p>
						</div>
					</div><!-- latest-awars -->
				</div><!-- col -->
			@endforeach
				</div>

			<nav class="pagination-bx mt-5">
				<ul class="pagination justify-content-center">
					<li class="page-item">{{ $awards_data->links() }}</li>
						
				</ul>
			</nav>

		</div><!-- container -->
	</section><!-- common-sec -->
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
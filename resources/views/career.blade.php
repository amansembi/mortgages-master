@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Career</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Career</li>
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
	<section class="common-sec type-mortgage-sec">
		<div class="container">
			<div class="title-bx text-center">
				<span class="sub-title">Type of Mortgages</span>
				<h2 class="entry-title m-0">How can we help you?</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="career-advice-sec mt-5">
				<div class="row">
					<div class="col-lg-6">
						<?php /* ?>
						<div class="img img-cover h-100">
							<img src="{{asset('resources/img/blog-1.png" alt="Image">
						</div>
						<?php */ ?>
						<div class="youtube-player" data-id="6qGiXY1SB68"></div>
					</div><!-- col -->
					
					<div class="col-lg-6">						
						<div class="entry-content">
							<h2 class="entry-title text-black">Know More About Free Mortgage Advice</h2>
							<div class="entry-txt">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

								<ul class="title-list">
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/right-arrow.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<h4 class="text-black mb-2">Treat Our Users & Each Other Right</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
											</div>
										</div>
									</li>
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/right-arrow.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<h4 class="text-black mb-2">Take Responsibilities</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
											</div>
										</div>
									</li>
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/right-arrow.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<h4 class="text-black mb-2">Value People Over Process</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
											</div>
										</div>
									</li>
								</ul>
								
							</div><!-- entry-txt -->
						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->

				<div class="row mt-5 flex-lg-row-reverse">
					<div class="col-lg-6">
						<div class="img img-cover h-100">
							<img src="{{asset('resources/img/emp-2.png')}}" alt="Image">
						</div>
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">Why Work With Us</h2>
							<div class="entry-txt">
								<p>We are motivating people to deliver theires best, tsene rasermenunce ullamcorperenos lobortis inesees eget sodales yonscon sequatest.</p>
								
								<ul class="simple-list">
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/tick.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/tick.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/tick.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
												<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
											</div>
										</div>
									</li>
								</ul>
							</div><!-- entry-txt -->
						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- about-services -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec job-description-sec bg-gray">
		<div class="container">
			<div class="title-bx text-center">
				<span class="sub-title">Job Description</span>
				<h2 class="entry-title m-0">Current Job Opening</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<section class="accordian-sec mt-5">
				<div id="accordion" class="box-shadow">
					<div class="card">
						<div class="card-header" id="heading-1">
							<h4 class="a-title mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								<span class="text-black">Mortgage & Protection Advisor <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>

						<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-2">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								<span class="text-black">Mortgage  Advisor <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-3">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								<span class="text-black">Protection Advisor <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-4">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								<span class="text-black">Sales Call Handler <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-5">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
								<span class="text-black">Sales Support Team Leader <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-6">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
								<span class="text-black">General Insurance Advisor <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-7">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
								<span class="text-black">Case Manager <span class="sub-title">Manchester UK</span></span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</section><!-- accordian-sec -->
			
		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec get-started-sec text-center">
		<div class="container">
			<div class="title-bx">
				<span class="sub-title">Speak to a Free Mortgage advice specialist at (111-222-3333)</span>
				<h2 class="entry-title m-0">Ready to Get Started?</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->

			<div class="entry-txt mt-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

				<div class="link">
					<a class="common-btn btn-large btn-radius" href="javascript:void(0);">Contact Us</a>
				</div>
			</div>
		</div><!-- container -->
	</section><!-- common sec -->
	
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
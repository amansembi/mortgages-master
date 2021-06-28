@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Conveyancing</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Conveyancing</li>
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
	<section class="common-sec conveyancing-top-sec">
		<div class="container">
			<div class="mt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="img img-cover mb-5">
							<img src="{{asset('resources/img/feature2.png')}}" alt="Image">
						</div>

						<div class="sidebar-bx">
							<div class="entry-txt text-center conveyancing-call-bx p-md-4">
								<div class="img my-4">
									<span class="icon">
										<img src="{{asset('resources/img/side-bar.png')}}" alt="Call Us">
									</span>
								</div>
								<h3>Call us to start saving today <a href="tel:111-222-333">111-222-333</a></h3>
							</div>
						</div><!-- sidebar-bx -->
					</div><!-- col -->
					<div class="col-lg-6">
						<div class="entry-content">
							<h2 class="entry-title text-black">Our Conveyancing Service</h2>
							<div class="entry-txt mb-4">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

								<h4 class="text-black">Why do I need a Solicitor?</h4>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated.</p>

								<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

								<h4 class="text-black">Why use our conveyancing service?</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
								<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.</p>

								<h4 class="text-black">Benefits of using our conveyancing service</h4>
								<ul class="title-list mb-3">
									<li>
										<div class="entry-txt d-flex">
											<div class="icon">
												<span><img src="{{asset('resources/img/right-arrow.png')}}" alt="Sign-Arrow"></span>
											</div>
											<div class="txt">
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
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
											</div>
										</div>
									</li>
								</ul>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

							</div><!-- entry-txt -->

						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- about-services -->

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

		@include('scheduleForm')
	</div><!-- container -->
</section><!-- common sec -->


@endsection
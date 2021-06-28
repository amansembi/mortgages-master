@extends('layouts/layout')
@section('content')
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Our Values</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Our Values</li>
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
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
							</div><!-- entry-txt -->
						</div><!-- entry-content -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- about-services -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec our-values-sec bg-gray">
		<div class="container">
			<div class="title-bx text-center mb-5">
				<h2 class="entry-title m-0">Our Values</h2>
				<span class="bot-bar"></span>
			</div><!-- title-bx -->
			
			<section class="accordian-sec mt-5">
				<div id="accordion" class="box-shadow">

					<div class="card">
						<div class="card-header" id="heading-1">
							<h4 class="a-title mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								<span class="text-black">We aim to treat our clients as we would our friends by:</span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>

						<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
							<div class="card-body pt-0">
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
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-2">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								<span class="text-black">We act honestly, openly, fairly and ethically in all that we do by:</span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
							<div class="card-body pt-0">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-3">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								<span class="text-black">Our clients can count on our professionalism to:</span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-4">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								<span class="text-black">We aim to support you through the home owning process by:</span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
							<div class="card-body pt-0">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-5">
							<h4 class="a-title mb-0 collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
								<span class="text-black">We respect your trust in us and will strive to live up to this trust by:</span>
								<span class="icon">
									<img class="plus" src="{{asset('resources/img/add.png')}}" alt="Icon">
									<img class="minus" src="{{asset('resources/img/minus.png')}}" alt="Icon">
								</span>
							</h4>
						</div>
						<div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
							<div class="card-body pt-0">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
							</div>
						</div>
					</div>
					
				</div>
			</section><!-- accordian-sec -->

		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec testimonial-sec text-center">
		<div class="container">
			<div class="title-bx mb-5">
				<span class="sub-title">Testimonial</span>
				<h2 class="entry-title m-0">Our Happy Clients</h2>
				<span class="bot-bar"></span>
			</div>

			<div class="testimonial-bx">
				<div class="testimonial-image-slider">
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-4.jpg')}}" alt="Display Image">
						</div>
					</div>
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-3.jpg')}}" alt="Display Image">
						</div>
					</div>
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-2.jpg')}}" alt="Display Image">
						</div>
					</div>
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-1.jpg')}}" alt="Display Image">
						</div>
					</div>
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-4.jpg')}}" alt="Display Image">
						</div>
					</div>
					<div>
						<div class="img">
							<img src="{{asset('resources/img/team-2.jpg')}}" alt="Display Image">
						</div>
					</div>
				</div><!-- testimonial-image-slider -->

				<div class="testimonial-txt-slider">
					<div>
						<div class="entry-txt">
							<div class="desc">
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div>
						<div class="entry-txt">
							<div class="desc">
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div>
						<div class="entry-txt">
							<div class="desc">
								The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div>
						<div class="entry-txt">
							<div class="desc">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div>
						<div class="entry-txt">
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum similique distinctio eos explicabo quia ipsa quidem vitae harum fugit voluptate magnam, ullam deserunt libero, rerum mollitia! Quod, cumque, aliquid! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum similique distinctio eos explicabo quia ipsa quidem vitae harum fugit voluptate magnam, ullam deserunt libero, rerum mollitia! Quod, cumque, aliquid!
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div>
						<div class="entry-txt">
							<div class="desc">
								The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
							</div>
							<h4 class="name text-black">Mishen Walker</h4>
							<div class="desig text-black">CEO Company</div>
							<div class="t-review">
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span class="active"><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
								<span><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
				</div><!-- testimonial-txt-slider -->
			</div><!-- testimonial-bx -->

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
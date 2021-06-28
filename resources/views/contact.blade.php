@extends('layouts/layout')
@section('content')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJxzPHD_egYnhxntqcvfem35YRjruzAg&callback=initMap"></script>
<section class="banner-sec common-sec" style="background-image:url(resources/img/Image-JPG.png);">
	<div class="container">
		<div class="caption-bx text-center text-white">
			<h1 class="page-title">Contact Us</h1>
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
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
	<section class="common-sec contact-info-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="contact-info d-flex flex-wrap">
						<div class="icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="entry-text">
							<h4 class="text-black mb-2">Location</h4>
							<p>74  Great North Road, AMALEBRA</p>
						</div>
					</div><!-- contact-info -->
				</div><!-- col -->

				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="contact-info d-flex flex-wrap">
						<div class="icon">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="entry-text">
							<h4 class="text-black mb-2">Phone</h4>
							<p><a href="tel:(+44) 7700 90007">(+44) 7700 90007</a></p>
						</div>
					</div><!-- contact-info -->
				</div><!-- col -->
				
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="contact-info d-flex flex-wrap">
						<div class="icon">
							<i class="fa fa-fax" aria-hidden="true"></i>
						</div>
						<div class="entry-text">
							<h4 class="text-black mb-2">Fax</h4>
							<p><a href="tel:(+44) 161 999 8888">(+44) 161 999 8888</a></p>
						</div>
					</div><!-- contact-info -->
				</div><!-- col -->
				
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="contact-info d-flex flex-wrap">
						<div class="icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="entry-text">
							<h4 class="text-black mb-2">E-Mail</h4>
							<p>mortgageadvice.com</p>
						</div>
					</div><!-- contact-info -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- common-sec -->

	<section class="common-sec contact-form-sec pt-0">
		<div class="container">
			<h2 class="entry-title text-black text-uppercase text-center mb-5">Say Hello</h2>

			<form id="contact-form" action="" method="post">
				<div class="contact-form form-bx">
					<div class="row">
						<div class="col-md-6 mb-4">
							<div class="form-group">
								<input type="text" class="form-control" id="f_name" placeholder="First Name">
							</div>
						</div><!-- col -->

						<div class="col-md-6 mb-4">
							<div class="form-group">
								<input type="text" class="form-control" id="l_name" placeholder="Last Name">
							</div>
						</div><!-- col -->

						<div class="col-md-6 mb-4">
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
						</div><!-- col -->

						<div class="col-md-6 mb-4">
							<div class="form-group">
								<input type="text" class="form-control" id="subject" placeholder="Subject">
							</div>
						</div><!-- col -->

						<div class="col-md-12 mb-4">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Message"></textarea>
							</div>
						</div><!-- col -->
					</div><!-- row -->

					<div class="submit">
						<button type="submit" class="common-btn btn-large btn-radius">submit</button>
					</div>

				</div><!-- contact-form -->
			</form>
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
		<div>
	</div><!-- container -->
</section><!-- common sec -->

<section class="map-sec">
	<div id="map"></div>
</section><!-- common sec -->

<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                	position: new google.maps.LatLng(40.6700, -73.9400),
                	map: map,
                	title: 'Snazzy!'
                });
            }
        </script>
@endsection
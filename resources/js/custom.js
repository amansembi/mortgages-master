// custom js

// main navigation hide close
function openNav() {
	document.getElementById("mySidenav").style.height = "100%";
	$("body").css("overflow","hidden");
}

function closeNav() {
	document.getElementById("mySidenav").style.height = "0";
	$("body").css("overflow","visible");
}


// youtube video code
document.addEventListener("DOMContentLoaded", function(){
	var div,
	n,
	v = document.getElementsByClassName("youtube-player");
	for (n = 0; n < v.length; n++) {
		div = document.createElement("div");
		div.setAttribute("data-id", v[n].dataset.id);
		div.innerHTML = noThumb(v[n].dataset.id);
		div.onclick = noIframe;
		v[n].appendChild(div);
	}
});
function noThumb(id) {
	var thumb = '<img src="https://i.ytimg.com/vi/ID/maxresdefault.jpg">',
	play = '<div class="play"></div>';
	return thumb.replace("ID", id) + play;
}
function noIframe() {
	var iframe = document.createElement("iframe");
	var embed =
	"https://www.youtube-nocookie.com/embed/ID?autoplay=1&modestbranding=1&iv_load_policy=3&rel=0&showinfo=0";
	iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("allowfullscreen", "1");
	iframe.setAttribute("allow", "autoplay; encrypted-media");
	this.parentNode.replaceChild(iframe, this);
}



// A $( document ).ready() block.
$( document ).ready(function() {
	
	$('.sub-menu').each(function(){
		$(this).parent().children('a').after('<span class="icon-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
	});

	$(".icon-toggle").on("click", function(){
		$(this).parent().find('.sub-menu').slideToggle(400, 'linear');
		//$(this).parent().find('.sub-menu').toggleClass('open-menu',300);
		$(this).toggleClass('open');
		//$(this).parent().siblings().find('.sub-menu').css('display', 'none', 1000);
		$(this).parent().siblings().find('.sub-menu').slideUp(400, 'linear');
		$(this).parent().siblings().find('.icon-toggle').removeClass('open');
	});

	$("#contact-form").submit(function (event){
		var f_name = $("#f_name").val();
		var l_name = $("#l_name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();

		var regex_name = /^[a-zA-Z]+$/;
		var regex_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

		$('.error').remove();
		if(!f_name.match(regex_name) || f_name == ''){
			$(this).find('#f_name').after('<span class="error">Please Insert First Name</span>');
		}
		if(!l_name.match(regex_name) || l_name == ''){
			$(this).find('#l_name').after('<span class="error">Please Insert Last Name</span>');
		}
		if(!email.match(regex_email) || email == ''){
			$(this).find('#email').after('<span class="error">Please Insert Valid Email Address</span>');
		}
		if(subject == ''){
			$(this).find('#subject').after('<span class="error">Please Insert Valid Email Address</span>');
		}

		if($('.error').length < 1){
			return true;
		}else{
			return false;
		}
	});



	$('.testimonial-txt-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.testimonial-image-slider'
	});
	$('.testimonial-image-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.testimonial-txt-slider',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});

	$(".testimonial-image-slider .slick-center").prev().css('transform', 'translateY(50px)');
	$(".testimonial-image-slider .slick-center").next().css('transform', 'translateY(50px)');
	$('.slick-arrow, .slick-slide').click(function() {
		//setTimeout(function(){
			$(".testimonial-image-slider .slick-slide").css('transform', 'translateY(150px)');
			if ($('.testimonial-image-slider .slick-slide').hasClass('slick-center')){
				$(".testimonial-image-slider .slick-center").prev().css('transform', 'translateY(50px)');
				$(".testimonial-image-slider .slick-center").next().css('transform', 'translateY(50px)');
				$(".testimonial-image-slider .slick-center").css('transform', 'translateY(0)');
			}
		//}, 1000);
	});

	$('.c-review-slider').slick({
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});

	$(function () {
		var btn = $('.float-btn');
		var circle = $('.float-btn .circle');
		var cross = $('.float-btn .img');
		var menu = $('.menu-float');

		btn.on('click', function () {
			circle.toggleClass('animate');
			cross.toggleClass('animate');
			menu.toggleClass('animate');

		});
	});



	$(".schedule_form_submit").click(function(){	
		$('.schedule_submit').removeClass('active');
		$(this).parent().parent().parent().parent().parent().parent().addClass('active');
				var name = $('.schedule_submit.active .scheduleName').val();
				var time =   $('.schedule_submit.active .scheduleTime').val();
				var date =   $('.schedule_submit.active .scheduleDate').val();		
				var token = $('.schedule_form input[name="_token"]').val();		
			$.ajax({
				  url: "contactUs",
				  type: 'POST',
				  data: { _token: token, name : name, timeval : time, dateval : date},               
                success: function( data ) {					
					$('.schedule_submit.active .schedule_form').after('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button><strong>' + data +'  </strong> </div>');
						}, error:function()
						{               
						  console.log('Something Wrong');
						}       
              });
	});
    //document ready close
});


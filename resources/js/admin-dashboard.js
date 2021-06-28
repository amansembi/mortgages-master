// admin-dashboard js

// A $( document ).ready() block.
$( document ).ready(function() {
	
	// category list box open 
	$(".new-cat-btn").on("click", function(){
		$(this).parent().find('.new-cat-input').slideToggle(400, 'linear');
	});
	
	
	// Dashboard open menu
	if ( $('.nav-treeview a.nav-link').hasClass('active') ) {
		$('.nav-treeview a.nav-link.active').parents('.has-treeview').addClass('menu-open');
		//console.log(this);
	}
	

	//sub categories
	$(".sub-radio[type=checkbox]").on("click", function(){
		if($(this).is(':checked')){
			$(this).parents('.radio-p').children('input[type=checkbox]').prop('checked', true);
		}	
	});
			
	
    //document ready close
		var url      = window.location.href;    
		var origin1   = window.location.origin;
		var origin = origin1+'/mortgages-master/';
		var arr = url.split(origin);	
		var pagelink = arr[1];
		console.log(pagelink);
		$('.nav-item').removeClass('menu-open');
		if(pagelink == 'admin/post/allpost' || pagelink == 'admin/post' || pagelink == 'admin/postCategory')
		{
			$('.post-menu').addClass('menu-open');
		}
		else if(pagelink == 'admin/addCustomField' || pagelink == 'admin/firstTimeBuyers' || pagelink == 'admin/awards')
		{			
			$('.custom_fields').addClass('menu-open');
		}
		else if(pagelink == 'admin/alltestimonial' || pagelink == 'admin/newtestimonial' || pagelink == 'admin/awards')
		{			
			$('.testimonial').addClass('menu-open');
		}
});


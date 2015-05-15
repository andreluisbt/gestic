$("document").ready(function(){
	
	preload = '<div class="preload">'+
				'<span class="bar bar-1"></span>'+
				'<span class="bar bar-2"></span>'+
				'<span class="bar bar-3"></span>'+
			'</div>';
	
	$('header nav a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	
	/*
	$(window).scroll(function () {
		if($(this).scrollTop() > 50){
			$('header #navigationBar').addClass('fixed');
			$('header #accessibilityBar').addClass('margined-bottom');
		}else{
			$('header #navigationBar').removeClass('fixed');
			$('header #accessibilityBar').removeClass('margined-bottom');
		}
	});
	*/
	
});
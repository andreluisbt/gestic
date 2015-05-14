$("document").ready(function(){
	
	preload = '<div class="preload">'+
				'<span class="bar bar-1"></span>'+
				'<span class="bar bar-2"></span>'+
				'<span class="bar bar-3"></span>'+
			'</div>';
	
	$('#btHighContrast').click(function(e){
		$('body').toggleClass('high-contrast');
		
		if($('body').hasClass('high-contrast')){
			$('.pie-chart').each(function(){
				var percent = $(this).data('percent');
				var pieChart = $(this).data('easyPieChart');
				
				pieChart.options.barColor = "#ffff00";
				pieChart.update(percent);
			});
		}else{
			$('.pie-chart').each(function(){
				var percent = $(this).data('percent');
				var pieChart = $(this).data('easyPieChart');
				
				pieChart.options.barColor = "#009ee3";
				pieChart.update(percent);
			});
		}
		
	});
	
	$(window).scroll(function () {
		if($(this).scrollTop() > 50){
			$('header #navigationBar').addClass('fixed');
			$('header #accessibilityBar').addClass('margined-bottom');
		}else{
			$('header #navigationBar').removeClass('fixed');
			$('header #accessibilityBar').removeClass('margined-bottom');
		}
	});


	$('.pie-chart').easyPieChart({
		barColor: '#009ee3',
		trackColor: '#f2f2f2',
		trackWidth: 20,
		scaleColor: false,
		size: 230,
		lineCap: 'square',
		lineWidth: 25,
	});
	
	
	/*
	 * Letter size
	**/
	initFontSize = 16;
	$('#accessibilityBar #btFontIncrease').click(function(e){
		e.preventDefault();
		initFontSize++;
		$('body').css('font-size', initFontSize);
	});
	
	$('#accessibilityBar #btFontReset').click(function(e){
		e.preventDefault();
		initFontSize = 16;
		$('body').css('font-size', '');
	});
	
	$('#accessibilityBar #btFontDecrease').click(function(e){
		e.preventDefault();
		initFontSize--;
		$('body').css('font-size', initFontSize);
	});
	
	/*
	 * Mask
	**/
	$.applyDataMask();
	
});
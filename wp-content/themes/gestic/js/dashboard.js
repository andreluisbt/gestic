$("document").ready(function(){
	
	/*
	 * Calendar
	**/
	calendarYear = 2015;
	$('#calendar .prev').click(function(e){
		e.preventDefault();
		calendarYear--;
		$('#calendar .year-bar .year').html(calendarYear);
		$('#calendar .courses-list select').val(0);
	});
	
	$('#calendar .next').click(function(e){
		e.preventDefault();
		calendarYear++;
		$('#calendar .year-bar .year').html(calendarYear);
		$('#calendar .courses-list select').val(0);
	});
	
	$('#calendar .courses-list select').change(function(e){
		var courseId = $(this).val();
		
		if($(this).val() > 0){
			$('#calendar .months').html(preload);
			$.ajax({
				type: 'post',
				dataType: 'html',
				url: 'actions/load_calendar.php',
				data: {courseId: courseId},
				success: function(data){
					$('#calendar .months').html(data);
				}
			});
		}
	});
	
	/*
	 * Grades
	**/
	$('#grades .courses-list select').change(function(e){
		var courseId = $(this).val();
		
		if($(this).val() > 0){
			$('#grades .grade-description').html(preload);
			$.ajax({
				type: 'post',
				dataType: 'html',
				url: 'actions/load_grades.php',
				data: {courseId: courseId},
				success: function(data){
					$('#grades .grade-description').html(data);
				}
			});
		}
	});
	
});
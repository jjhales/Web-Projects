
(function($){

	// hides tooltips until hovered
	$('.mastertooltip').tooltip('hide');
	//search button to go to searchresults for prototype
	$('#search').on('click', function(e){
		e.preventDefault();
		window.location.assign('searchresults.html');

	});
	//back button to go to index.html for prototype
	$('#back').on('click', function(e){
		e.preventDefault();
		window.location.assign('index.html');

	});
	//save button to go to saveresults.html for prototype
	$('#save').on('click', function(e){
		e.preventDefault();
		window.location.assign('saveresults.html');

	});
	// submit alert
	$('#submit').on('click',function(e){
		e.preventDefault();
		alert("Thank You for your submission.")
	});
	//save meds
	$('#saveform').on('click', function(e){
		e.preventDefault();
		window.location.assign('dashboard.html');
	});

	//switches tabs and divs for saved medications, schedule, persons
	$('#tabs').each(function(){
		var $active, $content, $links = $(this).find('a');
		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		$active.addClass('active');
		$content = $($active[0].hash);
		$links.not($active).each(function() {
			$(this.hash).hide();
	});
		$(this).on('click', 'a', function(e){
			$content.hide();
			$content = $(this.hash);
			$content.show();
			e.preventDefault();
		});
		
		$(this).on('click', 'li', function(e){
			$active.removeClass('active');
			$active = $(this);
			$active.addClass('active');
			e.preventDefault();

		});
		

	});


	
})(jQuery);
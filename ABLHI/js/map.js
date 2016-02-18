$(document).ready(function(){
	$('#mapform').change(function(){
		var selectedlocation = $('#mapform option:selected').val();
		if (selectedlocation == "all"){
			$('a.dot').show(1000);
		}else{
			$('a.dot[location = "'+selectedlocation+'"]').fadeIn(1000);
			$('a.dot[location != "'+selectedlocation+'"]').fadeOut(1000);
		}
	

	});

	$('a.dot').click(function(){

		$('a.dot').removeClass('selected');
		$(this).addClass('selected');

		var place = '.place_detail#' + $(this).attr('place');
		var htmlCode = $(place).html();
		console.log(place);

		$('.detail_container').fadeOut(500, function(){
			$('.detail_container .place_detail').html(htmlCode);
			$('.detail_container').fadeIn(500);
		});

	});


});
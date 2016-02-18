window.onload = function() {

	$('#myTab a[href="#companion"]').tab('show');
	$('#myTab a[href="#respite"]').tab('show');
	$('#myTab a[href="#ihss"]').tab('show');
	$('#myTab a[href="#slc"]').tab('show');
// carousel images on main page

	var mainimage2 = document.getElementById('myimg2');
		if (mainimage2 && mainimage2.getContext) {
			var ctx2 = mainimage2.getContext("2d");
		if (ctx2) {
			var image2 = document.getElementById("img3");
				ctx2.drawImage(image2, 0, 0, 354, 236);


		}
	}

	var mainimage3 = document.getElementById('myimg3');
		if (mainimage3 && mainimage3.getContext) {
			var ctx3 = mainimage3.getContext("2d");
		if (ctx3) {
			var image3 = document.getElementById("img4");
				ctx3.drawImage(image3, 0, 0, 354, 236);


		}
	}
	
// end main page carousel images


}
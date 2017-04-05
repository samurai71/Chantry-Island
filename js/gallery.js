(function() {
	// expanded AJAX example
	$('.gallery li').on('click', function() {

		// do an AJAX call
		$.ajax({
			url: "includes/ajaxQuery.php",
			data: { model: this.id },
			type: "GET"
		}) //  don't put a semicolon here so we can chain methods together

		.done(function(data) {
			console.log(data);

			if (data) {
				data = JSON.parse(data);
				renderCarInfo(data);
			} else {
				alert('your ajax call didn\'t work');
			}			
		}) // don't put a semicolon here either!

		.fail(function(ajaxCall, status, error) {
			console.log(status, ", ", error);
			console.dir(ajaxCall); // outputs the ajax call as an object
		}); // terminate the ajax function

		function renderCarInfo(car) {
			$('.thumbInfo img').addClass('nonActive'); // for collections, use jQuery (more than one element)
			$('#' + car.model).removeClass('nonActive');	

			$('.subhead span').text(" mini Cooper " + car.model);
			$('.modelName').text(car.modelName);
			$('.priceInfo').text(car.pricing);
			$('.modelDetails').text(car.modelDetails);
		}
	});
})();
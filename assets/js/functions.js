/**
* jQuery functions
*/
$(document).ready(function () {
	// Set/reset some holders
	$(".addgolferform .error").hide();
	$(".createflightform .error").hide();
	$(".addgolferformsuccess").hide();
	
	// Create a new golfer
	$("#creategolfer").submit(function(event) {
		// Build the request
		var formData = {
			method: 'creategolfer',
	    	name: $("#name").val(),
	  	  	gender: $("#gender").val(),
	  		handicap: $("#handicap").val(),
		};
		
		// Validate input
		if (formData.name == '' || formData.gender == '' || formData.handicap == '') {
			$(".addgolferform .error").show();
			$(".addgolferform .error").html('Vul alle velden in.');
		} else {
			$(".addgolferform .error").hide();
			$.ajax({
	  			type: "POST",
	  			url: "post.php",
	  			data: formData,
	  			dataType: "json",
	  			encode: true,
			}).done(function (data) {
				if (data.type == 'success') {
					// Set success
					$(".addgolferform").hide();
					$(".addgolferformsuccess").show();
				} else {
					// Set error
					$(".addgolferform .error").show();
					$(".addgolferform .error").html(data.text);
				}
			});
		}
		event.preventDefault();
  	});
	  
	// Create the flight
	$("#createflight").submit(function(event) {
		// Build the request
		var formData = {
			method: 'createflight',
			count: $("#flightcount").val()
		};
		
		// Validate input
		if (formData.count == '' || formData.count == 0) {
			$(".createflightform .error").show();
			$(".createflightform .error").html('Kies het aantal personen in een flight.');
		} else {
			$(".createflightform .error").hide();
			$.ajax({
				type: "POST",
				url: "post.php",
				data: formData,
				dataType: "json",
				encode: true,
			}).done(function (data) {
				if (data.type == 'success') {
					// Set success
					$(".createflightformsuccess").html(data.flightslist);
				} else {
					// Set error
					$(".createflightform .error").show();
					$(".createflightform .error").html(data.text);
				}
			});
		}
		event.preventDefault();
	});
});
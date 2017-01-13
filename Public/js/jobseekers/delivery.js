(function() {
	var $times=$("#times");
		
		

	$times.on("change", function(e) { //AJAX更新
	console.log($times.val()+"sssssssssssssss")

		$.ajax({
			type: "post",
			url: SITE_URL +"?a=delivery",
			data: {
				times: $times.val()
				
			},
			success: function(s) {
				location.href=SITE_URL+'/Index/delivery.html';
				console.log(s)
			}
			
		});

	
	});

})();


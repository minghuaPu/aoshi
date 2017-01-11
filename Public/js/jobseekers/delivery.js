(function() {
	var $send = $("#delivery"),
		$job_name=$("#delivery").text()


	$send.on("submit", function(e) { //AJAX更新
	
		$.ajax({
			type: "post",
			url: SITE_URL +"?a=send",
			data: {
				job_name:$job_name
				
			},
			success: function(e) {
				alert("has send");
			}
		});
		
	});

})();


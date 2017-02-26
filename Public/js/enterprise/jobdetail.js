(function() {
	var $delivery=$("#delivery_send");
	var $job_ids=$("#job_ids");
		

	$delivery.on("click", function() { //AJAX更新

		$.ajax({
				type: "post",
				url: SITE_URL +"?a=delivery",
				data: {
					id: $job_ids.val()
					
				},
				success: function(e) {
					var rtn=JSON.parse(e);
					console.log(rtn.status)
					if(rtn.status>=0) {
						alert(rtn.msg);
						if(rtn.url){
							location.href = "http://"+location.host +rtn.url
							}

					}
				
					else{
						location.href = "http://"+location.host +rtn.url
					}
					
				}
				
			});

	
	});

})();

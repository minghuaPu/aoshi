(function() {
	var $times=$("#times");
	
	$times.on("change", function() { //时间筛选
		$("#timesf").submit()
	});
	$(".box-right-top .sx").on("click", function() { //刷新
		
		$("#timesf").submit()
	});

})();


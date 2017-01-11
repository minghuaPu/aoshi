// $(".job-list").on('click',function() {
// 	var val=$(this).find('.job-name').html();
// 	$.ajax({
// 	   type: "POST",
// 	   url: "jobdetail&callback=?",
// 	   //dataType : 'json',
// 	   async : false,
// 	   data: {"value":val},
// 	   success: function(data){
// 	     //console.log(val)
// 	     // location.href ="jobdetail"+"#"+val;

// 	     // alert(data);
// 	     // return val;
// 	   }
// 	}); 
// });
$(".position-left .item a").on('click',function(){
	var val=$(this).html();
	//获取分类表里的值
	var inputVal=$(".position-right .search-box .search").val(val);
	inputVal=$(".position-right .search-box .search").val(val);
	//把分类表里获取的值赋值到搜索框里
	autoSubmit();//调用表单自动提交
	$(".position-right .search-tip").show();
	
})


//表单自动提交，方便分类
function autoSubmit(){
	$(".position-right .search-box #search-form").submit();
}

$(".position-right .search-box .btn-info").on('click', function() {
	$(".position-right .search-tip").show();
});
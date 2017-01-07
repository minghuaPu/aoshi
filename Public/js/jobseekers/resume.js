<<<<<<< HEAD
/*简历头像*/
/*$("#avatar-upload").on("mouseenter", function() {
	$("#avatar-bg").show();
});
$("#avatar-upload").on("mouseleave", function() {
	$("#avatar-bg").hide();
});
$("#avatar-upload").on("change", function() { //图片选中后触发事件
	alert("已选择文件" + this.value);
});
$("#avatar-img");*/ //可更改简历头像src



/*简历管理*/
var resume = angular.module('myResume', []);
resume.run(function($rootScope, service) {
	service.load().then(function(data) {
		$rootScope.integrity = 0;
		$rootScope.user = data['user'];
		$rootScope.basic = data['basic'];
		$rootScope.experience=data['data']['jobexp'];//工作经历
		/*$rootScope.experience = data['experience'];
		$rootScope.education = data['education'];
		$rootScope.describe = data['describe'];
		$rootScope.prefered = data['prefered'];*/
		/*if(data['jobseekers']) {
			$rootScope.integrity += 20
		}
		if(data['experience'][0]) {
			$rootScope.integrity += 20
		}
		if(data['describe'][0]) {
			$rootScope.integrity += 20
		}
		if(data['career'][0]) {
			$rootScope.integrity += 20
		}
		if(data['prefered'][0].des) {
			$rootScope.integrity += 20
		}*/
	})
});
resume.factory('service', function($http) {
	return {
		load: function() {
			return $http.get(SITE_URL + '?a=select')
				.then(function(response) {
					return response;
				})
		},
		save: function(index, data) {
			return $http({
				method: 'get',
				url: SITE_URL + '?a=save&index=' + index,
				params: data
			}).then(function(data) {
				return data;
			})
		},
		remove: function(index, data) {
			$http({
				method: 'get',
				url: SITE_URL + '?a=delete&index=' + index,
				params: data
			})
		}
	}
});
//基本信息
resume.controller('resumeBasic', function($scope, service) {
	$scope.edit = function(basic) {
		$scope.form = basic;
	};
	$scope.add = function() {
		$scope.form = {
			nickname: '',
			peculiarity: '',
			sex: '',
			birth: '',
			top_edu: '',
			work_years: '',
			current_city: '',
			phone: '',
			e_mail: ''
		}
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('basic', $scope.form).then(function(response) {
			if(!$scope.form.basic_id) {
				$scope.form.basic_id = response['data'];
				$scope.basic.push($scope.form);
			}
			delete $scope.form;
		})
	};
});
//工作经历
resume.controller('resumeJobexp', function($scope,$rootScope,resume) {
	$scope.edit = function(experience) {
		$scope.form = experience;
	};
	$scope.add = function(item) {
		if(item==1){
			$scope.form = {
				re_company_name: '',
				job_title: '',
				working_time: '',
				job_description: ''
			}
		}
		else{
			 $scope.form_info=item;
	 	
		}	
		
	};
	$scope.remove = function(item) {
		$scope.experience.splice($scope.experience.indexOf(item), 1);
		service.remove('experience', item);
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('experience', $scope.form).then(function(response) {
			if(!$scope.form.id) {
				$scope.form.id = response['data'];
				$scope.experience.push($scope.form);
			}
			delete $scope.form;
		})
	};
});
//教育经历
/*resume.controller('resumeEduexp', function($scope, service) {
	$scope.edit = function(eduexp) {
		$scope.form = eduexp;
	};
	$scope.add = function() {
		$scope.form = {
			school: '',
			degree: '',
			major: '',
			grad: ''
		}
	};
	$scope.remove = function(eduexp) {
		$scope.eduexp.splice($scope.jobexp.indexOf(eduexp), 1);
		service.remove('eduexp', eduexp);
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('eduexp', $scope.form).then(function(response) {
			if(!$scope.form.eid) {
				$scope.form.eid = response['data'];
				$scope.eduexp.push($scope.form);
			}
			delete $scope.form;
		})
	};
});
//求职意向
resume.controller('resumeCareer', function($scope, service) {
	$scope.edit = function(career) {
		$scope.form = career;
	};
	$scope.add = function() {
		$scope.form = {
			position: '',
			type: '',
			city: '',
			wages: ''
		}
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('career', $scope.form).then(function(response) {
			if(!$scope.form.cid) {
				$scope.form.cid = response['data'];
				$scope.career.push($scope.form);
			}
			delete $scope.form;
		})
	};
});
//自我描述
resume.controller('resumeDes', function($scope, service) {
	$scope.integrity = 20;
	$scope.edit = function(des) {
		if(!$scope.basic[0]) {
			alert('请先填写基本信息')
		}
		$scope.form = des;
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('des', $scope.form).then(function(response) {
			delete $scope.form;
		})
	};
});
//求职状态
resume.controller('resumeState', function($scope, service) {
	$scope.change = function() {
		service.save('status', $scope.basic[0])
	}
});
*/
=======
﻿angular.module("myResume",[])

.run(function  ($rootScope, resume) {
	// 一跑起来异步加载简历信息
	resume.all().then(function  (rtn_data) {
		$rootScope.exp_list=rtn_data['data']['jobexp'];//工作经历

		$rootScope.edu_list=rtn_data['data']['eduexp'];//教育经历
	})
})

.factory("resume",function  ($http) {
	// 简历工厂
	return {
		all: function() {
			return   $http.get(SITE_URL+"/ajaxGet")
				.then(function  (rtn_data) {
					return  rtn_data;
				});

		},
		remove: function(controllerName,info) {
			$http({
				method:"get",
				url:SITE_URL+"/delete?index="+  controllerName,
				params:info
			}).success(function(data){
				return data;
			});

		},
		save: function(controllerName,form_info) {
			return  $http({
				method:"get",
				url:SITE_URL+"/update?index="+  controllerName,
				params:form_info
			}).then(function(data){
				return data;
			});
		}
	};

})


.controller("jobexp",function  ($scope,$rootScope,resume) {

	$scope.show_form=function  (item) {
		if (item==1) {
			$scope.form_info={job:'',name:'',time:'',cont:''};
		}else{
			$scope.form_info=item;
		}
	}

	$scope.hide_form=function  () {
		delete $scope.form_info;
	}

	$scope.delete_info=function  (item) {
		$rootScope.exp_list.splice($rootScope.exp_list.indexOf(item), 1);

		resume.remove('jobexp',item);
	}


	$scope.save_form=function  () {
		resume.save('jobexp',$scope.form_info).then(function  (rtn_data) {
			if ($scope.form_info.jid==undefined) {

				$scope.form_info.jid=rtn_data.data.msg;//获取添加数据库后的ID，进行赋值
				$rootScope.exp_list.push($scope.form_info);
			}

			delete $scope.form_info;
		});
	}
})
.controller("eduexp",function  ($scope,$rootScope,resume) {
	$scope.show_form=function  (item) {
		// 要判断是不是添加
		if (item==1) {
			$scope.form_info={name:'',xl:'',major:'',grad:''};
		}else{
			$scope.form_info=item;
		}

	}
	$scope.delete_info=function  (item) {
		$rootScope.edu_list.splice($rootScope.edu_list.indexOf(item), 1);

		resume.remove('eduexp',item);
	}
	$scope.hide_form=function  () {
		delete $scope.form_info;
	}
	$scope.save_form=function  () {
		resume.save('eduexp',$scope.form_info).then(function  (rtn_data) {
			if ($scope.form_info.eid==undefined) {
				$scope.form_info.eid=rtn_data.data.msg;//获取添加数据库后的ID，进行赋值
				$rootScope.edu_list.push($scope.form_info);
			}

			delete $scope.form_info;
		});
	}

})
// .controller("jobexp",function  ($http,$scope) {
//
// })



>>>>>>> ba6b79e93a4dd631cb22ae2f42948a00e4cf7566





//
//var $one=$("#user-info .rate"),
//    $two=$("#job-exp .rate"),
//	$three=$("#edu-exp .rate"),
//	$four=$("#job-career .rate"),
//	$five=$("#job-state .rate"),
//	$photo=$("#crop-avatar .rate");
//var $photo_rate=$one_rate=$five_rate=$two_rate=$three_rate=$four_rate=0;
//
///*简历完成率*/
//	
//if($photo.attr("src"))
//{	$(".hear").hide();
//	$photo_rate=2;
//	}
//else{
//		$(".hear").show();
//		}	
//for(var i=0; i<$one.length;i++){
//	if($one.eq(i).text()!=""){
//		$one_rate=$one_rate+2;
//	}
//}
//
//for(var i=0; i<$two.length;i++){
//	if($two.eq(i).text()!=""){
//		
//		if($two_rate>=20){
//			$two_rate=20
//		}
//		else{
//			$two_rate=$two_rate+10
//			}
//	}
//}
//
//for(var i=0; i<$three.length;i++){
//	if($three.eq(i).text()!=""){
//		
//		if($three_rate>=20){
//			$three_rate=20
//		}
//		else{
//			$three_rate=$three_rate+10
//			}
//	}
//}
//
//	if($four.length){
//		$four_rate=20
//	}
//	if($five.text()){
//		$five_rate=20
//	}
//
//$("#finishing_rate").text(($photo_rate+$five_rate+$four_rate+$three_rate+$two_rate+$one_rate)+"%");
//
//
///*简历导航*/
//var $rNav = $("#nav-list"),
//	$rli = $rNav.find("li"),
//	$rNavTop = $rNav.offset().top;
//$(window).scroll(function() {
//	if($(window).scrollTop() >= $rNavTop) {
//		
//		$rNav.addClass("fixed");
//	} else {
//		
//		$rNav.removeClass("fixed");
//	}
//});
//for(var i = 0; i < $rli.length; i++) {
//	$rli[i].onclick = function() {
//		for(var i = 0; i < $rli.length; i++) {
//			$rli[i].className = "";
//		}
//		this.className = "selected";
//	}
//};
///*用户信息*/
// if($("#user-info .list .name").text() =="")
//	{
//		$("#user-info .list .name").text("你的名字")
//	}
//(function() {
//	var $uInfo = $("#user-info"),
//		$uEdit = $uInfo.find(".edit"),
//		$uList = $uInfo.find(".list"),
//		$ubtn = $uInfo.find(".add"),
//		$uform = $uInfo.find("#user-info-form"),
//		$uCancel = $uInfo.find(".cancel");
//	var form = {};
//	form.name = $uform.find(".input-text").eq(0);
//	form.intro = $uform.find(".input-text").eq(1);
//	form.sex = $uform.find(".input-text").eq(2);
//	form.birth = $uform.find(".input-text").eq(3);
//	form.xl = $uform.find(".input-text").eq(4);
//	form.gzjy = $uform.find(".input-text").eq(5);
//	form.city = $uform.find(".input-text").eq(6);
//	form.phone = $uform.find(".input-text").eq(7);
//	form.email = $uform.find(".input-text").eq(8);
//	var formUrl = "";
//	$ubtn.on("click", function() {
//		$uList.hide();
//		$uform.show();
//		document.getElementById("user-info-form").reset();
//		formUrl =  SITE_URL +"?a=add";
//	});
//	$uEdit.on("click", function() { //修改
//		$uList.hide();
//		$uform.show();
//		form.name.val($uList.find(".name").text());
//		form.intro.val($uList.find(".intro").text());
//		form.sex.val($uList.find(".sex").text());
//		form.birth.val($uList.find(".birth").text());
//		form.xl.val($uList.find(".xl").text());
//		form.gzjy.val($uList.find(".gzjy").text());
//		form.city.val($uList.find(".city").text());
//		form.phone.val($uList.find(".p").text());
//		form.email.val($uList.find(".e").text());
//		formUrl =  SITE_URL +"?a=update";
//	});
//	
//	/*	*/
//	$uform.on("submit", function(e) { //AJAX更新
//		e.preventDefault();
//		$.ajax({
//			type: "post",
//			url: formUrl,
//			data: {
//				index: "basic",
//				name: form.name.val(),
//				intro: form.intro.val(),
//				sex: form.sex.val(),
//				birth: form.birth.val(),
//				xl: form.xl.val(),
//				gzjy: form.gzjy.val(),
//				city: form.city.val(),
//				phone: form.phone.val(),
//				email: form.email.val()
//			},
//			success: function() {
//				location.reload();
//			}
//		});
//		
//	});
//	$uCancel.on("click", function(e) {
//		e.preventDefault();
//		$uList.show();
//		$uform.hide();
//	});
//})();
//
//
//
//
///*工作经历*/
///*(function() {
//	var $jobExp = $("#job-exp"),
//		$jAdd = $jobExp.find(".resume-title .edit"),
//		$jbtn = $jobExp.find(".add"),
//		$jList = $jobExp.find(".list"),
//		$jLi = $jList.find("li"),
//		$jDel = $jobExp.find(".del"),
//		$jEdit = $jLi.find(".edit"),
//		$jForm = $jobExp.find("#job-exp-form"),
//		$jCancel = $jobExp.find(".cancel");
//	var form = {};
//	form.name = $jForm.find(".input-text").eq(0);
//	form.job = $jForm.find(".input-text").eq(1);
//	form.fr = $jForm.find(".input-text").eq(2);
//	form.cont = $jForm.find(".input-text").eq(3);
//	var formUrl = "";
//	$jbtn.on("click", function() {
//		$jList.hide();
//		$jForm.show();
//		document.getElementById("job-exp-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$jAdd.on("click", function() {
//		$jList.hide();
//		$jForm.show();
//		document.getElementById("job-exp-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$jEdit.on("click", function() {
//		form.resume_id = this.getAttribute('data-id');
//		$jList.hide();
//		$jForm.show();
//		form.name.val(this.parentNode.querySelector(".name").innerText);
//		form.job.val(this.parentNode.querySelector(".job").innerText);
//		form.fr.val(this.parentNode.querySelector(".fr").innerText);
//		form.cont.val(this.parentNode.querySelector(".cont").innerText);
//		formUrl = SITE_URL+"?a=update";
//	});
//	$jDel.on("click", function() { //AJAX删除
//	
//	  var mymessage= confirm("确认删除");
//		if(mymessage==true)
//		{
//			$.ajax({
//				type: "post",
//				url: SITE_URL +"?a=delete",
//				data: {
//					index: "jobexp",
//					resume_id: this.getAttribute('data-id')
//				},
//				success: function() {
//					location.reload()
//				}
//			})	
//		}
//		else{}
//	
//		
//	});
//	$jForm.on("submit", function(e) { //AJAX更新
//		e.preventDefault();
//		$.ajax({
//			type: "post",
//			url: formUrl,
//			data: {
//				index: "jobexp",
//				resume_id: form.resume_id,
//				name: form.name.val(),
//				job: form.job.val(),
//				time: form.fr.val(),
//				cont: form.cont.val()
//			},
//			success: function() {
//				location.reload()
//			}
//		})
//	});
//	$jCancel.on("click", function(e) {
//		e.preventDefault();
//		$jList.show();
//		$jForm.hide();
//		location.reload();
//	});
//})();*/
///*教育经历*/
//(function() {
//	var $eduExp = $("#edu-exp"),
//		$eAdd = $eduExp.find(".resume-title .edit"),
//		$eList = $eduExp.find(".list"),
//		$eLi = $eList.find("li"),
//		$ebtn = $eduExp.find(".add"),
//		$eDel = $eduExp.find(".del"),
//		$eEdit = $eLi.find(".edit"),
//		$eForm = $eduExp.find("#edu-exp-form"),
//		$eCancel = $eduExp.find(".cancel");
//	var form = {};
//	form.name = $eForm.find(".input-text").eq(0);
//	form.major = $eForm.find(".input-text").eq(1);
//	form.xl = $eForm.find(".input-text").eq(2);
//	form.grad = $eForm.find(".input-text").eq(3);
//	var formUrl = "";
//	$ebtn.on("click", function() {
//		$eList.hide();
//		$eForm.show();
//		document.getElementById("edu-exp-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$eAdd.on("click", function() {
//		$eList.hide();
//		$eForm.show();
//		document.getElementById("edu-exp-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$eEdit.on("click", function() {
//		$eList.hide();
//		$eForm.show();
//		form.resume_id = this.getAttribute("data-id");
//		form.name.val(this.parentNode.querySelector(".name").innerText);
//		form.major.val(this.parentNode.querySelector(".major").innerText);
//		form.xl.val(this.parentNode.querySelector(".xl").innerText);
//		form.grad.val(this.parentNode.querySelector(".grad").innerText);
//		formUrl = SITE_URL+"?a=update";
//	});
//	$eDel.on("click", function() { //AJAX删除
//		var mymessage= confirm("确认删除");
//		if(mymessage==true)
//		{
//			$.ajax({
//				type: "post",
//				url: SITE_URL+"?a=delete",
//				data: {
//					resume_id: this.getAttribute('data-id')
//				},
//				success: function() {
//					location.reload()
//				}
//			})
//		}
//		else{}
//	});
//	$eForm.on("submit", function(e) { //AJAX更新
//		e.preventDefault();
//		$.ajax({
//			type: "post",
//			url: formUrl,
//			data: {
//				index: "eduexp",
//				resume_id: form.resume_id,
//				name: form.name.val(),
//				major: form.major.val(),
//				degree: form.xl.val(),
//				grad: form.grad.val()
//			},
//			success: function() {
//				location.reload();
//			}
//		})
//	});
//	$eCancel.on("click", function(e) {
//		e.preventDefault();
//		$eList.show();
//		$eForm.hide();
//	});
//})();
///*自我描述*/
//(function() {
//	var $selfDes = $("#self-des"),
//		$dEdit = $selfDes.find(".edit"),
//		$dadd = $selfDes.find(".add"),
//		$dList = $selfDes.find(".list"),
//		$dForm = $selfDes.find("#self-des-form"),
//		$dCancel = $selfDes.find(".cancel");
//	var form = {};
//	var formUrl = "";	
//	$dadd.on("click", function() {
//		$dList.hide();
//		$dForm.show();
//		document.getElementById("user-info-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$dEdit.on("click", function() {
//		$dList.hide();
//		$dForm.show();
//		form.resume_id = this.getAttribute("data-id");
//		$dForm.find("textarea").val($dList.text());
//		formUrl = SITE_URL+"?a=update";
//	});
//	$dForm.on("submit", function(e) { //AJAX更新
//		e.preventDefault();
//		$.ajax({
//			type: "post",
//			url: formUrl,
//			data: {
//				index: "des",
//				resume_id: form.resume_id,
//				des: $dForm.find("textarea").val()
//			},
//			success: function() {
//				location.reload();
//			}
//		})
//	});
//	$dCancel.on("click", function(e) {
//		e.preventDefault();
//		$dList.show();
//		$dForm.hide();
//	});
//})();
///*求职意向*/
//(function() {
//	var $jCareer = $("#job-career"),
//		$cAdd = $jCareer.find(".add"),
//		$cEdit = $jCareer.find(".edit"),
//		$cList = $jCareer.find(".list"),
//		$cForm = $jCareer.find("#job-career-form"),
//		$cCancel = $jCareer.find(".cancel");
//	var form = {};
//	form.name = $cForm.find(".input-text").eq(0);
//	form.type = $cForm.find(".input-text").eq(1);
//	form.city = $cForm.find(".input-text").eq(2);
//	form.wages = $cForm.find(".input-text").eq(3);
//	var formUrl = "";
//	
//	$cAdd.on("click", function() {
//		$cList.hide();
//		$cForm.show();
//		document.getElementById("user-info-form").reset();
//		formUrl = SITE_URL+"?a=add";
//	});
//	$cEdit.on("click", function() {
//		$cList.hide();
//		$cForm.show();
//		form.name.val($cList.find(".name").text());
//		form.type.val($cList.find(".type").text());
//		form.city.val($cList.find(".city").text());
//		form.wages.val($cList.find(".wages").text());
//		formUrl = SITE_URL+"?a=update";
//	});
//	$cForm.on("submit", function(e) { //AJAX更新
//		$.ajax({
//			type: "post",
//			url: formUrl,
//			data: {
//				index: "career",
//				name: form.name.val(),
//				type: form.type.val(),
//				city: form.city.val(),
//				wages: form.wages.val()
//			},
//			success: function() {
//				location.reload()
//			}
//		})
//	});
//	$cCancel.on("click", function(e) {
//		e.preventDefault();
//		$cList.show();
//		$cForm.hide();
//	});
//})();
///*求职状态*/
//$("#job-state").on("change", function() { //AJAX更新
//
//	$.ajax({
//		type: "post",
//		url: SITE_URL+"?a=update",
//		data: {
//			index: "state",
//			state: $("#job-state").val(),
//			success: function() {
//				
//			}
//		}
//	})
//});
//

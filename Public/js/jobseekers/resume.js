/*简历头像*/
$("#avatar-upload").on("mouseenter", function() {
	$("#avatar-bg").show();
});
$("#avatar-upload").on("mouseleave", function() {
	$("#avatar-bg").hide();
});
$("#avatar-upload").on("change", function() { //图片选中后触发事件
	alert("已选择文件" + this.value);
});
$("#avatar-img"); //可更改简历头像src
/*简历导航*/
var $rNav = $("#nav-list"),
	$rli = $rNav.find("li"),
	$rNavTop = $rNav.offset().top;
$(window).scroll(function() {
	if($(window).scrollTop() >= $rNavTop) {
		$rNav.addClass("fixed");
	} else {
		$rNav.removeClass("fixed");
	}
});
for(var i = 0; i < $rli.length; i++) {
	$rli[i].onclick = function() {
		for(var i = 0; i < $rli.length; i++) {
			$rli[i].className = "";
		}
		this.className = "selected";
	}
};
/*用户信息*/
(function() {
	var $uInfo = $("#user-info"),
		$uEdit = $uInfo.find(".edit"),
		$uList = $uInfo.find(".list"),
		$ubtn = $uInfo.find(".add"),
		$uform = $uInfo.find("#user-info-form"),
		$uCancel = $uInfo.find(".cancel");
	var form = {};
	form.name = $uform.find(".input-text").eq(0);
	form.intro = $uform.find(".input-text").eq(1);
	form.sex = $uform.find(".input-text").eq(2);
	form.birth = $uform.find(".input-text").eq(3);
	form.xl = $uform.find(".input-text").eq(4);
	form.gzjy = $uform.find(".input-text").eq(5);
	form.city = $uform.find(".input-text").eq(6);
	form.phone = $uform.find(".input-text").eq(7);
	form.email = $uform.find(".input-text").eq(8);
	var formUrl = "";
	$ubtn.on("click", function() {
		$uList.hide();
		$uform.show();
		document.getElementById("user-info-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$uEdit.on("click", function() { //修改
		$uList.hide();
		$uform.show();
		form.name.val($uList.find(".name").text());
		form.intro.val($uList.find(".intro").text());
		form.sex.val($uList.find(".sex").text());
		form.birth.val($uList.find(".birth").text());
		form.xl.val($uList.find(".xl").text());
		form.gzjy.val($uList.find(".gzjy").text());
		form.city.val($uList.find(".city").text());
		form.phone.val($uList.find(".p").text());
		form.email.val($uList.find(".e").text());
		formUrl = SITE_URL+"?a=update";
	});
	$uform.on("submit", function(e) { //AJAX更新
		e.preventDefault();
		$.ajax({
			type: "post",
			url: formUrl,
			data: {
				index: "basic",
				name: form.name.val(),
				intro: form.intro.val(),
				sex: form.sex.val(),
				birth: form.birth.val(),
				xl: form.xl.val(),
				gzjy: form.gzjy.val(),
				city: form.city.val(),
				phone: form.phone.val(),
				email: form.email.val()
			},
			success: function() {
				location.reload();
			}
		})
	});
	$uCancel.on("click", function(e) {
		e.preventDefault();
		$uList.show();
		$uform.hide();
	});
})();
/*工作经历*/
(function() {
	var $jobExp = $("#job-exp"),
		$jAdd = $jobExp.find(".resume-title .edit"),
		$jbtn = $jobExp.find(".add"),
		$jList = $jobExp.find(".list"),
		$jLi = $jList.find("li"),
		$jDel = $jobExp.find(".del"),
		$jEdit = $jLi.find(".edit"),
		$jForm = $jobExp.find("#job-exp-form"),
		$jCancel = $jobExp.find(".cancel");
	var form = {};
	form.name = $jForm.find(".input-text").eq(0);
	form.job = $jForm.find(".input-text").eq(1);
	form.fr = $jForm.find(".input-text").eq(2);
	form.cont = $jForm.find(".input-text").eq(3);
	var formUrl = "";
	$jbtn.on("click", function() {
		$jList.hide();
		$jForm.show();
		document.getElementById("job-exp-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$jAdd.on("click", function() {
		$jList.hide();
		$jForm.show();
		document.getElementById("job-exp-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$jEdit.on("click", function() {
		form.jid = this.getAttribute('data-id');
		$jList.hide();
		$jForm.show();
		form.name.val(this.parentNode.querySelector(".name").innerText);
		form.job.val(this.parentNode.querySelector(".job").innerText);
		form.fr.val(this.parentNode.querySelector(".fr").innerText);
		form.cont.val(this.parentNode.querySelector(".cont").innerText);
		formUrl = SITE_URL+"?a=update";
	});
	$jDel.on("click", function() { //AJAX删除
		$.ajax({
			type: "post",
			url: SITE_URL +"?a=delete",
			data: {
				index: "jobexp",
				jid: this.getAttribute('data-id')
			},
			success: function() {
				location.reload()
			}
		})
	});
	$jForm.on("submit", function(e) { //AJAX更新
		e.preventDefault();
		$.ajax({
			type: "post",
			url: formUrl,
			data: {
				index: "jobexp",
				jid: form.jid,
				name: form.name.val(),
				job: form.job.val(),
				time: form.fr.val(),
				cont: form.cont.val()
			},
			success: function() {
				location.reload()
			}
		})
	});
	$jCancel.on("click", function(e) {
		e.preventDefault();
		$jList.show();
		$jForm.hide();
	});
})();
/*教育经历*/
(function() {
	var $eduExp = $("#edu-exp"),
		$eAdd = $eduExp.find(".resume-title .edit"),
		$eList = $eduExp.find(".list"),
		$eLi = $eList.find("li"),
		$ebtn = $eduExp.find(".add"),
		$eDel = $eduExp.find(".del"),
		$eEdit = $eLi.find(".edit"),
		$eForm = $eduExp.find("#edu-exp-form"),
		$eCancel = $eduExp.find(".cancel");
	var form = {};
	form.name = $eForm.find(".input-text").eq(0);
	form.major = $eForm.find(".input-text").eq(1);
	form.xl = $eForm.find(".input-text").eq(2);
	form.grad = $eForm.find(".input-text").eq(3);
	var formUrl = "";
	$ebtn.on("click", function() {
		$eList.hide();
		$eForm.show();
		document.getElementById("edu-exp-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$eAdd.on("click", function() {
		$eList.hide();
		$eForm.show();
		document.getElementById("edu-exp-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$eEdit.on("click", function() {
		$eList.hide();
		$eForm.show();
		form.eid = this.getAttribute("data-id");
		form.name.val(this.parentNode.querySelector(".name").innerText);
		form.major.val(this.parentNode.querySelector(".major").innerText);
		form.xl.val(this.parentNode.querySelector(".xl").innerText);
		form.grad.val(this.parentNode.querySelector(".grad").innerText);
		formUrl = SITE_URL+"?a=update";
	});
	$eDel.on("click", function() { //AJAX删除
		$.ajax({
			type: "post",
			url: SITE_URL+"?a=delete",
			data: {
				eid: this.getAttribute('data-id')
			},
			success: function() {
				location.reload()
			}
		})
	});
	$eForm.on("submit", function(e) { //AJAX更新
		e.preventDefault();
		$.ajax({
			type: "post",
			url: formUrl,
			data: {
				index: "eduexp",
				eid: form.eid,
				name: form.name.val(),
				major: form.major.val(),
				xl: form.xl.val(),
				grad: form.grad.val()
			},
			success: function() {
				location.reload();
			}
		})
	});
	$eCancel.on("click", function(e) {
		e.preventDefault();
		$eList.show();
		$eForm.hide();
	});
})();
/*自我描述*/
(function() {
	var $selfDes = $("#self-des"),
		$dEdit = $selfDes.find(".edit"),
		$dadd = $selfDes.find(".add"),
		$dList = $selfDes.find(".list"),
		$dForm = $selfDes.find("#self-des-form"),
		$dCancel = $selfDes.find(".cancel");
	$dadd.on("click", function() {
		$dList.hide();
		$dForm.show();
		document.getElementById("user-info-form").reset();
	});
	$dEdit.on("click", function() {
		$dList.hide();
		$dForm.show();
		$dForm.find("textarea").val($dList.text());
	});
	$dForm.on("submit", function(e) { //AJAX更新
		e.preventDefault();
		$.ajax({
			type: "post",
			url: SITE_URL+"?a=update",
			data: {
				des: $dForm.find("textarea").val()
			},
			success: function() {
				location.reload();
			}
		})
	});
	$dCancel.on("click", function(e) {
		e.preventDefault();
		$dList.show();
		$dForm.hide();
	});
})();
/*求职意向*/
(function() {
	var $jCareer = $("#job-career"),
		$cAdd = $jCareer.find(".add"),
		$cEdit = $jCareer.find(".edit"),
		$cList = $jCareer.find(".list"),
		$cForm = $jCareer.find("#job-career-form"),
		$cCancel = $jCareer.find(".cancel");
	var form = {};
	form.name = $cForm.find(".input-text").eq(0);
	form.type = $cForm.find(".input-text").eq(1);
	form.city = $cForm.find(".input-text").eq(2);
	form.wages = $cForm.find(".input-text").eq(3);
	var formUrl = "";
	$cAdd.on("click", function() {
		$cList.hide();
		$cForm.show();
		document.getElementById("user-info-form").reset();
		formUrl = SITE_URL+"?a=add";
	});
	$cEdit.on("click", function() {
		$cList.hide();
		$cForm.show();
		form.name.val($cList.find(".name").text());
		form.type.val($cList.find(".type").text());
		form.city.val($cList.find(".city").text());
		form.wages.val($cList.find(".wages").text());
		formUrl = SITE_URL+"?a=update";
	});
	$cForm.on("submit", function(e) { //AJAX更新
		$.ajax({
			type: "post",
			url: formUrl,
			data: {
				index: "career",
				name: form.name.val(),
				type: form.type.val(),
				city: form.city.val(),
				wages: form.wages.val()
			},
			success: function() {
				location.reload()
			}
		})
	});
	$cCancel.on("click", function(e) {
		e.preventDefault();
		$cList.show();
		$cForm.hide();
	});
})();
/*求职状态*/
$("#job-state").on("change", function() { //AJAX更新
	$.ajax({
		type: "post",
		url: SITE_URL+"?a=update",
		data: {
			index: "state",
			state: $("#job-state").val()
		}
	})
});
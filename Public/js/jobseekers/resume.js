/*AJAX*/
function ajax(config) {
	var xhr = new XMLHttpRequest();
	xhr.open(config.method, config.url, true);
	if(config.method.toUpperCase() == "POST") {
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	} else {
		xhr.send(config.data || null);
	}
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			config.success(xhr.responseText);
		}
	}
};
/*简历头像*/
$("#avatar-upload").on("mouseenter", function() {
	$("#avatar-bg").show();
});
$("#avatar-upload").on("mouseleave", function() {
	$("#avatar-bg").hide();
});
$("#avatar-upload").on("change", function() { //图片选中后事件

});
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
var $uInfo = $("#user-info"),
	$uEdit = $uInfo.find(".edit"),
	$uList = $uInfo.find(".list"),
	$uform = $uInfo.find("#user-info-form"),
	$uCancel = $uInfo.find(".cancel");
$uEdit.on("click", function() {
	$uList.hide();
	$uform.show();
	$uform.find(".input-text").eq(0).val($uList.find(".name").text());
	$uform.find(".input-text").eq(1).val($uList.find(".intro").text());
	$uform.find(".input-text").eq(2).val($uList.find(".sex").text());
	$uform.find(".input-text").eq(3).val($uList.find(".birth").text());
	$uform.find(".input-text").eq(4).val($uList.find(".xl").text());
	$uform.find(".input-text").eq(5).val($uList.find(".gzjy").text());
	$uform.find(".input-text").eq(6).val($uList.find(".city").text());
	$uform.find(".input-text").eq(7).val($uList.find(".p").text());
	$uform.find(".input-text").eq(8).val($uList.find(".e").text());
});
$uCancel.on("click", function(e) {
	e.preventDefault();
	$uList.show();
	$uform.hide();
});
/*工作经历*/
var $eduExp = $("#edu-exp"),
	$eAdd = $eduExp.find(".resume-title .edit"),
	$eList = $eduExp.find(".list"),
	$eLi = $eList.find("li"),
	$eEdit = $eLi.find(".edit"),
	$eForm = $eduExp.find("#edu-exp-form"),
	$eCancel = $eduExp.find(".cancel");
$eAdd.on("click", function() {
	$eList.hide();
	$eForm.show();
});
$eEdit.on("click", function() {
	$eList.hide();
	$eForm.show();
	$eForm.find(".input-text").eq(0).val(this.parentNode.querySelector(".name").innerText);
	$eForm.find(".input-text").eq(1).val(this.parentNode.querySelector(".major").innerText);
	$eForm.find(".input-text").eq(2).val(this.parentNode.querySelector(".xl").innerText);
	$eForm.find(".input-text").eq(3).val(this.parentNode.querySelector(".grad").innerText);
});
$eCancel.on("click", function(e) {
	e.preventDefault();
	$eList.show();
	$eForm.hide();
});
/*教育经历*/
var $jobExp = $("#job-exp"),
	$jAdd = $jobExp.find(".resume-title .edit"),
	$jList = $jobExp.find(".list"),
	$jLi = $jList.find("li"),
	$jEdit = $jLi.find(".edit"),
	$jForm = $jobExp.find("#job-exp-form"),
	$jCancel = $jobExp.find(".cancel");
$jAdd.on("click", function() {
	$jList.hide();
	$jForm.show();
});
$jEdit.on("click", function() {
	$jList.hide();
	$jForm.show();
	$jForm.find(".input-text").eq(0).val(this.parentNode.querySelector(".name").innerText);
	$jForm.find(".input-text").eq(1).val(this.parentNode.querySelector(".job").innerText);
	$jForm.find(".input-text").eq(2).val(this.parentNode.querySelector(".fr").innerText);
	$jForm.find(".input-text").eq(3).val(this.parentNode.querySelector(".cont").innerText);
});
$jCancel.on("click", function(e) {
	e.preventDefault();
	$jList.show();
	$jForm.hide();
});
/*自我描述*/
var $selfDes = $("#self-des"),
	$dEdit = $selfDes.find(".edit"),
	$dList = $selfDes.find(".list"),
	$dForm = $selfDes.find("#self-des-form"),
	$dCancel = $selfDes.find(".cancel");
$dEdit.on("click", function() {
	$dList.hide();
	$dForm.show();
	$dForm.find("textarea").val($dList.text());
});
$dCancel.on("click", function(e) {
	e.preventDefault();
	$dList.show();
	$dForm.hide();
});
/*求职意向*/
var $jCareer = $("#job-career"),
	$cEdit = $jCareer.find(".edit"),
	$cList = $jCareer.find(".list"),
	$cForm = $jCareer.find("#job-career-form"),
	$cCancel = $jCareer.find(".cancel");
$cEdit.on("click", function() {
	$cList.hide();
	$cForm.show();
	$cForm.find(".input-text").eq(0).val($cList.find(".name").text());
	$cForm.find(".input-text").eq(1).val($cList.find(".type").text());
	$cForm.find(".input-text").eq(2).val($cList.find(".city").text());
	$cForm.find(".input-text").eq(3).val($cList.find(".wages").text());
});
$cCancel.on("click", function(e) {
	e.preventDefault();
	$cList.show();
	$cForm.hide();
});
/*求职状态*/
$("#job-state").on("change", function() { //求职选项改变后事件
});
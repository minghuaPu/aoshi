/**
 * Created by iphone on 2017/1/4.
 */
$("#company_name input").attr("placeholder","公司全称为您所在公司的营业执照上的名称");
$("#address input").attr("placeholder","公司地址为您所在公司的详细地址");
$("#name input").attr("placeholder","请输入您的名字");
$("#job input").attr("placeholder","请输入您的职位，少于7个汉字");
$("#email input").attr("placeholder","请输入您的默认接收简历邮箱");
$("#phone input").attr("placeholder","请输入您的电话，以便确认信息");

$("#job input").keyup(function () {
    var value=$(this).val();
    if (value.length>7){
        value = value.substring(0,7);
        $("#job input").val(value);
        value.length=7;
    }
    $(".job_tip").html(value.length+" / 7");
})
$("#job input").blur(function () {
    $(".job_tip").html("");
})
$("#submit").on("click",function () {
    $(".bottom_tip").text("");
    if ($("#company_name input").val() == "") {
        $(".bottom_tip").text("未填写公司名称")
        return false;
    } else if ($(".province").val() == "0") {
        $(".bottom_tip").text("未选择省")
        return false;
    } else if ($(".city").val() == "0") {
        $(".bottom_tip").text("未选择城市")
        return false;
    } else if ($(".area").val() == "0") {
        $(".bottom_tip").text("未选择地区")
        return false;
    } else if ($("#address input").val() == "") {
        $(".bottom_tip").text("未填写详细地址")
        return false;
    } else if ($(".scale").val() == "选择规模") {
        $(".bottom_tip").text("未选择公司规模")
        return false;
    } else if ($("#introduction textarea").val() == "") {
        $(".bottom_tip").text("未填写公司简介")
        return false;
    } else if ($("#name input").val() == "") {
        $(".bottom_tip").text("未填写姓名")
        return false;
    } else if ($("#job input").val() == "") {
        $(".bottom_tip").text("未填写职位")
        return false;
    } else if ($("#email input").val() == "") {
        $(".bottom_tip").text("未填写简历接收邮箱")
        return false;
    } else if ($("#phone input").val() == "") {
        $(".bottom_tip").text("未填写电话")
        return false;
    }
    if ($(".area").val()){
        $(".iProvince").attr("value", $(".province").val());
        $(".iCity").attr("value", $(".city").val());
        $(".iArea").attr("value", $(".area").val());
    }else {
        $(".iCity").attr("value", $(".province").val());
        $(".iArea").attr("value", $(".city").val());
    }
    $(".iScale").attr("value",$(".scale").val());
})
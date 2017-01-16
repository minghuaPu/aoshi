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
        $("#company_name input").focus();
        return false;
    } else if ($("#s_province").val() == "省份") {
        $("#s_province").focus();
        return false;
    } else if ($("#s_city").val() == "地级市") {
        $("#s_city").focus();
        return false;
    } else if ($("#s_county").val() == "市、县级市") {
        $("#s_county").focus();
        return false;
    } else if ($("#address input").val() == "") {
        $("#address input").focus();
        return false;
    } else if ($(".scale").val() == "选择规模") {
        $(".scale").focus();
        return false;
    } else if ($("#introduction textarea").val() == "") {
        $("#introduction textarea").focus();
        return false;
    } else if ($("#name input").val() == "") {
        $("#name input").focus();
        return false;
    } else if ($("#job input").val() == "") {
        $("#job input").focus();
        return false;
    } else if ($("#email input").val() == "") {
        $("#email input").focus();
        return false;
    } else if ($("#phone input").val() == "") {
        $("#phone input").focus();
        return false;
    }
    $(".iProvince").attr("value", $("#s_province").val());
    $(".iCity").attr("value", $("#s_city").val());
    $(".iArea").attr("value", $("#s_county").val());

    $(".iScale").attr("value",$(".scale").val());
})
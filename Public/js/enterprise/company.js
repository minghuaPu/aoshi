/**
 * Created by iphone on 2017/1/4.
 */

var inHeight = parseInt($("#introduction").height())+10;
$(".introduction").css({
    height:inHeight+"px"
})
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
    $(".iProvince").attr("value",$(".province").val());
    $(".iCity").attr("value",$(".city").val());
    $(".iArea").attr("value",$(".area").val());
    $(".iScale").attr("value",$(".scale").val());
})
$("#area").text()
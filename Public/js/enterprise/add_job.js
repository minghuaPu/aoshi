/**
 * Created by iphone on 2016/12/23.
 */
for(var i=1;i<51;i++){
    $("#salary_lowLimit").append("<option value='"+i+"k'>"+i+"k</option>")
}
$("#salary_lowLimit").on("change",function () {
    $("#salary_higLimit").removeClass("hide");
    $(".salary").removeClass("hide");
    higLimit();
})
function higLimit() {
    var lowLimit=parseInt($("#salary_lowLimit").val())+1;
    $("#salary_higLimit").html("");
    for (var i=lowLimit;i<51;i++){
        $("#salary_higLimit").append("<option value='"+i+"k'>"+i+"k</option>")
    }
}
higLimit();
$("#jobName").keyup(function () {
    var value=$(this).val();
    if (value.length>10){
        value = value.substring(0,10);
        $("#jobName").val(value);
        value.length=10;
    }
    $(".job_tip").html(value.length+" / 10");
})
$("#jobName").blur(function () {
    $(".job_tip").html("");
})
$(".submit").on("click",function () {
    $(".bottom_tip").text("");
    if ($("#jobName").val()==""){
        $(".bottom_tip").text("未填写工作名称")
        return false;
    } else if ($("#address").val()==""){
        $(".bottom_tip").text("未填写详细地址")
        return false;
    }else if ($("#salary_lowLimit").val()=="选择最低薪资"){
        $(".bottom_tip").text("未选择薪资")
        return false;
    }else if ($("#education").val()=="选择学历"){
        $(".bottom_tip").text("未选择学历要求")
        return false;
    }else if($("#work_time").val()=="选择时间"){
        $(".bottom_tip").text("未选择工作经验时间")
        return false;
    }else if ($("#jobReq").val()=="") {
        $(".bottom_tip").text("未填写技能要求")
        return false;
    }else if ($("#jobDes").val()==""){
        $(".bottom_tip").text("未填写职位描述")
        return false;
    }else if ($("#email").val()==""){
        $(".bottom_tip").text("未填写简历接收邮箱")
        return false;
    }
    $(".work_time").val($("#work_time").val());
    $(".education").val($("#education").val());
    $(".salary_lowLimit").val($("#salary_lowLimit").val());
    $(".salary_higLimit").val($("#salary_higLimit").val());
    $(".iprovince").val($(".province").val());
    $(".icity").val($(".city").val());
    $(".iarea").val($(".area").val())
})



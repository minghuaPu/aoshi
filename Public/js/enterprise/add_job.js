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
    if (lowLimit==51){
        $("#salary_higLimit").append("<option value='100k'>100k</option>")
    }
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
        $("#jobName").focus();
        return false;
    }else if ($("#address").val()==""){
        $("#address").focus();
        return false;
    }else if ($("#salary_lowLimit").val()=="选择最低薪资"){
        $("#salary_lowLimit").focus();
        return false;
    }else if ($("#education").val()=="选择学历"){
        $("#education").focus();
        return false;
    }else if($("#work_time").val()=="选择时间"){
        $("#work_time").focus();
        return false;
    }else if ($("#jobReq").val()=="") {
        $("#jobReq").focus();
        return false;
    }else if ($("#jobDes").val()==""){
        $("#jobDes").focus();
        return false;
    }else if ($("#email").val()==""){
        $("#email").focus();
        return false;
    }
    $(".work_time").val($("#work_time").val());
    $(".education").val($("#education").val());
    $(".salary_lowLimit").val($("#salary_lowLimit").val());
    $(".salary_higLimit").val($("#salary_higLimit").val());
    $(".iprovince").val($("#s_province").val());
    $(".icity").val($("#s_city").val());
    $(".iarea").val($("#s_county").val())
})




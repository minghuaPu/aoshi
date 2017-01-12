/**
 * Created by iphone on 2016/12/23.
 */
for(var i=0;i<51;i++){
    $("#salary_lowLimit").append("<option value='"+i+"k'>"+i+"k</option>")
    $("#salary_higLimit").append("<option value='"+i+"k'>"+i+"k</option>")
}
$("#salary_lowLimit").append()
$(".submit").on("click",function () {
    $(".work_time").val($("#work_time").val());
    $(".education").val($("#education").val());
    $(".salary_lowLimit").val($("#salary_lowLimit").val());
    $(".salary_higLimit").val($("#salary_higLimit").val());
    $(".iprovince").val($(".province").val());
    $(".icity").val($(".city").val());
    $(".iarea").val($(".area").val())
})



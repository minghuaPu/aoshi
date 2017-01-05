/**
 * Created by iphone on 2017/1/4.
 */

$(".revise").click(function  () {
    var this_val=$(this).text();
    var this_id=$(this).parent().attr("id_val");
    var this_name=$(this).attr("name");

    var job_val=$(this).parent().children().eq(0).text();
    var money_val=$(this).parent().children().eq(2).text();
    var place_val=$(this).parent().children().eq(3).text();
    var require_val=$(this).parent().children().eq(7).text();

    //怎么去除左右的空格
    // this_val.trim();

    // 把当前的变成输入框,并且赋上原来的值
    $(this).html("<input value='"+this_val.trim()+"' >");
    //为什么输入不了内容？
    $(this).find('input').focus();



    // 是在当前文本框失去焦点的时候执行
    $(this).find("input").blur(function  () {
        //$(this)  //td盒子  还是  input
        var input_val=$(this).val();
        // 还原，就是把当前td的input还原为纯文本的
        $(this).parent().html(input_val);//td对象

        if (this_name == "job_name") {
            job_val = input_val
        } else if (this_name == "money") {
            money_val = input_val
        } else if (this_name == "place") {
            place_val = input_val
        } else if (this_name == "job_require") {
            require_val = input_val
        }
        $.post(SITE_URL + "/job/ajax_add", {
            "id": this_id,
            "job_name": job_val,
            "place": place_val,
            "money": money_val,
            "job_require": require_val
        }, function (rtn) {

        }, "json")



    })
})
$(".detail").hide();
$(".info").click(function (event) {
    event.stopPropagation();
    $(".detail").hide();
    $("#"+$(this).parent().parent().attr("id_val")).show();
})
document.onclick=function () {
    $(".detail").hide();
}
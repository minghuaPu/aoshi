/**
 * Created by iphone on 2017/1/4.
 */
// 读取每个div中的宽度
var aTh = $(".row div[width$='w']");
for (var i = 0 ;i < aTh.length; i++){
    var thWidth = parseInt(aTh.eq(i).attr("width"));
    aTh.eq(i).css({
        width:thWidth
    })
}
//  判断是否有最少一条职位信息
if ($(".table tr").html()==""){
    $(".tip").removeClass("hide")
}
//  判断是否有超过8条信息，不超过则隐藏分页
if ($(".row tr").length<16){
    $(".page_box").hide()
}
//  判断每一个职位信息的状态，并显示不同的文字
for (var i = 0;i < $(".status").length;i++){
    if ($(".status").eq(i).text()==1){
        $(".status").eq(i).text("正在招聘中");
        $(".status").eq(i).css({
            color:"green"
        })
    }else {
        $(".status").eq(i).text("已结束招聘");
        $(".status").eq(i).css({
            color:"grey"
        });
        $(".close_job").eq(i).attr("disabled","disabled")
    }
}
//  全选菜单
$("#all_check").click(function  () {
    if($(this).is(':checked') ){
        $('.delete').prop('checked',true);
        $(".delete_all").text("删除");
    }
    else {
        $('.delete').prop('checked',false);
        $(".delete_all").text("");
    }
})
//  删除
$(".delete_all").on("click",function () {
    alert()
    $('#myModal').modal();
})
$(".delete").on("click",function () {
    var deleted = $(this);
    $('#confirm').on("click",function () {
        deleted.parent().parent().remove()
        var this_id = deleted.parent().parent().attr("id_val");
        $.post(SITE_URL + "/List/delete", {
            "id": this_id,
        }, function (rtn) {

        }, "json")
    })
})
//  点击详情显示
$(".info").on("click",function () {
    var detail = $(this).parent().parent().next();
    if (detail.attr("open")){
        detail.hide();
        detail.attr("open",false);
    }else {
        detail.show();
        detail.attr("open",true);
    }
})
//  结束招聘
$(".close_job").on("click",function () {
    var status = $(this).parent().parent().children().eq(6);
    status.text("已结束招聘");
    status.css({
        color:"grey"
    })
    $(this).attr("disabled","disabled")
    var this_id = $(this).parent().parent().attr("id_val");
    $.post(SITE_URL + "/List/close_job", {
        "id": this_id,
    }, function (rtn) {

    }, "json")
})
//  双击修改
$(".revise").dblclick(function  () {
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
        $.post(SITE_URL + "/List/ajax_add", {
            "id": this_id,
            "job_name": job_val,
            "place": place_val,
            "money": money_val,
            "job_require": require_val
        }, function (rtn) {

        }, "json")
    })
})
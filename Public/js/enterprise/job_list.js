/**
 * Created by iphone on 2017/1/4.
 */
//  判断每一个职位信息的状态，并显示不同的文字
for (var i = 0;i < $(".status").length;i++){
    if ($(".status").eq(i).text()==0){
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
$("#all_check").on("click",function  () {
    if($(this).is(':checked') ){
        $('.delete').prop('checked',true);
        $("#all_check").prop("checked",true);
        $(".delete_all").text("删除");
        $(".delete_all").click(function  () {
            //把选中的复选框拿出来，获取它们的id值
            var id_string='';
            var coma='';
            $('.delete').each(function  () {
                if ($(this).is(":checked")) {
                    id_string+=coma+$(this).parent().parent().attr("id_val");
                    coma=',';
                }
            })
            $(".warning p").text("是否要删除被选中的招聘信息？");
            $("#confirm_close").attr("disabled",true);
            $("#confirm_delete").attr("disabled",true);
            $("#confirm_delete_all").attr("disabled",false);
            $("#confirm_delete_all").click(function () {
                //ajax请求php进行删除
                var ids=id_string;
                $.post(SITE_URL + "/List/delete_all",{'ids':ids},function  (rt_object) {

                    //把json转换成对象
                    if (rt_object.status==1) {

                        $('.delete').each(function  () {
                            if ($(this).is(":checked")) {
                                $(this).parent().parent().remove();
                            }
                        })
                    }else{
                        console.log(rt_object.msg);
                    }
                },"json")
            })
        })
    }
    else {
        $('.delete').prop('checked',false);
        $(".delete_all").text("");
    }
})
$(".delete").on("click",function () {
    var this_id=$(this).parent().parent().attr("id_val");
    var this_delete=$(this);
    $(".warning p").text("是否要删除该次招聘信息？");
    $("#confirm_close").attr("disabled",true);
    $("#confirm_delete").attr("disabled",false);
    $("#confirm_delete_all").attr("disabled",true);
    $("#confirm_delete").click(function () {
        //ajax请求php进行删除
        $.post(SITE_URL + "/List/delete",{'id':this_id},function  (rt_object) {

            //把json转换成对象
            if (rt_object.status==1) {

                $('.delete').each(function  () {
                    this_delete.parent().parent().remove();
                })
            }else{
                console.log(rt_object.msg);
            }
        },"json")
    })
})
//  结束招聘
$(".close_job").on("click",function () {
    var this_close=$(this);

    var this_id = $(this).parent().parent().attr("id_val");
    $(".warning p").text("是否要结束此次招聘？");
    $("#confirm_close").attr("disabled",false);
    $("#confirm_delete").attr("disabled",true);
    $("#confirm_delete_all").attr("disabled",true);
    $("#confirm_close").click(function () {
        //ajax请求php进行删除
        $.post(SITE_URL + "/List/close_job",{'id':this_id},function  (rt_object) {

            //把json转换成对象
            if (rt_object.status==1) {

                var status = this_close.parent().parent().children().eq(6);
                status.text("已结束招聘");
                status.css({
                    color:"grey"
                })
                this_close.attr("disabled","disabled")
            }else{
                console.log(rt_object.msg);
            }
        },"json")
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
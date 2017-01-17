/**
 * Created by iphone on 2017/1/13.
 */
if ($('.row tr').text()==""){
    $(".tip").removeClass("hide");
}
for (var i=0;i<$(".status").length;i++){
    if ($(".status").eq(i).text()=="0"){
        $(".status").eq(i).text("尚未查看")
        $(".status").eq(i).css({
            color:"blue"
        })
    }else if($(".status").eq(i).text()=="1"){
        $(".status").eq(i).text("已经查看")
        $(".status").eq(i).css({
            color:"red"
        })
    }else if($(".status").eq(i).text()=="2"){
        $(".status").eq(i).text("正在沟通")
        $(".status").eq(i).css({
            color:"green"
        })
    }else if($(".status").eq(i).text()=="3"){
        $(".status").eq(i).text("关系破裂")
        $(".status").eq(i).css({
            color:"orange"
        })
    }
    else if($(".status").eq(i).text()=="4"){
        $(".status").eq(i).text("成功招聘")
        $(".status").eq(i).css({
            color:"grey"
        })
    }
}

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


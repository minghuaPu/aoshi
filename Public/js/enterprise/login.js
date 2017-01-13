$("#register").on("click",function () {
    var test =  /(?!^\d+$)(?!^[a-zA-Z]+$)[0-9a-zA-Z]{4,23}/;
    $(".name").parent().children().eq(1).text("");
    $(".pwd").parent().children().eq(1).text("");
    $(".pwd_confirm").parent().children().eq(1).text("");
    if(test.test($('.name').val())==false){
        $(".name").parent().children().eq(1).text("用户名只能由数字和字母组成！");
        return false;
    }else {
        if (test.test($(".pwd").val())==false){
            $(".pwd").parent().children().eq(1).text("密码只能由数字和字母组成！");
            return false;
        }else {
            if ($(".pwd").val().length > 11 || $(".pwd").val().length < 6){
                $(".pwd").parent().children().eq(1).text("密码长度为6到11位！");
                return false;
            }
            else {
                if ($(".pwd_confirm").val()!==$(".pwd").val()){
                    $(".pwd_confirm").parent().children().eq(1).text("密码不一致！");
                    return false;
                }
            }
        }
    }
    // var this_name=$('.name').val();
    // var a=0;
    // $.post(SITE_URL + "/Login/check",{'name':this_name},function  (rt_object) {
    //
    //     //把json转换成对象
    //     if (rt_object.status==0) {
    //         alert(rt_object.msg)
    //         $(".name").parent().children().eq(1).text(rt_object.msg);
    //         return false;
    //     }else {
    //         alert(rt_object.msg)
    //     }
    // },"json")
    //
    // if (a==0){
    //     return false
    // }
})
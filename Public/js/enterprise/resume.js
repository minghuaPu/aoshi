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
            color:"green"
        })
    }else if($(".status").eq(i).text()=="1"){
        $(".status").eq(i).text("已经查看")
        $(".status").eq(i).css({
            color:"red"
        })
    }else if($(".status").eq(i).text()=="2"){
        $(".status").eq(i).text("正在沟通")
        $(".status").eq(i).css({
            color:"orange"
        })
    }else if($(".status").eq(i).text()=="3"){
        $(".status").eq(i).text("关系破裂")
        $(".status").eq(i).css({
            color:"grey"
        })
    }
}


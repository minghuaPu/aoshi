/**
 * Created by iphone on 2016/12/20.
 */
$(".job").on("mouseover",function () {
    $(".icon_job").css({
        backgroundPosition: "-18px 0px"
    })
})
$(".job").on("mouseout",function () {
    $(".icon_job").css({
        backgroundPosition: "0px 0px"
    })
})
$(".job").on("click",function () {
    if ($(".job ul").css("display")=="none"){
        $(".item ul").hide();
        $(".i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
        $(".job ul").show();
        $(".job .i_open").css({
            background: 'url("../Public/images/i_open.png")'
        })
    }else {
        $(".job ul").hide();
        $(".job .i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
    }
})
$(".user").on("mouseover",function () {
    $(".icon_user").css({
        backgroundPosition: "-103px 0px"
    })
})
$(".user").on("mouseout",function () {
    $(".icon_user").css({
        backgroundPosition: "-76px 0px"
    })
})
$(".user").on("click",function () {
    if ($(".user ul").css("display")=="none"){
        $(".item ul").hide();
        $(".i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
        $(".user ul").show();
        $(".user .i_open").css({
            background: 'url("../Public/images/i_open.png")'
        })
    }else {
        $(".user ul").hide();
        $(".user .i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
    }
})
$(".select").on("mouseover",function () {
    $(".icon_select").css({
        backgroundPosition: "2px -60px"
    })
})
$(".select").on("mouseout",function () {
    $(".icon_select").css({
        backgroundPosition: "-34px -60px"
    })
})
$(".mess").on("mouseover",function () {
    $(".icon_mess").css({
        backgroundPosition: "-56px 0px"
    })
})
$(".mess").on("mouseout",function () {
    $(".icon_mess").css({
        backgroundPosition: "-36px -0px"
    })
})
$(".me").on("mouseover",function () {
    $(".icon_me").css({
        backgroundPosition: "20px 0px"
    })
})
$(".me").on("mouseout",function () {
    $(".me").css({
        backgroundPosition: "38px 0px"
    })
})
$(".me").on("click",function () {
    if ($(".me ul").css("display")=="none"){
        $(".item ul").hide();
        $(".i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
        $(".me ul").show();
        $(".me .i_open").css({
            background: 'url("../Public/images/i_open.png")'
        })
    }else {
        $(".me ul").hide();
        $(".me .i_open").css({
            background: 'url("../Public/images/i_close.png")'
        })
    }
})

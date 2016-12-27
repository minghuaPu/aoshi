/**
 * Created by iphone on 2016/12/20.
 */
$(".item").on("click",function () {

    var $aItem = $(".item").eq($(this).index());
    var $aUl = $(".item").eq($(this).index()).children().eq(1);
    var $aIcon = $(".item").eq($(this).index()).children().eq(0).children().eq(2);
    console.log($aItem)

    $aItem.css({
        backgroundColor:"#333e45"
    })
    $aItem.siblings().css({
        backgroundColor:"#4f5e68"
    })

    if ($aIcon.attr("class")=="i_close"){
        $(".item .i_open").attr("class","i_close")
        $aIcon.attr("class","i_open");
    }else {
        $aIcon.attr("class","i_close");
    }
    if ($aUl.attr("class")=="hide"){
        $(".item ul").attr("class","hide")
        $aUl.attr("class","show");
    }else {
        $aUl.attr("class","hide");
    }
})
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
        $(".job ul").show();
    }else {
        $(".job ul").hide();
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
    $(".icon_me").css({
        backgroundPosition: "38px 0px"
    })
})

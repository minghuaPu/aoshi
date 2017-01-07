/**
 * Created by iphone on 2016/12/20.
 */
// $(".item").on("click",function () {
//
//     var $aItem = $(".item").eq($(this).index());
//     var $aUl = $(".item").eq($(this).index()).children().eq(1);
//     var $aIcon = $(".item").eq($(this).index()).children().eq(0).children().eq(2);
//
//     $aItem.css({
//         backgroundColor:"#333e45"
//     }).siblings().css({
//         backgroundColor:"#4f5e68"
//     })
//
//     if ($aIcon.attr("class")=="i_close"){
//         $(".item .i_open").attr("class","i_close")
//         $aIcon.attr("class","i_open");
//     }else if ($aIcon.attr("class")=="i_open"){
//         $aIcon.attr("class","i_close");
//     }
//     if ($aUl.attr("class")=="hide"){
//         $(".item ul").attr("class","hide");
//         $aUl.attr("class","show");
//     }else {
//         $aUl.attr("class","hide");
//     }
// })
$(".item").on("mouseover",function () {
    var $aItem = $(".item").eq($(this).index());
    var $icon = $(".item").eq($(this).index()).children().eq(0).children().eq(0);
    var position=null;
    if($aItem.attr("class")=="item job"){
        position="-18px 0px"
    }else if($aItem.attr("class")=="item seeker"){
        position="-103px 0px"
    }else if($aItem.attr("class")=="item list"){
        position="-125px 40px";
    }else if($aItem.attr("class")=="item me"){
        position="20px 0px"
    }

    itemMouseover($icon,position);
})
$(".item").on("mouseout",function () {
    var $aItem = $(".item").eq($(this).index());
    var $icon = $(".item").eq($(this).index()).children().eq(0).children().eq(0);
    var position=null;
    if($aItem.attr("class")=="item job"){
        position="0px 0px"
    }else if($aItem.attr("class")=="item seeker"){
        position="-76px 0px"
    }else if($aItem.attr("class")=="item list"){
        position="-82px 40px"
    }else if($aItem.attr("class")=="item me"){
        position="38px 0px"
    }

    itemMouseover($icon,position);
})

function itemMouseover($icon,position) {
    $icon.css({
        backgroundPosition: position
    })
}

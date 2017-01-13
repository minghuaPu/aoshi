/**
 * Created by iphone on 2017/1/3.
 */
// 读取每个div中的宽度
var aTh = $(".row div[width$='w']");
for (var i = 0 ;i < aTh.length; i++){
    var thWidth = parseInt(aTh.eq(i).attr("width"));
    aTh.eq(i).css({
        width:thWidth
    })
}
$(".dropdown-menu li").on("click",function () {
    $(this).parent().parent().children().eq(1).text($(this).text());
})
$(".search").on("click",function () {
    $("#workTime").val($("#dropdownMenu2").text())
    $("#education").val($("#dropdownMenu3").text())
    $("#status").val($("#dropdownMenu4").text())
})
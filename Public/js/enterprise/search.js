/**
 * Created by iphone on 2017/1/3.
 */
$(".dropdown-menu li").on("click",function () {
    $(this).parent().parent().children().eq(1).text($(this).text());
})
$(".search").on("click",function () {
    $("#workTime").val($("#dropdownMenu2").text())

    $("#education").val($("#dropdownMenu3").text())

})
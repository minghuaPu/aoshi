/**
 * Created by iphone on 2017/1/3.
 */
$(".dropdown-menu li").on("click",function () {
    $(this).parent().parent().children().eq(1).text($(this).text());
})
$(".search")
/**
 * Created by iphone on 2016/12/23.
 */
$(".dropdown-menu li").on("click",function () {
    $(this).parent().parent().children().eq(0).text($(this).text());
    $(this).parent().parent().parent().children().eq(1).val($(this).text());
})
$(".choose li").on("click",function () {
    if ($(this).text()=="技术"){
        $(".design").addClass("hide");
        $(".develop").removeClass("hide");
        // $(".choose").parent().children().eq(1).val("技术");
        $("#dropdownMenu2").text("选择职业名称");
        $("#dropdownMenu2").removeAttr("disabled");
    }else if ($(this).text()=="设计"){
        $(".develop").addClass("hide");
        $(".design").removeClass("hide");
        // $(".choose").parent().children().eq(1).val("设计");
        $("#dropdownMenu2").text("选择职业名称");
        $("#dropdownMenu2").removeAttr("disabled");
    }
})

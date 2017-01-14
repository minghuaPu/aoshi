/**
 * Created by iphone on 2017/1/13.
 */
console.log($('#status').text())
if ($('#status').text()==1){
    $('#status').text("符合要求")
}else if ($('#status').text()==2){
    $('#status').text("正在沟通中");
    $('#status').attr("disabled",true);
    $('#status').css({
        backgroundColor:"#449d44",
        borderColor:"#398439"
    });
    $('#status').removeAttr("href");
    $('.unmatch').removeClass('hide');
}else if ($('#status').text()==3){
    $(this).text("此次招聘已关闭")
    $(this).attr("disabled",true);
}
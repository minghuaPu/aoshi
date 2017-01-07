/**
 * Created by iphone on 2017/1/4.
 */
var inHeight = parseInt($("#introduction").height())+10;
$(".introduction").css({
    height:inHeight+"px"
})
$(".info_item").dblclick(function  () {
    var this_val=$(this).text();
    var this_name=$(this).attr("id");
    var enterprise_id=$("#submit").attr("id_val");

    var company_val=$("#company_name").text();
    var address_val=$("#address").text();
    var introduction_val=$("#introduction").text();
    var name_val=$("#name").text();
    var job_val=$("#job").text();
    var email_val=$("#email").text();
    var phone_val=$("#phone").text();


    // 把当前的变成输入框,并且赋上原来的值
    if (this_name == "introduction"){
        $(this).html("<textarea>"+this_val.trim()+"</textarea>");
    }else if (this_name == "email"){
        $(this).html("<input type='email' value='"+this_val.trim()+"'>");
    }else {
        $(this).html("<input value='"+this_val.trim()+"'>");
    }
    //为什么输入不了内容？
    $(this).find('input').focus();
    $(this).find('textarea').focus();


    // 是在当前文本框失去焦点的时候执行
    $(this).find("input").blur(function  () {
        var input_val=$(this).val();
        var this_id=$(this).parent().attr("id");
        $(this).parent().html(input_val);//td对象

        if (this_id == "company_name") {
            company_val = input_val
        } else if (this_id == "address") {
            address_val = input_val
        }  else if (this_id == "name") {
            name_val = input_val
        }else if (this_id == "job") {
            job_val = input_val
        } else if (this_id == "email") {
            email_val = input_val
        } else if (this_id == "phone") {
            phone_val = input_val
        }
        $.post(SITE_URL + "/company/ajax_add", {
            "enterprise_id":enterprise_id,
            "job": job_val,
            "company_name": company_val,
            "address": address_val,
            "name": name_val,
            "email": email_val,
            "phone": phone_val,
            "introduction": introduction_val
        }, function (rtn) {

        }, "json")
    })
    $(this).find("textarea").blur(function  () {
        var input_val=$(this).val();
        $(this).parent().html(input_val);//td对象
        introduction_val = input_val;
        $.post(SITE_URL + "/company/ajax_add", {
            "enterprise_id":enterprise_id,
            "job": job_val,
            "company_name": company_val,
            "address": address_val,
            "name": name_val,
            "email": email_val,
            "phone": phone_val,
            "introduction": introduction_val
        }, function (rtn) {

        }, "json")
    })
})
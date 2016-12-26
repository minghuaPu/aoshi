 var img=$(".verify_img");
     var verify_img=img.attr('src');
     img.attr('title','换一张');
     img.click(function(){
        if (verify_img.indexOf('?')>0) {
            $(this).attr('src',verify_img+'&random'+Math.random());
        }else{
            $(this).attr('src',verify_img.replace(/\?.*$/,'')+'?'+Math.random());
        }
     });
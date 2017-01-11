$( function (){
        //相当于onload 加载完静态页面再加载
        var cata_id='';
        var page;
        $(".better").click(function (){
            //按more时在浏览时加载更多该类型的新闻
            cata_id= $(this).attr("id_val");
            $.post(SITE_URL+"/News/more",{"cata":cata_id,'init':1,'page':1},function (rtn){
                 if (rtn.status==1) {
                      var box='' ;
                     $(rtn.more).each(function  (i) {
                         /* console.log(typeof(rtn.more[i]['news_content']));*/
                          box+='<div class=in><div class="left" ><a href="'+SITE_URL+'/News/news_detail/id/'+rtn.more[i]["id"]+'"><img src="' +PUBLIC+'/'+ rtn.more[i]["news_picture"] +'" width=300px height=180px></a><a href=#><span class=cata>'+rtn.more[i]['cata_id']+'</span> </a></div><div class=right><p class=list><a href="'+ SITE_URL +'/News/news_detail'+rtn.more[i]["id"]+'">'+ rtn.more[i]["news_title"]+'</a></p><p class=author>'+  subString(rtn.more[i]["news_content"],150) +'</p><p class=author>'+ rtn.more[i]["author"] +'&nbsp;.&nbsp;'+D(rtn.more[i]["add_time"])+'</p></div></div>';
                        $('.box-3').html(box);
                        $('.box-5').html("<input type='hidden' id='page' value='1'/><input type='hidden' id='cata_id' value="+ cata_id+">");
                   });
                  }if (rtn.more.end==1) {$(".box-4").html("<br>");}
                  if (!rtn.more.end) {$(".box-4").html('<p><a class="skin" href="javascript:;">浏览更多</a></p>');}
                  else{
                  }
            },"json")
            console.log(page);
			console.log(cata_id);
        })
		
		$(".box-4").on('click','a',function (){
			//解决动态生成的HTML绑定事件问题
           //按浏览更多时加载更多的新闻
           if($('input').is('#page')) {page=parseInt($('#page').val())+1;if($('input').is("#cata_id")){cata_id=$("#cata_id").val();}}
           else{page=2;cata_id=''; console.log(page);}
            $.post(SITE_URL+"/News/more",{"cata":cata_id,'init':2,'page':page},function (returns){
                 if(returns.status==1) {
                      var box='' ;
					  /*for(var i=0;i<returns.more.length;i++ ){*/
                     $(returns.more).each(function  (i) {
						  console.log(i+"dtht");
                          box+='<div class=in><div class="left" ><a href="'+SITE_URL+'/News/news_detail/id/'+returns.more[i]["id"]+'"><img src="' +PUBLIC+'/'+ returns.more[i]["news_picture"] +'" width=300px height=180px></a><a href=#><span class=cata>'+returns.more[i]['cata_id']+'</span> </a></div><div class=right><p class=list><a href="'+ SITE_URL +'/News/news_detail'+returns.more[i]["id"]+'">'+ returns.more[i]["news_title"]+'</a></p><p class=author>'+  subString(returns.more[i]["news_content"],150,1) +'</p><p class=author>'+ returns.more[i]["author"] +'&nbsp;.&nbsp;'+D(returns.more[i]["add_time"])+'</p></div></div>';
						 //$(box).appendTo(".box-3");
                   });
				    $('.box-3').append(box);
					$('.box-5').html("<input type='hidden' id='page' value=" +page +"><input type='hidden' id='cata_id' value=" +cata_id +">");
                  }if (returns.more.end==1) {$(".box-4").html('<p><br>没有更多了</p>');}
				  else{
					$('.box-3').html(returns.zhi);
                  }
            },"json")
		console.log(cata_id);
        })
	function D(d){
		var x = new Date();
		x.setTime(d*1000);
		return x.getFullYear()+"-"+(x.getMonth()+1)+"-"+x.getDate()+" "+x.getHours()+":"+x.getMinutes()+":"+x.getSeconds();
	}

	//截取字符串 包含中文处理 
	//(串,长度,增加...)  
	function subString(str, len, hasDot) 
	{ 
		var newLength = 0; 
		var newStr = ""; 
		var chineseRegex = /[^\x00-\xff]/g; 
		var singleChar = ""; 
		var strLength = str.replace(chineseRegex,"**").length; 
		for(var i = 0;i < strLength;i++) 
		{ 
			singleChar = str.charAt(i).toString(); 
			if(singleChar.match(chineseRegex) != null) 
			{ 
				newLength += 2; 
			}     
			else 
			{ 
				newLength++; 
			} 
			if(newLength > len) 
			{ 
				break; 
			} 
			newStr += singleChar; 
		} 
	
		if(hasDot && strLength > len) 
		{ 
			newStr += "..."; 
		} 
		return newStr; 
	}
  });
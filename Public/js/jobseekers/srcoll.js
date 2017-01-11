function $(id){ return document.getElementById(id)};
function hide(obj){obj.style.display="none";}
function show(obj){obj.style.display="block";}


function scroll(){
				if(document.body.scrollTop){
					return{
						top:document.body.scrollTop,
						left:document.body.scrollLeft
					};	
				}
				else{
					return{
						top:document.documentElement.scrollTop,
						left:document.documentElement.scrollLeft
					};
				}
			}
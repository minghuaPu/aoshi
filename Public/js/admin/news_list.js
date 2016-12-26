 function confim_do (href_url) {
        if (window.confirm("确认删除这条信息吗？")) {
            location.href=href_url;
        }else{
          
           /* return false;*/
        }
      }
$(function  () {
		$("#all_check").click(function  () {

			if($(this).is(':checked') ){
				$('.signl_box').prop('checked',true);//判断复选框是不是选中
			}
			else {
				// 怎么取消复选框的选中
				$('.signl_box').prop('checked',false);
			}
			
			//要顶部的全选，取消了，下面的也全部取消
			
		})

		
	})
angular.module("myResume",[])

.run(function  ($rootScope, resume) {
	// 一跑起来异步加载简历信息
	resume.all().then(function  (rtn_data) {
		$rootScope.exp_list=rtn_data['data']['jobexp'];//工作经历

		$rootScope.edu_list=rtn_data['data']['eduexp'];//教育经历
	})
})

.factory("resume",function  ($http) {
	// 简历工厂
	  return {
	    all: function() {
	       return   $http.get(SITE_URL+"/ajaxGet")
						 .then(function  (rtn_data) {
								return  rtn_data;
						 });

	    },
	    remove: function(controllerName,info) {
	       $http({
            method:"get",
            url:SITE_URL+"/delete?index="+  controllerName,
            params:info
            }).success(function(data){ 
                return data;
           });
	       
	    },
	    save: function(controllerName,form_info) {
	      return  $http({
            method:"get",
            url:SITE_URL+"/update?index="+  controllerName,
            params:form_info
            }).then(function(data){ 
                return data;
           });
	    }
	  };
 
})

//工作经历
.controller("jobexp",function  ($scope,$rootScope,resume) {
	 
	$scope.show_form=function  (item) {
		 if (item==1) {
	 		$scope.form_info={job:'',name:'',time:'',cont:''};
	 	}else{
			 $scope.form_info=item;
	 	}
	}

 	$scope.hide_form=function  () {
		  delete $scope.form_info;
	}

	$scope.delete_info=function  (item) {
		$rootScope.exp_list.splice($rootScope.exp_list.indexOf(item), 1);
		 
		resume.remove('jobexp',item);
	}


	$scope.save_form=function  () {
		resume.save('jobexp',$scope.form_info).then(function  (rtn_data) {
			 	if ($scope.form_info.jid==undefined) {
			 		 
					$scope.form_info.jid=rtn_data.data.msg;//获取添加数据库后的ID，进行赋值
					$rootScope.exp_list.push($scope.form_info);
				}

			    delete $scope.form_info;
		});
	}
})
<<<<<<< HEAD
<<<<<<< HEAD
.controller("eduexp",function  ($http,$scope) {
	$http.get(SITE_URL+"/ajaxGet?type=eduexp")
		.success(function(return_data){
			$scope.edu_list= return_data;
		})
	$scope.show_form=function(item){
		$scope.edu_exp_form=item;
	}

	$scope.hide_form=function  () {
		 
		  delete $scope.edu_exp_form;
	}
	$scope.save_form=function  () {
		    $http({
            method:"get",
            url:SITE_URL+"/update?index=eduexp",
            params:$scope.edu_exp_form
            }).success(function(data){ 
                delete $scope.edu_exp_form;
           });

	}
})
.controller('userinfo',function($http,$scope){
	$http.get(SITE_URL+"/ajaxGet?type=userinfo")
		.success(function(return_data){
			$scope.info_list=return_data;
		})
	$scope.show_form=function(item){
		$scope.user_info_form=item;
	}
	$scope.hide_form=function  () {
		 
		  delete $scope.user_info_form;
	}
	$scope.save_form=function  () {
		    $http({
            method:"get",
            url:SITE_URL+"/update?index=userinfo",
            params:$scope.user_info_form
            }).success(function(data){ 
                delete $scope.user_info_form;
           });

	}
})
.controller('selfdes',function($http,$scope){
	$http.get(SITE_URL+"/ajaxGet?type=selfdes")
		.success(function(return_data){
			$scope.mydes=return_data;
		})
	$scope.show_form=function(item){
		$scope.self_des_form=item;
	}
	$scope.hide_form=function  () {
		 
		  delete $scope.self_des_form;
	}
	$scope.save_form=function  () {
		    $http({
            method:"get",
            url:SITE_URL+"/update?index=selfdes",
            params:$scope.self_des_form
            }).success(function(data){ 
                delete $scope.self_des_form;
           });

	}
})
=======
=======
// 教育经历
>>>>>>> b97d4a6a92e89cf32ee984487441fc5e50970bbf
.controller("eduexp",function  ($scope,$rootScope,resume) {
	$scope.show_form=function  (item) {
		// 要判断是不是添加
	 	if (item==1) {
	 		$scope.form_info={name:'',xl:'',major:'',grad:''};
	 	}else{
			 $scope.form_info=item;
	 	}
			 
	}
	$scope.delete_info=function  (item) {
		$rootScope.edu_list.splice($rootScope.edu_list.indexOf(item), 1);
		 
		resume.remove('eduexp',item);
	}
 	$scope.hide_form=function  () {
		  delete $scope.form_info;
	}
	$scope.save_form=function  () {
		resume.save('eduexp',$scope.form_info).then(function  (rtn_data) {
			 	if ($scope.form_info.eid==undefined) {
					$scope.form_info.eid=rtn_data.data.msg;//获取添加数据库后的ID，进行赋值
					$rootScope.edu_list.push($scope.form_info);
				}

			    delete $scope.form_info;
		});
	}
	 
})
<<<<<<< HEAD
>>>>>>> 98a4c6f673c957bbb5a114a4277b69c0fd2afe88
=======

// 自我描述
.controller("self_des",function ($scope,$rootScope,resume) {
    $scope.show_form=function  (item) {
        // 要判断是不是添加
        if (item==1) {
            $scope.form_info={des:''};
        }else{
            $scope.form_info=item;
        }

    }

    $scope.hide_form=function  () {
        delete $scope.form_info;
    }
})

//求职意向
.controller("job_career",function ($scope,$rootScope) {

})

//求职状态
.controller("job_state",function ($scope,$rootScope) {

})
;
>>>>>>> b97d4a6a92e89cf32ee984487441fc5e50970bbf

angular.module("myResume",[])

.controller("resume",function  ($http,$scope) {
	 // json
	$http.get(SITE_URL+"/ajaxGet?type=jobexp")
		  .success(function  (rtn_data) {
				$scope.exp_list= rtn_data;
		  });

	$scope.show_form=function  (item) {
		 console.log($scope);
		  $scope.form_info=item;
	}

 	$scope.hide_form=function  () {
		 
		  delete $scope.form_info;
	}
	$scope.save_form=function  () {
		    $http({
            method:"get",
            url:SITE_URL+"/update?index=jobexp",
            params:$scope.form_info
            }).success(function(data){ 
                delete $scope.form_info;
           });

	}
 
})


.controller("jobexp",function  ($http,$scope) {
	
})
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

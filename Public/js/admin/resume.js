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

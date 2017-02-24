/*防闪烁*/
setTimeout(function() {
	var form = document.querySelectorAll('#resume form');
	for(var i = 0; i < form.length; i++) {
		form[i].style.visibility = 'visible'
	};
}, 1000);
/*简历导航*/
$('.resume-nav .nav a').each(function() {
	$(this).click(function() {
		$(this).addClass('selected').siblings().removeClass('selected')
	})
});

/*简历管理*/
var resume = angular.module('resume', []);
resume.run(function($rootScope, service) {
	service.load().then(function(data) {
		$rootScope.user = data['user'];
		$rootScope.basic = data['basic'];
		$rootScope.experience = data['experience'];
		$rootScope.education = data['education'];
		$rootScope.prefered = data['prefered'];
		$rootScope.integrity = 0;
		if($rootScope.user[0].photo) {
			$rootScope.integrity += 20;
		}
		if($rootScope.basic[0]) {
			$rootScope.integrity += 20;
		}
		if($rootScope.experience[0]) {
			$rootScope.integrity += 20;
		}
		if($rootScope.education[0]) {
			$rootScope.integrity += 20;
		}
		if($rootScope.prefered[0]) {
			$rootScope.integrity += 20;
		}
	})

});
resume.factory('service', function($http, $rootScope) {
	return {
		load: function() {
			return $http.get(SITE_URL + '?a=select')
				.then(function(response) {
					return response['data'];
				})
		},
		save: function(index, data) {
			return $http({
				method: 'get',
				url: SITE_URL + '?a=save&index=' + index,
				params: data
			});
		},
		remove: function(index, data) {
			$http({
				method: 'get',
				url: SITE_URL + '?a=delete&index=' + index,
				params: data
			});
		}
	}

});
//基本信息
resume.controller('resumeBasic', function($scope, service) {
	$scope.edit = function(basic) {
		$scope.form = basic;
	};
	$scope.add = function() {
		$scope.form = {
			nickname: '',
			peculiarity: '请用一句话介绍自己',
			sex: '男',
			birth: '90后',
			top_edu: '大专',
			work_years: '1-3年',
			current_city: '广州',
			phone: '',
			e_mail: ''
		}
	};
	$scope.cancel = function() {
		delete $scope.form;
	};
	$scope.submit = function() {
		service.save('basic', $scope.form).then(function(response) {
			if(!$scope.form.basic_id) {
				$scope.form.basic_id = response['data'];
				$scope.basic.push($scope.form);
			}
			delete $scope.form;
			location.reload()
		})
	};
});
//工作经历
resume.controller('resumeJobexp', function($scope, service) {
	$scope.edit = function(experience) {
		$scope.form = experience;
		$scope.list = true;
	};
	$scope.add = function() {
		$scope.list = true;
		$scope.form = {
			re_company_name: '',
			job_title: '',
			working_time: '',
			job_description: ''
		}
	};
	$scope.remove = function(experience) {
		if(confirm("确认删除")) {
			$scope.experience.splice($scope.experience.indexOf(experience), 1);
			service.remove('experience', experience);
			location.reload()
		};
	};
	$scope.cancel = function() {
		$("#job-exp-c_n").attr("required", false);
		$scope.list = false;
		delete $scope.form;
	};
	$scope.submit = function() {
		$scope.list = false;
		service.save('experience', $scope.form).then(function(response) {
			if(!$scope.form.experience_id) {
				$scope.form.experience_id = response['data'];
				$scope.experience.push($scope.form);
			}
			delete $scope.form;
		});
		location.reload()
	};
});
//教育经历
resume.controller('resumeEduexp', function($scope, service) {
	$scope.edit = function(education) {
		$scope.form = education;
		$scope.list = true;
	};
	$scope.add = function() {
		$scope.list = true;
		$scope.form = {
			school_name: '',
			major: '',
			degree: '大专',
			graduated: '2017'
		}
	};
	$scope.remove = function(education) {
		if(confirm("确认删除")) {
			$scope.education.splice($scope.education.indexOf(education), 1);
			service.remove('education', education);
			location.reload()
		};
	};
	$scope.cancel = function() {
		$("#edu-exp-s_n").attr("required", false);
		$scope.list = false;
		delete $scope.form;
	};
	$scope.submit = function() {
		$scope.list = false;
		service.save('education', $scope.form).then(function(response) {
			if(!$scope.form.education_id) {
				$scope.form.education_id = response['data'];
				$scope.education.push($scope.form);
			}
			delete $scope.form;
		});
		location.reload()
	};
});
//求职意向
resume.controller('resumeCareer', function($scope, service) {
	$scope.edit = function(prefered) {
		$scope.list = true;
		$scope.form = prefered;
	};
	$scope.add = function() {
		$scope.list = true;
		$scope.form = {
			expected_position: '',
			job_type: '全职',
			expected_location: '广州',
			expected_monthly_income: '面议'
		}
	};
	$scope.cancel = function() {
		$("#job-career-career").attr("required", false);
		$scope.list = false;
		delete $scope.form;
	};
	$scope.submit = function() {
		$scope.list = false;
		service.save('prefered', $scope.form).then(function(response) {
			if(!$scope.form.prefered_id) {
				$scope.form.prefered_id = response['data'];
				$scope.prefered.push($scope.form);
			}
			delete $scope.form;
			location.reload()
		})
	};
});
//求职状态
resume.controller('resumeState', function($scope, service) {
	$scope.change = function() {
		service.save('status', $scope.basic[0])
	}
});
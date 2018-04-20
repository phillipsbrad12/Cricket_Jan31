app.controller('ScoreboardController', ['$scope', function($scope) {
    $scope.count = 0;
    $scope.value = 20;
    $scope.scoreNum = 0;
    $scope.total = 0;
    $scope.scores = [20,19,18];
    $scope.incrementScore = function() {
    	$scope.count += 1;
    	$scope.total = value * $scope.count;
    };
    
    $scope.incrementScoreByVal = function(value) {
    	$scope.count += 1;
    	$scope.total = value * $scope.count;
    };

    
}]);
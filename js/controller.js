var app=angular.module("myapp",[]);
app.controller("newsletter",function($scope,$http){
    $scope.subscribe=function () {
        $http.post(
            "news.php",
            {'semail':$scope.semail}
        ).success(function(data)
        {
            alert(data);
            
            $scope.semail=null;
           
        });
    }
}); 
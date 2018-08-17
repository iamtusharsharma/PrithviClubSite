var app=angular.module("app",[]);
app.controller("contact1",function($scope,$http){
    $scope.go = function()  
       {  
          if($scope.SaveForm.$valid) 
          {  
             $scope.go=function () {
                $http.post(
                    "insert.php",
                    {'name':$scope.name,'email':$scope.email,'message':$scope.message}
                ).success(function(data)
                {
                    alert(data);
                    $scope.name=null;
                    $scope.email=null;
                    $scope.message=null;
                });
            } 
            }  
          else  
          {  
          alert("Form is not Valid..!!");  
          }  
       }
   
}); 
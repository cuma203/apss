var app = angular.module('myApp', []);
app.controller('SideMenuCtrl', function($scope) {
    $scope.firstName = "Donnie";
    var self = this;
    self.lastName = "Brasco";
});

app.component("sideMenuComp",{
    templateUrl: "side_menu.html",
    controller: menuCtrl
});

app.controller('menuCtrl',function($http){
    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }
    $http.post('components/getSideMenuAction', data, config)
        .then(
            function(response){
                // success callback
            },
            function(response){
                // failure callback
            }
        );
});
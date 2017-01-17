var app = angular.module('menuApp', []);
app.controller('SideMenuCtrl', function($scope) {
    $scope.firstName = "Donnie";
    var self = this;
    self.lastName = "Brasco";
});

app.component("sideMenuComp",{
    templateUrl: "side_menu.html"
});

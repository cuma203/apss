var app = angular.module('myApp', ['myApp2']);

//----------LOGIN-BAR COMPONENT-----------------------------//
app.component("loginBarComp",{
    templateUrl: "application/Components/Angular/LoginBar/login_bar.html",
    controller: function($http,$scope){
        $scope.logoutUser = function(){
            $http.post('logoutUser')

        }
    }
});

//----------MENU COMPONENT-----------------------------//

app.controller('SMController',function($scope, $location)
{
    $scope.getClass = function (path) {
        var pathData = $location.path().split('/');
        return ((pathData[1].length>0?pathData[1]:'home') == path) ? 'active' : '';
    }
});

app.component("sideMenuComp",{
    templateUrl: "application/Components/Angular/Menu/side_menu.html",
    controller: menuCtrl
});

function menuCtrl($scope,$http){
    $http.post('components/getSideMenuAction')
        .then(
            function(response){
                $scope.menuData = response.data;
            },
            function(response){
                console.log(response.data,'testy2');
                // failure callback
            }
        );
}



//----------FOOTER COMPONENT-----------------------------//
app.component("footerComp",{
    templateUrl: "application/Components/Angular/Footer/footer.html"
});

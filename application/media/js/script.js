
var app = angular.module('myApp', []);
app.controller('MyCtrl', function($scope) {
    $scope.firstName = "Donnie";
    var self = this;
    self.lastName = "Brasco";
});
var url 		= window.location.pathname.split("/");
var controller 	= (url[2].length>0?url[2]:'home');

app.component("mainComp",{
	templateUrl:"application/views/"+controller+"/content.html"
});

var mApp = angular.module('menuApp', ['myApp']);
app.component("sideMenuComp",{
    templateUrl: "application/Components/Angular/Menu/side_menu.html"
});




function htmlbodyHeightUpdate(){
    var height3 = $( window ).height()
    var height1 = $('.nav').height()+50
    height2 = $('.main').height()
    if(height2 > height3){
        $('html').height(Math.max(height1,height3,height2)+10);
        $('body').height(Math.max(height1,height3,height2)+10);
    }
    else
    {
        $('html').height(Math.max(height1,height3,height2));
        $('body').height(Math.max(height1,height3,height2));
    }

}
$(document).ready(function () {
    htmlbodyHeightUpdate()
    $( window ).resize(function() {
        htmlbodyHeightUpdate()
    });
    $( window ).scroll(function() {
        height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });
});
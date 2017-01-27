
var app = angular.module('myApp2', ['ngRoute']);
app.config(function($routeProvider,$locationProvider) {
    $locationProvider.html5Mode(true);

    $routeProvider
        .when("/", {
            templateUrl : "application/views/home/content.html"
        })
        .when("/home", {
            templateUrl : "application/views/home/content.html"
        })
        .when("/offers", {
            templateUrl : "application/views/offers/content.html"
        })
        .when("/customers", {
            templateUrl : "application/views/customers/content.html"
        })
        .when("/orders", {
            templateUrl : "application/views/orders/content.html"
        })
        .when("/contact", {
            templateUrl : "application/views/contact/content.html"
        });
});
var url 		= window.location.pathname.split("/");
var controller 	= (url[2].length>0?url[3]:'home');

app.component("mainComp",{
	templateUrl:"application/views/"+controller+"/content.html"
});

// function sendMess($http){
//     console.log('fffffff');
//     $http.post('contact/sendMessageAction')
//         .then(
//             function(response){
//                 $scope.menuData = response.data;
//             },
//             function(response){
//                 console.log(response.data,'testy2');
//                 // failure callback
//             }
//         );
// }
window.addEventListener('load',function(){
var currentDate = new Date().getFullYear();
$('#currentYear').text(currentDate);
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

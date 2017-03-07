// var app = angular.module('myApp', ['myApp2']);

//----------LOGIN-BAR COMPONENT-----------------------------//
angular.module('loginBar', []).component("loginBar",{
    // templateUrl: "application/Components/Angular/LoginBar/login_bar.html",
    template:
    '<div class="navbar navbar-inverse navbar-fixed-top">'+
        '<a class="navbar-brand" href="#"><b style="color: #ffffff; padding-left: 30px;">CRM</b><span style="color:#cd5c5c;">system</span></a>'+
        '<div class="navbar-inner">'+
            '<a href="user" class="login-bar pull-right hidden-xs showopacity glyphicon glyphicon-user"></a>'+
        '</div>'+
        '<div class="navbar-inner">'+
            '<a href="communication" class="login-bar pull-right hidden-xs showopacity glyphicon glyphicon-comment"></a>'+
        '</div>'+
    '</div>',
    // controller: function ($http,$scope,$location){
    //     var self =  this;
    //     $scope.logoutUser = function(){
    //         $http.post('logout/logoutUserAction').then(
    //             function(resp){
    //                 location.href = 'login';
    //             }
    //         )
    //     };
    //     // self.$onInit = function(){
    //         $http.post('components/getTopMenuAction').then(
    //             function(resp){
    //                 $scope.topMenu = resp.data;
    //             }
    //         )
    //     // };
    //     $scope.setStyle = function (path) {
    //         var pathData = $location.path().split('/');
    //         return ((pathData[1].length>0?pathData[1]:'home') == path) ? {'color':'white'}: {'color':'#0bd0ff'};
    //     }
    // }
});

//----------SIDE-MENU COMPONENT-----------------------------//
//


angular.module('sideMenu', [])
    .component('sideMenu', {
        controller:SMController,
        template:
        '<nav class="navbar navbar-inverse sidebar navbar-fixed-top side-menu" role="navigation">'+
        '<div class="container-fluid">'+
        '<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">'+
        '<ul class="nav navbar-nav">'+
            '<li  ng-class="getClass(\'home\')">'+
                '<a ng-link="[\'Home\']">Strona główna'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>'+
                '</a>'+
            '</li>'+
            '<li ng-class="getClass(\'offers\')">'+
                '<a ng-link="[\'Offers\']">Oferty'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-large"></span>'+
                '</a>'+
            '</li>'+
            '<li ng-class="getClass(\'orders\')">'+
                '<a ng-link="[\'Orders\']">Zamówienia'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span>'+
                '</a>'+
            '</li>'+
            '<li ng-class="getClass(\'customers\')">'+
                '<a ng-link="[\'Customers\']">Klienci'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span>'+
                '</a>'+
            '</li>'+
            '<li ng-class="getClass(\'brands\')">'+
                '<a ng-link="[\'Brands\']">Branże'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bitcoin"></span>'+
                '</a>'+
            '</li>'+
            '<li ng-class="getClass(\'contact\')">'+
                '<a ng-link="[\'Contact\']">Kontakt'+
                    '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span>'+
                '</a>'+
            '</li>'+
        '</ul>'+
        '</div>'+
        '</div>'+
        '</nav>'
    })
    function SMController($scope, $location)
    {
        $scope.getClass = function (path) {
            var pathData = $location.path().split('/');
            return ((pathData[1].length>0?pathData[1]:'home') == path) ? 'active' : '';
        }
    };
//****************************************************************************
// app.component("commComp",{
//     templateUrl: "application/Components/Angular/Communication/communication.html",
//     controller: communicationCtrl
// });
//
// function communicationCtrl($scope,$http){
//     $http.post('user/getUserCommunication').then(
//         function (resp) {
//             $scope.getCommunicationUser = resp.data;
//             console.log(resp.data);
//         }
//     );
// }
//*****************************************************************************
//----------FOOTER COMPONENT-----------------------------//
angular.module("footer",[]).component("footer",{
    // templateUrl: "application/Components/Angular/Footer/footer.html"
    template: '<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" style="border: none;">'+
    '<div class="container">'+
    '<table class="col-sm-4" style="margin: 10px 0 10px 100px;">'+
    '<tr>'+
    '<td><i class="fa fa-home fa-1x" style="line-height:26%;color:#a0a0a0"></i></td>'+
    '<td class="footer-contact">Lublin ul. Wincentego Witosa 33/4b</td>'+
'</tr>'+
'<tr>'+
'<td class="fa fa-envelope fa-1x" style="line-height:26%;color:#a0a0a0"></td>'+
    '<td class="footer-contact">info@biuro-crm.com</td>'+
'</tr>'+
'<tr>'+
'<td class="fa fa-phone fa-1x" style="line-height:26%;color:#a0a0a0"></td>'+
    '<td class="footer-contact">+48 876354768</td>'+
'</tr>'+
'</table>'+
'<div class="navbar-text pull-right">'+
    '&copy;&nbsp;<span id="currentYear"></span>'+
    '<b>CRM</b>system <br />All right Reserved'+
'</div>'+
'</div>'+
'</div>'
});

var app = angular.module('app',['ngComponentRouter','home-comp']);

app.config(function($locationProvider){
   $locationProvider.html5Mode(true);
});
app.value('$routerRootComponent','app');
app.component('app',{
    template: '<nav>\n' +
    '  <a ng-link="[\'home\']">HOME</a>\n' +
    '</nav>\n',
    $routeConfig:[
        {path:'/',name:'home', component:'homeComp',useAsDefault:true}
    ]
})

var app2 = angular.module('homeComp',[]);

app2.component('homeComp',{
   template:'home Komponent'
});
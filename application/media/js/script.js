angular.module('myApp.component', [
    'ngComponentRouter',
    'loginBar',
    'sideMenu',
    'footer',
    'home',
    'offers',
    'orders',
    'customers',
    'brands',
    'contact',
    'communication'
])
    .config(['$locationProvider', function($locationProvider) {
        $locationProvider.html5Mode(true);
    }])

    .value('$routerRootComponent', 'myApp')

    .component('myApp', {
        template:
        '<div class="content-data">' +
        '<ng-outlet></ng-outlet>' +
        '</div>\n',
        $routeConfig: [
            {path: 'offers/', name: 'Offers', component: 'offers'},
            {path: 'orders/', name: 'Orders', component: 'orders'},
            {path: 'customers/', name: 'Customers', component: 'customers'},
            {path: 'contact/', name: 'Contact', component: 'contact'},
            {path: 'communication/', name: 'Communication', component: 'communication'},
            {path: 'brands/', name: 'Brands', component: 'brands'},
            {path: 'home/', name: 'Home', component: 'home'},
            {path: '/', name: 'Home', component: 'home'}
        ]
    })
//----------HOME-------------------
angular.module('home', [])
    .component('home', {
        templateUrl: 'application/views/home/home.html'
    })

//---------OFFERS-------------------
angular.module('offers', [])
    .component('offers', {
        // template: ['$templateCache', function ($templateCache) {
        //     return $templateCache.get('offers')
        // }]
        templateUrl:'application/views/offers/offers.html'
    })

//---------ORDERS-------------------
angular.module('orders', [])
    .component('orders', {
        templateUrl:'application/views/orders/orders.html'
    })

//---------CUSTOMERS-------------------
angular.module('customers', [])
    .component('customers', {
        templateUrl:'application/views/customers/customers.html'
    })

//---------CONTACT-------------------
angular.module('contact', [])
    .component('contact', {
        templateUrl:'application/views/contact/contact.html'
    })

//---------BRANDS-------------------
angular.module('brands', [])
    .component('brands', {
        // templateUrl:'application/views/contact/contact.html'
    })

//---------COMMUNICATION-------------------
angular.module('communication', [])
    .component('communication', {
        controller: communicationCtrl,
        templateUrl:'application/views/communication/communication.html'
    })

function communicationCtrl($scope,$http){
    $http.post('communication/getUserCommunicationAction').then(
        function (resp) {
            $scope.getCommunicationUser = resp.data;
            console.log(resp.data);
        });

    $http.post('communication/getCustomersFromCommUserAction').then(
        function (resp) {
            var odp = resp.data;
            $scope.customers = odp;
        });

    $http.post('customers/getAllCustomersAction').then(
        function (resp) {
            $scope.allCustomers = resp.data;
        });
}




angular.module('offers', [])
    .component('offers', {
        // template: ['$templateCache', function ($templateCache) {
        //     return $templateCache.get('offers')
        // }]
        templateUrl:'application/views/offers/offers.html'
    })

        // .run(function($templateCache, $http) {
        //     $http.get('application/views/offers/offers.html').then(function(response) {
        //         $templateCache.put('offers', response.data);
        //     })
        // });

(function(angular) {
  'use strict';
angular.module('anchoringExample', ['ngAnimate', 'ngRoute'])
  .config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {
      templateUrl: 'home.html',
      controller: 'HomeController as home'
    });
    $routeProvider.when('/profile/:id', {
      templateUrl: 'profile.html',
      controller: 'ProfileController as profile'
    });
  }])
  .run(['$rootScope', function($rootScope) {
    $rootScope.records = [
      { id: 1, title: 'Esportes' },
      { id: 2, title: 'Moda' },
      { id: 3, title: 'Infor' }
    ];
  }])
  .controller('HomeController', [function() {
   
  }])
  .controller('ProfileController', ['$rootScope', '$routeParams',
      function ProfileController($rootScope, $routeParams) {
    var index = parseInt($routeParams.id, 10);
    var record = $rootScope.records[index - 1];

    this.title = record.title;
    this.id = record.id;
  }]);
})(window.angular);
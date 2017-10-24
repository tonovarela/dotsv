//Se agrego funcionalidad en Angular
var app = angular.module('App', []);
app.constant('SERVERS', {
    DEVELOPMENT: "http://localhost:8000/",
    PRODUCTION: "http://127.0.0.1:8000/"
});
app.controller('Ctrl', function ($scope,apiService) {

    $scope.login = {};
    $scope.envio = function () {        
        apiService.login($scope.login).then(function (result) {
            console.log(result.data);
        });
    }
});
app.service('apiService', function (SERVERS, $http) {
    var server = SERVERS.DEVELOPMENT;
    this.login = function (login) {
        return $http.post('/api/v1/login', {
            data: login
        });
    };




});
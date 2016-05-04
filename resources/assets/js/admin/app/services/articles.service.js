(function() {

    'use strict';

    angular
        .module("app.services")
        .factory("Article",Article);

   Article.$inject = ['$resource'];
    /* @ngInject */
    function Article($resource) {
        return $resource('/admin/api/articles/:id', {id: '@_id'}, {
            update: {
                method: 'PUT'
            }
        });
    }

}());
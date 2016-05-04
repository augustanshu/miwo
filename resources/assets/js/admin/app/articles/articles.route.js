(function() {

    'use strict';

    angular
        .module('app.articles')
        .run(appRun);

    appRun.$inject = ['routerHelper'];
    /* @ngInject */
    function appRun(routerHelper) {
        routerHelper.configureStates(getStates());
    }

    function getStates() {
        return [
            {
                state: 'articles',
                config: {
                    url: '/admin/articles',
                    templateUrl: '/admin/views/admin.articles.index',
                    controller: 'ArticlesController',
                    controllerAs: 'vm',
                    title: 'Articles'
                }
            },
			{
                state: 'article-create',
                config: {
                    url: '/admin/articles/create',
                    templateUrl: '/admin/views/admin.articles.create',
                    controller: 'ArticlesController',
                    controllerAs: 'vm',
                    title: 'Create Article'
                }
            }
        ];
    }
})();
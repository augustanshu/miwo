(function() {

    'use strict';

    angular
        .module('app.articles')
        .controller('ArticlesController', ArticlesController);

    ArticlesController.$inject = ['$http', '$timeout', '$stateParams', 'Article'];
    /* @nginject */
    function ArticlesController($http, $timeout, $stateParams, Article) {
   
       var vm = this;
	   
	    vm.articles = {};
        vm.article = {};
		
		 vm.create = create;
        vm.update = update;
        vm.deleteArticle = deleteArticle;
        vm.hideImage = hideImage;
        vm.showDeleteModal = showDeleteModal;
        vm.hideDeleteModal = hideDeleteModal;
        vm.deleteImage = deleteImage;
        vm.liveSearch = liveSearch;
        vm.loadMore = loadMore;
		
		
		
		if(! $stateParams.id) { getArticles(); }
        if($stateParams.id) { getArticle(); }
		
		  /**
         * Get all
         */
        function getArticles() {
           Article.get(function (res) {
                vm.articles= res.data;
                vm.total = res.total;
                vm.next = res.next_page_url;
                vm.ready = true;
            });
        }

        /**
         * find by id
         */
        function getArticle() {
            vm.article= Article.get({id: $stateParams.id}, function() {
                vm.ready = true;
            });
        }

		 /**
		 * Create
		 */
		 function create(){
			 vm.loading=true;
			 Article.save(vm.article,function(res){
			  _successResponse(res.message);
                vm.article = '';
            }, function (err) {
                _errorResponse(err.data, 'Article creation failed, see errors below');
            });
		 }
		
		 /**
         * Update
         */
        function update() {
            vm.loading = true;

           Article.update({id: vm.article.id}, vm.article, function (res) {
                _successResponse(res.message);
            }, function (err) {
                _errorResponse(err.data, 'Post edition failed, see errors below');
            });
        }

        /**
         * Delete image
         */
        function deleteImage(id, file, image_id) {

         
        }

        /**
         * Hide Image
         */
        function hideImage(file) {
            if(file) {
                var index = vm.article.files.indexOf(file);
                vm.article.files.splice(index, 1);
            } else {
                document.getElementById('single-uploader').value = null;
                vm.article.file = null;
            }
        }

        /**
         * Show delete modal
         */
        function showDeleteModal(article) {
            vm.article = article;
            vm.deleteModal = true;
        }

        /**
         * Delete
         */
        function deleteArticle() {
            Article.delete({id: vm.article.id}, function (res) {
                vm.articles.splice(vm.articles.indexOf(vm.article), 1);
                vm.total = vm.total - 1;
                vm.deleteModal = false;
                vm.flash = res.message;
                $timeout(function () {
                    vm.flash = false;
                }, 3000);
            });
        }

        /**
         * Hide delete modal
         */
        function hideDeleteModal() {
            vm.deleteModal = false;
        }

        /**
         * load more users
         */
        function loadMore(url) {
            $http.get(url).success(function (res) {
                vm.articles = vm.articles.concat(res.data);
                vm.next = res.next_page_url;
            });
        }

        /**
         * Live search
         */
        function liveSearch() {
            $http.post('/admin/api/posts/search', {keyword: vm.search}).success(function (res) {
                vm.posts = res.data;
                vm.total = res.total;
                vm.next = res.next_page_url;
            });
        }

        /**
        /**
         * Success response
         */
        function _successResponse(successMessage) {
            vm.errors = '';
            vm.flash = successMessage;
            vm.loading = false;
            $timeout(function () {
                vm.flash = false;
            }, 5000);
        }

        /**
         * Errors response
         */
        function _errorResponse(errors, flashError) {
            vm.errors = errors;
            vm.loading = false;
            vm.flashError = flashError;
            $timeout(function () {
                vm.flashError = false;
            }, 5000);
        }


    }

}());
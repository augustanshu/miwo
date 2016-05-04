<!-- flash message -->
<flash-message></flash-message>

<!-- main header -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">文章</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <!-- heading -->
            <div class="panel-heading panel-heading-admin">
              新建文章
            </div>

            <div class="panel-body">

                <!-- name -->
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" placeholder="Name" class="form-control" ng-model="vm.article.title"/>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <div class="input-group">
                        <text-angular ng-model="vm.article.content" placeholder="Description"></text-angular>
                    </div>
					  <div class="input-group">
                        <textarea froala ng-model="myHtml"></textarea>
                    </div>
                </div>

				  <!-- Visible -->
                <div class="form-group">
                    <label for="visible">显示</label>
                    <div class="radio">
                        <label>
                            <input ng-model="vm.post.visible" checked="checked" type="radio" value="1">
                            是
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input ng-model="vm.post.visible" type="radio" value="0">
                            否
                        </label>
                    </div>
                </div>
				
                <!-- image -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="uploader">
                            <button onclick="document.getElementById('single-uploader').click()" class="btn btn-upload">
                                插入主图
                                <i class="material-icons upload-icon">cloud_upload</i>
                            </button>
                            <input type="file" fileread="vm.post.file" id="single-uploader">
                        </div>
                    </div>
                </div>

                <!-- preview image -->
                <div class="image-container" ng-show="vm.post.file">
                    <div class="img-btn-container animated bounceInDown">
                        <div class="a-image">
                            <img ng-src="@{{ vm.post.file.isImage && vm.post.file.url || null }}" ng-show="vm.post.file.isImage">
                            <div class="not-image" ng-show="!vm.post.file.isImage">
                                <p><i class="material-icons">warning</i></p>
                                <p>File is not an Image</p>
                            </div>
                        </div>
                        <button class="btn btn-dlt-img" ng-click="vm.hideImage()">删除</button>
                    </div>
                </div>
				  <!-- multiple image -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="uploader">
                            <button onclick="document.getElementById('multiple-uploader').click()" class="btn btn-upload">
                                上传多组图片
                                <i class="material-icons upload-icon">cloud_upload</i>
                            </button>
                            <input type="file" fileread-multiple="vm.post.files" id="multiple-uploader" multiple>
                        </div>
                    </div>
                </div>

                <!-- preview multiple images -->
                <div class="image-container" ng-show="vm.post.files">
                    <div class="img-btn-container animated bounceInDown" ng-repeat="file in vm.post.files">
                        <div class="a-image">
                            <img ng-src="@{{ file.isImage && file.url || null }}" ng-show="file.isImage">
                            <div class="not-image" ng-show="!file.isImage">
                                <p><i class="material-icons">warning</i></p>
                                <p>File is not an Image</p>
                            </div>
                        </div>
                        <button class="btn btn-dlt-img" ng-click="vm.hideImage(file)">Delete</button>
                    </div>
                </div>

				
				
                <!-- errors -->
                <div class="alert alert-danger" role="alert" ng-if="vm.errors">
                    <ul ng-repeat="error in vm.errors">
                        <li ng-bind="error"></li>
                    </ul>
                </div>

                <!-- Submit -->
                <div class="form_submit">
                    <img ng-show="vm.loading" src='/admin/images/main/preloader.gif' alt='preloader gif'>
                    <button ng-show="!vm.loading"  ng-click="vm.create()" class="btn btn-submit">确定</button>
                </div>

            </div> <!-- / panel body -->
        </div>
    </div>
</div>

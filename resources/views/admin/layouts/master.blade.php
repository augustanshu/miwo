@include('admin.layouts.header')

<div id="wrapper">

    <!-- Navbar navigation -->
    <nav class="top-navbar navbar navbar-default navbar-static-top" role="navigation" id="navbar">

        <!-- navbar header -->
        <div class="navbar-header">

            <!-- toggle navigation -->
            <button type="button" class="navbar-toggle" ng-init="isCollapsed = true" ng-click="isCollapsed = !isCollapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>

        <!-- navbar right -->
        <div class="nav navbar-right hidden-xs">
            <div id="admin-info">
                <div class="admin-user pull-left">
                    <a ui-sref="profile" ng-class="{active: mainUrl == 'profile'}">
                        <i class="material-icons">account_box</i>
                        我
                    </a>
                </div>
                <div class="logout pull-left">
                    <a href="/admin/logout" target="_self">
                        <i class="material-icons">exit_to_app</i>
                        退出
                    </a>
                </div>
            </div>
        </div>

    </nav> <!-- / Navbar -->

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation" id="sidebar">
        <div class="sidebar-nav navbar-collapse" ng-class="{collapse: isCollapsed}">
            <div class="sidebar_links">

                <ul class="nav" id="side-menu">
                    <li class='visible-xs' ng-class="{active: mainUrl == 'profile'}">
                        <a ui-sref="profile" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">account_box</i>
                            我
                        </a>
                    </li>
					<!--
                    <li ng-class="{active: mainUrl == 'dashboard'}">
                        <a ui-sref="dashboard" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">equalizer</i>
                            主界面
                        </a>
                    </li>
					
                    <li ng-class="{active: mainUrl == 'users'}">
                        <a ui-sref="users" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons pull-left">supervisor_account</i>
                            用户
                        </a>
                    </li>
					-->
                    <li ng-class="{active: mainUrl == 'posts'}">
                        <a ui-sref="posts" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">subtitles</i>
                            文章
                        </a>
                    </li>
					<!--
                    <li ng-class="{active: mainUrl == 'gallery'}">
                        <a ui-sref="gallery" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">monochrome_photos</i>
                            Gallery
                        </a>
                    </li>
					   <li ng-class="{active: mainUrl == 'articles'}">
                        <a ui-sref="articles" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">description</i>
                            Articles
                        </a>
                    </li>
					-->
                    <li class='visible-xs'>
                        <a href="/admin/logout" target="_self" ng-click="isCollapsed = !isCollapsed">
                            <i class="material-icons">exit_to_app</i>
                            Logout
                        </a>
                    </li>
					
                </ul>

            </div>
        </div>
    </div> <!-- / sidebar -->

    <!-- page wrapper for angular views-->
    <div id="page-wrapper">

        <!-- Angular views -->
        <div ui-view id="ui-view"></div>


        <div id="github">
           
                <i class="fa fa-send"></i>
                <p>
                   Port of World
                </p>
            
        </div>

    </div>
    
</div>

@include('admin.layouts.footer')
<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset049;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;


AppAsset049::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

    <!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
            <!-- Image Logo here -->
            <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
            <!--</a>-->
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="md md-menu"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

                <ul class="nav navbar-nav hidden-xs">
                    <li><a href="#" class="waves-effect waves-light">Files</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                     <input type="text" placeholder="Search..." class="form-control">
                     <a href=""><i class="fa fa-search"></i></a>
                </form>


                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown top-menu-item-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                            <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                            <li class="list-group slimscroll-noti notification-list">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-bell-o noti-custom"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Updates</h5>
                                        <p class="m-0">
                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-pink"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                            <small>You have 10 unread messages</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="list-group-item text-right">
                                    <small class="font-600">See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                    </li>
                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="<?=Url::to(['mahasiswa60200121049/index'])?>" class="waves-effect">
                    <i class="fafa-mortar-board"></i>
                    <span>Mahasiswa </span>
                </a>
                </li>

                <li class="has_sub">
                    <a href="<?=Url::to(['site/index'])?>" class="waves-effect">
                    <i class="fafa-mortar-board"></i>
                    <span>Home </span>
                </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <?= $content ?>
        </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer">
        © 2016. All rights reserved.
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
    <h4 class="text-center">Chat</h4>
    <div class="contact-list nicescroll">
        <ul class="list-group contacts-list">
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-1.jpg" alt="">
                    </div>
                    <span class="name">Chadengle</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-2.jpg" alt="">
                    </div>
                    <span class="name">Tomaslau</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-3.jpg" alt="">
                    </div>
                    <span class="name">Stillnotdavid</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-4.jpg" alt="">
                    </div>
                    <span class="name">Kurafire</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-5.jpg" alt="">
                    </div>
                    <span class="name">Shahedk</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-6.jpg" alt="">
                    </div>
                    <span class="name">Adhamdannaway</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-7.jpg" alt="">
                    </div>
                    <span class="name">Ok</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-8.jpg" alt="">
                    </div>
                    <span class="name">Arashasghari</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-9.jpg" alt="">
                    </div>
                    <span class="name">Joshaustin</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-10.jpg" alt="">
                    </div>
                    <span class="name">Sortino</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
        </ul>
    </div>
</div>
<!-- /Right-bar -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

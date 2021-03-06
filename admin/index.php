<?php
include 'head.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <title>Hmister - 工具箱后台管理系统-首页</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="index.php" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                    <ul class="cm-menu-items">
                            <li class="active"><a href="index.php" class="sf-house">首页</a></li>
                          
							<li class="cm-submenu">
                                <a class="sf-brick">工具管理 <span class="caret"></span></a>
                                <ul>
                                    <li><a href="toollist.php">工具列表</a></li>
                                    <li><a href="tooladd.php">新增工具</a></li>
                                   
                                </ul>
                            </li>
                            <li class="cm-submenu">
                                <a class="sf-handshake">友情链接 <span class="caret"></span></a>
                                <ul>
                                    <li><a href="friendship.php">友情链接列表</a></li>
                                    <li><a href="addfriendship.php">新增友情链接</a></li>
                                </ul>
                            </li>
                            <li><a href="websitesetup.php" class="sf-wrench-screwdriver">网站配置</a></li>
                            <li><a href="account.php" class="sf-cat">个人中心</a></li>
							 <li><a href="out.php" class="sf-box-out">退出登录</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>首页</h1> 
                    <form id="cm-search" action="index.html" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                    </h4>
                                    <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                    </h4>
                                    <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                    </h4>
                                    <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>John Smith</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="out.php"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">欢迎使用Hmister后台管理系统 !</h2> 
				<!-- 调用一言 -->
				<script type="text/javascript" src="https://api.lwl12.com/hitokoto/v1?encode=js&charset=utf-8"></script><h5 id="lwlhitokoto"><script>lwlhitokoto()</script></h5>
            </div>
            <div class="container-fluid">
                <div class="row cm-fix-height">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="assets/img/sass-less.png" alt="Less support" class="img-responsive">
                                <br>
                                <p>Clearmin ships with vanilla CSS, but its source code utilizes Less CSS preprocessor. Quickly get started with precompiled CSS or build on the source. Colors and sizes are easily customizable with less variables.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="assets/img/devices.png" alt="Responsive across devices" class="img-responsive">
                                <br>
                                <p>Clearmin easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries. Swipe from left on phones to toggle main menu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="assets/img/components.png" alt="Components" class="img-responsive">
                                <br>
                                <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cm-fix-height">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="dashboard-sales.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/dashboard.svg" alt="dashboard">
                                </span>
                                <h4>Dashboard</h4> <small>C3.js charts to display some fancy pies.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="notepad.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/notepad.svg" alt="notepad">
                                </span>
                                <h4>Text editor</h4> <small>Summernote WYSIWYG Editor implementation.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="components-text.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/brick.svg" alt="brick">
                                </span>
                                <h4>Components</h4> <small>Bootstrap main classes.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="layouts-breadcrumb1.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/window-layout.svg" alt="window-layout">
                                </span>
                                <h4>Navbar layouts</h4> <small>Put all you need on the top of your screen.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="ico-sf.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/cat.svg" alt="cat">
                                </span>
                                <h4>Icons</h4> <small>Semantic little pics.</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="login.html" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="assets/img/sf/lock-open.svg" alt="lock-open">
                                </span>
                                <h4>Login page</h4> <small>Have a look to the login page.</small>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">友情链接</div>
                    <div class="panel-body" id="demo-buttons">
                        <p>Click buttons below to change navbar main color :</p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-primary" data-switch-color="primary">primary</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-success" data-switch-color="success">success</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-info" data-switch-color="info">info</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-warning" data-switch-color="warning">warning</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-danger" data-switch-color="danger">danger</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-gray" data-switch-color="gray">gray</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-yellow" data-switch-color="yellow">yellow</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-purple" data-switch-color="purple">purple</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-turquoise" data-switch-color="turquoise">turquoise</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-midnight" data-switch-color="midnight">midnight</button>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
include 'foot.php'; 
?>	
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
        <title>Hmister - 工具箱后台管理系统</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
					 <ul class="cm-menu-items">
                            <li><a href="index.php" class="sf-house">首页</a></li>
                          
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
                            <li class="active"><a href="websitesetup.php" class="sf-wrench-screwdriver">网站配置</a></li>
                            <li><a href="account.php" class="sf-cat">个人中心</a></li>
							 <li><a href="out.php" class="sf-box-out">注销</a></li>
                        </ul>
                      
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Home</h1> 
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
                      <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Headings</div>
                            <div class="panel-body">
                                <h1 style="margin-top:0">
                                    h1. Bootstrap heading <small>Secondary text</small>
                                </h1>
                                <h2>
                                    h2. Bootstrap heading <small>Secondary text</small>
                                </h2>
                                <h3>
                                    h3. Bootstrap heading <small>Secondary text</small>
                                </h3>
                                <h4>
                                    h4. Bootstrap heading <small>Secondary text</small>
                                </h4>
                                <h5>
                                    h5. Bootstrap heading <small>Secondary text</small>
                                </h5>
                                <h6>
                                    h6. Bootstrap heading <small>Secondary text</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                </div>
        
               
            </div>
		

            <footer class="cm-footer"><span class="pull-left">Connected as John Smith</span><span class="pull-right">&copy; PAOMEDIA SARL</span></footer>
        </div>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/demo/home.js"></script>
    </body>
</html>
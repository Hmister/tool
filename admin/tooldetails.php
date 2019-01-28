<?php 
$id = $_GET['id'];
include '../config.php';

$sql="select * from Tool where id = ".$id;
$result = $conn->query($sql);
$username = $result->fetch_assoc();

//关闭连接
$conn->close();
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
		

		
        <title>Hmister - 工具箱后台管理系统-信息修改</title>
    </head>
    <body class="cm-no-transition cm-2-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
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
                    <h1>工具列表</h1> 
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
                            <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">工具详情</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid">
              
                <div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default">
                          <div class="panel-heading"><span class="pull-left">基本信息</apan></div>
                       
                            <div class="panel-body">
                                <form class="form-horizontal" action="data/modify.php" method="post">
								 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-1 control-label">ID:</label>
                                        <div class="col-sm-5">
                                            <input name="id" type="text" class="form-control" value="<?php echo $username['id'];?>"  readonly = "readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-1 control-label">标题:</label>
                                        <div class="col-sm-5">
                                            <input name="tool_name" type="text" class="form-control" value="<?php echo $username['tool_name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">地址:</label>
                                        <div class="col-sm-5">
                                            <input name="tool_url" type="text" class="form-control" value="<?php echo $username['tool_url'];?>">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">图片:</label>
                                        <div class="col-sm-5">
                                            <input name="tool_img" type="text" class="form-control" value="<?php echo $username['tool_img'];?>" >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">简介:</label>
                                        <div class="col-sm-5">
                                            <textarea name="tool_introduce" type="text" class="form-control" rows="4" ><?php echo $username['tool_introduce'];?></textarea>
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">类型:</label>
                                        <div class="col-sm-5">
											<select class="form-control" name="tool_type" id="select">
												<option value="1">有趣网站</option>
												<option value="2">实用工具</option>
												<option value="3">网页特效</option>
												<option value="4">API</option>
												<option value="5">网页游戏</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">浏览:</label>
                                        <div class="col-sm-5">
                                            <input name="tool_clicks" type="text" class="form-control" value="<?php echo $username['tool_clicks'];?>">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">排序:</label>
                                        <div class="col-sm-5">
                                            <input name="tool_sort"  type="text" class="form-control" value="<?php echo $username['tool_sort'];?>">
                                        </div>
                                    </div>
								
						
                                    <div class="form-group" style="margin-bottom:0">
                                        <div class="col-sm-offset-1 col-sm-5 text-right">
                                            <button type="reset" onclick="history.go(-1)"  class="btn btn-default">返回</button>
                                            <button type="submit" class="btn btn-primary">修改</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
				
				
               
            </div>
            <footer class="cm-footer"><span class="pull-left">Connected as John Smith</span><span class="pull-right">&copy; PAOMEDIA SARL</span></footer>
        </div>
		<script>
		 window.onload=function(){
			document.getElementById('select').value="<?php echo $username['tool_type'];?>";
		}
		</script>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
    </body>
</html>
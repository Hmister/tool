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
        <title>Hmister - 工具箱后台管理系统-账户管理</title>
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
                            <li><a href="websitesetup.php" class="sf-wrench-screwdriver">网站配置</a></li>
                            <li class="active"><a href="account.php" class="sf-cat">个人中心</a></li>
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
				 <div class="cm-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li><a href="index.php">首页</a></li>
                            <li class="active">个人中心</li>
                        </ol>
                    </div>
                   
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
				
                      <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><span class="pull-left">账户基本信息</apan></div>
                            <div class="panel-body">
                              
                                 <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-1 control-label ">用户名</label>
                                        <div class="col-sm-5">
                                            <input  class="form-control" id="user" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-1 control-label">密 码</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="pwd" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group" style="margin-bottom:0">
                                        <div class="col-sm-offset-2 col-sm-4 text-right">
                                            <button  onclick='modify()' class="btn btn-primary">修改</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
		
          
		<script>
		window.onload = function () { 
		 var id = <?php  echo $_SESSION["userid"]  ;?>;
		$.ajax({
				url:'data/query.php',
				type:"post",
				data:{Table_Name:'Tool_User',condition:id},
				 success:function(da)
                            {
                                  data = $.parseJSON(da);
								  $("#user").val(data.tool_username);
 
                            }
				
		  });

		}
		function modify(){
			 var id = <?php  echo $_SESSION["userid"]  ;?>;
			 var tool_name = $("#user").val();
			 var tool_pwd = $("#pwd").val();
			 if(!tool_pwd){
				 alert("请保证密码不为空");
				 return false;
			 }
            $.ajax({
                    url:'data/userm.php',
					type:"post",
					data:{id:id,tool_name:tool_name,tool_pwd:tool_pwd},
					success:function(da)
                            {
                                  if(da=="ok"){
							
									   alert("修改成功");
                                    window.location.href="out.php";
								  }else{
									   alert("修改失败");
								  }
                           }   
                        })
		}

		</script>
<?php
include 'foot.php'; 
?>		

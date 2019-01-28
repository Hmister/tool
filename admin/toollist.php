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
        <title>Hmister - 工具箱后台管理系统-工具列表</title>
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
                            <li><a href="index.php" class="sf-house">首页</a></li>
                          
							<li class="cm-submenu pre-open">
                                <a class="sf-brick">工具管理 <span class="caret"></span></a>
                                <ul>
                                    <li class="active"><a href="toollist.php">工具列表</a></li>
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
						 <div class="cm-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li><a href="index.php">首页</a></li>
                            <li class="active">工具列表</li>
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
                            <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">全部工具</a></li>
                            <li><a href="#">站长工具</a></li>
                            <li><a href="#">便民工具</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid">
              
                <div class="row">
				<div class="col-md-1 col-xs-1"></div>
					<div class="input-group col-md-10 col-xs-10">
						<input type="text" class="form-control" placeholder="按照标题搜索...">
						<span class="input-group-btn">
							<button style="z-index:2" class="btn btn-primary md-search-white" type="button">&nbsp;&nbsp;&nbsp;&nbsp;</button>
						</span>
					</div></br>
					<div class="col-md-1 col-xs-1"></div>
               
					
                    <div>
                        <div class="panel panel-default">
                            <div class="panel-heading">TOOL LIST</div>
                          <style>
					
						  </style>
	<script>
        function getGoods(url) {
            // 通过Ajax对象获得分页信息
            var obj = new XMLHttpRequest();
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    // 接受服务器端的响应信息
                    eval("var info="+obj.responseText);
                    // 拼接输出的字符串
                    var dataList = ' <thead><tr> <th>#</th><th>标题</th><th>地址</th><th>类型</th><th>点击</th><th>排序</th><th>操作</th></tr> </thead>';
                    for (var i = 0; i < info.length - 1; i++) {
						var colour =" ";
						if(i%2==0)
						{
							colour ="active";
						}else{
							colour =" ";
						}
						dataList += '<tbody><tr class="'+colour+'">'
						dataList += '<th scope="row">' + info[i].id + '</th>';
                        dataList += "<td>" + info[i].tool_name + "</td>";
                        dataList += "<td>" + info[i].tool_url + "</td>";
						dataList += "<td>" + info[i].tool_type + "</td>";
						dataList += "<td>" + info[i].tool_clicks + "</td>";
						dataList += "<td>" + info[i].tool_sort + "</td>";
                        dataList += "<td><a href='tooldetails.php?id="+info[i].id+"'>编辑</a>/<a class='shanchu' onclick='shanchu(this)' href='#' tool_id="+info[i].id+">删除</a></td></tr></tbody>";
                    }
                    // 将字符串写入网页
                    document.getElementById('result').innerHTML = dataList;
					var a = '<li>'+ info[info.length -1] +'</li>';
					document.getElementById('page').innerHTML = a;
                }
            }
            obj.open("get", url);
            obj.send();
        }
 
       


	    window.onload=function(){
			 getGoods('data.php');
			 
		
		};
		function shanchu(e){
			var bs=$(e).attr("tool_id");   
                        if(confirm("确定删除么")){     /* 弹出确定删除框,确定删除,取消不删除*/
                        $.ajax({
                            type:"post",
                            url:"data/delete.php",
                            async:true,
                            data:{id:bs},
                            dataType:"text",
                            success:function(da)
                            {
                                if(da=="ok")
                                {
                                     location.reload();
                                }
                                else
                                {
                                    alert("删除失败");
                                }
                            }
                            
                        })
            
                    }
		}
		
    </script>
	<div style="overflow:scroll;">
		<table class="table" id="result" align="center" style="min-width:800px;"></table>
        </div>
		<ul class="pagination pull-right" id="page"></ul>              
                       </div>
                    </div>
					
                </div>
				
<?php
include 'foot.php'; 
?>	
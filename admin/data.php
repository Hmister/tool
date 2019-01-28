<?php
header("Content-Type:text/html;charset=utf-8");
//引入分页类
include "./page.class.php";
//使用PDO连接数据库

try{
	//实例化PDO创建
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=toolbox;charset=utf8","root","211169");
	//设置字符集编码
	$pdo->query("set names utf8");
	//SQL预处理语句
	$a = "SELECT id,tool_name,tool_url,(CASE  WHEN `tool_type`=1 THEN '有趣' WHEN `tool_type`=2 THEN '实用' WHEN `tool_type`=3 THEN '特效' WHEN `tool_type`=4 THEN 'API' WHEN `tool_type`=5 THEN '游戏' ELSE NULL END) tool_type,tool_sort,tool_clicks FROM `Tool` ";
	$stmt1 = $pdo->query("select count(*) from `Tool`");
	//实例化分页类对象
	$total = $stmt1->fetchColumn();
	$per = 8;
	$page = new Page($total,$per,'./data.php');
	$stmt = $pdo->prepare($a."limit ".$page->getLimit());
	//获得页码列表信息
	$pagelist = $page->getPageList();
	//执行SQL预处理语句
	$stmt->execute();
}catch(Exception $e){
	echo $e->getMessage().'<br>';
}
//查询结果
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//将分页信息追加到$data数组中
$data[] = $pagelist;
//输出页面
echo json_encode($data);


?>
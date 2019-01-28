<?php
/*数据库配置*/
$dbconfig=array(
	'host' => 'localhost', //数据库服务器
	'port' => 3306, //数据库端口
	'user' => 'root', //数据库用户名
	'pwd' => '211169', //数据库密码
	'dbname' => 'toolbox', //数据库名
);
// 创建连接
$conn = new mysqli($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"],$dbconfig["dbname"]);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
?>
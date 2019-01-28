<?php
$id = $_POST['link'];
include('config.php');
// 创建连接
$conn = new mysqli($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"],$dbconfig["dbname"]);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//
$sql="update Tool set tool_clicks = tool_clicks + 1 where id =".$id;	
$conn->query($sql);
$conn->close();

?>
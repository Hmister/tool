<?php
header('Content-type:text/html; charset=utf-8');
#接受提交过来的信息


$Table_Name = $_POST['Table_Name'];
$condition = $_POST['condition'];

include '../../config.php';
$sql = "select * from {$Table_Name} where id={$condition}";
$result = $conn->query($sql);
$json_tool = $result->fetch_assoc();
echo json_encode($json_tool);

//关闭连接
$conn->close();



?>
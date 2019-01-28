<?php
header('Content-type:text/html; charset=utf-8');
#接受提交过来的信息

$type = $_POST['type'];
include '../../config.php';
$sql = "select * from Tool where tool_type={$type}";
$result = $conn->query($sql);
$rows = array();
while( $row = $result->fetch_array(MYSQL_ASSOC)){
	$rows[] = $row;	
	
}
//$json_tool = $result->fetch_assoc();
echo json_encode($rows);

//关闭连接
$conn->close();



?>
<?php
header('Content-type:text/html; charset=utf-8');
#接受提交过来的信息
$id = $_POST['id'];
$tool_name = $_POST['tool_name'];
$tool_pwd = $_POST['tool_pwd'];
//获取当前时间
$tool_time =  date('Y-m-dh:i:s', time()); // 2018-10-315:57:05
$md5_time = md5($tool_time);
$pwd = md5(md5($tool_pwd).$md5_time);

$sql = "UPDATE Tool_User SET tool_username='{$tool_name}',tool_pwd='{$pwd}',tool_pwdkey='{$md5_time}' WHERE id = ".$id;
include '../../config.php';
if($conn->query($sql))
{
    echo "ok"; 
 }
 else
 {
    echo"on";  
 }

//关闭连接
$conn->close();
?>
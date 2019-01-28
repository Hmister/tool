<?php
header('Content-type:text/html; charset=utf-8');
#接受提交过来的信息
$id = $_POST['id'];
$tool_name = $_POST['tool_name'];
$tool_url = $_POST['tool_url'];
$tool_img = $_POST['tool_img'];
$tool_introduce = $_POST['tool_introduce'];
$tool_type = $_POST['tool_type'];
$tool_clicks = $_POST['tool_clicks'];
$tool_sort = $_POST['tool_sort'];

$sql = "UPDATE Tool SET  tool_name= '{$tool_name}',tool_url='{$tool_url }',tool_img='{$tool_img}',tool_introduce='{$tool_introduce}',tool_type='{$tool_type}',tool_clicks='{$tool_clicks}', tool_sort='{$tool_sort}' WHERE id = ".$id;
include '../../config.php';
if($conn->query($sql))
{
   echo "<script> alert('修改成功');parent.location.href='../toollist.php'; </script>"; 
}
else
{
   echo"<script>alert('修改失败');history.go(-1);</script>";  
}

//关闭连接
$conn->close();
?>
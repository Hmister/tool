<?php
header('Content-type:text/html; charset=utf-8');
#接受提交过来的信息
$id = $_POST['id'];

include '../../config.php';
$sql = "delete from Tool where id =".$id;
$conn = new mysqli($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"],$dbconfig["dbname"]);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
if($conn->query($sql))
{
   echo "ok";
}
else
{
   echo "no";
}

?>
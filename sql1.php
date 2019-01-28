<?php
include 'config.php';
 
// 创建连接
$conn = new mysqli($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"],$dbconfig["dbname"]);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
// 使用 sql 创建数据表
$sql = "create table Tool (
id int not null PRIMARY KEY AUTO_INCREMENT,
tool_name varchar(255) ,
tool_url varchar(255),
tool_img varchar(100),
tool_introduce varchar(255),
tool_type int default 1,
tool_sort int default 0,
tool_clicks long
);
create table Tool_User (
id int not null PRIMARY KEY AUTO_INCREMENT,
tool_username varchar(50),
tool_pwd varchar(50),
tool_type int default 1
);
insert into Tool_User(tool_username,tool_pwd,tool_type) values('admin','123456',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具1','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具2','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具3','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具4','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具5','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具6','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具7','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具8','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具9','#','这里是简介',1);
insert into Tool(tool_name,tool_url,tool_introduce,tool_clicks) values('测试工具10','#','这里是简介',1);

";

$array_sql = preg_split("/;[\r\n]/", $sql);
					$num = count($array_sql);
					foreach($array_sql as $sql){
						$sql = trim($sql);
						if ($sql){
							if ($conn->query($sql) === TRUE) {
									echo "Table MyGuests created successfully";
								} else 
								{
								  echo "创建数据表错误: " . $conn->error;
								}

						}
					}
 
 

$conn->close();
?>
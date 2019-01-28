<?php
include 'config.php';
$data   = array();
$db_name_php = $dbconfig["dbname"];   
if (!mysql_connect($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"])) {   
echo '不能连接到mysql';   
exit; 
}
$result = mysql_query('show databases;');
While($row = mysql_fetch_assoc($result)){       
$data[] = $row['Database'];
}
unset($result, $row); 
  mysql_close();   
print_r($data);

echo '<br><br>';   
if (in_array(strtolower($db_name_php), $data))

    echo '[',$db_name_php,']数据库存在';

else
   echo '[',$db_name_php,']数据库不存在'; 
?>
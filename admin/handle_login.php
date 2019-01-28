<?php
header('Content-type:text/html; charset=utf-8');

session_start();
#接受提交过来的用户名及密码
$username = trim($_POST['username']);//用户名
$password = trim($_POST['password']);//密码

//$imgcode = strtolower($_POST['imgcode']);//接受从登陆输入框提交过来的验证码并转化为小写；
//$myimagecode  = strtolower($_SESSION['thisimagecode']) ;//从session中取得验证码并转化为小写；


include '../config.php';

//获取登录标识
$sql_key ="select tool_pwdkey from Tool_User where tool_username='{$username}'";
$key=$conn->query($sql_key);
$data = $key->fetch_assoc();
$tool_key = $data['tool_pwdkey'];
$login_pwd = md5(md5($password).$tool_key);
//验证账户密码
$sql="select *from Tool_User where tool_username = '{$username}'and tool_pwd='{$login_pwd}' ";
$selres=$conn->query($sql);
$selrow=$selres->fetch_object();
if ($selrow->tool_pwd == $login_pwd && $selrow->tool_username == $username)   
{	
	$_SESSION['username'] = $username;
	$_SESSION['islogin'] = 1;
	$_SESSION['userid'] = $selrow->id ;
    //若勾选记住密码,则将其保存到Cookie并设置保留3天
	if ($_POST['remember'] == "yes") {
		setcookie('username', $username, time()+3*24*60*60);
		setcookie('code', md5($username.md5($password)), time()+3*24*60*60);
	} else {
		// 没有勾选则删除Cookie
		setcookie('username', '', time()-999);
		setcookie('code', '', time()-999);
	}
	header("Location: index.php");
}else
{
	echo "<script>alert('账户或密码错误');history.back();</script>";
}
	
//关闭连接
$conn->close();
?>
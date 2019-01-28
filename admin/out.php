<?php
	session_start();
	$username = $_SESSION['username'];  
	$_SESSION = array();
	session_destroy();
	setcookie('username', '', time()-99);
	setcookie('code', '', time()-99);
	header("Location: login.html");
?>
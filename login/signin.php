<?php
	$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

	//$pass=md5($pass."ghhedr3456");

	$mysql=new mysqli('localhost', 'root', '', 'reg-bd');
	$result=$mysql->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");

	$user=$result->fetch_assoc();
	if(count($user)==0){
		echo "account non isiste";
		exit();
	}
	setcookie('uid', $user['uid'], time()+3600, "/");
	setcookie('email', $user['email'], time()+3600, "/");
	setcookie('username', $user['username'], time()+3600, "/");

	$mysql->close();

	header("location: /maproject/myAnimal/client/client.php")
?>
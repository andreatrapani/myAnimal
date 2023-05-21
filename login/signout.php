<?php
	setcookie('uid', $user['uid'], time()-3600, "/");
	setcookie('email', $user['email'], time()-3600, "/");
	setcookie('username', $user['username'], time()-3600, "/");
	header("location: login.php")
?>
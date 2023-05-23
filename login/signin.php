<?php
session_start();

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'reg-bd');
$result = $mysql->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");

$user = $result->fetch_assoc();
if (count($user) == 0) {
  echo "Account does not exist";
  exit();
}

// Start a session for the logged-in user
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $user['username'];
$_SESSION['email'] = $user['email'];
$_SESSION['uid'] = $user['uid'];

$mysql->close();

echo 'Login successful';
?>
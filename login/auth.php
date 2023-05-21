<?php
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$connection = new PDO('mysql:host=localhost;dbname=reg-bd', 'root', '');
// Check if the username already exists in the database
$existingQuery = $connection->prepare("SELECT * FROM user WHERE username = :username");
$existingQuery->bindParam(':username', $username);
$existingQuery->execute();
$existingUser = $existingQuery->fetch();

if ($existingUser) {
  // Username already exists, return an error message
  echo "Username is already taken";
} else {
  // Insert the new user record into the database
  $insertQuery = $connection->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
  $insertQuery->bindParam(':username', $username);
  $insertQuery->bindParam(':email', $email);
  $insertQuery->bindParam(':password', $password);
  $insertResult = $insertQuery->execute();

  if (!$insertResult) {
    $error = $insertQuery->errorInfo();
    echo "Error executing query: " . $error[2];
    exit();
  }

  echo "You are registered!";
}
?>

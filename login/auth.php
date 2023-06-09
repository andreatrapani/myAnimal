<?php
session_start();

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$nome = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$cognome = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password=md5($password."ghhedr3456");

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
  $insertQuery = $connection->prepare("INSERT INTO user (username, email, nome, cognome, password) VALUES (:username, :email, :nome, :cognome, :password)");
  $insertQuery->bindParam(':username', $username);
  $insertQuery->bindParam(':email', $email);
  $insertQuery->bindParam(':nome', $nome);
  $insertQuery->bindParam(':cognome', $cognome);
  $insertQuery->bindParam(':password', $password);
  $insertResult = $insertQuery->execute();

  if (!$insertResult) {
    $error = $insertQuery->errorInfo();
    echo "Error executing query: " . $error[2];
    exit();
  }

  // Start a session for the newly registered user
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['email'] = $email;
  $_SESSION['nome'] = $nome;
  $_SESSION['cognome'] = $cognome;

  echo "You are registered!";
}
?>

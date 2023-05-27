<?php
include_once '../../login/check-login.php';

$vid = filter_var(trim($_POST['vid']), FILTER_SANITIZE_STRING);
$uid = $_SESSION['uid'];

$host = 'localhost'; // your database host name
$user = 'root'; // your database username
$password = ''; // your database password
$database = 'reg-bd'; // your database name

// create a new database connection
$mysqli = new mysqli($host, $user, $password, $database);

// check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Update the vfk field of the user table
$sql = "UPDATE user SET vfk = '$vid' WHERE uid = '$uid'";

if ($mysqli->query($sql) === TRUE) {
    echo "User vfk updated successfully";
} else {
    echo "Error updating user vfk: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();

?>
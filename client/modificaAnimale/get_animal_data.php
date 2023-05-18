<?php

$daid = $_COOKIE['daid'];
setcookie('daid', '', time() - 3600, '/');


// connect to the database
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

// prepare a SQL query to retrieve data from the "animali" table
$sql = "SELECT * FROM animali WHERE aid = $daid";

// execute the query
$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// check if a record was found
if ($result->num_rows > 0) {
    // fetch the record as an associative array
    $row = $result->fetch_assoc();

    // create an array to store the animal data
    $animal = array(
        'Nome' => $row['nome'],
        'Tipologia' => $row['tipologia'],
        'Razza' => $row['razza'],
        'Sesso' => $row['sesso'],
        'Peso' => $row['peso'],
        'Data di nascita' => $row['data_nascita'],
        'Colore' => $row['colore']
    );

    // close the database connection
    $mysqli->close();

    // do something with the $animal data
    // ...

} else {
    // no record found
    echo 'No animal found for the given daid.';
}
?>

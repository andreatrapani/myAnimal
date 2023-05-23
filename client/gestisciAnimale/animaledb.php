

<?php

include_once '../../login/check-login.php';

// retrieve the user's UID from the session
$uid = $_SESSION['uid'];

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
$sql = "SELECT * FROM animali WHERE ufk = $uid";

// execute the query and retrieve the data
$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// create an array to store the animal data
$animali = array();

// iterate over the rows and store the data in the array
while ($row = $result->fetch_assoc()) {
    $animal = array(
        'aid' => $row['aid'],
        'Nome' => $row['nome'],
        'Tipologia' => $row['tipologia'],
        'Razza' => $row['razza'],
        'Sesso' => $row['sesso'],
        'Peso' => $row['peso'],
        'Data di nascita' => $row['data_nascita'],
        'Colore' => $row['colore']
    );
    array_push($animali, $animal);
}

// close the database connection
$mysqli->close();

// pass the array to animale.php using a GET parameter
//header("Location: animale.php?animali=" . urlencode(json_encode($animali)));

?>


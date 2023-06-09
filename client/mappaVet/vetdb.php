

<?php

// retrieve the user's UID from the cookie
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
$sql = "SELECT * FROM vet";

// execute the query and retrieve the data
$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// create an array to store the animal data
$vets = array();

// iterate over the rows and store the data in the array
while ($row = $result->fetch_assoc()) {
    $vet = array(
        'vid' => $row['vid'],
        'Nome' => $row['nome'],
        'Cognome' => $row['cognome'],
        'DataN' => $row['dataN'],
        'Email' => $row['email'],
        'Telefono' => $row['telefono'],
        'Indirizzo' => $row['indirizzo'],
        'Lat' => $row['lat'],
        'Lon' => $row['lon'],
        'ufk' => $_SESSION['uid']
    );
    array_push($vets, $vet);
}

// close the database connection
$mysqli->close();

// pass the array to animale.php using a GET parameter
//header("Location: animale.php?animali=" . urlencode(json_encode($animali)));

?>


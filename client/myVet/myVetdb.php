
<?php

// retrieve the user's UID from the cookie
$uid = $_COOKIE['uid'];
//$vfk = $_COOKIE['vfk'];

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


$sql = "SELECT * FROM user WHERE `uid`='$uid'";

$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// iterate over the rows and store the data in the array
while ($row = $result->fetch_assoc()) {
    $vfk = $row['vfk'];
    $nome = $row['nome'];
    $cognome = $row['cognome'];
    setcookie('nome', $nome, time()-3600, "/");
    setcookie('nome', $nome, time()+3600, "/");
    setcookie('cognome', $cognome, time()-3600, "/");
    setcookie('cognome', $cognome, time()+3600, "/");
}

//setcookie('nome', $user['nome'], time()+3600, "/");

// prepare a SQL query to retrieve data from the "vet" table based on UID and ufk comparison
$sql = "SELECT * FROM vet WHERE `vid`='$vfk'";

// execute the query and retrieve the data
$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// create an array to store the vet data
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
        'ufk' => $row['ufk']
    );
    array_push($vets, $vet);
}




$sql = "SELECT * FROM vet";

// execute the query and retrieve the data
$result = $mysqli->query($sql);

// check for errors
if (!$result) {
    die('Error: ' . $mysqli->error);
}

// create an array to store the vet data
$vetall = array();

// iterate over the rows and store the data in the array
while ($row = $result->fetch_assoc()) {
    $vetl = array(
        'vid' => $row['vid'],
        'Nome' => $row['nome'],
        'Cognome' => $row['cognome'],
        'DataN' => $row['dataN'],
        'Email' => $row['email'],
        'Telefono' => $row['telefono'],
        'Indirizzo' => $row['indirizzo'],
        'Lat' => $row['lat'],
        'Lon' => $row['lon'],
        'ufk' => $row['ufk']
    );
    array_push($vetall, $vetl);
}
// close the database connection
$mysqli->close();

// pass the array to the calling script
//header("Location: myVet.php");

?>

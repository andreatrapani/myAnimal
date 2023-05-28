<?php
include_once '../../login/check-login.php';

$conn = new mysqli('localhost', 'root', '', 'reg-bd');
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Esegui la query per ottenere l'FKID del vaccino in base al nome
    $nomeVax = $_POST['nomeVax'];
    $query = "SELECT idV FROM vaccini WHERE nome = '$nomeVax'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) != 0) {
        // Il vaccino esiste già nel database
        $row = mysqli_fetch_assoc($result);
        $fkidV = $row['idV'];
    } else {
        // Il vaccino non esiste nel database, quindi creane uno nuovo
        $query = "INSERT INTO vaccini (nome) VALUES ('$nomeVax')";
        mysqli_query($conn, $query);
        $fkidV = mysqli_insert_id($conn);
    }

    // Inserisci i dati nella tabella vaccini_animali
    $fkidA =$_POST['idAnimal'];
    $dataVaccinazione = $_POST['dataVaccinazione'];
    $durataVax = $_POST['durataVax'];

    $query = "INSERT INTO vaccini_animali (fkidA, fkidV, durata, data) VALUES ('$fkidA', '$fkidV', '$durataVax', '$dataVaccinazione')";
    mysqli_query($conn, $query);
    header('location: ../gestisciAnimale/animale.php');
}

$conn->close();
?>
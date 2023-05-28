<?php
include_once '../../login/check-login.php';

$conn = new mysqli('localhost', 'root', '', 'reg-bd');
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Esegui la query per ottenere l'FKID del vaccino in base al nome
    $nomeMed = $_POST['nomeMed'];
    $query = "SELECT idM FROM medicinali WHERE nome = '$nomeMed'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) != 0) {
        // Il vaccino esiste già nel database
        $row = mysqli_fetch_assoc($result);
        $fkidM = $row['idM'];
    } else {
        // Il vaccino non esiste nel database, quindi creane uno nuovo
        $query = "INSERT INTO medicinali (nome) VALUES ('$nomeMed')";
        mysqli_query($conn, $query);
        $fkidV = mysqli_insert_id($conn);
    }

    // Inserisci i dati nella tabella vaccini_animali
    $fkidA =$_POST['idAnimal'];
    $durataMedicinale = $_POST['durataMed'];
    $dataMed = $_POST['dataAssunzione'];
    $orarioAssunzione = $_POST['orarioAssunzione'];

    $query = "INSERT INTO medicinali_animali (fkidA, fkidM, durata, data_inizio, ora) VALUES ('$fkidA', '$fkidM', '$durataMedicinale', '$dataMed', '$orarioAssunzione')";
    mysqli_query($conn, $query);
    header('location: ../gestisciAnimale/animale.php');
}

$conn->close();
?>
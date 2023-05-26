<?php

include_once '../../login/check-login.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg-bd";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Recupero dei dati dal form
$nome = $_POST['nome'];
$tipologia = $_POST['tipologia'];
$razza = $_POST['razza'];
$sesso = $_POST['sesso'];
$peso = $_POST['peso'];
$data_nascita = $_POST['data_nascita'];
$colore = $_POST['colore'];

// Preparazione della query di inserimento
$stmt = $conn->prepare("INSERT INTO animali (nome, tipologia, razza, sesso, peso, data_nascita, colore, ufk) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssdsss", $nome, $tipologia, $razza, $sesso, $peso, $data_nascita, $colore, $_SESSION['uid']);

// Esecuzione della query di inserimento
if ($stmt->execute()) {
    echo "Dati inseriti correttamente";
} else {
    echo "Errore durante l'inserimento dei dati: " . $stmt->error;
}

// Chiusura della connessione e dello statement
$stmt->close();
$conn->close();
?>

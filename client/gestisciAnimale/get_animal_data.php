<?php
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

// Verifica la connessione
if ($mysql->connect_error) {
    die("Connessione fallita: " . $mysql->connect_error);
}

// Ottieni l'ID dell'animale dalla richiesta AJAX
$animalId = $_POST['animalId'];

// Query per ottenere i dati dell'animale dal database
$query = "SELECT * FROM animali WHERE aid = $animalId";

$result = $mysql->query($query);

if ($result->num_rows > 0) {
    // Animale trovato, ottieni i dati
    $animalData = $result->fetch_assoc();

    // Restituisci i dati dell'animale come risposta JSON
    echo json_encode($animalData);
} else {
    // Nessun animale trovato con l'ID specificato
    echo "Nessun animale trovato";
}

// Chiudi la connessione al database
$mysql->close();
?>

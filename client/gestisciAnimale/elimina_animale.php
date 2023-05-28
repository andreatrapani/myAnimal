<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg-bd";
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo se la connessione è riuscita
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Controlla se il form è stato inviato e la casella di conferma è selezionata
if (isset($_POST['accountActivation']) && $_POST['accountActivation'] == 'on') {
    // Verifica che l'id dell'animale sia stato inviato
    if (isset($_POST['idAnimal'])) {
        $id = $_POST['idAnimal'];
        
        // Effettua l'eliminazione dell'animale dal database
        $sql = "DELETE FROM animali WHERE aid = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            // L'eliminazione è stata effettuata con successo
            echo "Animale eliminato correttamente.";
        } else {
            echo "Errore durante l'eliminazione dell'animale.";
        }
        
        $stmt->close();
    } else {
        echo "ID animale non fornito.";
    }
}

$conn->close();
?>

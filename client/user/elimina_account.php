<?php
    include_once '../../login/check-login.php';

    $mysql = new mysqli('localhost', 'root', '', 'reg-bd');

    // Verifica la connessione al database

    if ($mysql->connect_error) {
        die('Connessione al database fallita: ' . $mysql->connect_error);
    }

    // Controlla se l'utente ha selezionato la conferma di eliminazione

    if (isset($_POST['accountActivation'])) {
        // Esegui l'eliminazione dell'account

        $uid = $_SESSION['uid'];
        $query = "DELETE FROM user WHERE uid = $uid";

        if ($mysql->query($query) === TRUE) {
            header('location: ../../login/login.php');
        } else {
            header('location: ../../login/login.php');
        }
    }

    // Chiudi la connessione al database

    $mysql->close();
?>

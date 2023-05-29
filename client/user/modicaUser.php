<?php

    include_once '../../login/check-login.php';
    
    $mysql = new mysqli('localhost', 'root', '', 'reg-bd');

    // Verifica la connessione al database

    if ($mysql->connect_error) {
        die('Connessione al database fallita: ' . $mysql->connect_error);
    }

    // Recupera i dati inviati dal form

    $nome = $_POST['Nome'];
    $cognome = $_POST['Cognome'];
    $email = $_POST['email'];
    $indirizzo = $_POST['organization'];
    $telefono = $_POST['phoneNumber'];

    // Esegui l'aggiornamento dei dati nel database

    $uid = $_SESSION['uid'];
    $query = "UPDATE user SET nome = '$nome', cognome = '$cognome', email = '$email', indirizzo = '$indirizzo', telefono = '$telefono' WHERE uid = $uid";

    if ($mysql->query($query) === TRUE) {
        header('location: user.php');
    } else {
        header('location: user.php') . $mysql->error;
    }

    // Chiudi la connessione al database

    $mysql->close();
?>

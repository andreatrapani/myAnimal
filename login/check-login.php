<?php
session_start();

// Controlla se l'utente è loggato
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // L'utente non è loggato, reindirizzalo alla pagina di login
    header("Location: ../login/login.php");
    exit;
}
?>
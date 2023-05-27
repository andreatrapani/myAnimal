<?php
include_once '../../login/check-login.php';

$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

$nome = $_POST['nomeAnimale'];
$tipologia = $_POST['tipologia'];
$razza = $_POST['razza'];
$sesso = $_POST['sesso'];
$peso = $_POST['peso'];
$data_nascita = $_POST['html5-date-input'];
$colore = $_POST['html5-color-input'];
$idAnimal = $_POST['idAnimal'];

$query = "UPDATE animali SET nome='$nome', tipologia='$tipologia', razza='$razza', sesso='$sesso', peso='$peso', data_nascita='$data_nascita', colore='$colore' WHERE aid='$idAnimal'";

if ($mysql->query($query) === TRUE) {
    header('location: animale.php');
} else {
    header('location: ../errori/error.html') . $mysql->error;
}

$mysql->close();

?>

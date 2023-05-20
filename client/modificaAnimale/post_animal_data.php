<?php
$aid = filter_var(trim($_POST['aid']), FILTER_SANITIZE_STRING);
$nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
$tipologia = filter_var(trim($_POST['tipologia']), FILTER_SANITIZE_STRING);
$razza = filter_var(trim($_POST['razza']), FILTER_SANITIZE_STRING);
$sesso = filter_var(trim($_POST['sesso']), FILTER_SANITIZE_STRING);
$peso = filter_var(trim($_POST['peso']), FILTER_SANITIZE_STRING);
$data_nascita = filter_var(trim($_POST['data_nascita']), FILTER_SANITIZE_STRING);
$colore = filter_var(trim($_POST['colore']), FILTER_SANITIZE_STRING);

$connection = new PDO('mysql:host=localhost;dbname=reg-bd', 'root', '');

$sql = 'UPDATE animali SET nome = :nome, tipologia = :tipologia, razza = :razza, sesso = :sesso, peso = :peso, data_nascita = :data_nascita, colore = :colore WHERE aid = :aid';

$statement = $connection->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':tipologia', $tipologia);
$statement->bindParam(':razza', $razza);
$statement->bindParam(':sesso', $sesso);
$statement->bindParam(':peso', $peso);
$statement->bindParam(':data_nascita', $data_nascita);
$statement->bindParam(':colore', $colore);
$statement->bindParam(':aid', $aid);

$result = $statement->execute();

if (!$result) {
    $error = $statement->errorInfo();
    echo "Errore nell'esecuzione della query: " . $error[2];
    exit();
}

// Perform any necessary actions after the record is updated
// ...

exit();

?>

<?php
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

$animalId = $_POST['animalId'];

$risultato = $mysql->query("SELECT * FROM animali WHERE aid = $animalId");

if ($risultato->num_rows > 0) {
    $row = $risultato->fetch_assoc();
    echo '
<tr>
<td>ID:</td>
<td>' . $row['aid'] . '</td>
</tr>
<tr>
<td>Nome:</td>
<td>' . $row['nome'] . '</td>
</tr>
<tr>
<td>Razza:</td>
<td>' . $row['razza'] . '</td>
</tr>
<tr>
<td>Età:</td>
<td>' . $row['eta'] . '</td>
</tr>
<tr>
<td>Peso:</td>
<td>' . $row['peso'] . '</td>
</tr>
';
} else {
    echo '<tr>
<td colspan="2">Nessun dettaglio disponibile</td>
</tr>
';
}
?>
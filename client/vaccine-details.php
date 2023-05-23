<?php
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
   $animalId = $_POST['animalId'];

   // Esegui una query per ottenere i dettagli dei vaccini dell'animale selezionato
   $risultato = $mysql->query("SELECT vaccini.nome, vaccini_animali.data FROM vaccini_animali INNER JOIN vaccini ON vaccini_animali.fkidV = vaccini.idV WHERE vaccini_animali.fkidA = $animalId AND vaccini_animali.data >= CURDATE() ORDER BY vaccini_animali.data");

   if ($risultato->num_rows == 0) {
      echo '
      <h3 class="card-title mb-2">Nessun Vaccino da effettuare</h3>
      <small class="text-success fw-semibold"></small>';
   } else {
      $vaccino = $risultato->fetch_assoc();

      $nome = $vaccino['nome'];
      $data = $vaccino['data'];

      echo '
      <h3 class="card-title mb-2">' . $nome . '</h3>
      <small class="text-success fw-semibold">' . $data . '</small>';
   }
}

$mysql->close();
?>

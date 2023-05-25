<?php
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
  $animalId = $_POST['animalId'];

  // Esegui una query per ottenere il prossimo medicinale da assumere entro la durata in settimane
  $risultato = $mysql->query("SELECT medicinali.nome, medicinali_animali.ora FROM medicinali_animali INNER JOIN medicinali ON medicinali_animali.fkidM = medicinali.idM WHERE medicinali_animali.fkidA = $animalId AND DATE_ADD(medicinali_animali.data_inizio, INTERVAL medicinali_animali.durata WEEK) >= CURDATE() AND medicinali_animali.ora >= NOW() ORDER BY medicinali_animali.ora LIMIT 1");

  if ($risultato->num_rows == 0) {
    echo '
    <h3 class="card-title mb-2">Nessun Medicinale per oggi</h3>
    <small class="text-danger fw-semibold"></small>';
  } else {
    $medicinale = $risultato->fetch_assoc();

    $nome = $medicinale['nome'];
    $ora = $medicinale['ora'];

    echo '
    <h3 class="card-title mb-2">' . $nome . '</h3>
    <small class="text-danger fw-semibold">' . $ora . '</small>';
  }
}

$mysql->close();
?>

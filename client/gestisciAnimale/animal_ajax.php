<?php
include_once '../../login/check-login.php';

$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
   $animalId = $_POST['animalId'];

   // Esegui una query per ottenere i dettagli dell'animale selezionato
   $risultato = $mysql->query("SELECT * FROM animali WHERE aid = '$animalId'");

   if ($risultato->num_rows > 0) {
      $animal = $risultato->fetch_assoc();

      // Restituisci i dettagli dell'animale come HTML
      echo '
      <div class="card mb-4" id="modifica">
                          <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                            ';
                              if ($animal['tipologia'] == 'cane') {
                                echo '<img class="animal-image" src="../../assets/img/animals/cane.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" data-animal-id="' . $animal['aid'] . '">
                                                              ';
                              } else {
                                echo '<img class="animal-image" src="../../assets/img/animals/gatto.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" data-animal-id="' . $animal['aid'] . '>
                                                              ';
                              }

                              echo '
                            
                              <div class="button-wrapper">
                                <h1 id="animalName">' . $animal['nome'] . '</h1>                                
                              </div>
                            </div>
                          </div>

                          <hr class="my-0">
                          <div class="card-body">
                          <form id="formAccountSettings" method="POST" action="modificaAnimale.php">
                          <div class="row">
                                <div class="mb-3 col-md-6">
                                  <label for="Nome" class="form-label">Nome</label>
                                  <input class="form-control" type="text" id="nomeAnimale" name="nomeAnimale" value="' . $animal['nome'] . '" >
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="tipologia" class="form-label">Tipologia</label>
                                  ';
                                  if ($animal['tipologia'] == 'cane') {
                                    echo '
                                    <select id="tipologia" name="tipologia" class="select2 form-select">
                                      <option value="cane" selected="">cane</option>
                                      <option value="gatto">gatto</option>
                                    </select>';
                                    } else {
                                      echo '
                                    <select id="tipologia" name="tipologia" class="select2 form-select">
                                      <option value="cane">cane</option>
                                      <option value="gatto" selected="">gatto</option>
                                    </select>';
                                  }
                                  echo '
                                  
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="razza" class="form-label">Razza</label>
                                  <input type="text" class="form-control" id="razza" name="razza" value="' . $animal['razza'] . '">
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="sesso" class="form-label">Sesso</label>';
                                  if ($animal['sesso'] == 'M') {
                                    echo '<select id="sesso" name="sesso" class="select2 form-select">
                                                        <option value="M" selected="">M</option>
                                                        <option value="F">F</option>
                                                      </select>  ';
                                  } else {
                                    echo '<select id="sesso" name="sesso" class="select2 form-select">
                                                        <option value="M" >M</option>
                                                        <option value="F" selected="">F</option>
                                                      </select>  ';
                                  }
                                  echo '
                                                                
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label class="form-label" for="peso">Peso</label>
                                  <div class="input-group input-group-merge">
                                    <input type="text" id="peso" name="peso" class="form-control" value="' . $animal['peso'] . '">
                                    <span class="input-group-text">kg</span>
                                  </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="address" class="form-label">Data Nascita</label>
                                  <input class="form-control" type="date" value="' . $animal['data_nascita'] . '" id="html5-date-input" name="html5-date-input">
                                </div>
                                <div class="mb-3 col-md-12">
                                  <label for="state" class="form-label">Colore</label>
                                  <div>
                                    <input class="form-control" type="color" value="' . $animal['colore'] . '" id="html5-color-input" name="html5-color-input">
                                  </div>
                                </div>
                              </div>
                              <input class="form-control" id="idAnimal" name="idAnimal" value="' . $animal['aid'] . '" style="display: none;">
                              <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                              </div>
                            </form>
                          
';
   } else {
      echo 'Nessun dato disponibile per l\'animale selezionato.';
   }
}

$mysql->close();
?>

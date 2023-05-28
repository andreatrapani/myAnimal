<?php
include_once '../../login/check-login.php';

$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
   $animalId = $_POST['animalId'];

   // Esegui una query per ottenere i dettagli dell'animale selezionato
   $result = $mysql->query("SELECT * FROM medicinali_animali WHERE fkidA = " . $animalId);

                                $medicinali = array(); // Array per memorizzare i medicinali
                                while ($row = $result->fetch_assoc()) {
                                  $medicinali[] = $row; // Aggiungi ogni vaccino all'array
                                }
                                
                                if ($result->num_rows == 0) {
                                    echo '<p>NESSUN MEDICINALE INSERITO</p>
                                      <div style="margin: 0 auto;">
                                        <a href="../aggiungi/aggiungiMed.php?aid=' . $animalId . '" type="button" class="btn rounded-pill btn-primary">
                                          Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                        </a>
                                      </div>';
                                  }else{
                                    foreach ($medicinali as $medicina) {
                                        $ris = $mysql->query("SELECT nome FROM medicinali WHERE idM=".$medicina['fkidM']."");
                                          $nome = "";
                                          if ($ris && $ris->num_rows > 0) {
                                              $row = $ris->fetch_assoc();
                                              $nome = $row['nome'];
                                          }
                                      
                                          if (strtotime($medicina['data_inizio']) <= strtotime(date('Y-m-d')) && strtotime($medicina['data_inizio'] . ' + ' . $medicina['durata'] . ' months') > strtotime(date('Y-m-d'))) {
                                            echo '<li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                              <div class="d-flex">
                                                <div class="me-2">
                                                  <span class="badge bg-label-success p-25"><i class="bx bxs-capsule text-success"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">effettuabile</small>
                                                <h6 class="mb-0">'.$nome.'</h6>
                                              </div>
                                              <div class="user-progress d-flex align-items-center gap-1">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">orario</small>
                                                <h6 class="mb-0 text-success">'.$medicina['ora'].'</h6>
                                              </div>
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">fino al</small>
                                                <h6 class="mb-0 text-success">'.date('d-m-Y', strtotime($medicina['data_inizio'] . ' + ' . $medicina['durata'] . ' day')).'</h6>
                                              </div>
                                              </div>
                                            </div>
                                          </li>';
                                        }else if(strtotime($medicina['data_inizio']) > strtotime(date('Y-m-d'))){
                                          echo'
                                          <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                              <div class="d-flex">
                                                <div class="me-2">
                                                  <span class="badge bg-label-warning p-25"><i class="bx bxs-capsule text-warning"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">da effettuare</small>
                                                <h6 class="mb-0">'.$nome.'</h6>
                                              </div>
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">dal</small>
                                                <h6 class="mb-0 text-warning">'.date('d-m-Y', strtotime($medicina['data_inizio'])).'</h6>
                                              </div>
                                            </div>
                                          </li>';
                                          
                                        }else{
                                          echo'
                                          
                                          <li class="d-flex mb-4 pb-1">
                                          <div class="avatar flex-shrink-0 me-3">
                                            <div class="d-flex">
                                              <div class="me-2">
                                                <span class="badge bg-label-danger p-25"><i class="bx bxs-capsule text-danger"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                              <small class="text-muted d-block mb-1">scaduta</small>
                                              <h6 class="mb-0">'.$nome.'</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                            <div class="me-2">
                                            <small class="text-muted d-block mb-1">scaduta il</small>
                                            <h6 class="mb-0 text-danger">'.date('d-m-Y', strtotime($medicina['data_inizio'] . ' + ' . $medicina['durata'] . ' day')).'</h6>
                                          </div>
                                            </div>
                                          </div>
                                        </li>
                                          ';
    
                                        }
                                  }

                                  echo'</ul>
                                  <div style="margin: 0 auto;">
                                  <a href="../aggiungi/aggiungiMed.php?aid=' . $animalId . '" type="button" class="btn rounded-pill btn-primary">
                                    Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                  </a>
                                </div>
                                  <br>';
    
                                }
}

$mysql->close();
?>





                                

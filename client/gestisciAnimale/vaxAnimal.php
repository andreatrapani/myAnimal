<?php
include_once '../../login/check-login.php';

$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
   $animalId = $_POST['animalId'];

   // Esegui una query per ottenere i dettagli dell'animale selezionato
   $result = $mysql->query("SELECT * FROM vaccini_animali WHERE fkidA = " . $animalId);

                                $vaccini = array(); // Array per memorizzare i vaccini
                                while ($row = $result->fetch_assoc()) {
                                  $vaccini[] = $row; // Aggiungi ogni vaccino all'array
                                }
                                
                                if ($result->num_rows == 0) {
                                  echo '<p>NESSUN VACCINO INSERITO</p>
                                    <div style="margin: 0 auto;">
                                      <a href="../aggiungi/aggiungiVax.php?aid=' . $animalId . '" type="button" class="btn rounded-pill btn-primary">
                                        Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                      </a>
                                    </div>';
                                }else{
                                      foreach ($vaccini as $vaccino) {
                                        $ris = $mysql->query("SELECT nome FROM vaccini WHERE idV=".$vaccino['fkidV']."");
                                          $nome = "";
                                          if ($ris && $ris->num_rows > 0) {
                                              $row = $ris->fetch_assoc();
                                              $nome = $row['nome'];
                                          }

                                          if (strtotime($vaccino['data']) < strtotime(date('Y-m-d')) && strtotime($vaccino['data'] . ' + ' . $vaccino['durata'] . ' months') > strtotime(date('Y-m-d'))) {
                                            echo '<li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                              <div class="d-flex">
                                                <div class="me-2">
                                                  <span class="badge bg-label-success p-25"><i class="bx bxs-vial text-success"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">valido</small>
                                                <h6 class="mb-0">'.$nome.'</h6>
                                              </div>
                                              <div class="user-progress d-flex align-items-center gap-1">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">data scadenza</small>
                                                <h6 class="mb-0 text-success">'.date('Y-m-d', strtotime($vaccino['data'] . ' + ' . $vaccino['durata'] . ' months')).'</h6>
                                              </div>
                                              </div>
                                            </div>
                                          </li>';
                                        } else if(strtotime($vaccino['data']) > strtotime(date('Y-m-d'))){
                                          echo'
                                          <li class="d-flex mb-4 pb-1">
                                          <div class="avatar flex-shrink-0 me-3">
                                            <div class="d-flex">
                                              <div class="me-2">
                                                <span class="badge bg-label-warning p-25"><i class="bx bxs-vial text-warning"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                              <small class="text-muted d-block mb-1">da effettuare</small>
                                              <h6 class="mb-0">'.$nome.'</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">vaccinazione il</small>
                                                <h6 class="mb-0 text-warning">'.date('Y-m-d', strtotime($vaccino['data'])).'</h6>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </li>';
                                          
                                        }else{
                                          echo'
                                          
                                            <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                              <div class="d-flex">
                                                <div class="me-2">
                                                  <span class="badge bg-label-danger p-25"><i class="bx bxs-vial text-danger"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">scaduti</small>
                                                <h6 class="mb-0">'.$nome.'</h6>
                                              </div>
                                              <div class="user-progress d-flex align-items-center gap-1">
                                              <div class="me-2">
                                                <small class="text-muted d-block mb-1">data scadenza</small>
                                                <h6 class="mb-0 text-danger">'.date('Y-m-d', strtotime($vaccino['data'] . ' + ' . $vaccino['durata'] . ' months')).'</h6>
                                              </div>
                                                
                                              </div>
                                            </div>
                                          </li>
                                          ';

                                        }
                                    


                                      }

                                      echo'</ul>
                                      <div style="margin: 0 auto;">
                                      <a href="../aggiungi/aggiungiVax.php?aid=' . $animalId . '" type="button" class="btn rounded-pill btn-primary">
                                        Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                      </a>
                                    </div>
                                      <br>';

                                    }
}

$mysql->close();
?>





                                

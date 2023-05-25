<?php
include_once '../../login/check-login.php';
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MyAnimal - Home</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="client.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img style="width: 50px" src="../../assets/img/myAnimalLogo.png">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MyAnimal</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Home -->
            <li class="menu-item active">
              <a href="client.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="home">Home</div>
              </a>
            </li>
            
            <!--Animali-->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Animali</span>
            </li>

            <li class="menu-item">
              <a href="../gestisciAnimale/animale.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-baidu"></i>
                <div data-i18n="Gestisci Animali">Gestisci Animali</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="../aggiungi/aggiungiAnimale.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus"></i>
                <div data-i18n="add-animal">Aggiungi Animale</div>
              </a>
            </li>

            <!-- Veterinario -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">VETERINARIO</span></li>
            <!-- MyVet -->
            <li class="menu-item">
                <a href="../myVet/myVet.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-band-aid"></i>
                  <div data-i18n="my-vet">Il Mio Veterinario</div>
                </a>
              </li>
            <!-- Map -->
            <li class="menu-item">
              <a href="../mappaVet/mappaVet.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="veterinari-maps">Mappa Veterinari</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <?php
                            if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
                              // user is logged in
                              echo '<span class="fw-semibold d-block">' . $_SESSION['username'] . " </span>";
                              echo '<small class="text-muted">' . $_SESSION['email'] . "</small>";
                            } else {
                              // user is not logged in
                            }
                            ?>
                            <!--<span class="fw-semibold d-block">AAAAAAAAAA</span>
                            <small class="text-muted">User</small>-->
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../login/signout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <?php
                          if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
                            // user is logged in
                            echo '<h5 class="card-title text-primary"> Ciao ' . $_SESSION['username'] . "</h5>";
                          } else {
                            // user is not logged in
                          }
                          ?>
                          <p class="mb-4">
                            Benvenuto su <span class="fw-bold">myAnimal</span> , qui puoi gestire i tuoi animali domestici e entrare in contatto con il tuo veterinario.                          </p>

                          <a href="gestisciAnimale/animale.php" class="btn btn-sm btn-outline-primary">Gestisci i tuoi animali</a>
                          <a href="aggiungiAnimale.html" class="btn btn-sm btn-outline-primary">Aggiungi nuovo animale</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Descrizione Animale -->
                



                    
                    <?php
                    $mysql = new mysqli('localhost', 'root', '', 'reg-bd');

                    $risultato = $mysql->query("SELECT *  FROM animali WHERE ufk = (SELECT uid FROM user WHERE username='" . $_SESSION['username'] . "')");

                    if ($risultato->num_rows == 0) {
                      echo '<div class="col-12 col-lg-12 order-1 order-md-3 order-lg-2 mb-4">
                              <div class="card">
                                <div class="row row-bordered g-0">
                                  <div class="col-md-12">
                                    <div class="text-center fw-semibold pt-3 mb-3 h1">NESSUN ANIMALE REGISTRATO</div>
                                    <div class="text-center button-wrapper">
                                      <h1><br><a href="../aggiungi/aggiungiAnimale.html" class="btn btn-primary">Aggiungi Animale Ora</a></h1>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                      ';
                      exit();
                    } else {
                      $animali = array(); // Array per memorizzare gli animali
                      while ($row = $risultato->fetch_assoc()) {
                        $animali[] = $row; // Aggiungi ogni animale all'array
                      }
                      $firstAnimal = $animali[0]; // Primo animale
                    
                      echo '
                      <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card">
                          <div class="row row-bordered g-0">
                            <div class="col-md-8">
                                <div class="card">
                                  <h5 class="card-header m-0 me-2 pb-3">Descrizione</h5>
                                  <div class="table-responsive text-nowrap animal-details">
                                      <table class="table">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Valore</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tipologia</strong></td>
                                              <td id="tipologia">' . $firstAnimal['tipologia'] . '</td>
                                            </tr>
                                            <tr>
                                              <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Razza</strong></td>
                                              <td id="razza">' . $firstAnimal['razza'] . '</td>
                                            </tr>
                                            <tr>
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Sesso</strong></td>
                                              <td id="sesso">' . $firstAnimal['sesso'] . '</td>
                                            </tr>
                                            <tr>
                                              <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Peso</strong></td>
                                              <td id="peso">' . $firstAnimal['peso'] . ' kg</td>
                                            </tr>
                                            <tr>
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Data nascita</strong></td>
                                              <td id="dataNascita">' . $firstAnimal['data_nascita'] . '</td>
                                            </tr>
                                            <tr>
                                              <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Colore</strong></td>
                                              <td><input disabled="" class="form-control" type="color" value="' . $firstAnimal['colore'] . '" id="html5-color-input"></td>
                                            </tr>
                                        </tbody>
                                      </table>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                  <div class="text-center">
                                      <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ' . $firstAnimal['nome'] . '
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">';

                      foreach ($animali as $animal) {
                        echo '<a class="dropdown-item animal-option" href="javascript:void(0);" data-animal-id="' . $animal['aid'] . '">' . $animal['nome'] . '</a>';
                      }

                      echo '</div>
                          </div>
                        </div>
                      </div>
                      <br><br>';

                      if ($firstAnimal['tipologia'] == 'cane') {
                        echo '<img class="animal-image" style="display: block; margin: 0 auto;" src="../../assets/img/animals/cane.png">';
                      } else {
                        echo '<img class="animal-image" style="display: block; margin: 0 auto;" src="../../assets/img/animals/gatto.png">';
                      }

                      echo '
                    </div>
                    </div>
                    </div>
                    </div>';

                      $mysql->close();
                    }
                    ?>






                    
                <!-- / Descrizione Animale -->
                

                <!-- vaccini e medicine -->

                <div class="col-12 col-md-12 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../../assets/img/icons/unicons/injection-success.png" alt="prossimo vax" class="rounded">
                            </div>
                            <span class="fw-semibold d-block mb-1">Prossimo Vaccino</span>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="gestisciAnimale/animale.php">Vedi Altro</a>
                              </div>
                            </div>
                          </div>

                          <div class="vaccine-details">
                          <?php
                          $mysql = new mysqli('localhost', 'root', '', 'reg-bd');

                          // Ottieni l'ID dell'animale selezionato
                          $animalId = $firstAnimal['aid'];

                          $risultato = $mysql->query("SELECT * FROM vaccini_animali WHERE fkidA = $animalId AND data >= CURDATE() ORDER BY data");
                          if ($risultato->num_rows == 0) {
                            echo '
                            <h3 class="card-title mb-2">Nessun Vaccino da effettuare</h3>
                            <small class="text-success fw-semibold"></small>';
                          } else {
                            $vaccino = $risultato->fetch_assoc();

                            $nome_query = $mysql->query("SELECT nome FROM vaccini WHERE idV = " . $vaccino['fkidV']);
                            $nome_riga = $nome_query->fetch_assoc();
                            $nome = $nome_riga['nome'];

                            echo '
                            <h3 class="card-title mb-2">' . $nome . '</h3>
                            <small class="text-success fw-semibold">' . $vaccino['data'] . '</small>';
                          }

                          $mysql->close();
                          ?>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="../../assets/img/icons/unicons/capsule.png" alt="medicinali" class="rounded">
                    </div>
                    <span class="fw-semibold d-block mb-1">Prossimo Medicinale Oggi</span>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="gestisciAnimale/animale.php">Vedi Altro</a>
                      </div>
                    </div>
                  </div>
                  <div class="medicine-details">
                    <?php
                    $mysql = new mysqli('localhost', 'root', '', 'reg-bd');

                    // Ottieni l'ID dell'animale selezionato
                    $animalId = $firstAnimal['aid'];

                    $risultato = $mysql->query("SELECT * FROM medicinali_animali WHERE fkidA = $animalId AND DATE_ADD(data_inizio, INTERVAL durata WEEK) >= CURDATE() AND ora >= NOW() ORDER BY ora LIMIT 1");
                    if ($risultato->num_rows == 0) {
                      echo '
                      <h3 class="card-title mb-2">Nessun Medicinale per oggi</h3>
                      <small class="text-danger fw-semibold"></small>';
                    } else {
                      $medicinale = $risultato->fetch_assoc();

                      $nome_query = $mysql->query("SELECT nome FROM medicinali WHERE idM = " . $medicinale['fkidM']);
                      $nome_riga = $nome_query->fetch_assoc();
                      $nome = $nome_riga['nome'];

                      echo '
                      <h3 class="card-title mb-2">' . $nome . '</h3>
                      <small class="text-danger fw-semibold">' . $medicinale['ora'] . '</small>';
                    }

                    $mysql->close();
                    ?>
                  </div>
                </div>
              </div>
            </div>

                  </div>
                </div>

                
                <!-- vaccini e medicine -->

              </div>
            </div>
            
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , by Trap
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- ajaxCall -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.animal-option').click(function () {
          var animalId = $(this).data('animal-id');

          // Esegui una chiamata AJAX per ottenere i dettagli dell'animale selezionato
          $.ajax({
            url: 'animal-details.php',
            type: 'POST',
            data: { animalId: animalId },
            success: function (response) {
              // Aggiorna la sezione dei dettagli dell'animale con i dati ricevuti dalla chiamata AJAX
              $('.animal-details').html(response);
            },
            error: function (xhr, status, error) {
              // Gestisci gli errori della chiamata AJAX
              console.log(xhr.responseText);
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.animal-option').click(function () {
          var animalId = $(this).data('animal-id');
          var animalButton = $(this); // Salva il riferimento al pulsante

          // Esegui una chiamata AJAX per ottenere i dettagli dell'animale selezionato
          $.ajax({
            url: 'animal-details.php',
            type: 'POST',
            data: { animalId: animalId },
            success: function (response) {
              // Aggiorna la sezione dei dettagli dell'animale con i dati ricevuti dalla chiamata AJAX
              $('.animal-details').html(response);

              // Cambia il nome del pulsante con il nome dell'animale selezionato
              var animalName = animalButton.text(); // Usa il riferimento al pulsante salvato
              $('#growthReportId').text(animalName);
            },
            error: function (xhr, status, error) {
              // Gestisci gli errori della chiamata AJAX
              console.log(xhr.responseText);
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.animal-option').click(function () {
          var animalId = $(this).data('animal-id');
          var animalButton = $(this);

          $.ajax({
            url: 'animal-details.php',
            type: 'POST',
            data: { animalId: animalId },
            success: function (response) {
              $('.animal-details').html(response);

              var animalName = animalButton.text();
              $('#growthReportId').text(animalName);

              // Modifica l'immagine in base alla tipologia dell'animale
              if (response.includes('cane')) {
                $('img.animal-image').attr('src', '../../assets/img/animals/cane.png');
              } else if (response.includes('gatto')) {
                $('img.animal-image').attr('src', '../../assets/img/animals/gatto.png');
              }
            },
            error: function (xhr, status, error) {
              console.log(xhr.responseText);
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.animal-option').click(function () {
          var animalId = $(this).data('animal-id');

          // Esegui una chiamata AJAX per ottenere i dettagli dei vaccini dell'animale selezionato
          $.ajax({
            url: 'vaccine-details.php',
            type: 'POST',
            data: { animalId: animalId },
            success: function (response) {
              $('.vaccine-details').html(response);
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.animal-option').click(function () {
          var animalId = $(this).data('animal-id');

          // Esegui una chiamata AJAX per ottenere i dettagli dei medicinali dell'animale selezionato
          $.ajax({
            url: 'medicine-details.php',
            type: 'POST',
            data: { animalId: animalId },
            success: function (response) {
              $('.medicine-details').html(response);
            }
          });
        });
      });
    </script>







  </body>
</html>
<?php
include_once '../../login/check-login.php';


// retrieve the user's UID from the cookie
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

$risultato = $mysql->query("SELECT vfk  FROM user WHERE uid = " . $_SESSION['uid'] . "");

$uid = $_SESSION['uid'];
$vfk = $risultato;


// retrieve the vet data from the database
require_once 'myVetdb.php';

$user = $_SESSION['username'];

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
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <!-- script mappa -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUR0QMeyV2rCHlvNBTKkP6uAUQxoGPecA"></script>
    
    <!-- /script mappa -->



    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MyAnimal -  MappaVet</title>

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
    <style>
    #map {
      height: 400px;
      width: 100%;
    }
    </style>
    <script>
      function initMap() {
        // Imposta la posizione della mappa
        var myLatLng = { lat: <?php echo $vet['Lat']; ?>, lng: <?php echo $vet['Lon']; ?> };

        // Crea la mappa
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        // Aggiunge un marker per ogni punto
        var markers = [];

        <?php foreach ($vets as $vet): ?>
          <?php if ($vet['vid'] == $vfk): ?>
            markers.push(
              {
                lat: <?php echo $vet['Lat']; ?>,
                lng: <?php echo $vet['Lon']; ?>,
                title: '<?php echo $vet['Nome'] . " " . $vet['Cognome']; ?>',
                content: '<div><h5><?php echo $vet['Nome'] . " " . $vet['Cognome']; ?></h5><p>Email: <?php echo $vet['Email']; ?></p><p>Telefono: <?php echo $vet['Telefono']; ?></p><p>Indirizzo: <?php echo $vet['Indirizzo']; ?></p></div>'
              }
            );
                         <?php endif; ?>
         <?php endforeach; ?>

          markers.forEach(function (marker) {
            var gMarker = new google.maps.Marker({
              position: marker,
              map: map,
              title: marker.title
            });

            // Create an info window for each marker
            var infoWindow = new google.maps.InfoWindow({
              content: marker.content
            });

            gMarker.addListener('click', function () {
              infoWindow.open(map, gMarker);
            });

            infoWindow.addListener('closeclick', function () {
              infoWindow.close();
            });
          });
      }
    </script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="../home/client.php" class="app-brand-link">
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
            <li class="menu-item">
              <a href="../home/client.php" class="menu-link">
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
            <li class="menu-item active">
                <a href="../myVet/myVet.php" class="menu-link">
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
                      <a class="dropdown-item" href="../user/user.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
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
                <!-- Descrizione Animale -->
                
                <?php
                // check if any vets were found
                if (count($vets) == 0):
                  ?>
                                <div id="vet" style="text-align: center; border: 2px solid #696cff;">Nessun veterinario trovato.</div>
                <?php else: ?>
                                <!-- Your existing HTML code here -->
                                <!-- Iterate over the vets array and display the data -->
                  
                                  <div class="col-12 col-lg-12 mb-4">
                                    <div class="card">
                                      <div class="row row-bordered g-0">
                                        <div class="col-md-12">
                                          <!-- Display the vet data here -->
                                          <div class="card">
                                            <h5 class="card-header m-0 me-2 pb-3">VETERINARIO</h5>
                                            <div class="table-responsive text-nowrap">
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th>Valore</th>
                                                  </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                  <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Nome</strong></td>
                                                    <td><?php echo $vet['Nome']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Cognome</strong></td>
                                                    <td><?php echo $vet['Cognome']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Data di nascita</strong></td>
                                                    <td><?php echo $vet['DataN']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Email</strong></td>
                                                    <td><?php echo $vet['Email']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Telefono</strong></td>
                                                    <td><?php echo $vet['Telefono']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Indirizzo</strong></td>
                                                    <td><?php echo $vet['Indirizzo']; ?></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                  

                                  <div class="col-lg-12">
                                    <div class="card">
                                      <div class="d-flex align-items-end row">
                                        <div style="padding-top:1%; padding-bottom:1%; padding-left:2%; padding-right: 2%; border-radius: 30px;" class="col-12 mb-0">
                                            <div style="border-radius: 4px;" id="map"></div>
                                        </div>
                                          <script>
                                            window.onload = initMap;
                                          </script>        
                                      </div>
                                    </div>   
                                  </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="col-xl-12 col-lg-5">
                    
                    <?php
                    // check if any vets were found
                    if (count($vetall) == 0):
                      ?>
                                    <div class="container-xxl flex-grow-1 container-p-y">
                                  <div class="row">
                                    <!-- Form -->
                                    <div class="container-xxl flex-grow-1 container-p-y">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <!-- Intestazione -->
                                            <div class="card mb-4">
                                              <div class="card-body">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        
                                                  <div class="button-wrapper">
                                                    <h1>NESSUN VETERINARIO PRESENTE</h1>
                                          
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <!-- / Form -->
                                  </div>
                                </div>
                    <?php else: ?>
                                  <!-- Your existing HTML code here -->
                                  <!-- Iterate over the vets array and display the data -->
                                  <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                                                <div class="card">
                                      <h5 class="card-header">Cambia Veterinario</h5>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <th>nome</th>
                                              <th>cognome</th>
                                              <th>indiizzo</th>
                                              <th>email</th>
                                              <th>telefono</th>
                                              <th>cambia</th>
                                            </tr>
                                          </thead>
                                          <tbody class="table-border-bottom-0">
                                  <?php foreach ($vetall as $vet): ?>
                                              
                                      

                                            <?php if ($vet['vid'] != $vfk): ?>

                                                  <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $vet['Nome']; ?></strong></td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $vet['Cognome']; ?></strong></td>
                                                    <td><?php echo $vet['Indirizzo']; ?></td>
                                                    <td><?php echo $vet['Email']; ?></td>
                                                    <td><?php echo $vet['Telefono']; ?></td>
                                                    <td><button class="btn btn-primary btn-sm" onclick="postData('<?php echo $vet['vid']; ?>')">Select</button></td>
                                                  </tr>
                                              <?php endif; ?>      
                          <?php endforeach; ?>
                          </tbody>
                  </table>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <script>
            function postData(vid) {
              $.ajax({
                type: "POST",
                url: "selectVet.php",
                data: { vid: vid },
                success: function (response) {
                  console.log(response);
                  location.reload();
                },
                error: function (xhr, status, error) {
                  console.error(error);
                }
              });
            }
          </script>


          </div>
        </div>
          <script>
            window.onload = initMap;
          </script>
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
  </body>
</html>
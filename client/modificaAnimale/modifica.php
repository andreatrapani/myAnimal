<script type="text/javascript">
  var urlParams = new URLSearchParams(window.location.search);
  var daid = urlParams.get('daid');

  document.cookie = "daid=" + encodeURIComponent(daid);

</script>
<?php


// retrieve the animal data from the database
require_once 'get_animal_data.php';
$a=0;
if ($a<2): $a=$a+1;?>
        <p>Nessun animale trovato.</p>
    <?php else: 
        $animal = json_decode(urldecode($_GET['animal']), true);

        ?>
    <?php endif; ?>

?>
<script type="text/javascript">
  x=<?php echo $animal['Aid'] ?>;
  if(x!=daid){
    location.reload();
  }
</script>


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

    <title>MyAnimal -  Rex</title>

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
            <a href="../client.html" class="app-brand-link">
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
              <a href="../client.php" class="menu-link">
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
              <a href="../aggiungiAnimale.html" class="menu-link">
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
              <a href="../mappaVet/mappaVet.html" class="menu-link">
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
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <?php
                              if(isset($_COOKIE['email']) && $_COOKIE['email'] != '') {
                                  // user is logged in
                                  echo '<span class="fw-semibold d-block">'.$_COOKIE['username']." </span>";
                                  echo '<small class="text-muted">'.$_COOKIE['email']."</small>";
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
                      <a class="dropdown-item" href="../login/signout.php">
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
                <!-- Form -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Rex /</span> Modifica
                    </h4>
      
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card mb-4">
                          <!-- Account -->
                          <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img src="../../assets/img/animals/cane.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                              <div class="button-wrapper">
                                <h1 id="daidValue"></h1>
                                <h1 id="name"><?php echo $animal['Nome'] ?></h1>
                              </div>
                            </div>
                          </div>
                                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                          <script type="text/javascript">
                            /*$(document).ready(function() {
                                // Retrieve the daid value from the URL query parameters
                                var urlParams = new URLSearchParams(window.location.search);
                                var daid = urlParams.get('daid');
                                //$("#name").text(daid);

                                $.ajax({
                                  type: "POST",
                                  url: "./get_animal_data.php",
                                  data: {
                                    daid: daid
                                  },
                                  success: function(data) {
                                    // handle success response here
                                    console.log(data);
                                    $("#name").text(daid);
                                    //$('#message').show(); // show the success message
                                    //$('#formAuthentication').html('<div id="message" style="text-align: center; border: 2px solid green;">You are registered!</div>');
                                  },
                                  error: function(xhr, status, error) {
                                    // handle error response here
                                  }
                                });
                              });*/
                          </script>
                          <hr class="my-0">
                          <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                              <div class="row">
                                <div class="mb-3 col-md-6">
                                  <label for="Nome" class="form-label">Nome</label>
                                  <input class="form-control" type="text" id="Nome" name="Nome" value="<?php echo $animal['Nome'] ?>" autofocus="">
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="lastName" class="form-label">Tipologia</label>
                                  <select id="tipologia" class="select2 form-select">
                                    <?php
                                    //array di option e mettere selected se option = $animal['Tipologia'] ?>
                                    ?>
                                    <option value="cane">cane</option>
                                    <option value="gatto" selected>gatto</option>
                                  </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="Razza" class="form-label">Razza</label>
                                  <input class="form-control" type="text" id="Razza" name="Razza" value="<?php echo $animal['Razza'] ?>" autofocus="">
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="sesso" class="form-label">Sesso</label>
                                  <select id="sesso" class="select2 form-select">
                                    <option value="M" selected>M</option>
                                    <option value="F">F</option>
                                  </select>                                
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label class="form-label" for="peso">Peso</label>
                                  <div class="input-group input-group-merge">
                                    <input type="text" id="peso" name="peso" class="form-control" value="<?php echo $animal['Peso'] ?>">
                                    <span class="input-group-text">kg</span>
                                  </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="address" class="form-label">Data Nascita</label>
                                  <input class="form-control" type="date" value="<?php echo $animal['Data di nascita'] ?>" id="html5-date-input">
                                </div>
                                <div class="mb-3 col-md-12">
                                  <label for="state" class="form-label">Colore</label>
                                  <div>
                                    <input class="form-control" type="color" value="<?php echo $animal['Colore'] ?>" id="html5-color-input">
                                  </div>
                                </div>
                              </div>
                              <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                              </div>
                            </form>
                          </div>
                          <script src="../assets/vendor/libs/jquery/jquery.js"></script>
                        <script type="text/javascript">
                          $(document).ready(function() {
                          $('form').on('submit', function(e) {
                            e.preventDefault(); // prevent the default form submission behavior
                            var aid = daid;
                            var nome = $('#Nome').val();
                            var tipologia = $('#tipologia').val();
                            var razza = $('#Razza').val();
                            var sesso = $('#sesso').val();
                            var peso = $('#peso').val();
                            var data_nascita = $('#html5-date-input').val();
                            var colore = $('#html5-color-input').val();
                            //var ufk = $_COOKIE['uid'];
                            //var ufk = $("<?php echo $_COOKIE['uid']; ?>").val();
                            //var ufk = document.cookie.replace(/(?:(?:^|.*;\s*)uid\s*\=\s*([^;]*).*$)|^.*$/, "$1");


                            $.ajax({
                              type: "POST",
                              url: "post_animal_data.php",
                              data: {
                                aid: aid,
                                nome: nome,
                                tipologia: tipologia,
                                razza: razza,
                                sesso: sesso,
                                peso: peso,
                                data_nascita: data_nascita,
                                colore: colore
                              },
                              success: function(data) {
                                // handle success response here
                                console.log(data);
                                var url = "../gestisciAnimale/animale.php"; // Replace with the desired URL
                                window.location.href = url;



                              },
                              error: function(xhr, status, error) {
                                // handle error response here
                              }
                            });
                          });
                        });

                        </script>
                          <!-- /Account -->
                        </div>
                        <div class="card">
                          <h5 class="card-header">Elimina Animale</h5>
                          <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                              <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Sei sicuro di voler eliminare il tuo animale</h6>
                                <p class="mb-0">Una volta eliminato non sarà più recuperabile.</p>
                              </div>
                            </div>
                            <form id="formAccountDeactivation" onsubmit="return false">
                              <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                                <label class="form-check-label" for="accountActivation">confermo di voler eliminare il mio animale</label>
                              </div>
                              <button type="submit" class="btn btn-danger deactivate-account">Elimina Animale</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- / Form -->
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
  </body>
</html>

<?php

// retrieve the user's UID from the cookie
$uid = $_COOKIE['uid'];

// retrieve the animal data from the database
require_once 'animaledb.php';
$a=0;
if ($a==0): $a=1;?>
        <p>Nessun animale trovato.</p>
    <?php else: 
        $animali = json_decode(urldecode($_GET['animali']), true);

        ?>
    <?php endif; ?>

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
              <a href="../client.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="home">Home</div>
              </a>
            </li>
            
            <!--Animali-->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Animali</span>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-baidu"></i>
                <div data-i18n="Gestisci Animali">Gestisci Animali</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="animale.html" class="menu-link">
                    <div data-i18n="Rex">Rex</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="animale.html" class="menu-link">
                    <div data-i18n="Alex">Alex</div>
                  </a>
                </li>
              </ul>
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
                            <span class="fw-semibold d-block">AAAAAAAAAA</span>
                            <small class="text-muted">User</small>
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
                      <a class="dropdown-item" href="auth-login-basic.html">
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
                  <div class="btn-group">
                      <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Scegli animale
                      </button>
                      <ul class="dropdown-menu">

                        <?php
                        //$animali = json_decode(urldecode($_GET['animali']), true);

                        // iterate over the animal data and display it
                        foreach ($animali as $animal) {
                        ?>
                        <li><a class="dropdown-item" href="javascript:void(0);" data-animal="<?php echo $animal['Nome']; ?>" data-aid="<?php echo $animal['aid'] ?>"><?php echo $animal['Nome'] ?></a></li>
                        <?php } ?>
                        <li><a class="dropdown-item" href="javascript:void(0);">Alx</a></li>
                      </ul>
                  </div>
                  <br><br>
                    <div class="row">
                      
                      <div class="col-md-12">
                        <!-- Intestazione -->
                        <div class="card mb-4">
                          <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img src="../../assets/img/animals/cane.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                              <div class="button-wrapper">
                                <h1 id="animalName"><p>uid: <?php echo $_COOKIE['uid'] ?></p>Scegli animale</h1>
                                <p id="animalid" style="display: none;">g</p>
                                <label class="btn btn-primary me-2 mb-4" tabindex="0">
                                  
                                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>

                          $(document).ready(function() {
                            // Attach a change event listener to the dropdown
                            $(".dropdown-menu a.dropdown-item").on("click", function() {
                              var animalName = $(this).data("animal");
                              var daid = $(this).data("aid");
                              $("#animalName").text(animalName); // Update the animal name
                              $("#animalid").text(daid);
                              // Create the link element
      var link = $('<a>', {
        href: '../modificaAnimale/modifica.php?daid=' + encodeURIComponent(daid),
        class: 'btn btn-primary',
        text: 'Modifica Animale'
      });

      // Create the button element
      var button = $('<button>', {
        type: 'button'
      }).append(link);

      var h1 = $('<h1>', {
        type: 'h1'
      }).append(link);

      // Replace the existing button with the dynamic link
      $('.button-wrapper').empty().append(button);
      $('.button-wrapper').empty().append(h1);
      //document.write('<h1 id="animalName"></h1>');
      //$("#animalName").text(animalName); // Update the animal name
                            });
                          });
  
                        </script>
                                </label>


                              </div>
                            </div>
                          </div>
                        </div>
                        


                        <!-- / Intestazione -->
                        <div class="row">

                          <!-- Vaccini -->
                          <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                            <div class="card h-100">
                              <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Vaccini</h5>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    validi
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);">da effettuare</a>
                                    <a class="dropdown-item" href="javascript:void(0);">scaduti</a>
                                  </div>
                                </div>
                              </div>
                              <div class="card-body">
                                <ul class="p-0 m-0">
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-success p-25"><i class='bx bxs-vial text-success'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">validi</small>
                                        <h6 class="mb-0">Antirabbica</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-success">24/06/2026</h6>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-warning p-25"><i class='bx bxs-vial text-warning'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">da effettuare</small>
                                        <h6 class="mb-0">Antirabbica</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-warning">02/05/2023</h6>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-danger p-25"><i class='bx bxs-vial text-danger'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">scaduti</small>
                                        <h6 class="mb-0">Antirabbica</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-danger">24/06/2021</h6>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                <div style="margin: 0 auto;">
                                  <a href="../aggiungiVax.html" type="button" class="btn rounded-pill btn-primary">
                                    Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                  </a>
                                </div>
                                <br>
                              </div>
                            </div>
                          </div>
                          <!-- / Vaccini -->

                          <!-- Medicinali -->
                          <div class="col-md-6 col-lg-4 order-1 mb-4">
                            <div class="card h-100">
                              <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Medicinali</h5>
                              </div>
                              <div class="card-body">
                                <ul class="p-0 m-0">
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-danger p-25"><i class='bx bxs-capsule text-danger'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">non effettuata</small>
                                        <h6 class="mb-0">Medicina1</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-danger">08:00</h6>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-success p-25"><i class='bx bxs-capsule text-success'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">effettuata</small>
                                        <h6 class="mb-0">Medicina2</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-success">14:45</h6>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                      <div class="d-flex">
                                        <div class="me-2">
                                          <span class="badge bg-label-warning p-25"><i class='bx bxs-capsule text-warning'></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                        <small class="text-muted d-block mb-1">da effettuare</small>
                                        <h6 class="mb-0">Medicina3</h6>
                                      </div>
                                      <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0 text-warning">20:30</h6>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                <div style="margin: 0 auto;">
                                  <a href="../aggiungiMed.html" type="button" class="btn rounded-pill btn-primary">
                                    Inserisci&nbsp;<span class="tf-icons bx bx-plus"></span>
                                  </a>
                                </div>
                                <br>
                              </div>
                            </div>
                          </div>
                          <!-- / Medicinali -->

                          <!-- Ricette -->
                          <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                            <div class="card h-95">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                  <h5 class="card-title m-0 me-2">Ricette</h5>
                                </div>
                                <div class="card-body">
                                  <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">

                                      <div class="avatar flex-shrink-0 me-3">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-25"><i class="bx bx-file text-primary"></i></span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <small class="text-muted d-block mb-1">Ricette</small>
                                          <h6 class="mb-0">Test1</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                                            <i class='bx bx-search-alt-2'></i>
                                          </button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">

                                      <div class="avatar flex-shrink-0 me-3">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-25"><i class="bx bx-file text-primary"></i></span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <small class="text-muted d-block mb-1">Ricette</small>
                                          <h6 class="mb-0">Test2</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                                            <i class='bx bx-search-alt-2'></i>
                                          </button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">

                                      <div class="avatar flex-shrink-0 me-3">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-25"><i class="bx bx-file text-primary"></i></span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <small class="text-muted d-block mb-1">Ricette</small>
                                          <h6 class="mb-0">Test3</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                                            <i class='bx bx-search-alt-2'></i>
                                          </button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">

                                      <div class="avatar flex-shrink-0 me-3">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-25"><i class="bx bx-file text-primary"></i></span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <small class="text-muted d-block mb-1">Ricette</small>
                                          <h6 class="mb-0">Test4</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                                            <i class='bx bx-search-alt-2'></i>
                                          </button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">

                                      <div class="avatar flex-shrink-0 me-3">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-25"><i class="bx bx-file text-primary"></i></span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <small class="text-muted d-block mb-1">Ricette</small>
                                          <h6 class="mb-0">Test2</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                                            <i class='bx bx-search-alt-2'></i>
                                          </button>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                          </div>
                        
                          <!-- / Ricette -->


                          <!-- Modal -->
                        <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameExLarge" class="form-label">Name</label>
                                    <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailExLarge" class="form-label">Email</label>
                                    <input type="text" id="emailExLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobExLarge" class="form-label">DOB</label>
                                    <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Modal -->

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
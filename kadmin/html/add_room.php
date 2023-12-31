<?php
    ob_start();
    session_start();
    if (!isset($_SESSION['isAdmin']) || ($_SESSION['isAdmin']!=1)) {
        header('Location: ../../login.php');
    }
    require('db.php');
    ?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Room Finder Add Room</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php require 'menu.php' ?>
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
                <?php require 'user_profile.php' ?>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <form class="form" action="add.php" method="post">
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <center><h4 class="fw-bold py-3 mb-4">Add Rooms</h4></center>
              <div class="row">
                <!-- Basic -->
                <center><div class="col-md-6">
                  <div class="card mb-4">
                    <!-- <h5 class="card-header">Basic</h5> -->
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Title</span>
                        <input
                          type="text"
                          class="form-control"
                          name="title"
                          required
                          placeholder="Room Title"
                          aria-label="Title"
                          aria-describedby="basic-addon11"
                        />
                      </div>
                      <div class="input-group">
                        <!-- <input type="text" name="type"> -->
                        <label class="input-group-text" for="inputGroupSelect01">Type</label>
                        <select class="form-select" id="inputGroupSelect01" name="type" required>
                          <option selected>Choose...</option>
                          <option value="1">Single</option>
                          <option value="2">Double</option>
                          <option value="3">Family</option>
                        </select>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">Price</span>
                        <input
                          type="text"
                          class="form-control"
                          name="price"
                          placeholder="Amount"
                          aria-label="Amount (to the nearest dollar)"
                        />
                        <span class="input-group-text">.00</span>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">Location</span>
                        <!-- <input type="text" name="location"> -->
                        <textarea Type="text" class="form-control" aria-label="With textarea" placeholder="Room Location" name="location" required></textarea>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">Search Keywords</span>
                        <!-- <input type="text" name="keywords"> -->
                        <textarea Type="text" name="keywords" required class="form-control" aria-label="With textarea" placeholder="Keywords"></textarea>
                      </div>
                      <!-- <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Add Room Photo</label>
                      </div> -->
                    </div>
                    <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    <!-- <td>
                      <input type="submit" name="submit">
                      <a href="#" class="btn btn-primary">Add</a>
                    </td> -->
                  </div>
                </div></center>
              </form>
            <!-- / Content -->

            <!-- Footer -->
            <?php require 'dash_footer.php' ?>
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
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

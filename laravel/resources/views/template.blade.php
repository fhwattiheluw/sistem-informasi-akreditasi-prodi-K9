<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Sistem informasi laporan evaluasi diri</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/assets/vendors/jquery-bar-rating/css-stars.css" />
  <link rel="stylesheet" href="/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="/assets/css/demo_1/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjEweNHo97nHl3B-gQnvmWrzEbDPVPRu4HtHVe9okR-DUVS7Sfj3kfI3w4esGZp9VGsYcoUu2COT1Khu-OvQQfKjJ6-SuykTXR4j8_mIae3zHkS-5XzGZUs-pKF4tM1c9S6q_t3dpFVnah24b5b_0n9p4E8IXcTQCyFLpygD_fMCDC6cId6rf_qOqFE/s320/GKL16_Logo%20IAIN%20Ambon%20-%20Koleksilogo.com.jpg" />
  @yield('css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
          <a href="#" class="nav-link flex-column">
            <div class="nav-profile-image">
              <img src="/assets/images/faces/face1.jpg" alt="profile" />
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
              <span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span>
              <span class="text-secondary icon-sm text-center">Fakultas</span>
            </div>
          </a>
        </li>
        <li class="nav-item pt-3">
          <a class="nav-link d-block" href="index.html">
            <!-- <img class="sidebar-brand-logo" src="/assets/images/logo.svg" alt="" /> -->
            <!-- <img class="sidebar-brand-logomini" src="/assets/images/logo-mini.svg" alt="" /> -->
            <h3 class="sidebar-brand-logo">AkreSmart</h3>
            <div class="small font-weight-light pt-1">LAMDIK	Versi 1.0	20220313</div>
          </a>
          <form class="d-flex align-items-center" action="#">
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control border-0" placeholder="Search" />
            </div>
          </form>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head">Menu</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">
            <i class="mdi mdi-compass-outline menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li  class="nav-item">
          <a class="nav-link" href="/dataprodi">
            <i class="mdi mdi-book-open menu-icon"></i>
            <span class="menu-title">Data Program Studi</span>
          </a>
        </li>
        <li  class="nav-item">
          <a class="nav-link" href="/datakeuangan">
            <i class="mdi mdi-book-open menu-icon"></i>
            <span class="menu-title">Keuangan</span>
          </a>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head">DATA KUANTITATIF LED</span>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/kriteria2">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.2 Tata Pamong, Tata Kelola, dan Kerjasama</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria3">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.3 Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria4">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.4 Sumber Daya Manusia</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria5">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.5 Keuangan, Sarana, dan Prasarana</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria6">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.6 Pendidikan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria7">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.7 Penelitian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria8">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.8 Pengabdian kepada Masyarakat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kriteria9">
            <i class="mdi mdi-table-edit menu-icon"></i>
            <span class="menu-title">K.9 Luaran dan Capaian Tridharma</span>
          </a>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head">Menu akun</span>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/akun/index">
            <i class="mdi mdi-account-multiple menu-icon"></i>
            <span class="menu-title">Akun Pengguna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/akun/show">
            <i class="mdi mdi-account-card-details menu-icon"></i>
            <span class="menu-title">Info Akun</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
          </button>
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link"href="#" data-toggle="dropdown" aria-expanded="false">
                IAIN AMBON
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-logout d-none d-md-block mr-3">
              <a class="nav-link" href="#">logout</a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        @yield('content-wrapper')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>

          <div>
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By: <a href="https://themewagon.com/" target="_blank">Themewagon</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="/assets/vendors/flot/jquery.flot.js"></script>
  <script src="/assets/vendors/flot/jquery.flot.resize.js"></script>
  <script src="/assets/vendors/flot/jquery.flot.categories.js"></script>
  <script src="/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
  <script src="/assets/vendors/flot/jquery.flot.stack.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/assets/js/off-canvas.js"></script>
  <script src="/assets/js/hoverable-collapse.js"></script>
  <script src="/assets/js/misc.js"></script>
  <script src="/assets/js/settings.js"></script>
  <script src="/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>
</html>

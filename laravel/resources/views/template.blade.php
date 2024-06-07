<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AkreSmart</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style media="screen">
    .table thead th {
      font-weight: bold;
       text-transform: capitalize;
    }

    button, h1,h2,h3,h4 {
       text-transform: capitalize;
    }

    select.form-control {
      color: black;
    }

        .table thead th, .table tbody td, .table tfoot th {
    font-size: small;
}

.table th, .table td {
    padding: 5px;
    text-align: center;
}

  </style>
  @yield('css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

    @include('sidebar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('header')
      <!-- partial -->
      <div class="main-panel">
        @yield('content-wrapper')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('footer')
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

    @yield('js')
</body>
</html>

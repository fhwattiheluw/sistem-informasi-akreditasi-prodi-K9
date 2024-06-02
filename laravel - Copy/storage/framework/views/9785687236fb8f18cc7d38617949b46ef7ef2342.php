

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Akun</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Akun Pengguna</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Akun pengguna</h5>
          <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Username</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 0; $i < 10; $i++): ?>
              <tr>
                <td>nama {$i}</td>
                <td>NIDN {$i}</td>
                <td>username {$i}</td>
                <td>level {$i}</td>
                <td>
<button type="button" class="btn btn-outline-primary btn-sm"> <i class="mdi mdi-tooltip-edit"></i> </button>
<button type="button" class="btn btn-outline-danger btn-sm"> <i class="mdi mdi-delete"></i> </button>
                </td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- last row starts here -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/akun/manag_akun.blade.php ENDPATH**/ ?>
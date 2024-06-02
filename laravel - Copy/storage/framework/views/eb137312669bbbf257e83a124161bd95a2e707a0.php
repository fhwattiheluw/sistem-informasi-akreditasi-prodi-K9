

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria8/pelibatan_mahasiswa_dalam_pkm">
  <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
</a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.8 Pengabdian kepada Masyarakat</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            <?php if(Request::segment(3) === 'create'): ?>
            Tambah data
            <?php elseif(Request::segment(3) === 'edit'): ?>
            Edit data
            <?php endif; ?>

            Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam PkM
          </h4>

            <p class="card-description">Pengabdian kepada Masyarakat</p>
            <hr>
            <form action="#" method="post">
              <?php echo csrf_field(); ?>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th rowspan="2">Tahun Akademik</th>
                      <th rowspan="2">Judul PkM</th>
                      <th rowspan="2">Nama Ketua Tim</th>
                      <th rowspan="2">Kepakaran Ketua Tim*</th>
                      <th rowspan="2">Nama dan Identitas Dosen Anggota PkM</th>
                      <th rowspan="2">Nama dan Identitas Mahasiswa yang dilibatkan</th>
                      <th rowspan="2">Bukti/Tautan</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini" autofocus></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                    <?php if(Request::segment(3) === 'create'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data</button>
                    <?php elseif(Request::segment(3) === 'edit'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Update data</button>
                    <?php endif; ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c8/pelibatan_mahasiswa_dalam_pkm/form.blade.php ENDPATH**/ ?>
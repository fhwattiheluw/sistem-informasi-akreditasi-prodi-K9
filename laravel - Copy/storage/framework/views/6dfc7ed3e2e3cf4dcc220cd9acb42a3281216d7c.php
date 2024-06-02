

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria8/pelibatan_mahasiswa_dalam_pkm/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
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
          <h5 class="card-title">Tabel Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam PkM</h5>
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
                  <th rowspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php for($i = 0; $i < 5; $i++): ?>
                <tr>
                  <td>Lorem ipsum.</td>
                  <td>Lorem ipsum.</td>
                  <td>Lorem ipsum.</td>
                  <td>Lorem ipsum.</td>
                  <td>Lorem ipsum.</td>
                  <td>Lorem ipsum.</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria8/pelibatan_mahasiswa_dalam_pkm/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c8/pelibatan_mahasiswa_dalam_pkm/index.blade.php ENDPATH**/ ?>
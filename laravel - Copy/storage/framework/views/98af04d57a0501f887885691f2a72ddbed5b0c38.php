

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.4 Sumber Daya Manusia</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS</h5>
          <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php endif; ?>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">Nama Lengkap Dosen Tetap</th>
                  <th rowspan="2">NIDN/NIDK</th>
                  <th rowspan="2">Tanggal Lahir</th>
                  <th rowspan="2">Sertifikat Pendidik</th>
                  <th rowspan="2">Jabatan Fungsional</th>
                  <th rowspan="2">Gelar Akademik</th>
                  <th rowspan="2">Pendidikan S1, S2, S3  dan Asal PT </th>
                  <th rowspan="2">Bidang Keahlian Setiap Jenjang Pendidikan</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->nama); ?></td>
                  <td><?php echo e($item->nidn_nidk); ?></td>
                  <td><?php echo e($item->tanggal_lahir); ?></td>
                  <td><?php echo e($item->sertifikat_pendidik); ?></td>
                  <td><?php echo e($item->jabatan_fungsional); ?></td>
                  <td><?php echo e($item->pendidikan); ?></td>
                  <td><?php echo e($item->bidang_keahlian); ?></td>
                  <td><?php echo e($item->tautan); ?></td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps/index.blade.php ENDPATH**/ ?>
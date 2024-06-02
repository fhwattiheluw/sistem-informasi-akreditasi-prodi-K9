

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria2/bidang_pendidikan/create/bidang pendidikan">
<button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>

    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">C.2 Tata Pamong, Tata Kelola, dan Kerjasama</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Kerja Sama - Bidang Pendidikan</h5>
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
                  <th rowspan="2">No.</th>
                  <th rowspan="2">Nama Lembaga Mitra</th>
                  <th colspan="3">Tingkat</th>
                  <th rowspan="2">Judul dan Ruang Lingkup Kerjasama</th>
                  <th rowspan="2">Manfaat/Output</th>
                  <th rowspan="2">Durasi</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>Internasional</th>
                  <th>Nasional</th>
                  <th>Lokal</th>
                </tr>
              </thead>
              <tbody class="text-justify">
                <?php $n = 1 ?>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($n++); ?></td>
                  <td><?php echo e($item->nama_mitra); ?></td>
                  <td> <?php if($item->tingkat == "Internasional"): ?> <b>X</b> <?php endif; ?> </td>
                  <td> <?php if($item->tingkat == "Nasional"): ?> <b>X</b> <?php endif; ?> </td>
                  <td> <?php if($item->tingkat == "Lokal"): ?> <b>X</b> <?php endif; ?> </td>
                  <td><?php echo e($item->judul_ruang_lingkup); ?></td>
                  <td><?php echo e($item->manfaat_output); ?></td>
                  <td><?php echo e($item->durasi); ?></td>
                  <td><?php echo e($item->tautan); ?></td>
                  <td>
                    <a href="#">
                      <a href="#">
                      <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                    </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria2/bidang_pendidikan/<?php echo e($item->id); ?>/edit/bidang pendidikan">
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                  </a>
                    <a type="button" href="/kriteria2/bidang_pendidikan/<?php echo e($item->id); ?>/delete/" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">Jumlah</th>
                  <th><?php echo e($jum_inter); ?></th>
                  <th><?php echo e($jum_nasional); ?></th>
                  <th><?php echo e($jum_lokal); ?></th>
                </tr>
              </tfoot>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c2/bidang_pendidikan/index.blade.php ENDPATH**/ ?>
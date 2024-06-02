

<?php $__env->startSection('css'); ?>
<style media="screen">
.table td {
  padding: 1px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/datakeuangan/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">data keuangan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Keuangan</h4>
        
          <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        </p>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead style="text-align: center;" class="table-info">
              <tr>
                <th style="font-weight: bold;" rowspan="2">Tahun akademik</th>
                <th style="font-weight: bold;" colspan="5">Jenis dana</th>
                <th style="font-weight: bold;" rowspan="2">Bukti/Tautan</th>
                <th style="font-weight: bold;" rowspan="2">Aksi</th>
              </tr>
              <tr>
                <th style="font-weight: bold;">Pendidikan/mahasiswa/tahun</th>
                <th style="font-weight: bold;">Penelitian/dosen/tahun</th>
                <th style="font-weight: bold;">PkM/dosen/tahun</th>
                <th style="font-weight: bold;">Publikasi/dosen/tahun</th>
                <th style="font-weight: bold;">Investasi/tahun</th>
              </tr>
            </thead>
            <tbody style="text-align: center;">
              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                <td style="font-weight: bold;"><?php echo e($item->tahun); ?></td>
                <td><?php echo e($item->pendidikan_per_mahasiswa); ?></td>
                <td><?php echo e($item->penelitian_per_dosen); ?></td>
                <td><?php echo e($item->pkm_per_dosen); ?></a></td>
                <td><?php echo e($item->publikasi_per_dosen); ?></td>
                <td><?php echo e(number_format($item->investasi, 2)); ?></td>
                <td><a href="<?php echo e($item->tautan); ?>">Lihat</a></td>
                <td>
                <a href="/datakeuangan/<?php echo e($item->id); ?>/edit">
                  <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                </a>
                  <a type="button" href="<?php echo e(route('datakeuangan.delete', ['id' => $item->id])); ?>" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/dataKeuangan/index.blade.php ENDPATH**/ ?>
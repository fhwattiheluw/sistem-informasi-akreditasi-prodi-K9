

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria3/program_layanan/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.3 Mahasiswa</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Program layanan dan pembinaan minat, bakat, penalaran, kesejahteraan, dan keprofesian mahasiswa</h5>
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
                  <th >Tahun Akademik</th>
                  <th >Minat</th>
                  <th >Bakat</th>
                  <th >Penalaran</th>
                  <th >Kesejahteraan</th>
                  <th >Keprofesian</th>
                  <th >Bukti/Tautan</th>
                  <th >Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->tahun_akademik); ?></td>
                  <td><?php echo e($item->minat); ?></td>
                  <td><?php echo e($item->bakat); ?></td>
                  <td><?php echo e($item->penalaran); ?></td>
                  <td><?php echo e($item->kesejahteraan); ?></td>
                  <td><?php echo e($item->keprofesian); ?></td>
                  <td>
                    <a href="<?php echo e($item->tautan); ?>">
                      <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                    </a>
                  </td>
                  <td>
                    <a href="/kriteria3/program_layanan/<?php echo e($item->id); ?>/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria3/program_layanan/<?php echo e($item->id); ?>/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot  class="text-center">
                <tr>
                  <th>Jumlah</th>
                  <th><?php echo e($total[0]); ?></th>
                  <th><?php echo e($total[1]); ?></th>
                  <th><?php echo e($total[2]); ?></th>
                  <th><?php echo e($total[3]); ?></th>
                  <th><?php echo e($total[4]); ?></th>
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c3/program_layanan/index.blade.php ENDPATH**/ ?>
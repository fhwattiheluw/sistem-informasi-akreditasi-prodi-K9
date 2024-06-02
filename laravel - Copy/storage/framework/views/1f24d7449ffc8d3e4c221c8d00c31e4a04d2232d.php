

<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria3/mahasiswa_dalam_negeri">
  <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
</a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
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
          <h4 class="card-title">
            <?php if(Request::segment(3) === 'create'): ?>
            Tambah data
            <?php elseif(Request::segment(3) === 'edit'): ?>
            Edit data
            <?php endif; ?>

            Mahasiswa Reguler Dalam Negeri
          </h4>

            <p class="card-description">Mahasiswa</p>
            <?php if($errors->any()): ?>
              <div>
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li style="color: red;"><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </div>
            <?php endif; ?>
            <hr>
            <form 
            action="<?php echo e(isset($item->id) ?  route('mahasiswa_dalam_negeri.update', ['id' => Crypt::encryptString($item->id)])  : route('mahasiswa_dalam_negeri.store')); ?>"
            method="post">
              <?php if(isset($item->id)): ?>
                <?php echo method_field('PUT'); ?>
              <?php endif; ?>
              <?php echo csrf_field(); ?>

              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th rowspan="2">Tahun Akademik</th>
                      <th rowspan="2">Jumlah Provinsi</th>
                      <th colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                      <th rowspan="2">Jumlah Total Mahasiswa Reguler</th>
                      <th rowspan="2">Bukti/Tautan</th>
                    </tr>
                    <tr>
                      <th>Laki-laki</th>
                      <th>Perempuan</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><input type="text" class="form-control" name="tahun_akademik" value="<?php echo e(isset($item->tahun_akademik) ? $item->tahun_akademik : old('tahun_akademik')); ?>" placeholder="ketik disini" autofocus>                      </td>
                      <td><input type="text" class="form-control" name="jumlah_provinsi" value="<?php echo e(isset($item->jumlah_provinsi) ? $item->jumlah_provinsi : old('jumlah_provinsi')); ?>" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="laki_laki" value="<?php echo e(isset($item->laki_laki) ? $item->laki_laki : old('laki_laki')); ?>" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="perempuan" value="<?php echo e(isset($item->perempuan) ? $item->perempuan : old('perempuan')); ?>" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="total_mahasiswa" value="<?php echo e(isset($item->total_mahasiswa) ? $item->total_mahasiswa : old('total_mahasiswa')); ?>" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="tautan" value="<?php echo e(isset($item->tautan) ? $item->tahun_akademik : old('tautan')); ?>" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                    <?php if(Request::segment(3) === 'create'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data Calon Mahasiswa Dalam negeri </button>
                    <?php elseif(Request::segment(4) === 'edit'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Update data Calon Mahasiswa Dalam negeri </button>
                    <?php endif; ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c3/mhs_dalam_negeri/form.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button> -->
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
          <h4 class="card-title">
            <?php if(Request::segment(3) == 'create'): ?>
            Tambah data
            <?php elseif(Request::segment(4) == 'edit'): ?>
            Edit data
            <?php endif; ?>
            <?php echo e($bidang); ?></h4>

            <p class="card-description">Data Kerja Sama </p>
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
            <form class="card" 
              <?php if($bidang == "bidang%20pendidikan"): ?>
                action="<?php echo e(isset($item->id) ?  route('bidang_pendidikan.update', ['id' => Crypt::encryptString($item->id)])  : route('bidang_pendidikan.store')); ?>" 
              <?php elseif($bidang == "bidang%20penelitian"): ?>
                action="<?php echo e(isset($item->id) ?  route('bidang_penelitian.update', ['id' => Crypt::encryptString($item->id)])  : route('bidang_penelitian.store')); ?>" 
              <?php elseif($bidang == "bidang%20pkm"): ?>
                action="<?php echo e(isset($item->id) ?  route('bidang_pkm.update', ['id' => Crypt::encryptString($item->id)])  : route('bidang_pkm.store')); ?>" 
              <?php elseif($bidang == "Bidang%20Pengembangan%20Kelembagaan"): ?>
                action="<?php echo e(isset($item->id) ?  route('bidang_pengembangan_kelembagaan.update', ['id' => Crypt::encryptString($item->id)])  : route('bidang_pengembangan_kelembagaan.store')); ?>" 
              
              <?php endif; ?>
            method="post">
              <?php if(isset($item->id)): ?>
              <?php echo method_field('PUT'); ?>
              <?php endif; ?>

              <?php echo csrf_field(); ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lembaga Mitra</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_mitra" class="form-control" placeholder="Isi Nama Lembaga Mitra"
                  value="<?php echo e(isset($item->id) ? $item->nama_mitra : old('nama_mitra')); ?>" 
                  autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tingkat</label>
                <div class="col-sm-9 row">
                  <div class="col">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="tingkat" 
                        <?php if(isset($item->id) && $item->tingkat == "Internasional"): ?> checked <?php endif; ?>
                        value="Internasional">Internasional<i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="tingkat" 
                          <?php if(isset($item->id) && $item->tingkat == "Nasional"): ?> checked <?php endif; ?>
                          value="Nasional">Nasional<i class="input-helper"></i></label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="tingkat" 
                            <?php if(isset($item->id) && $item->tingkat == "Lokal"): ?> checked <?php endif; ?>
                             value="Lokal">Lokal<i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Judul dan Ruang Lingkup Kerjasama</label>
                      <div class="col-sm-9">
                        <input type="text" name="judul_ruang_lingkup" class="form-control" 
                        value="<?php echo e(isset($item->id) ? $item->judul_ruang_lingkup : old('judul_ruang_lingkup')); ?>"
                        placeholder="Isi Judul dan Ruang Lingkup Kerjasama">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Manfaat/Output</label>
                      <div class="col-sm-9">
                        <input type="text" name="manfaat_output" class="form-control" 
                        value="<?php echo e(isset($item->id) ? $item->manfaat_output : old('manfaat_output')); ?>"
                         placeholder="Isi Manfaat/Output">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Durasi</label>
                      <div class="col-sm-9">
                        <input type="number" name="durasi" class="form-control" value="<?php echo e(isset($item->id) ? $item->durasi : old('durasi')); ?>" placeholder="Isi Durasi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Bukti/Tautan</label>
                      <div class="col-sm-9">
                        <input type="url" name="tautan" class="form-control" value="<?php echo e(isset($item->id) ? $item->tautan : old('tautan')); ?>" placeholder="Isi Bukti/Tautan">
                      </div>
                    </div>

                    <?php if(Request::segment(3) === 'create'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data <?php echo e($bidang); ?> </button>
                    <?php elseif(Request::segment(4) === 'edit'): ?>
                    <button type="submit" class="btn btn-primary mr-2"> Update data <?php echo e($bidang); ?>  </button>
                    <?php endif; ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/c2/form.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content-wrapper'); ?>
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- <button  type="button" class="btn btn-primary mb-2 mb-md-0 mr-2 ">Ubah data program studi </button> -->
      <!-- <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button> -->
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Data Keuangan</p>
        </a>
      </div>
      <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
      <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">

        <form class="card" action="<?php echo e(isset($item->id) ?  route('datakeuangan.update', ['id' => Crypt::encryptString($item->id)])  : route('datakeuangan.store')); ?>" method="post">
          <?php if(isset($item->id)): ?>
          <?php echo method_field('PUT'); ?>
          <?php endif; ?>


        <div class="card-body">
          <h4 class="card-title">
            <?php if(Request::segment(2) === 'create'): ?>
            Tambah data
            <?php elseif(Request::segment(2) === 'edit'): ?>
            Edit data
            <?php endif; ?>
            - Kuantitatif Di Unit Pengelola Program Studi (UPPS) - Keuangan</h4>
          <!-- <p class="card-description"> Add class <code>.table</code> -->
          <?php echo csrf_field(); ?>

          <?php if($errors->any()): ?>
            <div>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="color: red;"><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          <?php endif; ?>

        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr >
                <th style="font-weight:bold">Item</th>
                <th style="font-weight:bold">Data</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="font-weight:bold">Tahun akademik</td>
                <td >
                  <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun akademik" <?php if(isset($item->id)): ?> value="<?php echo e($item->tahun); ?>" <?php else: ?> value="<?php echo e(old('tahun')); ?>" <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Pendidikan/mahasiswa/tahun</td>
                <td>
                  <input type="number" class="form-control" name="pendidikan_per_mahasiswa" id="" placeholder="Pendidikan/mahasiswa/tahun" <?php if(isset($item->id)): ?> value="<?php echo e($item->pendidikan_per_mahasiswa); ?>" <?php else: ?> value="<?php echo e(old('pendidikan_per_mahasiswa')); ?>"  <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Penelitian/dosen/tahun</td>
                <td>
                  <input type="number" class="form-control" name="penelitian_per_dosen" id="" placeholder="Ketik Penelitian/dosen/tahun" <?php if(isset($item->id)): ?> value="<?php echo e($item->penelitian_per_dosen); ?>" <?php else: ?> value="<?php echo e(old('penelitian_per_dosen')); ?>"  <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">PKM/dosen/tahun</td>
                <td>
                  <input type="number" class="form-control" name="pkm_per_dosen" id="" placeholder="Ketik PKM/dosen/tahun" <?php if(isset($item->id)): ?> value="<?php echo e($item->pkm_per_dosen); ?>" <?php else: ?> value="<?php echo e(old('pkm_per_dosen')); ?>"  <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Publikasi/dosen/tahun</td>
                <td>
                  <input type="number" class="form-control" name="publikasi_per_dosen" id="" placeholder="Ketik Publikasi/dosen/tahun" <?php if(isset($item->id)): ?> value="<?php echo e($item->publikasi_per_dosen); ?>" <?php else: ?> value="<?php echo e(old('pkm_per_dosen')); ?>" <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Investasi/tahun</td>
                <td>
                  <input type="text" class="form-control" id="rupiahAmount" name="investasi" placeholder="Masukkan jumlah investasi" oninput="formatRupiah(this)"  <?php if(isset($item->id)): ?> value="<?php echo e(number_format($item->investasi)); ?>" <?php else: ?> value="<?php echo e(old('investasi')); ?>" <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Bukti/Tautan</td>
                <td>
                  <input type="text" class="form-control" name="tautan" id="" placeholder="Belum di isi" <?php if(isset($item->id)): ?> value="<?php echo e($item->tautan); ?>" <?php else: ?> value="<?php echo e(old('tautan')); ?>" <?php endif; ?>>
                </td>
              </tr>
              <tr>
                <td >
                  <button type="submit" class="btn btn-primary mr-2"> Submit</button>
                </td>
                <td>
                  <a href="/datakeuangan" class="btn btn-light">
                    Cancel
                  </a>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- last row starts here -->

</div>

<script>
    function formatRupiah(input) {
        // Hapus karakter selain angka
        var value = input.value.replace(/\D/g, '');

        // Tambahkan titik sebagai pemisah ribuan
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Tampilkan hasil format di dalam input
        input.value = value;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/dataKeuangan/form.blade.php ENDPATH**/ ?>
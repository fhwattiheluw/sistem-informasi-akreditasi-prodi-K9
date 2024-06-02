

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
          <p class="m-0">Data program studi</p>
        </a>
      </div>
      <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
      <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <form class="card" action="<?php echo e(route('dataprodi.update', ['id' => Crypt::encryptString($item->id)])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="card-body">
          <h4 class="card-title">Data Program Studi</h4>
          <!-- <p class="card-description"> Add class <code>.table</code> -->
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
            <tbody>
              <tr>
                <td style="font-weight:bold">Jenis program</td>
                <td>
                  <div class="form-group row" style="margin: 0px; padding:0px;">
                    <div class="col">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="jenis" id="jenis" value="S1" <?php if($item->jenis == 'S1'): ?> checked <?php endif; ?> > Sarjana <i class="input-helper"></i></label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis" id="jenis" value="S2" <?php if($item->jenis == 'S2'): ?> checked <?php endif; ?>> Magister <i class="input-helper"></i></label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="jenis" id="jenis" value="S3" <?php if($item->jenis == 'S3'): ?> checked <?php endif; ?>> Doktor <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="font-weight:bold">Nama program studi</td>
                      <td>
                        <input type="text" name="nama" class="form-control" id="exampleInputUsername1" placeholder="Ketik Nama program studi" value="<?php echo e($item->nama); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td style="font-weight:bold">Status/Peringkat</td>
                      <td>
                        <div class="form-group row" style="margin: 0px; padding:0px;">
                          <div class="col">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="C" <?php if($item->status_peringkat == 'C'): ?> checked <?php endif; ?>> C <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="B" <?php if($item->status_peringkat == 'B'): ?> checked <?php endif; ?>> B <i class="input-helper"></i></label>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="A" <?php if($item->status_peringkat == 'A'): ?> checked <?php endif; ?>> A <i class="input-helper"></i></label>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="BAIK" <?php if($item->status_peringkat == 'BAIK'): ?> checked <?php endif; ?>> BAIK <i class="input-helper"></i></label>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="BAIK_SEKALI" <?php if($item->status_peringkat == 'BAIK_SEKALI'): ?> checked <?php endif; ?>> BAIK SEKALI <i class="input-helper"></i></label>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="status_peringkat" id="status_peringkat" value="UNGGUL" <?php if($item->status_peringkat == 'UNGGUL'): ?> checked <?php endif; ?>> UNGGUL <i class="input-helper"></i></label>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Nomor SK</td>
                                  <td><input type="text" name="nomor_sk" class="form-control" id="exampleInputUsername1" placeholder="Ketik Nomor SK" value="<?php echo e($item->nomor_sk); ?>"></td>
                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Tanggal SK</td>
                                  <td><input type="text" name="tanggal_sk" class="form-control" id="exampleInputUsername1" placeholder="Ketik Ketik Tanggal SK" value="<?php echo e($item->tanggal_sk); ?>"></td>
                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Tgl. Kadaluarsa</td>
                                  <td><input type="text" name="tanggal_kadaluarsa" class="form-control" id="exampleInputUsername1" placeholder="Ketik Tanggal Kadaluarsa" value="<?php echo e($item->tanggal_kadaluarsa); ?>"></td>
                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Jumlah Mahasiswa saat TS</td>
                                  <td><input type="text" name="jumlah_mhs_ts" class="form-control" id="exampleInputUsername1" placeholder="Ketik Jumlah Mahasiswa saat TS" value="<?php echo e($item->jumlah_mhs_ts); ?>"></td>
                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Jumlah DTPS saat TS</td>
                                  <td><input type="text" name="jumlah_dtps_ts" class="form-control" id="exampleInputUsername1" placeholder="Ketik Jumlah DTPS saat TS" value="<?php echo e($item->jumlah_dtps_ts); ?>"></td>

                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Rerata IPK</td>
                                  <td><input type="text" name="rerata_ipk" class="form-control" id="exampleInputUsername1" placeholder="Ketik Rerata IPK" value="<?php echo e($item->rerata_ipk); ?>"></td>

                                </tr>
                                <tr>
                                  <td style="font-weight:bold">Rerata masa studi</td>
                                  <td><input type="text" name="rerata_masa_studi" class="form-control" id="exampleInputUsername1" placeholder="Ketik Rerata masa studi" value="<?php echo e($item->rerata_masa_studi); ?>"></td>
                                </tr>
                                <tr>
                                  <td >
                                    <button type="submit" class="btn btn-primary mr-2"> Perbaharui </button>
                                  </td>
                                  <td>
                                    <a href="/dataprodi" class="btn btn-light">
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
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravelProject\sistem-informasi-akreditasi-prodi-K9\laravel\resources\views/kriteria/dataprodi/form.blade.php ENDPATH**/ ?>
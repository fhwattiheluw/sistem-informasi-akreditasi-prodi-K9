@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria5/prasarana_pendidikan">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.5 Keuangan, Sarana, dan Prasarana</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">

    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="#" method="post">
        @csrf
        <div class="card-body">
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Edit data
            @endif

            Dana PkM
          </h4>

          <p class="card-description">K.5 Tabel Data Prasarana Pendidikan</p>
          <hr>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jenis Prasarana</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Unit</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketik disini">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kepemilikan*</label>
            <div class="col-sm-9">
              <select class="form-control" name="">
                <option value="">--Pilih--</option>
                <option value="">SD (Milik sendiri)</option>
                <option value="">SW (Sewa/Kontrak/Kerjasama)</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kondisi</label>
            <div class="col-sm-9">
              <select class="form-control" name="">
                <option value="">--Pilih--</option>
                <option value="">Terawat</option>
                <option value="">Tidak Terawat</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Penggunaan (Jam/minggu)</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
        </div>

        <div class="card-footer">
          <button class="btn btn-primary" type="submit" name="button">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Update data
            @endif
          </button>
        </div>
      </form>
    </div>

  </div>
  <!-- last row starts here -->

</div>
@endsection

@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria5/dana_pkm">
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

          <p class="card-description">K.5 Investsi sarana pendidikan</p>
          <hr>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Judul PkM</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">ketua Tim</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketik disini">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Sumber dan Jenis Dana</label>
            <div class="col-sm-9">
              <select class="form-control" name="">
                <option value="">Pilih</option>
                <option value="">PT/Mandiri</option>
                <option value="">Lembaga DN (diluar PT)</option>
                <option value="">Lembaga LN</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tahun Akademik</label>
            <div class="col-sm-9">
              <select class="form-control" name="">
                @for($i = 0; $i < 4; $i++)
                <option value="">{{date('Y') - $i}}</option>
                @endfor
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Dana (Dalam Jutaan)</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Bukti/Tautan</label>
            <div class="col-sm-9">
              <input type="url" class="form-control" placeholder="Ketik disini">
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

@extends('template')

@section('content-wrapper')
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
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Edit data
            @endif
            {{$bidang}}</h4>

            <p class="card-description">Data Kerja Sama </p>
            <hr>
            <form action="#" method="post">
              @csrf
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lembaga Mitra</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="Isi Nama Lembaga Mitra" autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tingkat</label>
                <div class="col-sm-9 row">
                  <div class="col">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="tingkat"  value="Internasional">Internasional<i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="tingkat"  value="Nasional">Nasional<i class="input-helper"></i></label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="tingkat"  value="Lokal">Lokal<i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Judul dan Ruang Lingkup Kerjasama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Isi Judul dan Ruang Lingkup Kerjasama">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Manfaat/Output</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Isi Manfaat/Output">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Durasi</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Isi Durasi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Bukti/Tautan</label>
                      <div class="col-sm-9">
                        <input type="url" class="form-control" placeholder="Isi Bukti/Tautan">
                      </div>
                    </div>

                    @if (Request::segment(3) === 'create')
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data {{$bidang}} </button>
                    @elseif (Request::segment(3) === 'edit')
                    <button type="submit" class="btn btn-primary mr-2"> Update data {{$bidang}}  </button>
                    @endif

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        @endsection

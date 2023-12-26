@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria3/mahasiswa_reguler">
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
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Edit data
            @endif

            Mahasiswa Reguler
          </h4>

            <p class="card-description">Data Kerja Sama </p>
            <hr>
            <form action="#" method="post">
              @csrf
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="text-center">
                    <tr>
                      <th  style="font-weight:bold;" rowspan="2">Tahun Akademik</th>
                      <th style="font-weight:bold;" rowspan="2">Daya Tampung</th>
                      <th style="font-weight:bold;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                      <th style="font-weight:bold;" rowspan="2">Jumlah Mahasiswa Baru Reguler</th>
                      <th style="font-weight:bold;" rowspan="2">Jumlah Total Mahasiswa Reguler</th>
                      <th style="font-weight:bold;" rowspan="2">Bukti/Tautan</th>
                    </tr>
                    <tr>
                      <th style="font-weight:bold;">Pendaftar</th>
                      <th style="font-weight:bold;">Lulus Seleksi</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini" autofocus>                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                    @if (Request::segment(3) === 'create')
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data Mahasiswa Reguler </button>
                    @elseif (Request::segment(3) === 'edit')
                    <button type="submit" class="btn btn-primary mr-2"> Update data Mahasiswa Reguler  </button>
                    @endif

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        @endsection

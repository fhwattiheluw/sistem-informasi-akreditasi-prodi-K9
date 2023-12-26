@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria3/program_layanan">
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

            Program Layanan Dan Pembinaan Minat, Bakat, Penalaran, Kesejahteraan, Dan Keprofesian Mahasiswa
          </h4>

            <p class="card-description">Data Kerja Sama </p>
            <hr>
            <form action="#" method="post">
              @csrf
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="text-center">
                    <tr>
                      <th >Tahun Akademik</th>
                      <th >Jenis Program Layanan dan  Pembinaan Minat</th>
                      <th >Jenis Program Layanan dan Pembinaan Bakat</th>
                      <th >Jenis Program Layanan dan Pembinaan Penalaran</th>
                      <th >Jenis Program Layanan dan Pembinaan Kesejahteraan</th>
                      <th >Jenis Program Layanan dan Pembinaan Keprofesian</th>
                      <th >Bukti/Tautan</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini" autofocus>                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini" autofocus>                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                    @if (Request::segment(3) === 'create')
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data  </button>
                    @elseif (Request::segment(3) === 'edit')
                    <button type="submit" class="btn btn-primary mr-2"> Update data</button>
                    @endif

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        @endsection

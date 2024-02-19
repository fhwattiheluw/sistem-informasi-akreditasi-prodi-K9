@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria4/pengembangan_kompetensi_dtps">
  <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
</a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.4 Sumber Daya Manusia</p>
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
          Pengembangan Kompetensi DTPS
          </h4>

            <p class="card-description">K.4 Sumber Daya Manusia</p>
            <hr>
            <form action="#" method="post">
              @csrf
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody class="text-justify">

                    <tr>
                      <td >Tahun</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Nama Dosen</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Bidang Keahlian</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Nama Kegiatan</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Tempat Kegiatan</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Waktu Kegiatan</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Manfaat Kegiatan</td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>

                    </tr>

                    <tr>
                      <td >Bukti/Tautan</td>

                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                    @if (Request::segment(3) === 'create')
                    <button type="submit" class="btn btn-primary mr-2"> Tambah data</button>
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

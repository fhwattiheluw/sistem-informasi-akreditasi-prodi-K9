@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria4/prestasi_dtps">
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
 Prestasi DTPS
          </h4>

            <p class="card-description">K.4 Sumber Daya Manusia</p>
            <hr>
            <form action="#" method="post">
              @csrf
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th rowspan="2">Nama Lengkap Dosen Tetap</th>
                      <th rowspan="2">Prestasi yang Dicapai</th>
                      <th rowspan="2">Tahun Pencapaian</th>
                      <th colspan="3">Tingkat</th>
                      <th rowspan="2">Bukti/Tautan</th>
                    </tr>
                    <tr>
                      <th>Internasional</th>
                      <th>Nasional</th>
                      <th>Lokal</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><textarea class="form-control" name="name" rows="8" cols="80" autofocus placeholder="ketik disini"></textarea> </td>
                      <td><textarea class="form-control" name="name" rows="8" cols="80" autofocus placeholder="ketik disini"></textarea> </td>
                      <td><input type="text" class="form-control" name="" value="" placeholder="ketik disini"></td>
                      <td><div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""></label>
                            </div></td>
                            <td><div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""></label>
                                  </div></td>
                                  <td><div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""></label>
                                        </div></td>
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

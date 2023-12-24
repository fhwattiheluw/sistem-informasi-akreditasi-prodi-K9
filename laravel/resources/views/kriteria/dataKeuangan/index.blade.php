@extends('template')

@section('css')
<style media="screen">
.table td {
    padding: 1px;
}
</style>
@endsection

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">data keuangan</p>
        </a>
      </div>

      </div>
    </div>
    <!-- first row starts here -->
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Keuangan</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead style="text-align: center;" class="table-info">
                          <tr>
                            <th style="font-weight: bold;" rowspan="2">Tahun akademik</th>
                            <th style="font-weight: bold;" colspan="5">Jenis dana</th>
                            <th style="font-weight: bold;" rowspan="2">Aksi</th>
                          </tr>
                          <tr>
                            <th style="font-weight: bold;">Pendidikan/mahasiswa/tahun</th>
                            <th style="font-weight: bold;">Penelitian/dosen/tahun</th>
                            <th style="font-weight: bold;">PkM/dosen/tahun</th>
                            <th style="font-weight: bold;">Publikasi/dosen/tahun</th>
                            <th style="font-weight: bold;">Investasi/tahun</th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
                          @for ($i = 0; $i < 5; $i++)
                          <tr >
                            <td style="font-weight: bold;">2023</td>
                            <td><a href="#">2023</a></td>
                            <td><a href="#">2023</a></td>
                            <td><a href="#">2023</a></td>
                            <td><a href="#">2023</a></td>
                            <td><a href="#">2023</a></td>
                            <td>
                              <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                              <button type="button" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </button>
                            </td>
                          </tr>
                          @endfor
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    <!-- last row starts here -->

  </div>
  @endsection

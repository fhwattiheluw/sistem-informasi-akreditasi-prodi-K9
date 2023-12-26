@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria3/program_layanan/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
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
          <h5 class="card-title">Tabel Program layanan dan pembinaan minat, bakat, penalaran, kesejahteraan, dan keprofesian mahasiswa</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th >Tahun Akademik</th>
                  <th >Jenis Program Layanan dan  Pembinaan Minat</th>
                  <th >Jenis Program Layanan dan Pembinaan Bakat</th>
                  <th >Jenis Program Layanan dan Pembinaan Penalaran</th>
                  <th >Jenis Program Layanan dan Pembinaan Kesejahteraan</th>
                  <th >Jenis Program Layanan dan Pembinaan Keprofesian</th>
                  <th >Bukti/Tautan</th>
                  <th >Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @for($i = 0; $i < 5; $i++)
                <tr>
                  <td>x</td>
                  <td>x</td>
                  <td>x</td>
                  <td>x</td>
                  <td>x</td>
                  <td>x</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria3/program_layanan/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                @endfor
              </tbody>
              <tfoot  class="text-center">
                <tr>
                  <th>Jumlah</th>
                  <th>0</th>
                  <th>0</th>
                  <th>0</th>
                  <th>0</th>
                  <th>0</th>
                </tr>
              </tfoot>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
@endsection

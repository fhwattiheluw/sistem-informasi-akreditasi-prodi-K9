@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
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
          <h5 class="card-title">Tabel Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">No.</th>
                  <th rowspan="2">Nama Lengkap Dosen Tetap</th>
                  <th colspan="5">Jumlah Mahasiswa Bimbingan</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>TS-2</th>
                  <th>TS-1</th>
                  <th>TS</th>
                  <th>Jumlah</th>
                  <th>Rata-Rata/Tahun</th>
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
                  <td>x</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria4/jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

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

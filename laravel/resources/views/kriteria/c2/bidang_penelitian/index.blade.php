@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria2/bidang_penelitian/create/bidang penelitian">
<button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
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
          <h5 class="card-title">Data Kerja Sama - Bidang Penelitian</h5>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">No.</th>
                  <th rowspan="2">Nama Lembaga Mitra</th>
                  <th colspan="3">Tingkat</th>
                  <th rowspan="2">Judul dan Ruang Lingkup Kerjasama</th>
                  <th rowspan="2">Manfaat/Output</th>
                  <th rowspan="2">Durasi</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>Internasional</th>
                  <th>Nasional</th>
                  <th>Lokal</th>
                </tr>
              </thead>
              <tbody class="text-justify">
                @for($i = 0; $i < 5; $i++)
              <tr>
                <td>x</td>
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
                  <a href="/kriteria2/bidang_penelitian/edit/bidang penelitian">
                  <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                </a>
                  <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                </td>
              </tr>
              @endfor
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">Jumlah</th>
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

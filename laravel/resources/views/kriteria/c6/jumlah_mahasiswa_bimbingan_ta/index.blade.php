@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('jumlah_mahasiswa_bimbingan_ta.create')}}">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.6 Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan</h5>
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="3">No</th>
                  <th rowspan="3">Nama Dosen Pembimbing Tugas Akhir</th>
                  <th colspan="8">Banyaknya Mahasiswa Bimbingan</th>
                  <th rowspan="3">Rata-Rata Jumlah  Bimbingan di semua Program</th>
                  <th rowspan="3">Rata-Rata Banyaknya Pertemuan</th>
                  <th rowspan="3">Tautan</th>
                  <th rowspan="3">Aksi</th>
                </tr>
                <tr>
                  <th colspan="4">Di PS Sendiri</th>
                  <th colspan="4">Di PS Lain</th>
                </tr>
                <tr>
                  <th>TS-2</th>
                  <th>TS-1</th>
                  <th>TS</th>
                  <th>Rata-Rata</th>
                  <th>TS-2</th>
                  <th>TS-1</th>
                  <th>TS</th>
                  <th>Rata-Rata</th>
                </tr>
              </thead>

              <tbody style="overflow-y: auto;" class="text-center" >

                @for($i = 1; $i <= 2; $i++)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>lihat tautan</td>
                  <td>
                    <button type="button" class="btn btn-primary"> Edit </button>
                    <button type="button" class="btn btn-danger"> Hapus </button>
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


@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/kegiatan_mengajar_dosen_tetap/create">
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
          <h5 class="card-title">Tabel Bagian 1 - Kegiatan Mengajar Dosen Tetap Semester Gasal</h5>
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
                  <th rowspan="2">No.</th>
                  <th rowspan="2">Nama Lengkap</th>
                  <th rowspan="2">Jumlah Kelas</th>
                  <th rowspan="2">Jumlah sks</th>
                  <th rowspan="2">Kode  Mata Kuliah</th>
                  <th rowspan="2">Nama Mata Kuliah</th>
                  <th rowspan="2">Jumlah Pertemuan (Rencana)</th>
                  <th rowspan="2">Jumlah Pertemuan (Terlaksana)</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach($items as $item)
                @if($item->semester == "Gasal")
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->dosen->nama}}</td>
                  <td>{{$item->jumlah_kelas}}</td>
                  <td>{{$item->matakuliah->sks}}</td>
                  <td>{{$item->kode_mk}}</td>
                  <td>{{$item->matakuliah->nama}}</td>
                  <td>{{$item->jum_pertemuan_rencana}}</td>
                  <td>{{$item->jum_pertemuan_terlaksana}}</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria4/kegiatan_mengajar_dosen_tetap/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria4/kegiatan_mengajar_dosen_tetap/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

  <!-- Semester Genap -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Bagian 2 - Kegiatan Mengajar Dosen Tetap Semester Genap</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">No.</th>
                  <th rowspan="2">Nama Lengkap Dosen Tetap</th>
                  <th rowspan="2">Jumlah Kelas</th>
                  <th rowspan="2">Jumlah sks</th>
                  <th rowspan="2">Kode  Mata Kuliah</th>
                  <th rowspan="2">Nama Mata Kuliah</th>
                  <th rowspan="2">Jumlah Pertemuan yang Direncanakan</th>
                  <th rowspan="2">Jumlah Pertemuan yang Dilaksanakan</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach($items as $item)
                @if($item->semester == "Genap")
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->dosen->nama}}</td>
                  <td>{{$item->jumlah_kelas}}</td>
                  <td>{{$item->sks}}</td>
                  <td>{{$item->kode_mk}}</td>
                  <td>{{$item->nama_mk}}</td>
                  <td>{{$item->jum_pertemuan_rencana}}</td>
                  <td>{{$item->jum_pertemuan_terlaksana}}</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria4/kegiatan_mengajar_dosen_tetap/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria4/kegiatan_mengajar_dosen_tetap/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection

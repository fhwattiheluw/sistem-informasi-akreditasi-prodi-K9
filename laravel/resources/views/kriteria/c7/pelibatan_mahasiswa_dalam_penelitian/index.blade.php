@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      @if(auth()->user()->role == 'admin prodi')
      <a href="/kriteria7/pelibatan_mahasiswa_dalam_penelitian/create">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
      @endif
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.7 Penelitian</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam Penelitian</h5>
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
                  <th rowspan="2">Tahun Akademik</th>
                  <th rowspan="2">Judul Penelitian</th>
                  <th rowspan="2">Nama Ketua Tim</th>
                  <th rowspan="2">Kepakaran Ketua Tim*</th>
                  <th rowspan="2">Nama dan Identitas Dosen Anggota Penelitian</th>
                  <th rowspan="2">Nama dan Identitas Mahasiswa yang dilibatkan</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  @if(auth()->user()->role == 'admin prodi')
                  <th rowspan="2">Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach($items as $item)
                <tr>
                  <td>{{konversiTahunTS($item->tahun_akademik)}}</td>
                  <td>{{$item->judul}}</td>
                  <td>{{$item->dosen_ketua->nama}}</td>
                  <td>{{$item->kepakaran_ketua}}</td>
                  <td>{{$item->dosen_anggota->nama}}</td>
                  <td>{{$item->mahasiswa}}</td>
                  <td> 
                      <a href="{{$item->tautan}}">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                     </a>
                  </td>
                  @if(auth()->user()->role == 'admin prodi')
                  <td>
                    <a href="/kriteria7/pelibatan_mahasiswa_dalam_penelitian/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria7/pelibatan_mahasiswa_dalam_penelitian/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>
                  </td>
                  @endif
                </tr>
                @endforeach
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

@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('kepuasan_mahasiswa.create')}}">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.6 Kepuasan Mahasiswa</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Kepuasan Mahasiswa</h5>
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
                  <th rowspan="2">No</th>
                  <th rowspan="2">Aspek Pengukuran Kepuasan</th>
                  <th colspan="3">Objek Kepuasan Mahasiswa</th>
                  <th rowspan="2">Tindak Lanjut</th>
                  <th rowspan="2">Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>Kinerja Mengajar DTPS</th>
                  <th>Layanan Administrasi Akademik oleh PS</th>
                  <th>Prasarana dan Sarana Pembelajaran di PS</th>
                </tr>
              </thead>

              <tbody style="overflow-y: auto;" class="text-center" >

                @for($i = 1; $i <= 10; $i++)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td>{{ $i }}</td>
                  <td></td>
                  <td></td>
                  <td></td>
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


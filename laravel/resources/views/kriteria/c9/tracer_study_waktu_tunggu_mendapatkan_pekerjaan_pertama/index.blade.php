@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.create')}}">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 Tracer Study, Waktu Tunggu Mendapatkan Pekerjaan Pertama</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Tracer Study, Waktu Tunggu Mendapatkan Pekerjaan Pertama</h5>
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
                  <th rowspan="2">Tahun Lulus</th>
                  <th rowspan="2">Jumlah Lulusan</th>
                  <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                  <th colspan="4">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan Pertama</th>
                  <th rowspan="2">Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>WT < 3 Bulan</th>
                  <th>3 ≤ WT < 6 Bulan</th>
                  <th>6 ≤ WT < 12 Bulan</th>
                  <th>WT ≥ 12 Bulan</th>
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
                  <td></td>
                  <td>lihat tautan</td>
                  <td>
                    <a href="{{route('tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.edit',['id'=>$i])}}" type="button" class="btn btn-primary btn-sm"> Edit </a>
                    <button type="button" class="btn btn-danger btn-sm"> Hapus </button>
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


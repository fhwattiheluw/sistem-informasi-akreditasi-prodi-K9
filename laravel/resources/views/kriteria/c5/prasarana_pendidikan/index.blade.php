@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria5/prasarana_pendidikan/create">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.5 Keuangan, Sarana, dan Prasarana</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Data Prasarana Pendidikan</h5>
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
          @if(session('info'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('info') }} Silakan <a href="/dashboard">klik disini.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">Jenis Prasarana</th>
                  <th rowspan="2">Jumlah Unit</th>
                  <th rowspan="2">Luas (m2)</th>
                  <th colspan="2">Kepemilikan*</th>
                  <th colspan="2">Kondisi</th>
                  <th rowspan="2">Penggunaan (Jam/minggu)</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>SD</th>
                  <th>SW</th>
                  <th>Terawat</th>
                  <th>Tidak Terawat</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach($items as $item)
                <tr>
                  <td>{{$item->jenis_prasarana}}</td>
                  <td>{{$item->jumlah_unit}}</td>
                  <td>{{$item->luas}}</td>
                  <td>@if($item->kepemilikan == 'SD') V @endif</td>
                  <td>@if($item->kepemilikan == 'SW') V @endif</td>
                  <td>@if($item->kondisi == 'terawat') V @endif</td>
                  <td>@if($item->kondisi == 'tidak terawat') V @endif</td>
                  <td>{{$item->penggunaan}}</td>
                  <td>
                      <a href="{{$item->tautan}}">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>
                  </td>
                  <td>
                    <a href="/kriteria5/prasarana_pendidikan/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria5/prasarana_pendidikan/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
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

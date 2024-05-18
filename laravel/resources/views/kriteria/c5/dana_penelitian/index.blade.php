@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria5/dana_penelitian/create">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
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
          <h5 class="card-title">Tabel Dana Penelitian</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2">Judul Penelitian</th>
                  <th rowspan="2">Ketua Tim</th>
                  <th rowspan="2">Sumber dan jenis dana</th>
                  <th colspan="3">Jumlah Dana (dalam jutaan)</th>
                  <th rowspan="2">Rata-rata</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>TS-2</th>
                  <th>TS-1</th>
                  <th>TS</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th colspan="3">TOTAL</th>
                  <th>x</th>
                  <th>x</th>
                  <th>x</th>
                </tr>
              </tfoot>
              <tbody class="text-center">
              @foreach($items as $item)
                <tr>
                  <td>{{$item->judul_penelitian}}</td>
                  <td>{{$item->dosen->nama}}</td>
                  <td>{{$item->sumber_dana}}</td>
                  <td>{{$item->jumlah_dana_ts2}}</td>
                  <td>{{$item->jumlah_dana_ts1}}</td>
                  <td>{{$item->jumlah_dana_ts}}</td>
                  <td>{{($item->jumlah_dana_ts2 + $item->jumlah_dana_ts1 + $item->jumlah_dana_ts)/3}}</td>
                  <td>
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>
                  </td>
                  <td>
                    <a href="/kriteria5/dana_pkm/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="#" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

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

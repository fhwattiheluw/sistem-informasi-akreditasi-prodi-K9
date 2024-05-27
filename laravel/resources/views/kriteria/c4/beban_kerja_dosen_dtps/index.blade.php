@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/beban_kerja_dosen_dtps/create">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
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
          <h5 class="card-title">Tabel Beban Kerja Dosen DTPS</h5>
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
                  <th rowspan="2">NIDN - Nama Lengkap</th>
                  <th colspan="3">sks Pembelajaran pada</th>
                  <th rowspan="2">sks Penelitian</th>
                  <th rowspan="2">sks P2M</th>
                  <th colspan="2">sks Manajemen</th>
                  <th rowspan="2">Jumlah sks Beban Kerja</th>
                  <th rowspan="2">Bukti/Tautan</th>
                  <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                  <th>PS Sendiri (S1, S2, dan S3)</th>
                  <th>"PS Lain di PT Sendiri"</th>
                  <th>PT Lain</th>
                  <th>PT Sendiri</th>
                  <th>PT Lain</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach($items as $item)
                <tr>
                  <td>{{$item->nidn_nidk}} - {{$item->dosen->nama}} </td>
                  <td>{{$item->sks_ps_sendiri}}</td>
                  <td>{{$item->sks_ps_luar}}</td>
                  <td>{{$item->sks_pt_luar}}</td>
                  <td>{{$item->sks_penelitian}}</td>
                  <td>{{$item->sks_p2m}}</td>
                  <td>{{$item->sks_manajemen_sendiri}}</td>
                  <td>{{$item->sks_manajemen_luar}}</td>
                  <td>{{$item->sks_manajemen_luar + $item->sks_manajemen_sendiri + $item->sks_p2m + $item->sks_penelitian + $item->sks_pt_luar + $item->sks_ps_luar + $item->sks_ps_sendiri }}</td>
                  <td>
                    <a href="#">
                      <a href="#">
                        <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                      </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria4/beban_kerja_dosen_dtps/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria4/beban_kerja_dosen_dtps/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

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

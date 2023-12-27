@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      
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
          <h5 class="card-title">Tabel Rasio DTPS terhadap Mahasiswa Reguler</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th rowspan="2"><a href="/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps">Jumlah DTPS</a> </th>
                  <th rowspan="2"><a href="/kriteria3/mahasiswa_reguler">Jumlah Mahasiswa Reguler</a> </th>
                  <th colspan="2">Rasio Dosen:Mahasiswa</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>{{$dtps = 20}}</td>
                  <td>{{$mhs = 1000}}</td>
                  <td>{{$dtps / $mhs}}</td>
                </tr>
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

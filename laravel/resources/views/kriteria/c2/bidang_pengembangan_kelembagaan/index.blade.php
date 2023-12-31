@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria2/bidang_pengembangan_kelembagaan/create/Bidang Pengembangan Kelembagaan">
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
          <h5 class="card-title">Data Kerja Sama - Bidang Pengembangan Kelembagaan: SDM, Sarana/Prasarana, Publikasi, HKI, Paten, Teknologi Pembelajaran, Dll.</h5>
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
              @php $n = 1 @endphp
                @foreach($items as $item)
                <tr>
                  <td>{{$n++;}}</td>
                  <td>{{$item->nama_mitra}}</td>
                  <td> @if($item->tingkat == "Internasional") <b>X</b> @endif </td>
                  <td> @if($item->tingkat == "Nasional") <b>X</b> @endif </td>
                  <td> @if($item->tingkat == "Lokal") <b>X</b> @endif </td>
                  <td>{{$item->judul_ruang_lingkup}}</td>
                  <td>{{$item->manfaat_output}}</td>
                  <td>{{$item->durasi}}</td>
                  <td>{{$item->tautan}}</td>
                  <td>
                    <a href="#">
                      <a href="#">
                      <button type="button" class="btn btn-outline-success btn-sm"><i class="mdi mdi-link"></i></button>
                    </a>

                    </a>
                  </td>
                  <td>
                    <a href="/kriteria2/bidang_pengembangan_kelembagaan/{{$item->id}}/edit/bidang pengembangan kelembagaan">
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                  </a>
                    <a type="button" href="/kriteria2/bidang_pengembangan_kelembagaan/{{$item->id}}/delete/" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>

                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">Jumlah</th>
                  <th>{{$jum_inter}}</th>
                  <th>{{$jum_nasional}}</th>
                  <th>{{$jum_lokal}}</th>
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

@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.create')}}">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2"> Tambah data </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.6 Jumlah Mahasiswa Bimbingan dan Frekuensi Pertemuan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Jumlah Mahasiswa Bimbingan dan Frekuensi Pertemuan</h5>
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
                  <th>No</th>
                  <th>Nama Dosen Pembimbing Akademik</th>
                  <th>Jumlah Mahasiswa Bimbingan</th>
                  <th>Rata-Rata Pertemuan/Mahasiswa/Semester</th>
                  <th>Tautan</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody style="overflow-y: auto;" class="text-center" >

                @foreach($items as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->dosen->nama }}</td>
                  <td>{{ $item->jumlah_bimbingan }}</td>
                  <td>{{ $item->rata_pertemuan_semester }}</td>
                  <td><a href="{{ $item->tautan }}" target="_blank" class="btn btn-warning">link</a></td>
                  <td>
                    <a href="/kriteria6/jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan/{{$item->id}}/edit">
                      <button type="button" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-table-edit" ></i></button>
                    </a>
                    <a type="button" href="/kriteria6/jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan/{{$item->id}}/delete" onclick="confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete icon" ></i> </a>
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


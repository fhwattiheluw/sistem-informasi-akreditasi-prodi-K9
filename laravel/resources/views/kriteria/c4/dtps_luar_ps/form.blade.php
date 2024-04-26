@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="{{route('dtps_luar_ps.index')}}">
  <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
</a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
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
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Edit data
            @endif

            DTPS yang Bidang Keahliannya diluar Bidang PS
          </h4>

            <p class="card-description">K.4 Sumber Daya Manusia</p>
            @if ($errors->any())
              <div>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li style="color: red;">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <hr>
            <form 
            action="{{isset($item->id) ?  route('dtps_luar_ps.update', ['id' => Crypt::encryptString($item->id)])  : route('dtps_luar_ps.store')}}"
            method="post">
              @if(isset($item->id))
                @method('PUT')
              @endif

              @csrf

              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th rowspan="2">Nama Lengkap</th>
                      <th rowspan="2">NIDN/NIDK</th>
                      <th rowspan="2">Tanggal Lahir</th>
                      <th rowspan="2">Sertifikat Pendidik</th>
                      <th rowspan="2">Jabatan Fungsional</th>
                      <th rowspan="2">Gelar Akademik</th>
                      <th rowspan="2">Pendidikan S1, S2, S3  dan Asal PT </th>
                      <th rowspan="2">Bidang Keahlian Setiap Jenjang Pendidikan</th>
                      <th rowspan="2">Bukti/Tautan</th>
                    </tr>
                  </thead>
                  <tbody class="text-justify">

                    <tr>
                      <td><input type="text" class="form-control" name="nama" value="{{isset($item->nama) ? $item->nama : old('nama')}}" placeholder="ketik disini" autofocus>                      </td>
                      <td><input type="text" class="form-control" name="nidn_nidk" value="{{isset($item->nidn_nidk) ? $item->nidn_nidk : old('nidn_nidk')}}" placeholder="ketik disini">                      </td>
                      <td><input type="date" class="form-control" name="tanggal_lahir" value="{{isset($item->tanggal_lahir) ? $item->tanggal_lahir : old('tanggal_lahir')}}" placeholder="ketik disini">                      </td>
                      <td><input type="text" class="form-control" name="sertifikat_pendidik" value="{{isset($item->sertifikat_pendidik) ? $item->sertifikat_pendidik : old('sertifikat_pendidik')}}" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="jabatan_fungsional" value="{{isset($item->jabatan_fungsional) ? $item->jabatan_fungsional : old('jabatan_fungsional')}}" placeholder="ketik disini"></td>
                      <td><input type="text" class="form-control" name="gelar_akademik" value="{{isset($item->gelar_akademik) ? $item->gelar_akademik : old('gelar_akademik')}}" placeholder="ketik disini"></td>
                      <td><textarea class="form-control" name="pendidikan" placeholder="ketik disini" rows="8" cols="80">{{isset($item->pendidikan) ? $item->pendidikan : old('pendidikan')}}</textarea> </td>
                      <td><textarea class="form-control" name="bidang_keahlian" placeholder="ketik disini" rows="8" cols="80">{{isset($item->bidang_keahlian) ? $item->bidang_keahlian : old('bidang_keahlian')}}</textarea> </td>
                      <td><input type="text" class="form-control" name="tautan" value="{{isset($item->tautan) ? $item->tautan : old('tautan')}}" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>
                    @if (Request::segment(3) === 'create')
                      <button type="submit" class="btn btn-primary mr-2"> Tambah data</button>
                    @elseif (Request::segment(4) === 'edit')
                      <button type="submit" class="btn btn-primary mr-2"> Update data</button>
                    @endif

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        @endsection

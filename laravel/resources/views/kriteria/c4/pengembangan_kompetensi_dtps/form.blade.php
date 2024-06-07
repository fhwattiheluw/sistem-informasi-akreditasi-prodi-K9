@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
<a href="/kriteria4/pengembangan_kompetensi_dtps">
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
          Pengembangan Kompetensi DTPS
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
            <form action="{{isset($item->id) ?  route('pengembangan_kompetensi_dtps.update', ['id' => Crypt::encryptString($item->id)])  : route('pengembangan_kompetensi_dtps.store')}}" method="post">
              @if(isset($item->id))
                @method('PUT')
              @endif
              @csrf
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody class="text-justify">
                    <tr>
                      <td >Nama Dosen</td>
                      <td>
                        <select name="nidn_nidk" id="nidn_nidk" class="form-control">
                          @if(isset($item->nidn_nidk))
                            <option value="{{$item->nidn_nidk}}">{{$item->nidn_nidk}} | {{$item->dosen->nama}}</option>
                          @else
                            <option value="" selected>Pilih dosen</option>
                            @foreach($dosens as $dosen)
                            <option value="{{$dosen->nidn_nidk}}">
                                {{$dosen->nama}}
                            </option>
                            @endforeach
                          @endif
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td >Bidang Keahlian</td>
                      <td><input type="text" class="form-control" name="bidang_keahlian" value="{{isset($item->bidang_keahlian) ? $item->bidang_keahlian : old('bidang_keahlian')}}" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Nama Kegiatan</td>
                      <td><input type="text" class="form-control" name="nama_kegiatan" value="{{isset($item->nama_kegiatan) ? $item->nama_kegiatan : old('nama_kegiatan')}}" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Tempat Kegiatan</td>
                      <td><input type="text" class="form-control" name="tempat" value="{{isset($item->tempat) ? $item->tempat : old('tempat')}}" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Waktu Kegiatan</td>
                      <td><input type="date" class="form-control" name="waktu" value="{{isset($item->waktu) ? $item->waktu : old('waktu')}}" placeholder="ketik disini"></td>
                    </tr>
                    <tr>
                      <td >Manfaat Kegiatan</td>
                      <td><input type="text" class="form-control" name="manfaat" value="{{isset($item->manfaat) ? $item->manfaat : old('manfaat')}}" placeholder="ketik disini"></td>

                    </tr>

                    <tr>
                      <td >Bukti/Tautan</td>

                      <td><input type="text" class="form-control" name="tautan" value="{{isset($item->tautan) ? $item->tautan : old('tautan')}}" placeholder="ketik disini"></td>
                    </tr>
                  </tbody>

                </table>
              </div>

                  @if (Request::segment(3) === 'create')
                    <button type="submit" class="btn btn-primary mr-2" onclick="this.disabled=true;this.form.submit();this.innerText='Loading...';"> Tambah data</button>
                  @elseif (Request::segment(4) === 'edit')
                    <button type="submit" class="btn btn-primary mr-2" onclick="this.disabled=true;this.form.submit();this.innerText='Loading...';"> Update data</button>
                  @endif

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- last row starts here -->

        </div>
        @endsection

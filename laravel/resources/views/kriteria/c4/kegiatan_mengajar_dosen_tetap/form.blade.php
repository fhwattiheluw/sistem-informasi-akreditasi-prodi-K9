@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/kegiatan_mengajar_dosen_tetap">
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

            Beban Kerja Dosen DTPS
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
          <form action="{{isset($item->id) ?  route('kegiatan_mengajar_dosen_tetap.update', ['id' => Crypt::encryptString($item->id)])  : route('kegiatan_mengajar_dosen_tetap.store')}}" method="post">
            @if(isset($item->id))
              @method('PUT')
            @endif
            @csrf

            <table class="table">
              <tr>
                <td><label class="col-form-label">Semester</label></td>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="semester" value="Gasal"  @if(isset($item->semester) && $item->semester == 'Gasal')) checked @endif > Gasal <i class="input-helper"></i></label>
                  </div></td>
                  <td><div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="semester" value="Genap" @if(isset($item->semester) && $item->semester == 'Genap')) checked @endif> Genap <i class="input-helper"></i></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">Nama Lengkap</label></td>
                <td colspan="2">
                <select name="nidn_nidk" id="nidn_nidk" class="form-control">
                  @if(isset($item->nidn_nidk))
                    <option value="{{$item->nidn_nidk}}">{{$item->nidn_nidk}} | {{$item->dosen->nama}}</option>
                  @else
                    <option value="" disabled>Pilih dosen</option>
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
                <td><label class="col-form-label">Jumlah Kelas</label></td>
                <td  colspan="2"><input type="text" name="jumlah_kelas" value="{{isset($item->jumlah_kelas) ? $item->jumlah_kelas : old('jumlah_kelas')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">Mata Kuliah</label></td>
                <td colspan="2">
                  <select name="kode_mk" id="kode_mk" class="form-control">
                    @if(isset($item->kode_mk))
                      <option value="{{$item->kode_mk}}">{{$item->kode_mk}} | {{$item->dosen->nama}}</option>
                    @else
                      <option value="" disabled>Pilih dosen</option>
                      @foreach($matakuliah as $mk)
                      <option value="{{$mk->kode_mk}}">
                          {{$mk->kode_mk}} | {{$mk->nama}} | {{$mk->sks}}
                      </option>
                      @endforeach
                    @endif
                  </select>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">Jumlah Pertemuan yang Direncanakan</label></td>
                <td colspan="2"><input type="text" name="jum_pertemuan_rencana" value="{{isset($item->jum_pertemuan_rencana) ? $item->jum_pertemuan_rencana : old('jum_pertemuan_rencana')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">Jumlah Pertemuan yang Dilaksanakan</label></td>
                <td colspan="2"><input type="text" name="jum_pertemuan_terlaksana" value="{{isset($item->jum_pertemuan_terlaksana) ? $item->jum_pertemuan_terlaksana : old('jum_pertemuan_terlaksana')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">Bukti/Tautan</label></td>
                <td colspan="2"><input type="text" name="tautan" value="{{isset($item->tautan) ? $item->tautan : old('tautan')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
            </table>
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

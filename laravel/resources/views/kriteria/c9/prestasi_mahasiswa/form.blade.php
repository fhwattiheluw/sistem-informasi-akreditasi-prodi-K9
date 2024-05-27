@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('prestasi_mahasiswa.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 Prestasi Mahasiswa</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('prestasi_mahasiswa.update', ['id' => Crypt::encryptString($item->id)])  : route('prestasi_mahasiswa.store')}}" method="post">
        @if(isset($item->id))
          @method('PUT')
        @endif  
        @csrf
        <div class="card-body">
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(4) === 'edit')
            Edit data
            @endif

            Prestasi Mahasiswa</h4>

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

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" name="nama_mahasiswa" value="{{ isset($item->nama_mahasiswa) ? $item->nama_mahasiswa : old('nama_mahasiswa') }}" class="form-control" placeholder="Ketik disini">
              @error('nama_mahasiswa')
                <span class="invalid-feedback" role="list">
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Prestasi Yang Dicapai</label>
            <div class="col-sm-9">
              <input type="text" name="prestasi_yang_dicapai" value="{{ isset($item->prestasi_yang_dicapai) ? $item->prestasi_yang_dicapai : old('prestasi_yang_dicapai') }}" class="form-control" placeholder="Ketik disini">
              @error('prestasi_yang_dicapai')
                <span class="invalid-feedback" role="list">
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Waktu Pencapaian</label>
            <div class="col-sm-9">
              <input type="text" name="waktu_pencapaian" value="{{ isset($item->waktu_pencapaian) ? $item->waktu_pencapaian : old('waktu_pencapaian') }}" class="form-control" placeholder="Ketik disini">
              @error('waktu_pencapaian')
                <span class="invalid-feedback" role="list">
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tingkat</label>
            <div class="col-sm-9">
              <select class="form-control" name="tingkat">
                <option value="">Pilih</option>
                <option value="Internasional" {{ old('tingkat', isset($item->tingkat) ? $item->tingkat : null) === 'Internasional' ? 'selected' : '' }}>Internasional</option>
                <option value="Nasional" {{ old('tingkat', isset($item->tingkat) ? $item->tingkat : null) === 'Nasional' ? 'selected' : '' }}>Nasional</option>
                <option value="Lokal" {{ old('tingkat', isset($item->tingkat) ? $item->tingkat : null) === 'Lokal' ? 'selected' : '' }}>Lokal</option>
              </select>
              @error('tingkat')
                <span class="invalid-feedback" role="list">
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tautan</label>
            <div class="col-sm-9">
              <input type="text" name="tautan" value="{{ isset($item->tautan) ? $item->tautan : old('tautan') }}" class="form-control" placeholder="Ketik disini">
            </div>
          </div>


          </div>

          <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="button">
              @if (Request::segment(3) === 'create')
              Tambah data
              @elseif (Request::segment(4) === 'edit')
              Update data
              @endif
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- last row starts here -->

  </div>
  <script>
    document.getElementById('nilai2').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
    document.getElementById('nilai1').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
    document.getElementById('nilai').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
</script>

  @endsection


@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 Tabel Masa Studi, Kelulusan Tepat Waktu, Dan Keberhasilan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.update', ['id' => Crypt::encryptString($item->id)])  : route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.store')}}" method="post">
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

            Tabel Masa Studi, Kelulusan Tepat Waktu, Dan Keberhasilan</h4>

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
            <label class="col-sm-3 col-form-label">Tahun Masuk</label>
            <div class="col-sm-9">
              <input type="text" name="tahun_masuk" value="{{ isset($item->tahun_masuk) ? $item->tahun_masuk : old('tahun_masuk') }}" class="form-control" placeholder="Ketik disini">
              @error('tahun_masuk')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Diterima</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_diterima" value="{{ isset($item->jumlah_mahasiswa_diterima) ? $item->jumlah_mahasiswa_diterima : old('jumlah_mahasiswa_diterima') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_diterima')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-6)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts6" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts6) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts6 : old('jumlah_mahasiswa_yang_lulus_pada_ts6') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts6')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-5)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts5" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts5) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts5 : old('jumlah_mahasiswa_yang_lulus_pada_ts5') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts5')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-4)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts4" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts4) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts4 : old('jumlah_mahasiswa_yang_lulus_pada_ts4') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts4')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-3)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts3" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts3) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts3 : old('jumlah_mahasiswa_yang_lulus_pada_ts3') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts3')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-2)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts2" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts2) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts2 : old('jumlah_mahasiswa_yang_lulus_pada_ts2') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts2')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS-1)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts1" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts1) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts1 : old('jumlah_mahasiswa_yang_lulus_pada_ts1') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts1')
                  <span class="invalid-feedback d-block" role="alert">
                    {{ $message }}
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa Yang Lulus Pada ... (Akhir TS)</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_mahasiswa_yang_lulus_pada_ts" value="{{ isset($item->jumlah_mahasiswa_yang_lulus_pada_ts) ? $item->jumlah_mahasiswa_yang_lulus_pada_ts : old('jumlah_mahasiswa_yang_lulus_pada_ts') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_mahasiswa_yang_lulus_pada_ts')
                  <span class="invalid-feedback d-block" role="alert">
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


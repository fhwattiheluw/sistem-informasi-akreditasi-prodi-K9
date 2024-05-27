@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('tingkat_relevansi_pekerjaan.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 tingkat_relevansi_pekerjaan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('tingkat_relevansi_pekerjaan.update', ['id' => Crypt::encryptString($item->id)])  : route('tingkat_relevansi_pekerjaan.store')}}" method="post">
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

            tingkat_relevansi_pekerjaan</h4>

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
            <label class="col-sm-3 col-form-label">Tahun Lulus</label>
            <div class="col-sm-9">
              <input type="text" name="tahun_lulus" value="{{ isset($item->tahun_lulus) ? $item->tahun_lulus : old('tahun_lulus') }}" class="form-control @error('tahun_lulus') is-invalid @enderror" placeholder="Ketik disini">
              @error('tahun_lulus')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Lulusan</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_lulusan" value="{{ isset($item->jumlah_lulusan) ? $item->jumlah_lulusan : old('jumlah_lulusan') }}" class="form-control @error('jumlah_lulusan') is-invalid @enderror" placeholder="Ketik disini">
              @error('jumlah_lulusan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Lulusan Yang Terlacak</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_lulusan_terlacak" value="{{ isset($item->jumlah_lulusan_terlacak) ? $item->jumlah_lulusan_terlacak : old('jumlah_lulusan_terlacak') }}" class="form-control @error('jumlah_lulusan_terlacak') is-invalid @enderror" placeholder="Ketik disini">
              @error('jumlah_lulusan_terlacak')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Lulusan Terlacak Dengan Tingkat Relevansi Bidang Kerja (Tinggi,	Sedang,	Rendah)</label>
            <div class="col-sm-9">
              <select name="tingkat_relevansi_bidang_kerja" class="form-control @error('tingkat_relevansi_bidang_kerja') is-invalid @enderror">
                <option value="" hidden>Select Tingkat Relevansi Bidang Kerja</option>
                <option value="Tinggi" {{ (isset($item->tingkat_relevansi_bidang_kerja) && $item->tingkat_relevansi_bidang_kerja == 'Tinggi') ? 'selected' : '' }}>Tinggi</option>
                <option value="Sedang" {{ (isset($item->tingkat_relevansi_bidang_kerja) && $item->tingkat_relevansi_bidang_kerja == 'Sedang') ? 'selected' : '' }}>Sedang</option>
                <option value="Rendah" {{ (isset($item->tingkat_relevansi_bidang_kerja) && $item->tingkat_relevansi_bidang_kerja == 'Rendah') ? 'selected' : '' }}>Rendah</option>
              </select>
              @error('tingkat_relevansi_bidang_kerja')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
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


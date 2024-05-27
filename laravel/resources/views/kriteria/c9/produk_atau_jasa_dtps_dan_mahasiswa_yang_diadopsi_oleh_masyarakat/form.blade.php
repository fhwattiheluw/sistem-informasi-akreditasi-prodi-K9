@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 Produk Atau Jasa DTPS Dan Mahasiswa Yang Diadopsi Oleh Masyarakat</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.update', ['id' => Crypt::encryptString($item->id)])  : route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.store')}}" method="post">
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

            Produk Atau Jasa DTPS Dan Mahasiswa Yang Diadopsi Oleh Masyarakat</h4>
          <hr>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Dosen Dan/Atau Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" name="nama_dosen_dan_atau_mahasiswa" value="{{ isset($item->nama_dosen_dan_atau_mahasiswa) ? $item->nama_dosen_dan_atau_mahasiswa : old('nama_dosen_dan_atau_mahasiswa') }}" class="form-control" placeholder="Ketik disini">
              @error('nama_dosen_dan_atau_mahasiswa')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Produk/Jasa</label>
            <div class="col-sm-9">
              <input type="text" name="nama_produk_jasa" value="{{ isset($item->nama_produk_jasa) ? $item->nama_produk_jasa : old('nama_produk_jasa') }}" class="form-control" placeholder="Ketik disini">
              @error('nama_produk_jasa')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Deskripsi Produk/Jasa</label>
            <div class="col-sm-9">
              <textarea name="deskripsi_produk_jasa" class="form-control" rows="3">{{ isset($item->deskripsi_produk_jasa) ? $item->deskripsi_produk_jasa : old('deskripsi_produk_jasa') }}</textarea>
              @error('deskripsi_produk_jasa')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
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


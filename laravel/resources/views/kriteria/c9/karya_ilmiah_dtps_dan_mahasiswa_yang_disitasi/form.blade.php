@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 Karya Ilmiah DTPS Dan Mahasiswa Yang Disitasi</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.update', ['id' => Crypt::encryptString($item->id)])  : route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.store')}}" method="post">
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

            Karya Ilmiah DTPS Dan Mahasiswa Yang Disitasi</h4>

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
            <label class="col-sm-3 col-form-label">Nama Dosen Dan/Atau Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" name="nama_dosen_dan_atau_mahasiswa" value="{{ isset($item->nama_dosen_dan_atau_mahasiswa) ? $item->nama_dosen_dan_atau_mahasiswa : old('nama_dosen_dan_atau_mahasiswa') }}" class="form-control" placeholder="Ketik disini">
              @error('nama_dosen_dan_atau_mahasiswa')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Judul Karya Ilmiah</label>
            <div class="col-sm-9">
              <input type="text" name="judul_karya_ilmiah" value="{{ isset($item->judul_karya_ilmiah) ? $item->judul_karya_ilmiah : old('judul_karya_ilmiah') }}" class="form-control" placeholder="Ketik disini">
              @error('judul_karya_ilmiah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" name="tahun" value="{{ isset($item->tahun) ? $item->tahun : old('tahun') }}" class="form-control" placeholder="Ketik disini">
              @error('tahun')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Jurnal/Prosiding/Buku</label>
            <div class="col-sm-9">
              <input type="text" name="nama_jurnal_prosiding_buku" value="{{ isset($item->nama_jurnal_prosiding_buku) ? $item->nama_jurnal_prosiding_buku : old('nama_jurnal_prosiding_buku') }}" class="form-control" placeholder="Ketik disini">
              @error('nama_jurnal_prosiding_buku')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nomor Halaman</label>
            <div class="col-sm-9">
              <input type="text" name="nomor_halaman" value="{{ isset($item->nomor_halaman) ? $item->nomor_halaman : old('nomor_halaman') }}" class="form-control" placeholder="Ketik disini">
              @error('nomor_halaman')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Sitasi</label>
            <div class="col-sm-9">
              <input type="text" name="jumlah_sitasi" value="{{ isset($item->jumlah_sitasi) ? $item->jumlah_sitasi : old('jumlah_sitasi') }}" class="form-control" placeholder="Ketik disini">
              @error('jumlah_sitasi')
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


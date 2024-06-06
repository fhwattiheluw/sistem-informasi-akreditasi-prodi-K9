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
      <form class="card forms-sample" action="{{isset($item->id) ?  route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.update', ['id' => $item->id])  : route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.store')}}" method="post">
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
            <div class="alert alert-danger">
              <p>Periksa kembali data yang diinput</p>
            </div>
            @endif

             @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif

          
          <hr>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Dosen</label>
            <div class="col-sm-9">
              <select class="form-control @error('penulis_dosen_id') is-invalid @enderror" name="penulis_dosen_id">
                <option value="">Pilih Dosen</option>
                @foreach ($dosens as $dosen)
                  <option value="{{ $dosen->nidn_nidk }}" {{ (isset($item) && $item->penulis_dosen_id  == $dosen->nidn_nidk) ? 'selected' : '' }}>{{ $dosen->nidn_nidk }} | {{ $dosen->nama }}</option>
                @endforeach
              </select>
              @error('penulis_dosen_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" name="penulis_mahasiswa" value="{{ isset($item->penulis_mahasiswa) ? $item->penulis_mahasiswa : old('penulis_mahasiswa') }}" class="form-control @error('penulis_mahasiswa') is-invalid @enderror" placeholder="Ketik disini">
              @error('penulis_mahasiswa')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Judul Karya Ilmiah</label>
            <div class="col-sm-9">
              <input type="text" name="judul" value="{{ isset($item->judul) ? $item->judul : old('judul') }}" class="form-control @error('judul') is-invalid @enderror" placeholder="Ketik disini">
              @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" name="tahun" value="{{ isset($item->tahun) ? $item->tahun : old('tahun') }}" class="form-control @error('tahun') is-invalid @enderror" placeholder="Ketik disini">
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
              <input type="text" name="nama_penerbit" value="{{ isset($item->nama_penerbit) ? $item->nama_penerbit : old('nama_penerbit') }}" class="form-control @error('nama_penerbit') is-invalid @enderror" placeholder="Ketik disini">
              @error('nama_penerbit')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nomor Halaman</label>
            <div class="col-sm-9">
              <input type="text" name="nomor_halaman" value="{{ isset($item->nomor_halaman) ? $item->nomor_halaman : old('nomor_halaman') }}" class="form-control @error('nomor_halaman') is-invalid @enderror" placeholder="Ketik disini">
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
              <input type="text" name="jumlah_sitasi" value="{{ isset($item->jumlah_sitasi) ? $item->jumlah_sitasi : old('jumlah_sitasi') }}" class="form-control @error('jumlah_sitasi') is-invalid @enderror" placeholder="Ketik disini">
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
              <input type="text" name="tautan" value="{{ isset($item->tautan) ? $item->tautan : old('tautan') }}" class="form-control @error('tautan') is-invalid @enderror" placeholder="Ketik disini">
            @error('tautan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
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


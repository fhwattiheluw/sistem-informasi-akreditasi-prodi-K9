@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- Button dan Modal untuk mengunggah dokumen akan ditempatkan di sini jika diperlukan -->
    </div>
  </div>
  <!-- Form untuk mengunggah dokumen baru -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <form class="card" action="/path/to/handle_upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <h4 class="card-title">Unggah Repository Baru</h4>
          <div class="form-group">
            <label for="namaRepository">Nama Repository</label>
            <input type="text" class="form-control" id="namaRepository" name="namaRepository" placeholder="Masukkan nama repository">
            @error('namaRepository')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun">
            @error('tahun')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="kriteria">Kriteria</label>
            <select class="form-control" id="kriteria" name="kriteria">
              @for ($i = 1; $i <= 9; $i++)
                <option value="{{ $i }}">Kriteria {{ $i }}</option>
              @endfor
            </select>
            @error('kriteria')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Unggah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

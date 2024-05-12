@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- Tempat untuk notifikasi -->
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><i class="bi bi-check-circle-fill"></i> Berhasil!</strong> {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <!-- Button dan Modal untuk mengunggah dokumen akan ditempatkan di sini jika diperlukan -->
    </div>
  </div>
  <!-- Form untuk mengunggah dokumen baru -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <form class="card" action="{{ isset($repository) ? route('repository.update', $repository->id) : route('repository.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($repository))
          @method('PUT')
        @endif
        <div class="card-body">
          <h4 class="card-title">{{ isset($repository) ? 'Edit Repository' : 'Unggah Repository Baru' }}</h4>
          <div class="form-group">
            <label for="namaRepository">Nama Repository</label>
            <input type="text" class="form-control" id="namaRepository" name="namaRepository" placeholder="Masukkan nama repository" autofocus value="{{ isset($repository) ? $repository->nama_repository : '' }}">
            @error('namaRepository')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <select class="form-control" id="tahun" name="tahun">
              @for ($i = date("Y"); $i >= date("Y") - 10; $i--)
                <option value="{{ $i }}" {{ isset($repository) && $repository->tahun == $i ? 'selected' : '' }}>{{ $i }}</option>
              @endfor
            </select>
            @error('tahun')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="kriteria">Kriteria</label>
            <select class="form-control" id="kriteria" name="kriteria">
              @for ($i = 2; $i <= 9; $i++)
                <option value="{{ $i }}" {{ isset($repository) && $repository->kriteria == $i ? 'selected' : '' }}>Kriteria {{ $i }}</option>
              @endfor
            </select>
            @error('kriteria')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">{{ isset($repository) ? 'Simpan Perubahan' : 'Unggah' }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form');
  const submitButton = form.querySelector('button[type="submit"]');
  const originalButtonHtml = submitButton.innerHTML; // Menyimpan teks asli tombol

  form.onsubmit = function() {
    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengunggah...';
    submitButton.disabled = true;
  };
  
});
</script>
@endsection

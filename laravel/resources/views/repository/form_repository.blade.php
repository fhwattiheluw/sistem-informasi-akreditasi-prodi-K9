@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{ route('repository.semua') }} ">
        <button class="btn btn-outline-primary mb-2 mb-md-0 mr-2">kelola repository</button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Repository</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Repository untuk File Akreditasi Program Studi</p>
        </a>
      </div>
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

      <!-- Tempat untuk notifikasi -->
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><i class="bi bi-check-circle-fill"></i> Berhasil!</strong> {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

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
          <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.form.submit();this.innerText='Loading...';">{{ isset($repository) ? 'Simpan Perubahan' : 'Unggah' }}</button>
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

@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- Tempat untuk notifikasi -->
      @if(session('success'))
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success text-white">
            <strong class="mr-auto">Berhasil!</strong>
            <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">{{ session('success') }}</div>
        </div>
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <form class="card" action="{{ isset($user) ? route('akun.update', $user->id) : route('akun.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($user))
          @method('PUT')
        @endif
        <div class="card-body">
          <h4 class="card-title">{{ isset($user) ? 'Perbaharui Akun' : 'Tambah Akun Baru' }}</h4>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" autofocus value="{{ old('name', isset($user) ? $user->name : '') }}">
            @error('name')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" autofocus value="{{ isset($user) ? $user->email : old('email') }}" {{ isset($user) ? 'readonly' : '' }}>
            @error('email')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select class="form-control" id="level" name="level">
              <option value="">Pilih Level</option>
              <option value="author" {{ old('level', isset($user) ? $user->level : '') == 'author' ? 'selected' : '' }}>Author
                <small class="text-muted">(hanya bisa upload dokumen dan mengisi kuantitas akreditasi)</small>
              </option>
              <option value="admin" {{ old('level', isset($user) ? $user->level : '') == 'admin' ? 'selected' : '' }}>Admin
                <small class="text-muted">(dapat menambahkan user dan memperbaharui data sistem)</small>
              </option>
              <option value="viewer" {{ old('level', isset($user) ? $user->level : '') == 'view' ? 'selected' : '' }}>View
                <small class="text-muted">(hanya bisa melihat data)</small>
              </option>
            </select>
            
            @error('level')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
              <div class="input-group-append">
                <button type="button" class="btn btn-secondary" onclick="togglePasswordVisibility()">Lihat</button>
              </div>
            </div>
            @error('password')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
          </div>
          <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Simpan Perubahan' : 'Tambah akun' }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const submitButton = form.querySelector('button[type="submit"]');
    const originalButtonHtml = submitButton.innerHTML; // Menyimpan teks asli tombol

    form.onsubmit = function() {
      submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengunggah...';
      submitButton.disabled = true;
    };
  });

  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
    } else {
      passwordInput.type = 'password';
    }
  }
</script>
@endsection


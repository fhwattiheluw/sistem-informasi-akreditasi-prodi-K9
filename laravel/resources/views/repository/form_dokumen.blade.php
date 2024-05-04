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
          <h4 class="card-title">Unggah Dokumen Baru</h4>
          <div class="form-group">
            <label for="judulDokumen">Judul Dokumen</label>
            <input type="text" class="form-control" id="judulDokumen" name="judulDokumen" placeholder="Masukkan judul dokumen">
            @error('judulDokumen')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="deskripsiDokumen">Deskripsi</label>
            <textarea class="form-control" id="deskripsiDokumen" name="deskripsiDokumen" rows="4" placeholder="Masukkan deskripsi dokumen"></textarea>
            @error('deskripsiDokumen')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="fileDokumen">Unggah Dokumen</label>
            <input type="file" class="form-control-file" id="fileDokumen" name="fileDokumen">
            @error('fileDokumen')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="diunggahOleh">Diunggah Oleh</label>
            <input type="text" class="form-control" id="diunggahOleh" name="diunggahOleh" placeholder="Nama pengunggah">
            @error('diunggahOleh')
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
          <div class="form-group">
            <label for="namaTabel">Nama Tabel</label>
            <select class="form-control" id="namaTabel" name="namaTabel" style="display: none;">
              <option value="tabel1">Tabel 1</option>
              <option value="tabel2">Tabel 2</option>
              <option value="tabel3">Tabel 3</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>
            @error('namaTabel')
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const kriteriaSelect = document.getElementById('kriteria');
    const namaTabelSelect = document.getElementById('namaTabel');

    kriteriaSelect.addEventListener('change', function () {
      if (this.value === '5') {
        namaTabelSelect.style.display = 'block';
      } else {
        namaTabelSelect.style.display = 'none';
      }
    });
  });
</script>

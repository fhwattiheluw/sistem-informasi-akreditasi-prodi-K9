@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
    <a href="{{ route('dataprodi.semua') }}" class="btn btn-primary mb-2 mb-md-0 mr-2">kelola program studi</a>

    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Data program studi</p>
        </a>
      </div>
    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Data Program Studi</h4>
          <form class="forms-sample" action="#" method="post">
            @csrf
            <div class="form-group">
              <label for="kode_prodi">Kode Program Studi</label>
              <input type="text" class="form-control @error('kode_prodi') is-invalid @enderror" id="kode_prodi" name="kode_prodi" value="{{ old('kode_prodi', isset($dataProdi) ? $dataProdi->kode_prodi : '') }}" placeholder="Kode Program Studi">
              @error('kode_prodi')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nama_prodi">Nama Program Studi</label>
              <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" name="nama_prodi" value="{{ old('nama_prodi', isset($dataProdi) ? $dataProdi->nama_prodi : '') }}" placeholder="Nama Program Studi">
              @error('nama_prodi')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
@endsection


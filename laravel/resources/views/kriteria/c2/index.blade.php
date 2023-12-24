@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Tambah data </button> -->
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">data keuangan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <h5 class="card-header">Tabel 2.2.2 Data Kerja Sama</h5>
        <div class="card-body">
          <h5 class="card-title">Bidang Pendidikan</h5>
          <a href="#" class="btn btn-primary">Go</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <h5 class="card-header">Tabel 2.2.2 Data Kerja Sama</h5>
        <div class="card-body">
          <h5 class="card-title">Bidang Penelitian</h5>
          <a href="#" class="btn btn-primary">Go</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <h5 class="card-header">Tabel 2.2.2 Data Kerja Sama</h5>
        <div class="card-body">
          <h5 class="card-title">Bidang Pengabdian kepada Masyarakat (PkM)</h5>
          <a href="#" class="btn btn-primary">Go</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <h5 class="card-header">Tabel 2.2.2 Data Kerja Sama</h5>
        <div class="card-body">
          <h5 class="card-title">Bidang Pengembangan Kelembagaan: SDM, Sarana/Prasarana, Publikasi, HKI, Paten, Teknologi Pembelajaran, dll.</h5>
          <a href="#" class="btn btn-primary">Go</a>
        </div>
      </div>
    </div>

  </div>
  <!-- last row starts here -->

</div>
@endsection

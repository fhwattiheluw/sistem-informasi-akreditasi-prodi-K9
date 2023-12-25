@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <!-- <button  type="button" class="btn btn-primary mb-2 mb-md-0 mr-2 ">Ubah data program studi </button> -->
      <!-- <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button> -->
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data kuantitatif LED</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Data Keuangan</p>
        </a>
      </div>
      <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
      <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <form class="card" action="#" method="GET" >
        @csrf
        <div class="card-body">
          <h4 class="card-title">Tambah Data Kuantitatif Di Unit Pengelola Program Studi (UPPS) - Keuangan</h4>
          <!-- <p class="card-description"> Add class <code>.table</code> -->
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr >
                <th style="font-weight:bold">Item</th>
                <th style="font-weight:bold">Data</th>
                <th style="font-weight:bold">Tautan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="font-weight:bold">Tahun akademik</td>
                <td >
                  <input type="text" class="form-control" id="" placeholder="Tahun akademik">
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Pendidikan/mahasiswa/tahun</td>
                <td>
                  <input type="text" class="form-control" id="" placeholder="Pendidikan/mahasiswa/tahun">
                </td>
                <td>
                  <input type="url" class="form-control" id="" placeholder="Masukan link disini">
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Penelitian/dosen/tahun</td>
                <td>
                  <input type="text" class="form-control" id="" placeholder="Ketik Penelitian/dosen/tahun">
                </td>
                <td>
                  <input type="url" class="form-control" id="" placeholder="Masukan link disini">
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Publikasi/dosen/tahun</td>
                <td>
                  <input type="text" class="form-control" id="" placeholder="Ketik Publikasi/dosen/tahun">
                </td>
                <td>
                  <input type="url" class="form-control" id="" placeholder="Masukan link disini">
                </td>
              </tr>
              <tr>
                <td style="font-weight:bold">Investasi/tahun</td>
                <td>
                  <input type="text" class="form-control" id="" placeholder="Ketik Investasi/tahun">
                </td>
                <td>
                  <input type="url" class="form-control" id="" placeholder="Masukan link disini">
                </td>
              </tr>

              <tr>
                <td >
                  <button type="submit" class="btn btn-primary mr-2"> Tambah data </button>
                </td>
                <td>
                  <a href="/datakeuangan" class="btn btn-light">
                    Cancel
                  </a>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- last row starts here -->

</div>
@endsection

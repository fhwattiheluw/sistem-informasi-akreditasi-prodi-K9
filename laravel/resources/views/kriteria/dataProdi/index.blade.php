@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/dataprodi/edit">
        <button  type="button" class="btn btn-primary mb-2 mb-md-0 mr-2 ">Ubah data program studi </button>
      </a>
      <!-- <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button> -->
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
      <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
        <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
      </div>
    </div>
    <!-- first row starts here -->
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Program Studi</h4>
            <!-- <p class="card-description"> Add class <code>.table</code> -->
            </p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td style="font-weight:bold">Jenis program</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Nama program studi</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Status/Peringkat</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Nomor SK</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Tanggal SK</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Tgl. Kadaluarsa</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Jumlah Mahasiswa saat TS</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Jumlah DTPS saat TS</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Rerata IPK</td>
                    <td>53275531</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold">Rerata masa studi</td>
                    <td>53275531</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- last row starts here -->

  </div>
  @endsection

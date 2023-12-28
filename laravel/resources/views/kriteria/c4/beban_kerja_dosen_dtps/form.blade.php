@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/beban_kerja_dosen_dtps">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.4 Sumber Daya Manusia</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(3) === 'edit')
            Edit data
            @endif

            Beban Kerja Dosen DTPS
          </h4>

          <p class="card-description">K.4 Sumber Daya Manusia</p>
          <hr>
          <form action="#" method="post">
            @csrf

            <table class="table table-bordered">
              <tr>
                <td><label class="col-form-label">Nama Lengkap Dosen Tetap</label></td>
                <td colspan="2"><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td rowspan ="4">
                  <h5>sks Pembelajaran pada</h5>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">PS Sendiri (S1, S2, dan S3)</label></td>
                <td><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PS Laindi PT Sendiri</label></td>
                <td><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Lain</label></td>
                <td><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">sks Penelitian</label></td>
                <td colspan="2"><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">sks P2M</label></td>
                <td colspan="2"><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td rowspan ="3">
                  <h5>sks Manajemen	</h5>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Sendiri</label></td>
                <td><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Lain</label></td>
                <td><input type="text" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
            </table>




            @if (Request::segment(3) === 'create')
            <button type="submit" class="btn btn-primary mr-2"> Tambah data</button>
            @elseif (Request::segment(3) === 'edit')
            <button type="submit" class="btn btn-primary mr-2"> Update data</button>
            @endif

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
@endsection

@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <!-- Header section with buttons and navigation links -->
  <div class="page-header flex-wrap">
    <div class="header-left">
      <button class="btn btn-primary mb-2 mb-md-0 mr-2">Tambah Data</button>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Akun</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">Akun Pengguna</p>
        </a>
      </div>
    </div>
  </div>
  <!-- Main content area for user accounts -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Akun Pengguna</h5>
          <!-- Table for displaying user accounts -->
          <table class="table table-responsive" style="width: 100%;">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- Loop to generate dummy data for the table -->
              @for ($i = 0; $i < 10; $i++)
              <tr>
                <td>{{ Illuminate\Support\Str::random(10) }}</td>
                <td>{{ Illuminate\Support\Str::random(10) }}</td>
                <td>{{ Illuminate\Support\Str::random(10) }}@example.com</td>
                <td>{{ Illuminate\Support\Str::random(10) }}</td>
                <td>
                  <!-- Action buttons for edit and delete -->
                  <button type="button" class="btn btn-outline-primary btn-sm"> <i class="mdi mdi-tooltip-edit"></i> </button>
                  <button type="button" class="btn btn-outline-danger btn-sm"> <i class="mdi mdi-delete"></i> </button>
                </td>
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End of main content area -->
</div>
@endsection

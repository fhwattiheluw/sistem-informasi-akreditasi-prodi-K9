@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <button class="btn btn-primary mb-2 mb-md-0 mr-2" data-toggle="modal" data-target="#uploadModal">Upload Dokumen</button>

      <!-- Modal untuk upload dokumen -->
      <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="uploadModalLabel">Upload Dokumen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('dokumen.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="document">Pilih Dokumen</label>
                  <input type="file" class="form-control-file @error('document') is-invalid @enderror" id="document" name="document">
                  @error('document')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Deskripsi Dokumen</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Informasi Repository</h4>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Nama Repository</label>
                <p class="form-control">Nama Repository</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Kriteria</label>
                <p class="form-control">Kriteria Repository</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Tahun</label>
                <p class="form-control">2023</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Deskripsi</label>
                <p class="form-control">Deskripsi singkat mengenai repository</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Dokumen Repository</h5>
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" the class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama Dokumen</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 1; $i <= 20; $i++)
                <tr>
                  <td>Dokumen {{ $i }}</td>
                  <td>Keterangan {{ $i }}</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-xs" title="Melihat Dokumen"><i class="fa fa-eye"></i></a>
                    <button class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-info btn-xs" title="Bagikan"><i class="fa fa-share-alt"></i></button>
                  </td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('.table').DataTable();
});
</script>
@endsection

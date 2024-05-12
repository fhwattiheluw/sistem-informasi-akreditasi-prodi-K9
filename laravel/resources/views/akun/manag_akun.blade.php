@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
        <div class="header-left">
            <a href="{{ route('akun.create') }}" class="btn btn-primary mb-2 mb-md-0 mr-2">Tambah akun</a>
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

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Akun Pengguna</h5>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible flex-grow-1 mr-3 mb-3" role="alert">
                        <div class="d-flex w-100">
                            <div class="mr-auto">{{ session('success') }}</div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif

                    
                    @if (session('info'))
                    <div class="alert alert-info alert-dismissible flex-grow-1 mr-3 mb-3" role="alert">
                        <div class="d-flex w-100">
                            <div class="mr-auto">{{session('info')}}</div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif

                    @if (session('info'))
                    <div class="alert alert-info alert-dismissible flex-grow-1 mr-3 mb-3" role="alert">
                        <div class="d-flex w-100">
                            <div class="mr-auto">{{session('info')}}</div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif

                    <p class="mb-2">
                        <strong>Keterangan:</strong><br>
                        <span class="badge badge-primary">View</span> = User biasa yang dapat masuk ke website<br>
                        <span class="badge badge-info">Author</span> = User yang dapat memasukan data<br>
                        <span class="badge badge-success">Admin</span> = User yang memiliki akses super admin
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataUser as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->level == 'view')
                                        <td><span class="badge badge-primary">{{$user->level}}</span></td>
                                    @elseif($user->level == 'author')
                                        <td><span class="badge badge-info">{{$user->level}}</span></td>
                                    @elseif($user->level == 'admin')
                                        <td><span class="badge badge-success">{{$user->level}}</span></td>
                                    @endif

                                    <td>
                                        <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-sm btn-warning"><i class="mdi mdi-table-edit"></i></a>
                                        <a href="{{ route('akun.destroy', $user->email) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')"><i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function confirmDelete(url) {
        if (confirm('Apakah anda yakin ingin menghapus akun ini?')) {
            window.location.href = url;
        }
    }
</script>

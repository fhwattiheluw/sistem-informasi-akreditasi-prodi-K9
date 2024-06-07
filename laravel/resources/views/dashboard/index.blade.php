@extends('template')

@section('js')
<script src="/assets/js/chart.js"></script>
@endsection

@section('css')
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>
@endsection

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      @if (auth()->user()->role === 'admin prodi')
      <a href="{{route('repository.semua')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">
        <i class="mdi mdi-folder-multiple mr-2"></i>
        semua repository
      </a>
      <a href="{{route('dokumen.index')}}" class="btn btn-outline-primary bg-white mb-2 mb-md-0">
        <i class="mdi mdi-file-multiple mr-2"></i>
        Lihat semua dokumen
      </a>
      @endif
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">dashboard</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">{{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>
        </a>
      </div>
    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
                  <div class="col-xl-12 stretch-card grid-margin">



                    <div class="card card-img">
                      <div class="card-body d-flex align-items-center">
                        <div class="text-white">

                          <h1 class="font-20 font-weight-semibold mb-0"> Selamat Datang </h1>
                          <h1 class="font-20 font-weight-semibold">Akresmart</h1>
                          <p>Sistem akreditasi prodi ini dibuat untuk mempermudah proses akreditasi program studi </p>
                          <p class="font-10 font-weight-semibold"> pilih program studi untuk menampilkan data kuantitatif</p>

                          @if(Auth::user()->role == 'admin prodi')
                          <a class="btn bg-white font-12" href="{{ route('dataprodi.index') }}">data program studi</a>
                          @endif

                          @if(Auth::user()->role == 'fakultas')
                          @error('pesan')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $message }}

                  </div>

                      @enderror
                          @endif

                          @if(Auth::user()->role == 'fakultas')
                          <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuOutlineButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ session()->has('prodi') ? session('prodi')['prodi']->nama : 'Pilih Program Studi' }} </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton5" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -200px, 0px);">
                          <h6 class="dropdown-header">Pilihan</h6>
                          @foreach($semuaProdi as $prodi)
                          <a class="dropdown-item" href="{{ route('dataprodi.session', $prodi->id) }}">{{$prodi->nama}}</a>
                          @endforeach
                        </div>
                      </div>
                      @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                            
                                    </div>
                                    @endsection

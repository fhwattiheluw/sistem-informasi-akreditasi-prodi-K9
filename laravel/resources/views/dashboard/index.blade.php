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
      <a href="{{route('repository.semua')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">
        <i class="mdi mdi-folder-multiple mr-2"></i>
        semua repository
      </a>
      <a href="{{route('dokumen.index')}}" class="btn btn-outline-primary bg-white mb-2 mb-md-0">
        <i class="mdi mdi-file-multiple mr-2"></i>
        Lihat semua dokumen
      </a>
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

                          @error('pesan')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $message }}

                  </div>

                      @enderror

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
                
                              <div class="row">
                                <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="card-title mb-2">Upcoming events (3)</div>
                                      <h3 class="mb-3">23 september 2019</h3>
                                      <div class="d-flex border-bottom border-top py-3">
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked=""><i class="input-helper"></i></label>
                                          </div>
                                          <div class="pl-2">
                                            <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                            <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                                          </div>
                                        </div>
                                        <div class="d-flex border-bottom py-3">
                                          <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                                            </div>
                                            <div class="pl-2">
                                              <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                              <p class="m-0 text-black"> Discuss performance with manager </p>
                                            </div>
                                          </div>
                                          <div class="d-flex border-bottom py-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                                              </div>
                                              <div class="pl-2">
                                                <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                                <p class="m-0 text-black">Meeting with Alisa</p>
                                              </div>
                                            </div>
                                            <div class="d-flex pt-3">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                                                </div>
                                                <div class="pl-2">
                                                  <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                                  <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                                          <div class="card">
                                            <div class="card-body">
                                              <div class="d-flex border-bottom mb-4 pb-2">
                                                <div class="hexagon">
                                                  <div class="hex-mid hexagon-warning">
                                                    <i class="mdi mdi-clock-outline"></i>
                                                  </div>
                                                </div>
                                                <div class="pl-4">
                                                  <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                                                  <h6 class="text-muted">Schedule Meeting</h6>
                                                </div>
                                              </div>
                                              <div class="d-flex border-bottom mb-4 pb-2">
                                                <div class="hexagon">
                                                  <div class="hex-mid hexagon-danger">
                                                    <i class="mdi mdi-account-outline"></i>
                                                  </div>
                                                </div>
                                                <div class="pl-4">
                                                  <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                                                  <h6 class="text-muted">Profile visits</h6>
                                                </div>
                                              </div>
                                              <div class="d-flex border-bottom mb-4 pb-2">
                                                <div class="hexagon">
                                                  <div class="hex-mid hexagon-success">
                                                    <i class="mdi mdi-laptop-chromebook"></i>
                                                  </div>
                                                </div>
                                                <div class="pl-4">
                                                  <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                                                  <h6 class="text-muted">Bounce Rate</h6>
                                                </div>
                                              </div>
                                              <div class="d-flex border-bottom mb-4 pb-2">
                                                <div class="hexagon">
                                                  <div class="hex-mid hexagon-info">
                                                    <i class="mdi mdi-clock-outline"></i>
                                                  </div>
                                                </div>
                                                <div class="pl-4">
                                                  <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                                                  <h6 class="text-muted">Schedule Meeting</h6>
                                                </div>
                                              </div>
                                              <div class="d-flex">
                                                <div class="hexagon">
                                                  <div class="hex-mid hexagon-primary">
                                                    <i class="mdi mdi-timer-sand"></i>
                                                  </div>
                                                </div>
                                                <div class="pl-4">
                                                  <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                                                  <h6 class="text-muted mb-0">Browser Usage</h6>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                                          <div class="card color-card-wrapper">
                                            <div class="card-body">
                                              <img class="img-fluid card-top-img w-100" src="../assets/images/dashboard/img_5.jpg" alt="">
                                              <div class="d-flex flex-wrap justify-content-around color-card-outer">
                                                <div class="col-6 p-0 mb-4">
                                                  <div class="color-card primary m-auto">
                                                    <i class="mdi mdi-clock-outline"></i>
                                                    <p class="font-weight-semibold mb-0">Delivered</p>
                                                    <span class="small">15 Packages</span>
                                                  </div>
                                                </div>
                                                <div class="col-6 p-0 mb-4">
                                                  <div class="color-card bg-success m-auto">
                                                    <i class="mdi mdi-tshirt-crew"></i>
                                                    <p class="font-weight-semibold mb-0">Ordered</p>
                                                    <span class="small">72 Items</span>
                                                  </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                  <div class="color-card bg-info m-auto">
                                                    <i class="mdi mdi-trophy-outline"></i>
                                                    <p class="font-weight-semibold mb-0">Arrived</p>
                                                    <span class="small">34 Upgraded</span>
                                                  </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                  <div class="color-card bg-danger m-auto">
                                                    <i class="mdi mdi-presentation"></i>
                                                    <p class="font-weight-semibold mb-0">Reported</p>
                                                    <span class="small">72 Support</span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @endsection

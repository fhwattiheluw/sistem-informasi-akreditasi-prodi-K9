@extends('template')

@section('js')
<script src="/assets/js/chart.js"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
   // Data untuk Chart Penelitian
        var ctxPenelitian = document.getElementById('chartPenelitian').getContext('2d');
        var chartPenelitian = new Chart(ctxPenelitian, {
            type: 'bar',
            data: {
                labels: ['Aktivitas 1', 'Aktivitas 2', 'Aktivitas 3'],
                datasets: [
                    {
                        label: 'Aktivitas Penelitian',
                        data: [30, 50, 70],
                        backgroundColor: '#1e90ff',
                        borderColor: '#1c86ee',
                        borderWidth: 1
                    },
                    {
                        label: 'Relevansi Penelitian',
                        data: [40, 60, 80],
                        backgroundColor: '#87cefa',
                        borderColor: '#00bfff',
                        borderWidth: 1
                    },
                    {
                        label: 'Pelibatan Mahasiswa',
                        data: [25, 45, 65],
                        backgroundColor: '#00bfff',
                        borderColor: '#1e90ff',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            fontColor: '#495057'
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                            fontColor: '#495057'
                        },
                        gridLines: {
                            display: true,
                            color: '#dee2e6'
                        }
                    }]
                },
                tooltips: {
                    backgroundColor: '#343a40',
                    titleFontColor: '#ffffff',
                    bodyFontColor: '#ffffff',
                    borderColor: '#6c757d',
                    borderWidth: 1
                }
            }
        });

        // Data untuk Chart Pengabdian
        var ctxPengabdian = document.getElementById('chartPengabdian').getContext('2d');
        var chartPengabdian = new Chart(ctxPengabdian, {
            type: 'bar',
            data: {
                labels: ['PKM 1', 'PKM 2', 'PKM 3'],
                datasets: [
                    {
                        label: 'Aktivitas PKM',
                        data: [20, 40, 60],
                        backgroundColor: '#28a745',
                        borderColor: '#218838',
                        borderWidth: 1
                    },
                    {
                        label: 'Relevansi PKM',
                        data: [35, 55, 75],
                        backgroundColor: '#90ee90',
                        borderColor: '#7cfc00',
                        borderWidth: 1
                    },
                    {
                        label: 'Pelibatan Mahasiswa',
                        data: [45, 65, 85],
                        backgroundColor: '#7cfc00',
                        borderColor: '#3cb371',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            fontColor: '#495057'
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                            fontColor: '#495057'
                        },
                        gridLines: {
                            display: true,
                            color: '#dee2e6'
                        }
                    }]
                },
                tooltips: {
                    backgroundColor: '#343a40',
                    titleFontColor: '#ffffff',
                    bodyFontColor: '#ffffff',
                    borderColor: '#6c757d',
                    borderWidth: 1
                }
            }
        });

        // Data untuk Chart Total Mahasiswa Reguler
        var ctxMahasiswa = document.getElementById('chartMahasiswa').getContext('2d');
        var chartMahasiswa = new Chart(ctxMahasiswa, {
            type: 'line',
            data: {
                labels: ['2019', '2020', '2021', '2022', '2023'],
                datasets: [
                    {
                        label: 'Program Studi A',
                        data: [100, 150, 200, 250, 300],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: true
                    },
                    {
                        label: 'Program Studi B',
                        data: [80, 130, 180, 230, 280],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: true
                    },
                    {
                        label: 'Program Studi C',
                        data: [90, 140, 190, 240, 290],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            fontColor: '#495057'
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: '#495057'
                        },
                        gridLines: {
                            display: true,
                            color: '#dee2e6'
                        }
                    }]
                },
                tooltips: {
                    backgroundColor: '#343a40',
                    titleFontColor: '#ffffff',
                    bodyFontColor: '#ffffff',
                    borderColor: '#6c757d',
                    borderWidth: 1
                }
            }
        });
</script>
@endsection

@section('css')
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>

<style type="text/css">
 .card {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}
.card .icon {
  position: absolute;
  top: -20px;
  right: -20px;
  opacity: 0.3;
  font-size: 8rem;
}
.card .card-body .icon-text {
  font-size: 3rem;
   color: #fff; 
}
</style>

<style>
        .card {
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card-header {
            color: white;
            font-size: 1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 15px;
        }
        .card-header i {
            font-size: 2rem;
        }
        .card-header.card-jumlah-penelitian {
            background-color: #1e90ff;
        }
        .card-header.card-jumlah-pkm {
            background-color: #28a745;
        }
        .card-header.card-jumlah-mhs-reguler {
            background-color: #ffc107;
        }
        .card-body {
            padding: 0;
        }
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        .legend-item {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        .legend-item span {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-right: 5px;
            border-radius: 50%;
        }
        .legend-item:nth-of-type(1) span {
            background-color: #1e90ff;
        }
        .legend-item:nth-of-type(2) span {
            background-color: #28a745;
        }
        .legend-item:nth-of-type(3) span {
            background-color: #ffc107;
        }
        .legend-item:nth-of-type(4) span {
            background-color: #ff6b6b;
        }
        .card-header .icon-container {
            display: flex;
            align-items: center;
        }
        .icon-container i {
            color: white;
            margin-right: 10px;
        }
        .chart-legend {
            margin-top: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
    </style>

    <style type="text/css">
       .alert-custom {
            position: relative;
            margin: 20px 0;
            padding: 15px;
            border-radius: 5px;
            font-size: 1rem;
        }
        .alert-custom i {
            font-size: 1.5rem;
            margin-right: 10px;
        }
        .alert-custom .alert-icon {
            position: absolute;
            top: 15px;
            left: 15px;
        }
        .alert-custom .alert-message {
            margin-left: 50px;
        }
    </style>
@endsection

@section('content-wrapper')

<div class="content-wrapper pb-0">

  <div class="page-header flex-wrap">
    <div class="header-left">
      @if(Auth::user()->role == 'fakultas')
          <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuOutlineButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ session()->has('prodi') ? session('prodi')['prodi']->nama : 'Pilih Program Studi' }} </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton5" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -200px, 0px);">
              <h6 class="dropdown-header">Pilihan</h6>
              @foreach($semuaProdi as $prodi)
              <a class="dropdown-item" style="z-index: 100;" href="{{ route('dataprodi.session', $prodi->id) }}">{{$prodi->nama}}</a>
              @endforeach
            </div>
          </div>
          @endif
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
    @if(session('pilihProdi'))
    <div id="prodiAlert" class="alert alert-success alert-custom col-xl-12 grid-margin" role="alert">
            <div class="alert-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="alert-message">
                <strong>Berhasil!</strong> Program Studi <span id="prodiName"></span> telah dipilih.
            </div>
        </div>
    @endif

    @if(Auth::user()->role == 'fakultas')
          @error('pesan')
          <div class="alert alert-danger alert-dismissible fade show col-xl-12" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}

          </div>
          @enderror
          @endif

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

          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- statistik untuk dashboard admin fakultas -->
<div class="row">
  <!-- Card Jumlah User -->
  <div class="col-md-4">
    <div class="card text-white bg-primary mb-3">
      <div class="card-header">Jumlah User</div>
      <div class="card-body">
        <i class="fas fa-users icon"></i>
        <h5 class="card-title icon-text" id="userCount">100</h5>
        <p class="card-text">Total pengguna terdaftar</p>
      </div>
    </div>
  </div>
  <!-- Card Jumlah Prodi -->
  <div class="col-md-4">
    <div class="card text-white bg-success mb-3">
      <div class="card-header">Jumlah Prodi</div>
      <div class="card-body">
        <i class="fas fa-university icon"></i>
        <h5 class="card-title icon-text" id="prodiCount">25</h5>
        <p class="card-text">Total program studi</p>
      </div>
    </div>
  </div>
  <!-- Card Jumlah Dokumen -->
  <div class="col-md-4">
    <div class="card text-white bg-warning mb-3">
      <div class="card-header">Jumlah Dokumen</div>
      <div class="card-body">
        <i class="fas fa-file-alt icon"></i>
        <h5 class="card-title icon-text" id="documentCount">500</h5>
        <p class="card-text">Total dokumen yang diunggah</p>
      </div>
    </div>
  </div>
</div>

<!-- untuk dashboard user prodi -->
<div class="row">
  <!-- Card Jumlah Mahasiswa saat TS -->
<div class="col-md-4">
  <div class="card text-white bg-primary mb-3">
    <div class="card-header">Jumlah Mahasiswa saat TS</div>
    <div class="card-body">
      <i class="fas fa-user-graduate icon"></i>
      <h5 class="card-title icon-text" id="studentCount">1000</h5>
      <p class="card-text">Total mahasiswa terdaftar</p>
    </div>
  </div>
</div>

<!-- Card Jumlah DTPS saat TS -->
<div class="col-md-4">
  <div class="card text-white bg-success mb-3">
    <div class="card-header">Jumlah DTPS saat TS</div>
    <div class="card-body">
      <i class="fas fa-chalkboard-teacher icon"></i>
      <h5 class="card-title icon-text" id="dtpsCount">50</h5>
      <p class="card-text">Total DTPS terdaftar</p>
    </div>
  </div>
</div>

<!-- Card Rerata IPK -->
<div class="col-md-4">
  <div class="card text-white bg-warning mb-3">
    <div class="card-header">Rerata IPK</div>
    <div class="card-body">
      <i class="fas fa-graduation-cap icon"></i>
      <h5 class="card-title icon-text" id="averageGPA">3.5</h5>
      <p class="card-text">Rerata IPK mahasiswa</p>
    </div>
  </div>
</div>

</div>

<div class="row">
     <div class="row justify-content-center">
            <!-- Chart Penelitian -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header card-jumlah-penelitian">
                        <div class="icon-container">
                            <i class="fas fa-flask"></i> <!-- Ikon Penelitian -->
                        </div>
                        <div>Jumlah Aktivitas, Relevansi, Dan Pelibatan Mahasiswa Dalam Penelitian</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="chartPenelitian"></canvas>
                        </div>
                        <div class="chart-legend mt-2 text-center">
                            <div class="legend-item">
                                <span></span> Aktivitas Penelitian
                            </div>
                            <div class="legend-item">
                                <span></span> Relevansi Penelitian
                            </div>
                            <div class="legend-item">
                                <span></span> Pelibatan Mahasiswa
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Pengabdian -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header card-jumlah-pkm">
                        <div class="icon-container">
                            <i class="fas fa-hands-helping"></i> <!-- Ikon Pengabdian -->
                        </div>
                        <div>Jumlah Aktivitas, Relevansi, Dan Pelibatan Mahasiswa Dalam PkM</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="chartPengabdian"></canvas>
                        </div>
                        <div class="chart-legend mt-2 text-center">
                            <div class="legend-item">
                                <span></span> Aktivitas PKM
                            </div>
                            <div class="legend-item">
                                <span></span> Relevansi PKM
                            </div>
                            <div class="legend-item">
                                <span></span> Pelibatan Mahasiswa
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Total Mahasiswa Reguler -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header card-jumlah-mhs-reguler">
                        <div class="icon-container">
                            <i class="fas fa-user-graduate"></i> <!-- Ikon Mahasiswa -->
                        </div>
                        <div>Total Mahasiswa Reguler</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="chartMahasiswa"></canvas>
                        </div>
                        <div class="chart-legend mt-2 text-center">
                            <div class="legend-item">
                                <span></span> Program Studi A
                            </div>
                            <div class="legend-item">
                                <span></span> Program Studi B
                            </div>
                            <div class="legend-item">
                                <span></span> Program Studi C
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

</div>
@endsection

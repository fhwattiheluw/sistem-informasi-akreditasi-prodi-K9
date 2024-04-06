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
      <a href="/dashboard/edit">
        <!-- <button  type="button" class="btn btn-primary mb-2 mb-md-0 mr-2 ">Ubah data </button> -->
      </a>
      <!-- <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button> -->
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">dashboard</p>
        </a>
        <!-- <a class="pl-3 mr-4" href="#">
        <p class="m-0">Data program studi</p>
      </a> -->
    </div>
    <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
    <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
  </div>
</div>
<!-- first row starts here -->
<div class="row">

  <div class="col-lg-12 row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <h4 class="card-title">Line chart</h4>
        <canvas id="lineChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
  </div>
  
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <h4 class="card-title">Bar chart</h4>
      <canvas id="barChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
    </div>
  </div>
</div>
</div>

<div class="col-lg-12 row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <h4 class="card-title">Area chart</h4>
      <canvas id="areaChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
    </div>
  </div>
</div>
<div class="col-lg-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <h4 class="card-title">Doughnut chart</h4>
    <canvas id="doughnutChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
  </div>
</div>
</div>
</div>

<div class="col-lg-12 row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <h4 class="card-title">Pie chart</h4>
      <canvas id="pieChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
    </div>
  </div>
</div>
<div class="col-lg-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <h4 class="card-title">Scatter chart</h4>
    <canvas id="scatterChart" style="height: 135px; display: block; width: 270px;" width="540" height="270" class="chartjs-render-monitor"></canvas>
  </div>
</div>
</div>
</div>

</div>
<!-- last row starts here -->

</div>
@endsection

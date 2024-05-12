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
                          <p class="m-0 pr-3">Dashboard</p>
                        </a>
                        <a class="pl-3 mr-4" href="#">
                          <p class="m-0">ADE-00234</p>
                        </a>
                      </div>
                      <a href="{{route('repository.form')}}" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                        <i class="mdi mdi-plus-circle"></i> Tambah repository </a>

                      </div>
                    </div>
                    <!-- first row starts here -->
                    <div class="row">
                      <div class="col-xl-9 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap">
                              <div>
                                <div class="card-title mb-0">Sales Revenue</div>
                                <h3 class="font-weight-bold mb-0">$32,409</h3>
                              </div>
                              <div>
                                <div class="d-flex flex-wrap pt-2 justify-content-between sales-header-right">
                                  <div class="d-flex mr-5">
                                    <button type="button" class="btn btn-social-icon btn-outline-sales">
                                      <i class="mdi mdi-inbox-arrow-down"></i>
                                    </button>
                                    <div class="pl-2">
                                      <h4 class="mb-0 font-weight-semibold head-count"> $8,217 </h4>
                                      <span class="font-10 font-weight-semibold text-muted">TOTAL SALES</span>
                                    </div>
                                  </div>
                                  <div class="d-flex mr-3 mt-2 mt-sm-0">
                                    <button type="button" class="btn btn-social-icon btn-outline-sales profit">
                                      <i class="mdi mdi-cash text-info"></i>
                                    </button>
                                    <div class="pl-2">
                                      <h4 class="mb-0 font-weight-semibold head-count"> 2,804 </h4>
                                      <span class="font-10 font-weight-semibold text-muted">TOTAL PROFIT</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p class="text-muted font-13 mt-2 mt-sm-0"> Your sales monitoring dashboard template. <a class="text-muted font-13" href="#"><u>Learn more</u></a>
                            </p>
                            <div class="flot-chart-wrapper">
                              <div id="flotChart" class="flot-chart" style="padding: 0px;">
                                <canvas class="flot-base" width="628" height="216" style="width: 628px; height: 216px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 4px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 72px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 137px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 205px; text-align: center;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 273px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 341px; text-align: center;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 409px; text-align: center;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 477px; text-align: center;">32</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 545px; text-align: center;">36</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 70px; top: 198px; left: 613px; text-align: center;">40</div></div></div>
                              <canvas class="flot-overlay" width="628" height="216" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 628px; height: 216px;"></canvas></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 stretch-card grid-margin">
                        <div class="card card-img">
                          <div class="card-body d-flex align-items-center">
                            <div class="text-white">
                              <h1 class="font-20 font-weight-semibold mb-0"> Get premium </h1>
                              <h1 class="font-20 font-weight-semibold">account!</h1>
                              <p>to optimize your selling prodcut</p>
                              <p class="font-10 font-weight-semibold"> Enjoy the advantage of premium. </p>
                              <button class="btn bg-white font-12">Get Premium</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- chart row starts here -->
                    <div class="row">
                      <div class="col-sm-6 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between">
                              <div class="card-title"> Customers <small class="d-block text-muted">August 01 - August 31</small>
                              </div>
                              <div class="d-flex text-muted font-20">
                                <i class="mdi mdi-printer mouse-pointer"></i>
                                <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                              </div>
                            </div>
                            <h3 class="font-weight-bold mb-0"> 2,409 <span class="text-success h5">4,5%<i class="mdi mdi-arrow-up"></i></span>
                            </h3>
                            <span class="text-muted font-13">Avg customers/Day</span>
                            <div class="line-chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                              <canvas id="linechart" height="144" width="540" style="display: block; width: 270px; height: 72px;" class="chartjs-render-monitor"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between">
                              <div class="card-title"> Conversions <small class="d-block text-muted">August 01 - August 31</small>
                              </div>
                              <div class="d-flex text-muted font-20">
                                <i class="mdi mdi-printer mouse-pointer"></i>
                                <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                              </div>
                            </div>
                            <h3 class="font-weight-bold mb-0"> 0.40% <span class="text-success h5">0.20%<i class="mdi mdi-arrow-up"></i></span>
                            </h3>
                            <span class="text-muted font-13">Avg customers/Day</span>
                            <div class="bar-chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                              <canvas id="barchart" height="144" width="540" style="display: block; width: 270px; height: 72px;" class="chartjs-render-monitor"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- image card row starts here -->
                    <div class="row">
                      <div class="col-sm-4 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body p-0">
                            <img class="img-fluid w-100" src="../assets/images/dashboard/img_1.jpg" alt="">
                          </div>
                          <div class="card-body px-3 text-dark">
                            <div class="d-flex justify-content-between">
                              <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                              <i class="mdi mdi-heart-outline"></i>
                            </div>
                            <h5 class="font-weight-semibold"> Cosy Studio flat in London </h5>
                            <div class="d-flex justify-content-between font-weight-semibold">
                              <p class="mb-0">
                                <i class="mdi mdi-star star-color pr-1"></i>4.60 (35) </p>
                                <p class="mb-0">$5,267/night</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 stretch-card grid-margin">
                          <div class="card">
                            <div class="card-body p-0">
                              <img class="img-fluid w-100" src="../assets/images/dashboard/img_2.jpg" alt="">
                            </div>
                            <div class="card-body px-3 text-dark">
                              <div class="d-flex justify-content-between">
                                <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                <i class="mdi mdi-heart-outline"></i>
                              </div>
                              <h5 class="font-weight-semibold"> Victoria Bedsit Studio Ensuite </h5>
                              <div class="d-flex justify-content-between font-weight-semibold">
                                <p class="mb-0">
                                  <i class="mdi mdi-star star-color pr-1"></i>4.83 (12) </p>
                                  <p class="mb-0">$6,144/night</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 stretch-card grid-margin">
                            <div class="card">
                              <div class="card-body p-0">
                                <img class="img-fluid w-100" src="../assets/images/dashboard/img_3.jpg" alt="">
                              </div>
                              <div class="card-body px-3 text-dark">
                                <div class="d-flex justify-content-between">
                                  <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                  <i class="mdi mdi-heart-outline"></i>
                                </div>
                                <h5 class="font-weight-semibold">Fabulous Huge Room</h5>
                                <div class="d-flex justify-content-between font-weight-semibold">
                                  <p class="mb-0">
                                    <i class="mdi mdi-star star-color pr-1"></i>3.83 (15) </p>
                                    <p class="mb-0">$5,267/night</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- table row starts here -->
                          <div class="row">
                            <div class="col-xl-4 grid-margin">
                              <div class="card card-stat stretch-card mb-3">
                                <div class="card-body">
                                  <div class="d-flex justify-content-between">
                                    <div class="text-white">
                                      <h3 class="font-weight-bold mb-0">$168.90</h3>
                                      <h6>This Month</h6>
                                      <div class="badge badge-danger">23%</div>
                                    </div>
                                    <div class="flot-bar-wrapper">
                                      <div id="column-chart" class="flot-chart" style="padding: 0px;"><canvas class="flot-base" width="107" height="88" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;"></canvas><canvas class="flot-overlay" width="107" height="88" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;"></canvas></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card stretch-card mb-3">
                                <div class="card-body d-flex flex-wrap justify-content-between">
                                  <div>
                                    <h4 class="font-weight-semibold mb-1 text-black"> Member Profit </h4>
                                    <h6 class="text-muted">Average Weekly Profit</h6>
                                  </div>
                                  <h3 class="text-success font-weight-bold">+168.900</h3>
                                </div>
                              </div>
                              <div class="card stretch-card mb-3">
                                <div class="card-body d-flex flex-wrap justify-content-between">
                                  <div>
                                    <h4 class="font-weight-semibold mb-1 text-black"> Total Profit </h4>
                                    <h6 class="text-muted">Weekly Customer Orders</h6>
                                  </div>
                                  <h3 class="text-success font-weight-bold">+6890.00</h3>
                                </div>
                              </div>
                              <div class="card mt-3">
                                <div class="card-body d-flex flex-wrap justify-content-between">
                                  <div>
                                    <h4 class="font-weight-semibold mb-1 text-black"> Issue Reports </h4>
                                    <h6 class="text-muted">System bugs and issues</h6>
                                  </div>
                                  <h3 class="text-danger font-weight-bold">-8380.00</h3>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-8 stretch-card grid-margin">
                              <div class="card">
                                <div class="card-body pb-0">
                                  <h4 class="card-title mb-0">Financial management review</h4>
                                </div>
                                <div class="card-body p-0">
                                  <div class="table-responsive">
                                    <table class="table custom-table text-dark">
                                      <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Sale Rate</th>
                                          <th>Actual</th>
                                          <th>Variance</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image"> Jacob Jensen </td>
                                            <td>
                                              <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">85%</span>
                                                <div class="br-wrapper br-theme-css-stars"><select id="star-1" name="rating" autocomplete="off" style="display: none;">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a></div></div>
                                              </div>
                                            </td>
                                            <td>32,435</td>
                                            <td>40,234</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image"> Cecelia Bradley </td>
                                              <td>
                                                <div class="d-flex">
                                                  <span class="pr-2 d-flex align-items-center">55%</span>
                                                  <div class="br-wrapper br-theme-css-stars"><select id="star-2" name="rating" autocomplete="off" style="display: none;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                  </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                </div>
                                              </td>
                                              <td>4,36780</td>
                                              <td>765728</td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <img src="../assets/images/faces/face4.jpg" class="mr-2" alt="image"> Leah Sherman </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <span class="pr-2 d-flex align-items-center">23%</span>
                                                    <div class="br-wrapper br-theme-css-stars"><select id="star-3" name="rating" autocomplete="off" style="display: none;">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                  </div>
                                                </td>
                                                <td>2300</td>
                                                <td>22437</td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <img src="../assets/images/faces/face5.jpg" class="mr-2" alt="image"> Ina Curry </td>
                                                  <td>
                                                    <div class="d-flex">
                                                      <span class="pr-2 d-flex align-items-center">44%</span>
                                                      <div class="br-wrapper br-theme-css-stars"><select id="star-4" name="rating" autocomplete="off" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                      </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                    </div>
                                                  </td>
                                                  <td>53462</td>
                                                  <td>1,75938</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <img src="../assets/images/faces/face7.jpg" class="mr-2" alt="image"> Lida Fitzgerald </td>
                                                    <td>
                                                      <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">65%</span>
                                                        <div class="br-wrapper br-theme-css-stars"><select id="star-5" name="rating" autocomplete="off" style="display: none;">
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                        </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                      </div>
                                                    </td>
                                                    <td>67453</td>
                                                    <td>765377</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image"> Stella Johnson </td>
                                                      <td>
                                                        <div class="d-flex">
                                                          <span class="pr-2 d-flex align-items-center">49%</span>
                                                          <div class="br-wrapper br-theme-css-stars"><select id="star-6" name="rating" autocomplete="off" style="display: none;">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                          </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                        </div>
                                                      </td>
                                                      <td>43662</td>
                                                      <td>96535</td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <img src="../assets/images/faces/face9.jpg" class="mr-2" alt="image"> Maria Ortiz </td>
                                                        <td>
                                                          <div class="d-flex">
                                                            <span class="pr-2 d-flex align-items-center">65%</span>
                                                            <div class="br-wrapper br-theme-css-stars"><select id="star-7" name="rating" autocomplete="off" style="display: none;">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                            </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                                          </div>
                                                        </td>
                                                        <td>76555</td>
                                                        <td>258546</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold pl-4" href="#">Show more</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- doughnut chart row starts -->
                                        <div class="row">
                                          <div class="col-sm-12 stretch-card grid-margin">
                                            <div class="card">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">Channel Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                          <canvas id="doughnutChart1" width="152" height="152" class="chartjs-render-monitor" style="display: block; width: 76px; height: 76px;"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"><ul><li><span class="legend-dots" style="background:#5e6eed"></span>Organic search</li><li><span class="legend-dots" style="background:#00cff4"></span>Refferral</li><li><span class="legend-dots" style="background:#ff5730"></span>Social Media</li></ul></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">News Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                          <canvas id="doughnutChart2" width="152" height="152" class="chartjs-render-monitor" style="display: block; width: 76px; height: 76px;"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend2" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"><ul><li><span class="legend-dots" style="background:#5e6eed"></span>Page views</li><li><span class="legend-dots" style="background:#00d284"></span>New users</li><li><span class="legend-dots" style="background:#ff0d59"></span>Bounce rate</li></ul></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="card border-0">
                                                    <div class="card-body">
                                                      <div class="card-title">Device Sessions</div>
                                                      <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                          <canvas id="doughnutChart3" width="152" height="152" class="chartjs-render-monitor" style="display: block; width: 76px; height: 76px;"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend3" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"><ul><li><span class="legend-dots" style="background:#00cff4"></span>Iphone</li><li><span class="legend-dots" style="background:#00d284"></span>Samsung</li><li><span class="legend-dots" style="background:#ff0d59"></span>Oneplus</li></ul></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- last row starts here -->
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

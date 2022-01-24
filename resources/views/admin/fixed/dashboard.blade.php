@extends('master')
@section('content')
    

<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-sm-6">
              <div class="card">
                  <div class="stat-widget-two card-body">
                      <div class="stat-content">
                          <div class="stat-text">Total Causes </div>
                          <div class="stat-digit"> {{$count['cause']}}</div>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="card">
                  <div class="stat-widget-two card-body">
                      <div class="stat-content">
                          <div class="stat-text">Total Donors</div>
                          <div class="stat-digit"></i>{{$count['donor']}}</div>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="card">
                  <div class="stat-widget-two card-body">
                      <div class="stat-content">
                          <div class="stat-text">Total Volunteers</div>
                          <div class="stat-digit"> {{$count['volunteer']}}</div>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="card">
                  <div class="stat-widget-two card-body">
                      <div class="stat-content">
                          <div class="stat-text">Total Donations</div>
                          <div class="stat-digit"> <i class="fa fa-usd"></i>{{$count['donation']}}</div>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Sold</h4>
                        <div class="card-action">
                            <div class="dropdown custom-dropdown">
                                <div data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart py-4">
                            <canvas id="sold-product"></canvas>
                        </div>
                    </div>
                </div>
            </div>
              @endsection
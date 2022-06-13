@extends('layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1 class="m-0">{{__('Dashboard')}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
        <div class="row text-center ml-2 mr-2">
            <div class=" col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">WARDS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$wards}}</span>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">PEOPLES</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$peoples}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-shopping-cart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">MARKETS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$markets}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-university"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">EDUCATION INSTITUTE</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$educationInstitutes}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-hospital"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">HOSPITALS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$hospitals}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-toilet"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">PUBLIC TOILETS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$publicToilets}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-wrench"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">EQUIPMENTS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$equipments}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-toolbox"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">RENTED EQUIPMENTS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="info-box-number">{{$rentedEquipments}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 ml-2 mr-2">
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small card -->
                <div class="small-box bg-success" style="word-wrap: break-word;">
                    <div class="inner">
                        <p><b style="font-weight: bolder">TODAY'S</b> EARNING FROM LICENSES</p>
                        <h3>{{number_format($earningFromLicenses,2,'.',',')}}</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small card -->
                <div class="small-box bg-success" style="word-wrap: break-word;">
                    <div class="inner">
                        <p><b style="font-weight: bolder">WEEKLY</b> EARNING FROM LICENSES</p>
                        <h3>{{number_format($weeklyEarningFromLicenses,2,'.',',')}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small card -->
                <div class="small-box bg-success" style="word-wrap: break-word;" >
                    <div class="inner">
                        <p><b style="font-weight: bolder">MONTHLY</b> EARNING FROM LICENSES</p>
                        <h3>{{number_format($monthlyEarningFromLicenses,2,'.',',')}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small card -->
                <div class="small-box bg-success" style="word-wrap: break-word;" >
                    <div class="inner">
                        <p><b style="font-weight: bolder">YEARLY</b> EARNING FROM LICENSES</p>
                        <h3>{{number_format($yearlyEarningFromLicenses,2,'.',',' )}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  mt-3 ml-2 mr-2">
            <div class="col-md-3">
                <div class="info-box mb-3 bg-lightblue">
                    <span class="info-box-icon"><i class="far fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">EMPLOYEES</span>
                        <span class="info-box-number">{{$employees}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>

{{--                <!-- Info boxes -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-sm-6 col-md-3">--}}
{{--                        <div class="info-box">--}}
{{--                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>--}}

{{--                            <div class="info-box-content">--}}
{{--                                <span class="info-box-text">CPU Traffic</span>--}}
{{--                                <span class="info-box-number">--}}
{{--                  10--}}
{{--                  <small>%</small>--}}
{{--                </span>--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box-content -->--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                    <div class="col-12 col-sm-6 col-md-3">--}}
{{--                        <div class="info-box mb-3">--}}
{{--                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>--}}

{{--                            <div class="info-box-content">--}}
{{--                                <span class="info-box-text">Likes</span>--}}
{{--                                <span class="info-box-number">41,410</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box-content -->--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}

{{--                    <!-- fix for small devices only -->--}}
{{--                    <div class="clearfix hidden-md-up"></div>--}}

{{--                    <div class="col-12 col-sm-6 col-md-3">--}}
{{--                        <div class="info-box mb-3">--}}
{{--                            <span class="info-box-icon bg-success elevation-1"><i--}}
{{--                                    class="fas fa-shopping-cart"></i></span>--}}

{{--                            <div class="info-box-content">--}}
{{--                                <span class="info-box-text">Sales</span>--}}
{{--                                <span class="info-box-number">760</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box-content -->--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                    <div class="col-12 col-sm-6 col-md-3">--}}
{{--                        <div class="info-box mb-3">--}}
{{--                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>--}}

{{--                            <div class="info-box-content">--}}
{{--                                <span class="info-box-text">New Members</span>--}}
{{--                                <span class="info-box-number">2,000</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.info-box-content -->--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h5 class="card-title">Monthly Recap Report</h5>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <button type="button" class="btn btn-tool dropdown-toggle"--}}
{{--                                                data-toggle="dropdown">--}}
{{--                                            <i class="fas fa-wrench"></i>--}}
{{--                                        </button>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-right" role="menu">--}}
{{--                                            <a href="#" class="dropdown-item">Action</a>--}}
{{--                                            <a href="#" class="dropdown-item">Another action</a>--}}
{{--                                            <a href="#" class="dropdown-item">Something else here</a>--}}
{{--                                            <a class="dropdown-divider"></a>--}}
{{--                                            <a href="#" class="dropdown-item">Separated link</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <p class="text-center">--}}
{{--                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>--}}
{{--                                        </p>--}}

{{--                                        <div class="chart">--}}
{{--                                            <!-- Sales Chart Canvas -->--}}
{{--                                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.chart-responsive -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.col -->--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <p class="text-center">--}}
{{--                                            <strong>Goal Completion</strong>--}}
{{--                                        </p>--}}

{{--                                        <div class="progress-group">--}}
{{--                                            Add Products to Cart--}}
{{--                                            <span class="float-right"><b>160</b>/200</span>--}}
{{--                                            <div class="progress progress-sm">--}}
{{--                                                <div class="progress-bar bg-primary" style="width: 80%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.progress-group -->--}}

{{--                                        <div class="progress-group">--}}
{{--                                            Complete Purchase--}}
{{--                                            <span class="float-right"><b>310</b>/400</span>--}}
{{--                                            <div class="progress progress-sm">--}}
{{--                                                <div class="progress-bar bg-danger" style="width: 75%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- /.progress-group -->--}}
{{--                                        <div class="progress-group">--}}
{{--                                            <span class="progress-text">Visit Premium Page</span>--}}
{{--                                            <span class="float-right"><b>480</b>/800</span>--}}
{{--                                            <div class="progress progress-sm">--}}
{{--                                                <div class="progress-bar bg-success" style="width: 60%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- /.progress-group -->--}}
{{--                                        <div class="progress-group">--}}
{{--                                            Send Inquiries--}}
{{--                                            <span class="float-right"><b>250</b>/500</span>--}}
{{--                                            <div class="progress progress-sm">--}}
{{--                                                <div class="progress-bar bg-warning" style="width: 50%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.progress-group -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.col -->--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                            <!-- ./card-body -->--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3 col-6">--}}
{{--                                        <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-success"><i--}}
{{--                                                    class="fas fa-caret-up"></i> 17%</span>--}}
{{--                                            <h5 class="description-header">$35,210.43</h5>--}}
{{--                                            <span class="description-text">TOTAL REVENUE</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.description-block -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.col -->--}}
{{--                                    <div class="col-sm-3 col-6">--}}
{{--                                        <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-warning"><i--}}
{{--                                                    class="fas fa-caret-left"></i> 0%</span>--}}
{{--                                            <h5 class="description-header">$10,390.90</h5>--}}
{{--                                            <span class="description-text">TOTAL COST</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.description-block -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.col -->--}}
{{--                                    <div class="col-sm-3 col-6">--}}
{{--                                        <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-success"><i--}}
{{--                                                    class="fas fa-caret-up"></i> 20%</span>--}}
{{--                                            <h5 class="description-header">$24,813.53</h5>--}}
{{--                                            <span class="description-text">TOTAL PROFIT</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.description-block -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.col -->--}}
{{--                                    <div class="col-sm-3 col-6">--}}
{{--                                        <div class="description-block">--}}
{{--                                            <span class="description-percentage text-danger"><i--}}
{{--                                                    class="fas fa-caret-down"></i> 18%</span>--}}
{{--                                            <h5 class="description-header">1200</h5>--}}
{{--                                            <span class="description-text">GOAL COMPLETIONS</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.description-block -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-footer -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--            </div><!--/. container-fluid -->--}}
{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
    <!-- /.content-wrapper -->

@endsection
@push('customScripts')
    <script>
    </script>
@endpush

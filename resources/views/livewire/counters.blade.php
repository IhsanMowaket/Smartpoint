@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Advanced UI</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                <li class="breadcrumb-item active" aria-current="page">Counters</li>
            </ol>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i>
                </button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate">
                        <a class="dropdown-item" href="javascript:void(0);">2015</a>
                        <a class="dropdown-item" href="javascript:void(0);">2016</a>
                        <a class="dropdown-item" href="javascript:void(0);">2017</a>
                        <a class="dropdown-item" href="javascript:void(0);">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <!-- ROW -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card  bg-primary-gradient">
                <div class="card-body">
                    <div class="counter-status d-flex md-mb-0">
                        <div class="counter-icon">
                            <i class="icon icon-people"></i>
                        </div>
                        <div class="ms-auto text-end">
                            <h5 class="tx-13 tx-white-8 mb-3">Clients</h5>
                            <h2 class="counter mb-0 text-white">2569</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card  bg-danger-gradient">
                <div class="card-body">
                    <div class="counter-status d-flex md-mb-0">
                        <div class="counter-icon text-warning">
                            <i class="icon icon-rocket"></i>
                        </div>
                        <div class="ms-auto text-end">
                            <h5 class="tx-13 tx-white-8 mb-3">Total Sales</h5>
                            <h2 class="counter mb-0 text-white">1765</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card  bg-success-gradient">
                <div class="card-body">
                    <div class="counter-status d-flex md-mb-0">
                        <div class="counter-icon text-primary">
                            <i class="icon icon-docs"></i>
                        </div>
                        <div class="ms-auto text-end">
                            <h5 class="tx-13 tx-white-8 mb-3">Total Projects</h5>
                            <h2 class="counter mb-0 text-white">846</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card  bg-warning-gradient">
                <div class="card-body">
                    <div class="counter-status d-flex md-mb-0">
                        <div class="counter-icon text-success">
                            <i class="icon icon-emotsmile"></i>
                        </div>
                        <div class="ms-auto text-end">
                            <h5 class="tx-13 tx-white-8 mb-3">Happy Customers</h5>
                            <h2 class="counter mb-0 text-white">7253</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <div>
                        <h6 class="card-title">Time Counting From 0</h6>
                    </div>
                    <img src="{{asset('build/assets/img/pngs/4.png')}}" alt="counter-image" class="wd-160 ht-160 ">
                    <div class="pb-0 mt-3">
                        <span id="timer-countup" class="tx-26 mb-0"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <div>
                        <h6 class="card-title">Time Counting From 60 to 20</h6>
                    </div>
                    <img src="{{asset('build/assets/img/pngs/5.png')}}" alt="counter-image" class="wd-160 ht-160 ">
                    <div class="mt-3">
                        <span id="timer-countinbetween" class="tx-26 mb-0"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body text-center ">
                    <div>
                        <h6 class="card-title">Time 1 minute counter</h6>
                    </div>
                    <img src="{{asset('build/assets/img/pngs/6.png')}}" alt="counter-image" class="wd-160 ht-160 ">
                    <div class="mt-3">
                        <span id="timer-countercallback" class="tx-26 mb-0"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <div>
                        <h6 class="card-title">Time Counting days Limit</h6>
                    </div>
                    <div class="p-2">
                        <span id="timer-outputpattern" class="h3 mb-0 text-primary"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL DATEPICKER JS -->
    <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- INTERNAL COUNTERS -->
    <script src="{{asset('build/assets/plugins/counters/waypoints.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/counters/counterup.min.js')}}"></script>

    <!-- INTERNAL TIME COUNTER -->
    <script src="{{asset('build/assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
    <script src="{{asset('build/assets/plugins/counters/counter.js')}}"></script>
@endsection

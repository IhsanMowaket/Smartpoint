@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Charts</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Flot-chart</li>
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

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-md-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Line Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotLine1"></div>
                </div>
            </div>
        </div><!-- col-6 -->
        <div class="col-md-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Line Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotLine2"></div>
                </div>
            </div>
        </div><!-- col-6 -->
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-md-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Area Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotArea1"></div>
                </div>
            </div>
        </div><!-- col-6 -->
        <div class="col-md-6 ">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Area Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotArea2"></div>
                </div>
            </div>
        </div><!-- col-6 -->
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-md-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Bar Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotBar1"></div>
                </div>
            </div>
        </div><!-- col-6 -->
        <div class="col-md-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Bar Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotBar2"></div>
                </div>
            </div>
        </div><!-- col-6 -->
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-md-6">
            <div class="card mg-b-20 mg-md-b-0">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Pie Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotPie1"></div>
                </div>
            </div>
        </div><!-- col-6 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Pie Chart
                    </div>
                    <p class="mg-b-20">Basic Charts Of Valex template.</p>
                    <div class="ht-200 ht-sm-300" id="flotPie2"></div>
                </div>
            </div>
        </div><!-- col-6 -->
    </div>
    <!-- ROW CLOSED -->

@endsection

@section('scripts')

    <!-- INTERNAL DATEPICKER JS -->
    <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- INTERNAL FLOT JS -->
    <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

    <!-- INTERNAL FLOT JS -->
    @vite('resources/assets/js/chart.flot.js')
@endsection

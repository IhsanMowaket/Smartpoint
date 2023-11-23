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
                <li class="breadcrumb-item active" aria-current="page">Sparkline-chart</li>
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
        <div class="col-xl-6">
            <div class="card mg-b-20 overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Line Chart
                    </div>
                    <p class="mg-b-20">Below is the basic line chart example.</p>
                    <div class="d-sm-flex">
                        <div class="">
                            <span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
                        </div>
                        <div class="mg-t-20 mg-sm-t-0 mg-sm-l-30">
                            <span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- col-->
        <div class="col-xl-6">
            <div class="card mg-b-20 overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Area Chart
                    </div>
                    <p class="mg-b-20">Below is the area bar chart example.</p>
                    <div class="d-sm-flex">
                        <div class="">
                            <span id="sparkline3">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
                        </div>
                        <div class="mg-t-20 mg-sm-t-0 mg-sm-l-30">
                            <span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-lg-6">
            <div class="card mg-b-20 overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Bar Chart
                    </div>
                    <p class="mg-b-20">Below is the basic bar chart example.</p>
                    <div class="d-sm-flex">
                        <div class="">
                            <span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
                        </div>
                        <div class="mg-t-20 mg-sm-t-0 mg-sm-l-30">
                            <span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- col-->

        <div class="col-lg-6">
            <div class="card mg-b-20 overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Stacked Bar Chart
                    </div>
                    <p class="mg-b-20">Below is the basic stacked bar chart example.</p>
                    <div class="d-sm-flex">
                        <div class="">
                            <span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
                        </div>
                        <div class="mg-t-20 mg-sm-t-0 mg-sm-l-30">
                            <span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW OPEN -->
    <div class="row row-sm">
        <div class="col-md-12">
            <!-- div -->
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Pie Chart
                    </div>
                    <p class="mg-b-20">An example of a pie chart with two series.</p>
                    <div class="d-flex">
                        <div class="">
                            <span id="sparkline9">3,4,4</span>
                        </div>
                        <div class="mg-l-30">
                            <span id="sparkline10">3,4,4,7,5,9</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /div -->
        </div><!-- col-6 -->
    </div>
    <!-- ROW CLOSED -->

@endsection

@section('scripts')

    <!-- INTERNAL JQUERY-SPARKLINE JS -->
    <script src="{{asset('build/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    @vite('resources/assets/js/chart.sparkline.js')

@endsection

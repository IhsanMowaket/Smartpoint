@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Apps</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rangeslider</li>
            </ol>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
                            class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i
                            class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i
                            class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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
        <div class="col-sm-12 col-md-12 col-lg-12">

            <!--div-->
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Range Slider (Modern Skin)
                    </div>
                    <p class="mg-b-20">It is the modern skin range slider of Redash.</p>
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <input class="rangeslider1" data-extra-classes="irs-modern" name="example_name"
                                   type="text">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider2" data-extra-classes="irs-modern" name="example_name"
                                   type="text">
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider3" data-extra-classes="irs-modern" name="example_name"
                                   type="text">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider4" data-extra-classes="irs-modern" name="example_name"
                                   type="text">
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->

            <!--div-->
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Range Slider (Outline Skin)
                    </div>
                    <p class="mg-b-20">It is the outline skin range slider of Redash.</p>
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <input class="rangeslider1" data-extra-classes="irs-outline" name="example_name"
                                   type="text">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider2" data-extra-classes="irs-outline" name="example_name"
                                   type="text">
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name"
                                   type="text">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider4" data-extra-classes="irs-outline" name="example_name"
                                   type="text">
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->

            <!--div-->
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Range Slider
                    </div>
                    <p class="mg-b-20">Default range slider Of Valex.</p>
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <input class="rangeslider1" name="example_name" type="text" value="">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider2" name="example_name" type="text" value="">
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider3" name="example_name" type="text" value="">
                        </div>
                        <div class="col-lg-12 mg-t-20">
                            <input class="rangeslider4" name="example_name" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL ION-RANGESLIDER JS  -->
    <script src="{{asset('build/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

    <!-- INTERNAL RANGESLIDER JS -->
    @vite('resources/assets/js/rangeslider.js')

@endsection

@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Elements</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tooltip</li>
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
        <div class="col-xl-12 col-lg-12">
            <!-- div -->
            <div class="card mg-b-20" id="Tooltip">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Default Tooltip
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="main-content-label main-content-label-sm mg-b-10">
                        Static Example
                    </div>
                    <div class="tooltip-static-demo mg-b-20 tooltip-demo">
                        <div class="row row-sm">
                            <div class="col-sm-6 col-lg-3 mg-lg-t-0 ">
                                <div class="tooltip bs-tooltip-top tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the top
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip bs-tooltip-bottom tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the bottom
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip bs-tooltip-start tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-left-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the left
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip bs-tooltip-end tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-right-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the right
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- tooltip-static-demo -->
                    <div class="main-content-label main-content-label-sm mg-b-10">
                        Example
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row row-sm tx-center justify-content-center">
                                <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                    <button class="btn btn-secondary" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="Tooltip on the top">Hover me
                                    </button>
                                </div>
                                <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                    <button class="btn btn-secondary" data-bs-placement="bottom"
                                            data-bs-toggle="tooltip" title="Tooltip on the bottom">Hover me
                                    </button>
                                </div>
                                <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                    <button class="btn btn-secondary" data-bs-placement="left"
                                            data-bs-toggle="tooltip" title="Tooltip on the left">Hover me
                                    </button>
                                </div>
                                <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                    <button class="btn btn-secondary" data-bs-placement="right"
                                            data-bs-toggle="tooltip" title="Tooltip on the right">Hover me
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /div -->

            <!--div-->
            <div class="card mg-b-20" id="Tooltip2">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Colored Tooltip
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="main-content-label main-content-label-sm mg-b-10">
                        Static Example
                    </div>
                    <div class="tooltip-static-demo mg-b-20 tooltip-demo">
                        <div class="row row-sm me-0">
                            <div class="col-sm-6 col-lg-3 mg-lg-t-0">
                                <div class="tooltip tooltip-primary bs-tooltip-top position-relative tooltip-individual"
                                     role="tooltip">
                                    <div class="tooltip-arrow tooltip-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the top
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip tooltip-primary bs-tooltip-bottom tooltip-individual"
                                     role="tooltip">
                                    <div class="tooltip-arrow tooltip-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the bottom
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip tooltip-primary bs-tooltip-start tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-left-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the left
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
                                <div class="tooltip tooltip-primary bs-tooltip-end tooltip-individual" role="tooltip">
                                    <div class="tooltip-arrow tooltip-right-arrow-individual"></div>
                                    <div class="tooltip-inner">
                                        Tooltip on the right
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- tooltip-static-demo -->
                    <div class="main-content-label main-content-label-sm mg-b-10">
                        Example
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="">
                                <div class="row row-sm tx-center justify-content-center">
                                    <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                        <button class="btn btn-secondary" data-bs-placement="top"
                                                data-bs-toggle="tooltip-primary" title="Tooltip on the top"
                                                type="button">Hover me
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                        <button class="btn btn-secondary" data-bs-placement="bottom"
                                                data-bs-toggle="tooltip-primary" title="Tooltip on the bottom"
                                                type="button">Hover me
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                        <button class="btn btn-secondary" data-bs-placement="left"
                                                data-bs-toggle="tooltip-primary" title="Tooltip on the left"
                                                type="button">Hover me
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 mg-t-10 mg-b-10 mg-lg-t-0 mg-lg-b-0">
                                        <button class="btn btn-secondary" data-bs-placement="right"
                                                data-bs-toggle="tooltip-primary" title="Tooltip on the right"
                                                type="button">Hover me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--div-->
        </div>
        <!--/div-->
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- TOOLTIP JS -->
    @vite('resources/assets/js/tooltip.js')

@endsection

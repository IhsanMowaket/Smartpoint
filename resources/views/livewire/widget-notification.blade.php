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
                <li class="breadcrumb-item active" aria-current="page">Widget-Notifications</li>
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
                    <div class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuDate">
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
    <div class="row row-sm">
        <div class="col-lg-6 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body bd bd-success text-success text-center">
                    <div class="success-widget">
                        <h3>Success!</h3>
                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                            will try our best to respond to your inquiry.</p>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body bd bd-danger text-danger text-center">
                    <div class="danger-widget">
                        <h3>Danger!</h3>
                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                            will try our best to respond to your inquiry.</p>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-12 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body bd bd-warning text-warning text-center">
                    <div class="warning-widget">
                        <h3>Warning!</h3>
                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                            will try our best to respond to your inquiry.</p>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>

        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body text-danger">
                    <div class="main-error-wrapper">
                        <i class="si si-close mg-b-20 tx-50"></i>
                        <h4 class="mg-b-20">Data Not Found.</h4>
                        <a class="btn btn-outline-danger btn-sm" href="javascript:void(0);">Click to view details</a>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body text-success">
                    <div class="main-error-wrapper">
                        <i class="si si-check mg-b-20 tx-50"></i>
                        <h4 class="mg-b-20">Submitted Successfully</h4>
                        <a class="btn btn-outline-success btn-sm" href="javascript:void(0);">Click to view details</a>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-12 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20">
                <div class="card-body text-info">
                    <div class="main-error-wrapper">
                        <i class="si si-info mg-b-20 tx-50"></i>
                        <h4 class="mg-b-20">Info Alert</h4>
                        <a class="btn btn-outline-info btn-sm" href="javascript:void(0);">Click to view details</a>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-danger">
                <div class="card-body text-white">
                    <div class="main-error-wrapper">
                        <i class="si si-close mg-b-20 tx-50"></i>
                        <h4 class="mg-b-0">Data Not Found.</h4>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-success">
                <div class="card-body text-white">
                    <div class="main-error-wrapper">
                        <i class="si si-check mg-b-20 tx-50"></i>
                        <h4 class="mg-b-0">Submitted Successfully</h4>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-12 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-info">
                <div class="card-body text-white">
                    <div class="main-error-wrapper">
                        <i class="si si-info mg-b-20 tx-50"></i>
                        <h4 class="mg-b-0">Info Alert</h4>
                    </div>
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-danger-transparent alert p-0">
                <div class="card-header text-danger fw-bold">
                    <i class="far fa-times-circle"></i> Error Data
                    <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button"><span
                                aria-hidden="true">×</span></button>
                </div>
                <div class="card-body text-danger">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-6 col-md-6 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-success-transparent alert p-0">
                <div class="card-header text-success fw-bold">
                    <i class="far fa-check-circle"></i> Success Data
                    <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button"><span
                                aria-hidden="true">×</span></button>
                </div>
                <div class="card-body text-success">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
        <div class="col-lg-12 col-md-12 col-xl-4">
            <!--Page Widget Error-->
            <div class="card bd-0 mg-b-20 bg-info-transparent alert p-0">
                <div class="card-header text-info fw-bold">
                    <i class="far fa-question-circle"></i> Info Data
                    <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button"><span
                                aria-hidden="true">×</span></button>
                </div>
                <div class="card-body text-info">
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super
                    important.
                </div>
            </div>
            <!--Page Widget Error-->
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-lg-6 col-md-6 col-xl-4">
            <div class="card mg-b-20 text-center">
                <div class="card-body h-100">
                    <img src="{{asset('build/assets/img/svgicons/no-data.svg')}}" alt="" class="wd-35p">
                    <h5 class="mg-b-10 mg-t-15 tx-18">Items Not Found</h5>
                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xl-4">
            <div class="card mg-b-20 text-center">
                <div class="card-body h-100">
                    <img src="{{asset('build/assets/img/svgicons/note_taking.svg')}}" alt="" class="wd-35p">
                    <h5 class="mg-b-10 mg-t-15 tx-18">Its Empty In Here</h5>
                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xl-4">
            <div class="card mg-b-20 text-center">
                <div class="card-body h-100">
                    <img src="{{asset('build/assets/img/svgicons/imac.svg')}}" alt="" class="wd-40p">
                    <h5 class="mg-b-10 mg-t-15 tx-18">No Site Selected</h5>
                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL CHART JS -->
    <script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection

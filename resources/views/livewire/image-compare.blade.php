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
                <li class="breadcrumb-item active" aria-current="page">Image-comparison</li>
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
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Horizontal Image Comparision
                    </div>
                    <p class="mg-b-20">Example of Redash Horizontal Image Comparision.</p>
                    <div class="twentytwenty-container">
                        <img src="{{asset('build/assets/img/photos/28.jpg')}}" alt="img">
                        <img src="{{asset('build/assets/img/photos/29.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
            <!-- div -->

            <!-- div -->
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vertical Image Comparision
                    </div>
                    <p class="mg-b-20">Example of Redash Vertical Image Comparision.</p>
                    <div class="twentytwenty-container" data-orientation="vertical">
                        <img src="{{asset('build/assets/img/photos/28.jpg')}}" alt="img">
                        <img src="{{asset('build/assets/img/photos/29.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
            <!-- div -->
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL DATEPICKER JS -->
    <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
    @vite('resources/assets/js/select2.js')


    <!-- INTERNAL IMAGE-COMPARSION JS -->
    <script src="{{asset('build/assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('build/assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
    @vite('resources/assets/js/image-comparision.js')

@endsection

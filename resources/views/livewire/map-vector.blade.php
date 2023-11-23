@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Maps</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vector maps</li>
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
    <div class="row row-sm">
        <div class="col-lg-6">
            <div class="card mg-b-20" id="map">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: World
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mg-b-20" id="map1">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: Canada
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mg-b-20" id="map2">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: USA
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap2"></div>
                </div><!-- col-->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mg-b-20" id="map6">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: Germany
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap7"></div>
                </div><!-- col-->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mg-b-20" id="map7">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: Russia
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap8"></div>
                </div><!-- col-->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" id="map8">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vector Map: France
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
                    </p>
                    <div class="ht-300" id="vmap9"></div>
                </div><!-- col-->
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL VECTOR-MAPS JS -->
    <script src="{{asset('build/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.algeria.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.argentina.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.europe.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
    <script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.france.js')}}"></script>
    @vite('resources/assets/js/vector-map.js')

@endsection

@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Filemanager</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Filemanager</a></li>
                <li class="breadcrumb-item active" aria-current="page">File Details</li>
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
        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body px-4 pt-4">
                    <a href="{{url('blog-details')}}"><img src="{{asset('build/assets/img/photos/27.jpg')}}" alt="img"
                                                           class="cover-image rounded-7 w-100"></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class=" card-body ">
                    <h5 class="mb-3">File details :</h5>
                    <div class="">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 border-top table-bordered text-nowrap">
                                        <tbody>
                                        <tr>
                                            <th scope="row">File-name</th>
                                            <td>image.jpg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">File-size</th>
                                            <td>12.45mb</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">uploaded-date</th>
                                            <td>01-12-2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">uploaded-by</th>
                                            <td>prityy abodh</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">image-width</th>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">image-height</th>
                                            <td>600</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">File-formate</th>
                                            <td>jpg</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th scope="row">File-location</th>
                                            <td>storage/photos/image.jpg</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body h-100">
                    <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/33.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">221.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/30.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">222.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/31.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">223.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/32.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">224.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/33.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">225.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/34.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">226.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/30.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">227.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/32.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">228.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card custom-card overflow-hidden mb-0 ">
                                    <a href="{{url('filemanager-details')}}"><img class="w-100"
                                                                                  src="{{asset('build/assets/img/photos/34.jpg')}}"
                                                                                  alt="img"></a>
                                    <div class="card-footer bd-t-0 py-3">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="mb-0">229.jpg</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <h6 class="text-muted mb-0">120 KB</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="mb-3">Recent Files</h5>
                    <ul id="lightgallery" class="list-unstyled row mb-0">
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/9.jpg')}}"
                            data-src="{{asset('build/assets/img/media/9.jpg')}}"
                            data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/9.jpg')}}"
                                     alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/photos/20.jpg')}}"
                            data-src="{{asset('build/assets/img/photos/20.jpg')}}"
                            data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/photos/20.jpg')}}"
                                     alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/9.jpg')}}"
                            data-src="{{asset('build/assets/img/media/9.jpg')}}"
                            data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/9.jpg')}}"
                                     alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/10.jpg')}}"
                            data-src="{{asset('build/assets/img/media/10.jpg')}}"
                            data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/10.jpg')}}"
                                     alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/5.jpg')}}"
                            data-src="{{asset('build/assets/img/media/5.jpg')}}"
                            data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/5.jpg')}}"
                                     alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/6.jpg')}}"
                            data-src="{{asset('build/assets/img/media/6.jpg')}}"
                            data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/6.jpg')}}"
                                     alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/7.jpg')}}"
                            data-src="{{asset('build/assets/img/media/7.jpg')}}"
                            data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/7.jpg')}}"
                                     alt="Thumb-1">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3  border-bottom-0"
                            data-responsive="{{asset('build/assets/img/media/8.jpg')}}"
                            data-src="{{asset('build/assets/img/media/8.jpg')}}"
                            data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                            <a href="javascript:void(0);">
                                <img class="img-responsive rounded-5" src="{{asset('build/assets/img/media/8.jpg')}}"
                                     alt="Thumb-2">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

@endsection

@section('scripts')

    <!-- GALLERY JS -->
    <script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
    <script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

    <!-- INTERNAL OWL CAROUSEL JS -->
    <script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
    @vite('resources/assets/js/file-details.js')

@endsection

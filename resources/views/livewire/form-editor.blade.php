@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Forms</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form-Editor</li>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h3 class="card-title">Wysiwyag Form Editor</h3>
                </div>
                <div class="card-body">
                    <textarea class="content5" name="example"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h3 class="card-title">Summernote Editor</h3>
                </div>
                <div class="card-body">
                    <div id="summernote"><p>Hello Summernote</p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <div class="card-title">
                        Quill Editor
                    </div>
                </div>
                <div class="card-body">
                    <div class="ql-wrapper ql-wrapper-demo">
                        <div id="quillEditor">
                            <p><strong>Quill</strong> is a free, open source <a
                                        href="https://github.com/quilljs/quill/">Quill Editor</a> built for the modern
                                web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and
                                expressive API, it is completely customizable to fit any need.</p><br>
                            <p>The icons use here as a replacement to default svg icons are from <a
                                        href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <div class="card-title">
                        Form Editor in Modal
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center p-4 border">
                        <a class="btn btn-primary" data-bs-target="#modalQuill" data-bs-toggle="modal"
                           href="javascript:void(0);">View Live Demo</a>
                    </div>
                    <!-- pd-y-30 -->
                    <div class="modal">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header pd-20">
                                    <h6 class="modal-title">Create New Document</h6>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                                aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="ql-wrapper ql-wrapper-modal ht-250">
                                        <div class="flex-1" id="quillEditorModal">
                                            <p><strong>Quill</strong> is a free, open source <a
                                                        href="https://github.com/quilljs/quill/">WYSIWYG editor</a>
                                                built for the modern web. With its <a
                                                        href="https://quilljs.com/docs/modules/">modular
                                                    architecture</a> and expressive API, it is completely customizable
                                                to fit any need.</p><br>
                                            <p>The icons use here as a replacement to default svg icons are from <a
                                                        href="https://icons8.com/line-awesome">Line Awesome Icons</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer pd-20">
                                    <button class="btn btn-primary">Save changes</button>
                                    <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row ">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header border-bottom-0">
                    <div class="card-title">
                        From Inline-Edit Editor
                    </div>
                </div>
                <div class="card-body">
                    <div class="wd-xl-100p ht-350">
                        <div class="ql-scrolling-demo p-4 border" id="scrolling-container">
                            <div id="quillInline">
                                <h2>Try to select me and edit</h2>
                                <p><br></p>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution
                                    of letters, as opposed to using 'Content here, content here', making it look like
                                    readable English. Many desktop publishing packages and web page editors now use
                                    Lorem Ipsum as their default model text,
                                    and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                    Various versions have evolved over the years, sometimes by accident, sometimes on
                                    purpose (injected humour and the like</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- MODAL -->
    <div class="modal" id="modalQuill">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pd-20">
                    <h6 class="modal-title">Create New Document</h6>
                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pd-0">
                    <div class="ql-wrapper ql-wrapper-modal ht-250">
                        <div class="flex-1" id="quillEditorModal2">
                            <p><strong>Quill</strong> is a free, open source <a
                                        href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern
                                web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and
                                expressive API, it is completely customizable to fit any need.</p><br>
                            <p>The icons use here as a replacement to default svg icons are from <a
                                        href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pd-20">
                    <button class="btn btn-main-primary" type="button">Save changes</button>
                    <button class="btn btn-light" type="button">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

@endsection

@section('scripts')

    <!-- INTERNAL QUILL JS -->
    <script src="{{asset('build/assets/plugins/quill/quill.min.js')}}"></script>

    <!-- INTERNAL WYSIWYG EDITOR JS -->
    <script src="{{asset('build/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('build/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

    <!-- INTERNAL SUMMERNOTE EDITOR JS -->
    <script src="{{asset('build/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    @vite('resources/assets/js/summernote.js')


    <!-- INTERNAL FORM-EDITOR JS -->
    @vite('resources/assets/js/form-editor.js')

@endsection

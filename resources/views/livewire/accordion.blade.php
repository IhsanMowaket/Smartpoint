@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Advanced ui</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced ui</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accordion</li>
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
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        14 Aug 2019
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
                        <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <!-- ROW  -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Basic Style Accordion</h6>
                        <p class="text-muted card-sub-title">The default collapse behavior to create an
                            accordion.</p>
                    </div>
                    <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                         role="tablist">
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo21" role="tab">
                                <a aria-controls="collapseTwo21" aria-expanded="true" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseTwo21">Making a Beautiful CSS3
                                    Button Set</a>
                            </div>
                            <div aria-labelledby="headingTwo21" class="collapse"
                                 data-bs-parent="#accordion2" id="collapseTwo21" role="tabpanel">
                                <div class="card-body">
                                    A concisely coded CSS3 button set increases usability across the board,
                                    gives you a ton of options, and keeps all the code involved to an
                                    absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high
                                    life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo22" role="tab">
                                <a aria-controls="collapseTwo22" aria-expanded="true" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseTwo22">Horizontal Navigation
                                    Menu Fold Animation</a>
                            </div>
                            <div aria-labelledby="headingTwo22" class="collapse"
                                 data-bs-parent="#accordion2" id="collapseTwo22" role="tabpanel">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingThree23" role="tab">
                                <a aria-controls="collapseThree23" aria-expanded="false" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseThree23">Creating CSS3 Button
                                    with Rounded Corners</a>
                            </div>
                            <div aria-labelledby="headingThree23" class="collapse"
                                 data-bs-parent="#accordion2" id="collapseThree23" role="tabpanel">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore.
                                </div>
                            </div><!-- collapse -->
                        </div>
                    </div><!-- accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW  -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-header pb-0">
                    <h3 class="card-title">Accordion Style01</h3>
                    <p class="text-muted card-sub-title mb-0">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div class="card-body">
                    <div class="panel-group1" id="accordion11">
                        <div class="panel panel-default  mb-4">
                            <div class="panel-heading1 bg-primary ">
                                <h4 class="panel-title1">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                       data-bs-parent="#accordion11" href="#collapseFour1"
                                       aria-expanded="false"><i class="fe fe-arrow-right me-2"></i>Section
                                        1</a>
                                </h4>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel"
                                 aria-expanded="false">
                                <div class="panel-body border">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true generator
                                        on the Internet. It uses a dictionary of over 200 Latin words </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled.Nor again is there anyone who loves or pursues or
                                        desires to obtain pain of itself, because it is pain, but because
                                        occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever
                                        undertakes laborious physical exercise</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-0">
                            <div class="panel-heading1  bg-primary">
                                <h4 class="panel-title1">
                                    <a class="accordion-toggle mb-0 collapsed" data-bs-toggle="collapse"
                                       data-bs-parent="#accordion11" href="#collapseFive2"
                                       aria-expanded="false"><i class="fe fe-arrow-right me-2"></i>Section
                                        2</a>
                                </h4>
                            </div>
                            <div id="collapseFive2" class="panel-collapse collapse" role="tabpanel"
                                 aria-expanded="false">
                                <div class="panel-body border">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true generator
                                        on the Internet. It uses a dictionary of over 200 Latin words </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled.Nor again is there anyone who loves or pursues or
                                        desires to obtain pain of itself, because it is pain, but because
                                        occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever
                                        undertakes laborious physical exercise</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW  -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Accordion Style02</h3>
                </div>
                <div class="card-body h-100">
                    <div id="accordion" class="w-100 br-2 overflow-hidden">
                        <div class="">
                            <div class="accor bg-primary" id="headingOne1">
                                <h4 class="m-0">
                                    <a href="#collapseOne1" class="" data-bs-toggle="collapse"
                                       aria-expanded="true" aria-controls="collapseOne1">
                                        <i class="si si-cursor-move me-2 d-inline-block"></i>Accordions With Text
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1"
                                 data-bs-parent="#accordion">
                                <div class="border p-3">
                                    I must explain to you how all this mistaken idea of denouncing pleasure
                                    and praising pain was born and I will give you a complete account of the
                                    system, and expound the actual teachings of the great explorer of the
                                    truth, the master-builder of human happiness. No one rejects, dislikes,
                                    or avoids pleasure itself, because it is pleasure, but because those who
                                    do not know how to pursue pleasure rationally encounter consequences
                                    that are extremely painful
                                    sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
                                    harum quidem rerum facilis est et expedita distinctio. Nam libero
                                    tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                    minus id quod maxime placeat facere possimus, omnis voluptas assumenda
                                    est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                                    debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                                    repudiandae sint et molestiae
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="accor  bg-primary" id="headingTwo2">
                                <h4 class="m-0">
                                    <a href="#collapseTwo2" class="collapsed" data-bs-toggle="collapse"
                                       aria-expanded="false" aria-controls="collapseTwo2">
                                        <i class="si si-cursor-move me-2 d-inline-block"></i>Accordions with images
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo2" class="collapse b-b0" aria-labelledby="headingTwo2"
                                 data-bs-parent="#accordion">
                                <div class="border p-3">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded mb-2 mb-lg-0"
                                                 src="{{asset('build/assets/img/photos/8.jpg')}}" alt="banner image">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded mb-2 mb-lg-0"
                                                 src="{{asset('build/assets/img/photos/10.jpg')}}" alt="banner image ">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded mb-2 mb-lg-0"
                                                 src="{{asset('build/assets/img/photos/11.jpg')}}" alt="banner image ">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded mb-2 mb-lg-0"
                                                 src="{{asset('build/assets/img/photos/12.jpg')}}" alt="banner image ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="accor  bg-primary" id="headingThree3">
                                <h4 class="m-0">
                                    <a href="#collapseThree1" class="collapsed" data-bs-toggle="collapse"
                                       aria-expanded="false" aria-controls="collapseThree1">
                                        <i class="si si-cursor-move me-2 d-inline-block"></i>Accordions with tables
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree1" class="collapse b-b0" aria-labelledby="headingThree3"
                                 data-bs-parent="#accordion">
                                <div class="border p-3  accordion-br">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-bordered border-top mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
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
        </div>
    </div>
    <!-- ROW CLOSED -->

    <!-- ROW  -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Colored Style Accordion</h6>
                        <p class="text-muted card-sub-title">The default collapse behavior to create an
                            accordion.</p>
                    </div>
                    <div aria-multiselectable="true" class="accordion accordion-dark"
                         role="tablist">
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo23" role="tab">
                                <a aria-controls="collapseTwo23" aria-expanded="true" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseTwo23">Making a Beautiful CSS3
                                    Button Set</a>
                            </div>
                            <div aria-labelledby="headingTwo23" class="collapse"
                                 data-bs-parent="#accordion2" id="collapseTwo23" role="tabpanel">
                                <div class="card-body">
                                    A concisely coded CSS3 button set increases usability across the board,
                                    gives you a ton of options, and keeps all the code involved to an
                                    absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high
                                    life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo20" role="tab">
                                <a aria-controls="collapseTwo20" aria-expanded="true" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseTwo20">Horizontal Navigation
                                    Menu Fold Animation</a>
                            </div>
                            <div aria-labelledby="headingTwo20" class="collapse"
                                 data-bs-parent="#accordion2" id="collapseTwo20" role="tabpanel">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingThree15" role="tab">
                                <a aria-controls="collapseThree15" aria-expanded="false" class="collapsed"
                                   data-bs-toggle="collapse" href="#collapseThree15">Creating CSS3 Button
                                    with Rounded Corners</a>
                            </div>
                            <div aria-labelledby="headingThree15" class="collapse"
                                 data-bs-parent="#accordion2" role="tabpanel" id="collapseThree15">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore.
                                </div>
                            </div><!-- collapse -->
                        </div>
                    </div><!-- accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->

    @section('scripts')

        <!--- INTERNAL ACCORDION JS -->
        <script src="{{asset('build/assets/plugins/accordion/accordion.min.js')}}"></script>
        @vite('resources/assets/js/accordion.js')

    @endsection

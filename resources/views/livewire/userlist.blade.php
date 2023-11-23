@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Advanced UI</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                <li class="breadcrumb-item active" aria-current="page">Userlist</li>
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
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">USERS TABLE</h4>
                        <a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i
                                    class="mdi mdi-dots-horizontal text-gray"></i></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another
                                Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something Else
                                Here</a>
                        </div>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="javascript:void(0);">Learn
                            more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>User</span></th>
                                <th class="wd-lg-20p"><span></span></th>
                                <th class="wd-lg-20p"><span>Created</span></th>
                                <th class="wd-lg-20p"><span>Status</span></th>
                                <th class="wd-lg-20p"><span>Email</span></th>
                                <th class="wd-lg-20p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/1.jpg')}}">
                                </td>
                                <td>Megan Peters</td>
                                <td>
                                    08/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-muted d-flex">
                                        <div class="dot-label bg-gray-300 me-1"></div>
                                        inactive
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">mila@kunis.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/2.jpg')}}">
                                </td>
                                <td>George Clooney</td>
                                <td>
                                    12/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-success d-flex">
                                        <div class="dot-label bg-success me-1"></div>
                                        active
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">marlon@brando.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/13.jpg')}}">
                                </td>
                                <td>Ryan Gossling</td>
                                <td>
                                    14/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-danger d-flex">
                                        <div class="dot-label bg-danger me-1"></div>
                                        banned
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">jack@nicholson</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/1.jpg')}}">
                                </td>
                                <td> Emma Watson</td>
                                <td>
                                    16/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-warning d-flex">
                                        <div class="dot-label bg-warning me-1"></div>
                                        pending
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">jack@nicholsonm</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/12.jpg')}}">
                                </td>
                                <td>Mila Kunis</td>
                                <td>
                                    18/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-muted d-flex">
                                        <div class="dot-label bg-gray-300 me-1"></div>
                                        inactive
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">mila@kunis.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/4.jpg')}}">
                                </td>
                                <td>Phil Watson</td>
                                <td>
                                    23/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-success d-flex">
                                        <div class="dot-label bg-success me-1"></div>
                                        active
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">phil@watson.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/5.jpg')}}">
                                </td>
                                <td>Sonia Robertson</td>
                                <td>
                                    25/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-success d-flex">
                                        <div class="dot-label bg-success me-1"></div>
                                        active
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">robertson@sonia.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/7.jpg')}}">
                                </td>
                                <td>Adam Hamilton</td>
                                <td>
                                    31/06/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-danger d-flex">
                                        <div class="dot-label bg-danger me-1"></div>
                                        banned
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">mila@kunis.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/9.jpg')}}">
                                </td>
                                <td>Leah Morgan</td>
                                <td>
                                    02/07/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-warning d-flex">
                                        <div class="dot-label bg-warning me-1"></div>
                                        pending
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">morganleah@.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/11.jpg')}}">
                                </td>
                                <td>Amelia McDonald</td>
                                <td>
                                    08/07/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-success d-flex">
                                        <div class="dot-label bg-success me-1"></div>
                                        active
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">amelia23@kunis.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md me-2"
                                         src="{{asset('build/assets/img/users/17.jpg')}}">
                                </td>
                                <td>Paul Molive</td>
                                <td>
                                    12/07/2021
                                </td>
                                <td class="text-center">
                                    <div class="label text-success d-flex">
                                        <div class="dot-label bg-success me-1"></div>
                                        active
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);">paul45@kunis.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b"
                                       data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                       title="" data-bs-original-title="delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination mt-4 mb-0 float-end flex-wrap">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

@endsection

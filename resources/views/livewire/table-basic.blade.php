@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Tables</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic-Tables</li>
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
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
                    <div class="table-responsive border">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Joan Powell</td>
                                <td>Associate Developer</td>
                                <td>$450,870</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Gavin Gibson</td>
                                <td>Account manager</td>
                                <td>$230,540</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Julian Kerr</td>
                                <td>Senior Javascript Developer</td>
                                <td>$55,300</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Accountant</td>
                                <td>$234,100</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Samantha May</td>
                                <td>Junior Technical Author</td>
                                <td>$43,198</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">STRIPED ROWS</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="javascript:void(0);">Learn
                            more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive border">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Joan Powell</td>
                                <td>Associate Developer</td>
                                <td>$450,870</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Gavin Gibson</td>
                                <td>Account manager</td>
                                <td>$230,540</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Julian Kerr</td>
                                <td>Senior Javascript Developer</td>
                                <td>$55,300</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Accountant</td>
                                <td>$234,100</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Samantha May</td>
                                <td>Junior Technical Author</td>
                                <td>$43,198</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Bordered Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="javascript:void(0);">Learn
                            more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Joan Powell</td>
                                <td>Associate Developer</td>
                                <td>$450,870</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Gavin Gibson</td>
                                <td>Account manager</td>
                                <td>$230,540</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Julian Kerr</td>
                                <td>Senior Javascript Developer</td>
                                <td>$55,300</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Accountant</td>
                                <td>$234,100</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Samantha May</td>
                                <td>Junior Technical Author</td>
                                <td>$43,198</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive border">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Primary Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Primary Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-primary align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Secondary Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Secondary Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-secondary align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Success Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Success Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-success align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Danger Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Danger Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-danger align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Info Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Info Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-info align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Warning Table</h4>
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
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Warning Table.. <a
                                href="javascript:void(0);">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-bordered text-nowrap mb-0 table-warning align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$162,700</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

@endsection

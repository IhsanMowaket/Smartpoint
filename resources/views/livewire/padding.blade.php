@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Utilities</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Padding</li>
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
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <!--div-->
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Padding Top values
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                    <div class="d-md-flex">
                        <div class="wd-200 ht-100 bg-gray-500 pd-t-30">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-t-30
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-t-50 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-t-50
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-t-70 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-t-70
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table main-table-reference text-nowrap mg-t-10 mb-0">
                            <tbody>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                <td><code>.pd-t-[value]</code></td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
                                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
                                <td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Padding Left values
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                    <div class="d-md-flex">
                        <div class="wd-200 ht-100 bg-gray-500 pd-l-30">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-l-30
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-l-50 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-l-50
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-l-120 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-l-120
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table main-table-reference text-nowrap mg-t-10 mb-0">
                            <tbody>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                <td><code>.pd-l-[value]</code></td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
                                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
                                <td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Padding Right values
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                    <div class="d-md-flex">
                        <div class="wd-200 ht-100 bg-gray-500 pd-r-30">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-r-30
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-r-50 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-r-50
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-r-120 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-r-120
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table main-table-reference text-nowrap mg-t-10 mb-0">
                            <tbody>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                <td><code>.pd-r-[value]</code></td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
                                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
                                <td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Padding Bottom values
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                    <div class="d-md-flex">
                        <div class="wd-200 ht-100 bg-gray-500 pd-b-30">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-b-30
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-b-50 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-b-50
                            </div>
                        </div>
                        <div class="wd-200 ht-100 bg-gray-500 ms-md-4 pd-b-70 mt-4 mt-md-0">
                            <div
                                    class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
                                .pd-b-70
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table main-table-reference text-nowrap mg-t-10 mb-0">
                            <tbody>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Classes</b></td>
                                <td><code>.pd-b-[value]</code></td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Values</b></td>
                                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
                                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
                            </tr>
                            <tr>
                                <td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
                                <td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Media Query Padding
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                    <div class="table-responsive">
                        <table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
                            <thead>
                            <tr>
                                <th class="wd-30p">Class</th>
                                <th class="wd-70p">Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>.pd-[size]-t-[value]<br>
                                        .pd-[size]-r-[value]<br>
                                        .pd-[size]-b-[value]<br>
                                        .pd-[size]-l-[value]</code></td>
                                <td>
                                    <p class="mg-b-5">size: xs | sm | md | lg | xl</p>
                                    <p class="mg-b-0">value: the padding value (refer to code above)</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

@endsection
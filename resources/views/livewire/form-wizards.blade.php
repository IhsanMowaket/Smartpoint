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
                <li class="breadcrumb-item active" aria-current="page">Form-wizards</li>
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
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Basic Content Wizard
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    <div id="wizard1">
                        <h3>Personal Information</h3>
                        <section>
                            <h2 class="d-none">Personal Information</h2>
                            <div class="control-group form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control required" placeholder="Name">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control required" placeholder="Email Address">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control required" placeholder="Number">
                            </div>
                            <div class="control-group form-group mb-0">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control required" placeholder="Address">
                            </div>
                        </section>
                        <h3>Billing Information</h3>
                        <section>
                            <h2 class="d-none">Billing Information</h2>
                            <div class="table-responsive mg-t-20">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td class="text-end">$792.00</td>
                                    </tr>
                                    <tr>
                                        <td><span>Totals</span></td>
                                        <td class="text-end text-muted"><span>$792.00</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Order Total</span></td>
                                        <td><h2 class="price text-end mb-0">$792.00</h2></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <h3>Payment Details</h3>
                        <section>
                            <h2 class="d-none">Payment Details</h2>
                            <div class="form-group">
                                <label class="form-label">CardHolder Name</label>
                                <input type="text" class="form-control" id="name1" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-text bg-transparent border-0 p-0">
														<button class="btn btn-info" type="button"><i
                                                                    class="fab fa-cc-visa"></i> &nbsp; <i
                                                                    class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group mb-sm-0">
                                        <label class="form-label">Expiration</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM"
                                                   name="expiremonth">
                                            <input type="number" class="form-control" placeholder="YY"
                                                   name="expireyear">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group mb-0">
                                        <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Basic Wizard With Validation
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    <div id="wizard2">
                        <h3>Personal Information</h3>
                        <section>
                            <h2 class="d-none">Personal Information</h2>
                            <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-4">
                                    <label class="form-control-label">Firstname: <span
                                                class="tx-danger">*</span></label> <input class="form-control"
                                                                                          id="firstname"
                                                                                          name="firstname"
                                                                                          placeholder="Enter firstname"
                                                                                          required="" type="text">
                                </div>
                                <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                                    <input class="form-control" id="lastname" name="lastname"
                                           placeholder="Enter lastname" required="" type="text">
                                </div>
                            </div>
                        </section>
                        <h3>Billing Information</h3>
                        <section>
                            <h2 class="d-none">Billing Information</h2>
                            <p>Wonderful transition effects.</p>
                            <div class="form-group wd-xs-300">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label> <input
                                        class="form-control" id="email" name="email" placeholder="Enter email address"
                                        required="" type="email">
                            </div>
                        </section>
                        <h3>Payment Details</h3>
                        <section>
                            <h2 class="d-none">Payment Details</h2>
                            <div class="form-group">
                                <label class="form-label">CardHolder Name</label>
                                <input type="text" class="form-control" id="name11" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-text bg-transparent border-0 p-0">
														<button class="btn btn-info" type="button"><i
                                                                    class="fab fa-cc-visa"></i> &nbsp; <i
                                                                    class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group mb-sm-0">
                                        <label class="form-label">Expiration</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM"
                                                   name="expiremonth">
                                            <input type="number" class="form-control" placeholder="YY"
                                                   name="expireyear">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group mb-0">
                                        <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    <!-- ROW -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Vertical Orientation Wizard
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    <div id="wizard3">
                        <h3>Personal Information</h3>
                        <section>
                            <h2 class="d-none">Personal Information</h2>
                            <div class="control-group form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control required" placeholder="Name">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control required" placeholder="Email Address">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control required" placeholder="Number">
                            </div>
                            <div class="control-group form-group mb-0">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control required" placeholder="Address">
                            </div>
                        </section>
                        <h3>Billing Information</h3>
                        <section>
                            <h2 class="d-none">Billing Information</h2>
                            <div class="table-responsive mg-t-20">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td class="text-end">$792.00</td>
                                    </tr>
                                    <tr>
                                        <td><span>Totals</span></td>
                                        <td class="text-end text-muted"><span>$792.00</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Order Total</span></td>
                                        <td><h2 class="price text-end mb-0">$792.00</h2></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <h3>Payment Details</h3>
                        <section>
                            <h2 class="d-none">Payment Details</h2>
                            <div class="form-group">
                                <label class="form-label">CardHolder Name</label>
                                <input type="text" class="form-control" id="name12" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-text  bg-transparent border-0 p-0">
														<button class="btn btn-info" type="button"><i
                                                                    class="fab fa-cc-visa"></i> &nbsp; <i
                                                                    class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group mb-sm-0">
                                        <label class="form-label">Expiration</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM"
                                                   name="expiremonth">
                                            <input type="number" class="form-control" placeholder="YY"
                                                   name="expireyear">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group mb-0">
                                        <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- INTERNAL JQUERY-STEPS JS -->
    <script src="{{asset('build/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!-- RATING JS -->
    <script src="{{asset('build/assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
    <script src="{{asset('build/assets/plugins/ratings-2/star-rating.js')}}"></script>

    <!-- INTERNAL FORM-WIZARD JS -->
    @vite('resources/assets/js/form-wizard.js')

@endsection

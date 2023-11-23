@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Ecommerce</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product-Cart</li>
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
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Shopping Cart-->
                    <div class="product-details table-responsive text-nowrap">
                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                            <thead>
                            <tr>
                                <th class="text-start">Product</th>
                                <th class="w-150">Quantity</th>
                                <th>SUBTOTAL</th>
                                <th>DISCOUNT</th>
                                <th><a class="btn btn-sm btn-outline-danger" href="javascript:void(0);">Clear Cart</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="custom-cls-no-br">
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="card-aside-img">
                                            <img src="{{asset('build/assets/img/ecommerce/01.jpg')}}" alt="img"
                                                 class="h-60 w-60">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-item-desc mt-0">
                                                <h6 class="fw-semibold mt-0 text-uppercase">Flower pot
                                                </h6>
                                                <dl class="card-item-desc-1">
                                                    <dt>Size:</dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="card-item-desc-1">
                                                    <dt>Color:</dt>
                                                    <dd>Green and Black color</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="quantity" id="select-countries"
                                                class="form-control form-select select2">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">$79.90</td>
                                <td class="text-center text-lg text-medium">$35.00</td>
                                <td class="text-center"><a class="remove-from-cart" href="javascript:void(0);"
                                                           data-bs-toggle="tooltip" title="Remove item"
                                                           data-bs-original-title="Remove item"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="card-aside-img">
                                            <img src="{{asset('build/assets/img/ecommerce/06.jpg')}}" alt="img"
                                                 class="h-60 w-60">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-item-desc mt-0">
                                                <h6 class="fw-semibold mt-0 text-uppercase">College bag
                                                </h6>
                                                <dl class="card-item-desc-1">
                                                    <dt>Size:</dt>
                                                    <dd>XL</dd>
                                                </dl>
                                                <dl class="card-item-desc-1">
                                                    <dt>Color:</dt>
                                                    <dd>Black color</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="quantity" id="select-countries1"
                                                class="form-control form-select select2">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">$79.90</td>
                                <td class="text-center text-lg text-medium">$35.00</td>
                                <td class="text-center"><a class="remove-from-cart" href="javascript:void(0);"
                                                           data-bs-toggle="tooltip" title=""
                                                           data-bs-original-title="Remove item"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="card-aside-img">
                                            <img src="{{asset('build/assets/img/ecommerce/08.jpg')}}" alt="img"
                                                 class="h-60 w-60">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-item-desc mt-0">
                                                <h6 class="fw-semibold mt-0 text-uppercase">Smart Watch
                                                </h6>
                                                <dl class="card-item-desc-1">
                                                    <dt>Size:</dt>
                                                    <dd>XL</dd>
                                                </dl>
                                                <dl class="card-item-desc-1">
                                                    <dt>Color:</dt>
                                                    <dd>LightPink color</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="quantity" id="select-countries2"
                                                class="form-control form-select select2">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">$79.90</td>
                                <td class="text-center text-lg text-medium">$35.00</td>
                                <td class="text-center"><a class="remove-from-cart" href="javascript:void(0);"
                                                           data-bs-toggle="tooltip" title=""
                                                           data-bs-original-title="Remove item"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="card-aside-img">
                                            <img src="{{asset('build/assets/img/ecommerce/02.jpg')}}" alt="img"
                                                 class="h-60 w-60">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-item-desc mt-0">
                                                <h6 class="fw-semibold mt-0 text-uppercase">Chair</h6>
                                                <dl class="card-item-desc-1">
                                                    <dt>Size:</dt>
                                                    <dd>11-12 inches</dd>
                                                </dl>
                                                <dl class="card-item-desc-1">
                                                    <dt>Color:</dt>
                                                    <dd>LightGray color</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="quantity" id="select-countries3"
                                                class="form-control form-select select2">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">$79.90</td>
                                <td class="text-center text-lg text-medium">$35.00</td>
                                <td class="text-center"><a class="remove-from-cart" href="javascript:void(0);"
                                                           data-bs-toggle="tooltip" title=""
                                                           data-bs-original-title="Remove item"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shopping-cart-footer  border-top-0">
                        <div class="column">
                            <form class="coupon-form" method="post">
                                <input class="form-control" type="text" placeholder="Coupon code"
                                       required="">
                                <button class="btn btn-outline-primary" type="submit">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="column text-lg">Subtotal: <span
                                    class="tx-20 fw-bold ms-2 d-inline-block">$112</span>
                        </div>
                    </div>
                </div>
                <div class="shopping-cart-footer px-3">
                    <div class="column"><a class="btn btn-secondary" href="{{url('products')}}">Back to Shopping</a>
                    </div>
                    <div class="column"><a class="btn btn-primary" href="javascript:void(0);" data-bs-toast=""
                                           data-bs-toast-type="success" data-bs-toast-position="topRight"
                                           data-bs-toast-icon="icon-circle-check" data-bs-toast-title="Your cart"
                                           data-bs-toast-message="is updated successfully!">Update Cart</a><a
                                class="btn btn-success" href="{{url('check-out')}}">Checkout</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
    @vite('resources/assets/js/select2.js')

@endsection

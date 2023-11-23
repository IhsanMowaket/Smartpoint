@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')
@section('custom-body3')

        <div class="ltr error-page1 main-body bg-light text-dark error-3">
@endsection

            <div class="page">

                <div class="container-fluid">
                    <div class="row no-gutter">
                        <!-- The image half -->
                        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                            <div class="row wd-100p mx-auto text-center">
                                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                                    <img src="{{asset('build/assets/img/pngs/8.png')}}"
                                        class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                                </div>
                            </div>
                        </div>
                        <!-- The content half -->
                        <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                            <div class="login d-flex align-items-center py-2">
                                <!-- Demo content-->
                                <div class="container p-0">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                            <div class="card-sigin">
                                                <div class="mb-5 d-flex">
                                                    <a href="{{url('index')}}"><img src="{{asset('build/assets/img/brand/favicon.png')}}"
                                                            class="sign-favicon-a ht-40" alt="logo">
                                                        <img src="{{asset('build/assets/img/brand/favicon-white.png')}}"
                                                            class="sign-favicon-b ht-40" alt="logo">
                                                    </a>
                                                    <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Va<span>le</span>x</h1>
                                                </div>
                                                <div class="card-sigin">
                                                    <div class="main-signup-header">
                                                        <h2>Welcome back!</h2>
                                                        <h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                        <form method="POST" action="{{ url('login/submit') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Mobile Number</label>
                                                                <input id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Enter your Phone Number" type="text" required>
                                                                @error('phone')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror

                                                            </div>
                                                            <button type="submit" class="btn btn-main-primary btn-block">Send Code</button>

                                                            @if(session('error'))

                                                                <div class="alert alert-danger mt-3">
                                                                    {{ session('error') }}
                                                                </div>
                                                            @endif

                                                            @if(session('success'))
                                                                <div class="alert alert-success mt-1">
                                                                    {{ session('success') }}
                                                                </div>
                                                            @endif
                                                        </form>

                                                        <div class="main-signin-footer mt-5">
                                                            <p>Don't have a Problem Signing in? <a href="{{url('singin')}}">get in Touch</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End -->
                            </div>
                        </div><!-- End -->
                    </div>
                </div>

            </div>

@endsection

@section('scripts')

@endsection

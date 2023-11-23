@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')
@section('custom-body')
<div class="ltr main-body bg-primary-transparent error-page1 error-2">
@endsection

            <div class="page">
                <!-- MAIN-ERROR-WRAPPER -->
                <div class="main-error-wrapper page-h">
                    <img src="{{asset('build/assets/img/pngs/1.png')}}" class="error-page" alt="error">
                    <h2>Oopps. The page you were looking for doesn't exist.</h2>
                    <h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="{{url('index')}}">Back to Home</a>
                </div>
                <!-- /MAIN-ERROR-WRAPPER -->
            </div>

@endsection

@section('scripts')

@endsection
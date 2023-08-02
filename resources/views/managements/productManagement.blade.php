@extends('layouts.app')
@section('title') Product Management @endsection
@section('management') Product Management @endsection
@section('section')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis" style="padding: 80px">@yield('management')</h1>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href={{'/product/list'}}><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Product List</button></a>
                <a href={{'/product/add'}}><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Product Add</button></a>
            </div>
        </div>
    </div>
@endsection

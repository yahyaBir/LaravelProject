@extends('layouts.app')
@section('title') User Management @endsection
@section('management') User Management @endsection
@section('section')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis" style="padding: 80px">@yield('management')</h1>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href={{'/user/list'}}><button type="button" class="btn btn-primary btn-lg px-4 gap-3">User List</button></a>
                <a href={{'/user/add-view'}}><button type="button" class="btn btn-primary btn-lg px-4 gap-3">User Add</button></a>
            </div>
        </div>
    </div>
@endsection




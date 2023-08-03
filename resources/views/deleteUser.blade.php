@extends('layouts.app')
@section('title') Admin Panel | Homepage @endsection
@section('section')
    <section class="vh-100" style="background-color: white">
        <div class="container py-5 h-100" style="height:1000px">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background: #f0f0f0;">
                        <div class="card-body p-5 text-center">
                            <div class="px-4 py-5 my-5 text-center">
                                <h1 class="display-5 fw-bold">Delete User</h1>
                                <div class="col-lg-6 mx-auto">
                                    <p class="lead mb-4">Are you sure you want to delete this user?</p>
                                    <p class="lead mb-4">Username : {{ $userInf->username }}</p>
                                    <p class="lead mb-4">UserTitle : {{ $userInf->usertitle }}</p>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                        <a href="{{route( 'user-delete-get', $userInf->id )}}"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Delete User</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

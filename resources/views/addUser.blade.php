@extends('layouts.app')
@section('title') Admin Panel | Homepage @endsection
@section('section')
<section class="vh-100" style="background-color: white">
    <div class="container py-5 h-100" style="height:1500px">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
                <div class="card shadow-2-strong" style="border-radius: 1rem; background: #f0f0f0;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Add User</h3>

                        <form action="{{ route('user-add') }}" method="POST">

                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Username</label>
                                <input name="username" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">UserTitle</label><br>
                                <input type="text" name="usertitle" id="typePasswordX-2" class="form-control form-control-lg">
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                            </div>

                            <button name="login" class="btn btn-primary btn-lg btn-block" type="submit">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
@endsection

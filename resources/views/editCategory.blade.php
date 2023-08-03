@extends('layouts.app')
@section('title') Admin Panel | Homepage @endsection
@section('section')
    <section class="vh-100" style="background-color: white">
        <div class="container py-5 h-100" style="height:1500px">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background: #f0f0f0;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Edit Category</h3>
                            @if($errors)
                                <b style="color: red"><p>{{ $errors->first() }}</p></b>
                            @endif
                            <form action="{{route ('category-edit-post', $userInf->id)}}" method="POST">

                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Category Title</label>
                                    <input name="CategoryTitle" type="text" id="typeEmailX-2" class="form-control form-control-lg" value="{{ $userInf ->CategoryTitle }}" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Category Description</label><br>
                                    <textarea type="text" name="categorydesc_edit" id="typePasswordX-2" class="form-control form-control-lg">{{ $userInf ->CategoryDescription }}</textarea>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Status</label>
                                    <input name="categorystatus_edit" type="text" id="typePasswordX-2" class="form-control form-control-lg" value="{{ $userInf ->Status }}" />
                                </div>

                                <button name="add" class="btn btn-primary btn-lg btn-block" type="submit">Edit Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

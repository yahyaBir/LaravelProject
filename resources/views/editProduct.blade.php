@extends('layouts.app')
@section('title') Admin Panel | Homepage @endsection
@section('section')
    <section class="vh-100" style="background-color: white">
        <div class="container py-5 h-100" style="height:1500px">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background: #f0f0f0;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Edit Product</h3>
                            @if($errors)
                                <b style="color: red"><p>{{ $errors->first() }}</p></b>
                            @endif

                            <form action="{{ route('product-edit-post', $userInf->id) }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label">Product Title</label>
                                    <input name="ProductTitle" type="text" id="typeEmailX-2" class="form-control form-control-lg" value="{{ $userInf ->ProductTitle }}" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Product Category ID</label><br>
                                    <select name="ProductCategory" id="typePasswordX-2" class="form-control form-control-lg">
                                      <option value="{{$categoryTitle->id}}">{{$categoryTitle->CategoryTitle}}</option>
                                        @foreach($categoryId as $categoryIds)
                                            <option value="{{$categoryIds->id}}">{{$categoryIds->CategoryTitle}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Barcode</label>
                                    <input name="ProductBarcode" type="text" id="typePasswordX-2" class="form-control form-control-lg" value="{{ $userInf ->Barcode }}" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Product Status</label>
                                    <input name="ProductStatus" type="text" id="typePasswordX-2" class="form-control form-control-lg" value="{{ $userInf ->ProductStatus }}" />
                                </div>

                                <button name="login" class="btn btn-primary btn-lg btn-block" type="submit">Edit Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

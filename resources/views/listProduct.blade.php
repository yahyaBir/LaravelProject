@extends('layouts.app')
@section('section')
<form action="{{route('product-list')}}" method="post">
    @csrf
    <table class="table table-striped" style="width: 1300px; margin: auto; margin-top: 80px;">
        <thead>
        <tr>
            <th>Product Category ID<br></th>
            <th>Product Title<br></th>
            <th>Product Barcode<br></th>
            <th>Product Status<br></th>
            <th>Edit<br></th>
            <th>Delete<br></th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $products)
            <tr>
                <th scope="col">{{ $products->ProductCategoryID }}</th>
                <th scope="col">{{ $products->ProductTitle }}</th>
                <th scope="col">{{ $products->Barcode }}</th>
                <th scope="col">{{ $products->ProductStatus }}</th>
                <th>
                    <a href="{{route ('product-edit', $products->id) }}">
                        <button type="button" class="btn btn-primary" style="padding: 5px 10px" >Edit</button>
                    </a>
                </th>
                <th>
                    <a href="{{route ('product-delete', $products->id )}}">
                        <button type="button" style="padding: 5px 10px" class="btn btn-warning">Delete</button>
                    </a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</form>
@endsection

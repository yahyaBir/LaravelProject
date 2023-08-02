@extends('layouts.app')
@section('section')
<form action="{{ route ('category-list') }}" method="post">
    @csrf
    <table class="table table-striped" style="width: 1300px; margin: auto; margin-top: 80px;">
        <thead>
        <tr>
            <th>Category ID<br></th>
            <th>Category Title<br></th>
            <th>Category Description<br><br></th>
            <th>Status<br><br></th>
            <th>Edit<br><br></th>
            <th>Delete<br><br></th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $categories)
            <tr>
                <th scope="col">{{$categories->id}}</th>
                <th scope="col">{{$categories->CategoryTitle}}</th>
                <th scope="col">{{$categories->CategoryDescription}}</th>
                <th scope="col">{{$categories->Status }}</th>

                <th>
                    <a href="{{route('category-edit', $categories->id)}}">
                        <button type="button" class="btn btn-primary" style="padding: 5px 10px">Edit</button>
                    </a>
                </th>
                <th>
                    <a href="{{route ('category-delete', $categories->id )}}">
                        <button type="button" style="padding: 5px 10px" class="btn btn-warning">Delete</button></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table><br>
</form>
@endsection

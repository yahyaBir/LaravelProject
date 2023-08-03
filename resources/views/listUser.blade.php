@extends('layouts.app')
@section('section')

    <form action="{{ route ('user-delete-select') }}" method="post">
        @csrf
        <table  class="table table-striped" style="width: 1300px; margin: auto; margin-top: 80px; ">
            <thead>
            <tr>
                <th>Delete Multiple<br></th>
                <th>Username<br></th>
                <th>UserTitle<br></th>
                <th>Edit<br></th>
                <th>Delete<br></th>
            </tr>
            </thead>
            <tbody>
            @foreach($userCollection as $user)
                <tr>
                    <td>
                        <input style="height: 15px; width: 15px" type="checkbox" name="deleteSelect[{{$user->id}}]" value="{{$user->id}}">
                    </td>
                    <th scope="col">{{ $user->username }}</th>
                    <th scope="col">{{ $user->usertitle }}</th>

                    <th>
                        <a href="{{route ('user-edit', $user->id) }}">
                            <button type="button" class="btn btn-primary" style="padding: 5px 10px" value="">Edit</button>
                        </a>
                    </th>
                    <th>
                        <a href="{{route ('user-delete', $user->id)}}">
                            <button type="button" style="padding: 5px 10px" class="btn btn-danger">Delete</button>
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-grid gap-2 d-sm-flex" style="margin-left: 120px; margin-top: 10px">
            <input type="submit" class="btn btn-primary" value="delete users"><br><br>
        </div>
    </form>
@endsection

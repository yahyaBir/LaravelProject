<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
<form action="{{ route ('userDeleted','deleteUser') }}" method="post">
    @csrf
    <table>
        <thead>
            <tr>
                <th>Delete<br><br></th>
                <th>Username<br><br></th>
                <th>UserTitle<br><br></th>
                <th>Create<br><br></th>
            </tr>
        </thead>
        <tbody>
        @foreach($userCollection as $user)
            <tr>
                <td>
                    <input type="checkbox" name="deleteSelect[{{$user->id}}]" value="{{$user->id}}">
                </td>
                <th scope="col">{{ $user->Username }}</th>
                <th scope="col">{{ $user->UserTitle }}</th>
                <th scope="col">{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</th>

                <th>
                    <a href="{{route ('editUser', ['user'=>$user])}}">Edit</a>
                </th>
                <th>
                    <a href="{{'/delete-user'}}">
                        <button type="button" name="deleteUser[{{$user->id}}]" value="{{$user->id}}">Delete</button>
                    </a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <input type="submit" value="Delete selected users"><br><br>

    <a href={{'/main-menu'}}>Back to Main Menu</a>

</form>
</body>
</html>

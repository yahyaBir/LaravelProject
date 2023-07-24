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
<form action="{{ route ('userDeleted') }}" method="post">
    @csrf
    <table>
        <thead>
            <tr>
                <th>Delete<br><br></th>
                <th>Username<br><br></th>
                <th>UserTitle<br><br></th>
                <th>Password<br><br></th>
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
                <th scope="col">{{ $user->Password }}</th>

                <th>
                    <a href="{{route ('user-edit', $user->id) }}">
                        <button type="button" value="">Edit</button>
                    </a>
                </th>
                <th><a href="{{'/delete-user'}}"><button type="button">Delete</button></a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <input type="submit" value="delete users">

</form>
</body>
</html>

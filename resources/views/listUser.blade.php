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
    <table>
        <thead>
            <tr>
                <th>Username<br><br></th>
                <th>UserTitle<br><br></th>
                <th>Password<br><br></th>
            </tr>
        </thead>
        <tbody>
            @foreach($userCollection as $usercollecions)
                <tr>
                    <th scope="col"><input type="checkbox" name="pick">{{ $usercollecions->Username }}</th>
                    <th scope="col">{{ $usercollecions->UserTitle }}</th>
                    <th scope="col">{{ $usercollecions->Password }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

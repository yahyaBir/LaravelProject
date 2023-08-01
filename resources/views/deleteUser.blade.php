<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Delete Menu</title>
</head>
<body>

<div>
    <h1>Delete User</h1>
    <p>Username : {{ $userInf->username }}</p>
    <p>UserTitle : {{ $userInf->usertitle }}</p>
    <p>Password : {{ $userInf->password }}</p><br>
    <a href="{{route( 'user-delete-get', $userInf->id )}}"><button>Delete User</button></a><br><br>
    <a href="{{'/user-list'}}"><button>Back to User List</button></a>
</div>

</body>
</html>

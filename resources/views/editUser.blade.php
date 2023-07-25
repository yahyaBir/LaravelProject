<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Editing Menu</title>
</head>
<body>
    <form action="{{route ('user-edit-post', $userInf->id)}}" method="POST">
        @csrf

        <h2>Edit User Menu</h2>

        <label>Username</label><br>
        <input type="text" name="username_edit" value="{{$userInf ->Username}}" required><br><br>


        <label>UserTitle</label><br>
        <input type="text" name="usertitle_edit" value="{{$userInf ->UserTitle}}" required><br><br>


        <label>Password</label><br>
        <input type="password" name="password_edit">


        <input type="submit" name="Edit User" value="Edit User"><br><br>

        <a href={{'/list-user'}}>Back to User List</a>
    </form>
</body>
</html>

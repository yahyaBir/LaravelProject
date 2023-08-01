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
        <input type="text" name="username" value="{{$userInf ->username}}" required>

        @error('username')
        <small style="color: red;">{{ $message }}</small>
        @enderror<br><br>


        <label>UserTitle</label><br>
        <input type="text" name="usertitle_edit" value="{{$userInf ->usertitle}}" required><br><br>


        <label>Password</label><br>
        <input type="password" name="password_edit">

        @error('password_edit')
        <small style="color: red;">{{ $message }}</small>
        @enderror<br><br>


        <input type="submit" name="Edit User" value="Edit User"><br><br>

    </form>
    <a href="{{'/user/list'}}"><button>Back to User List</button></a>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Menu</title>
</head>
<body>

    <form action="{{ route('sonuc') }}" method="post">
        @csrf

        <label>Username</label><br>
        <input type="text" name="Username"><br><br>

        <label>Password</label><br>
        <input type="password" name="Password"><br><br>

        <input type="submit" name="login" value="Log In">


    </form>
</body>
</html>

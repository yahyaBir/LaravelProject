<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Menu</title>
</head>
<body>
    <form action="#" method="POST">
        @csrf

        <h2>Add User Menu</h2>
        <label>Username</label><br>
        <input type="text" name="username-add" required><br><br>

        <label>UserTitle</label><br>
        <input type="text" name="usertitle-add" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password-add" required><br><br>

        <input type="submit" name="register" value="Register"><br><br>




    </form>



</body>
</html>

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
    <form action={{ route('userAdded') }} method="POST">
        @csrf

        <h2>Add User Menu</h2>
        <label>Username</label><br>
        <input type="text" name="usernameadd" required>
        @error('usernameadd')
        <small style="color: red;">{{ $message }}</small>
        @enderror<br><br>


        <label>UserTitle</label><br>
        <input type="text" name="usertitleadd" required><br><br>

        <label>Password</label><br>
        <input type="password" name="passwordadd" required>
        @error('passwordadd')
        <small style="color: red;">{{ $message }}</small>
        @enderror<br><br>

        <input type="submit" name="register" value="Register">   <input type="submit" name="back" value="Back to Main Menu">
    </form>
</body>
</html>

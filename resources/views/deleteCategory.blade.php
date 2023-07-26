<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Delete User</h1>
    <p>CategoryTitle : {{ $userInf->CategoryTitle }}</p>
    <p>Category Description : {{ $userInf->CategoryDescription }}</p>
    <p>Status : {{ $userInf->Status }}</p><br>
    <a href="{{route( 'category-delete-get', $userInf->id )}}"><button>Delete Category</button></a><br><br>
    <a href={{'/list-category-menu'}}><input type="button" name="Back to Main Menu" value="Back to Category List"></a>
</div>
</body>
</html>

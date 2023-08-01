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
    <form action="{{route ('category-edit-post', $userInf->id)}}" method="POST">
        @csrf

        <h2>Edit Category Menu</h2>

        <label>Category Title</label><br>
        <input type="text" name="CategoryTitle" value="{{ $userInf ->CategoryTitle }}" required>

        @error('CategoryTitle')
        <small style="color: red;">{{ $message }}</small>
        @enderror<br><br>

        <label>Category Description</label><br>
        <textarea name="categorydesc_edit"  required>{{ $userInf ->CategoryDescription }}</textarea><br><br>

        <label>status</label><br>
        <input type="text" name="categorystatus_edit" value="{{ $userInf ->Status }}" required><br><br>

        <input type="submit" name="add" value="Edit Category"><br><br>

    </form>
    <a href="{{'/category/list'}}"><button>Back to Category List</button></a>
</body>
</html>

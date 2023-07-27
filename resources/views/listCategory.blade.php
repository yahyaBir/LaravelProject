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
<form action="{{ route ('category-list') }}" method="post">
    @csrf
    <table>
        <thead>
        <tr>
            <th>Category ID<br><br></th>
            <th>Category Title<br><br></th>
            <th>Category Description<br><br></th>
            <th>Status<br><br></th>
            <th>Edit<br><br></th>
            <th>Delete<br><br></th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $categories)
            <tr>
                <th scope="col">{{$categories->id}}</th>
                <th scope="col">{{$categories->CategoryTitle}}</th>
                <th scope="col">{{$categories->CategoryDescription}}</th>
                <th scope="col">{{$categories->Status }}</th>

                <th>
                    <a href="{{route('category-edit', $categories->id)}}">
                        <button type="button" value="">Edit</button>
                    </a>
                </th>
                <th>
                    <a href="{{route ('category-delete', $categories->id )}}">
                        <button type="button">Delete</button></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table><br>
    <a href={{'/main-menu'}}><input type="button" name="Back to Main Menu" value="Back to Main Menu"></a>
</form>
</body>
</html>

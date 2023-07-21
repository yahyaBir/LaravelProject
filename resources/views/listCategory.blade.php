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
<form action="{{ route ('getCategory') }}" method="post">
    @csrf
    <table>
        <thead>
        <tr>
            <th>Category Title<br><br></th>
            <th>Category Description<br><br></th>
            <th>Status<br><br></th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $categories)
            <tr>
                <th scope="col">{{$categories->CategoryTitle  }}</th>
                <th scope="col">{{$categories->CategoryDescription  }}</th>
                <th scope="col">{{$categories->Status }}</th>

                <th>
                    <a href="{{'/edit-category'}}">
                        <button type="button" value="">Edit</button>
                    </a>
                </th>
                <th>
                    <a href="{{'/delete-category'}}">
                        <button type="button">Delete</button></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</form>
</body>
</html>

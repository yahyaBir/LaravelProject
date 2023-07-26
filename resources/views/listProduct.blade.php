<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th {
            padding-left: 30px;
        }
    </style>
</head>
<body>
<form action="{{route('product-list')}}" method="post">
    @csrf
    <table>
        <thead>
        <tr>
            <th>Product Title<br><br></th>
            <th>Product Category<br><br></th>
            <th>Product Barcode<br><br></th>
            <th>Product Status<br><br></th>
            <th>Edit<br><br></th>
            <th>Delete<br><br></th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $products)
            <tr>
                <th scope="col">{{ $products->ProductTitle }}</th>
                <th scope="col">{{ $products->ProductCategoryID }}</th>
                <th scope="col">{{ $products->Barcode }}</th>
                <th scope="col">{{ $products->ProductStatus }}</th>
                <th>
                    <a href="">
                        <button type="button" value="">Edit</button>
                    </a>
                </th>
                <th>
                    <a href="{{route ('product-delete', $products->id )}}">
                        <button type="button">Delete</button>
                    </a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table><br>
    <a href={{'/main-menu'}}><input type="button" name="Back to Main Menu" value="Back to Main Menu"></a>
</form>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product Menu</title>
</head>
<body>
    <form action="{{ route('product-add') }}" method="POST">
        @csrf

        <h2>Add Product Menu</h2>

        <label>Product Title</label><br>
        <input type="text" name="ProductTitle" required><br><br>

        <label>Product Category ID</label><br>
        <select name="ProductCategory">
            @foreach($categoryId as $categoryIds)
                <option value="{{$categoryIds->id}}">{{$categoryIds->id}}</option>
            @endforeach
        </select><br><br>

        <label>Barcode</label><br>
        <input type="text" name="ProductBarcode" required><br><br>

        <label>Product Status</label><br>
        <input type="text" name="ProductStatus" required><br><br>

        <input type="submit" name="add" value="Add Product"><br><br>
        <a href={{'/main-menu'}}><input type="button" name="Back to Main Menu" value="Back to Main Menu"></a>
    </form>
</body>
</html>

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
    <form action="#" method="POST">
        @csrf

        <h2>Add Product Menu</h2>

        <label>Product Title</label><br>
        <input type="text" name="product-title" required><br><br>

        <label>Product Category ID</label><br>
        <input type="text" name="product-id" ><br><br>

        <label>Barcode</label><br>
        <input type="text" name="product-code" required><br><br>

        <label>Product Status</label><br>
        <input type="text" name="product-status" required><br><br>

        <input type="submit" name="add" value="Add Product"><br><br>
    </form>
</body>
</html>

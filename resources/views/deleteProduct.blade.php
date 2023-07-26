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
    <h1>Delete Product</h1>
    <p>Product Title : {{ $userInf->ProductTitle }}</p>
    <p>Product Category ID : {{ $userInf->ProductCategoryId }}</p>
    <p>Barcode : {{ $userInf->Barcode }}</p>
    <p>Status : {{ $userInf->ProductStatus }}</p><br>
    <a href="{{route( 'product-delete-get', $userInf->id )}}"><button>Delete Product</button></a><br><br>
    <a href="{{'/list-product-menu'}}"><button>Back to Product List</button></a>
</div>
</body>
</html>

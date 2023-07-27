<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Menu</title>
</head>
<body>

    <div>
        <h3>Admin User Management</h3>
        <ul>
            <li><a href={{'/user-list'}}>User List</a></li>
            <li><a href={{'/user-add-view'}} >Add User</a></li>
        </ul>
    </div>

    <div>
        <h3>Category Management</h3>
        <ul>
            <li><a href={{'/category-list'}}>Category List</a></li>
            <li><a href={{'/category-add-view'}}>Add Category</a></li>
        </ul>
    </div>

    <div>
        <h3>Product Management</h3>
        <ul>
            <li><a href={{'/list-product-menu'}}>Product List</a></li>
            <li><a href={{'/add-product'}}>Add Product</a></li>
        </ul>
    </div>

</body>
</html>

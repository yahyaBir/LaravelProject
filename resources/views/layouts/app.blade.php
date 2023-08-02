<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" >
    @yield('style')
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="{{'/main-menu'}}" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg style="color: #0d6efd; height: 40px; width: 40px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
            </a>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{'/user/management'}}" class="nav-link px-2">User Management</a></li>
            <li><a href="{{'/category/management'}}" class="nav-link px-2">Category Management</a></li>
            <li><a href="{{'/product/management'}}" class="nav-link px-2">Product Management</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <a href="{{route('logout')}}"><button type="button" class="btn btn-primary" style="position: relative; ">Logout</button></a>
        </div>
    </header>
</div>
@yield('section')
<script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
</body>
</html>


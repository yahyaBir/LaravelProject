<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Menu</title>
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" >
</head>
<body>
<section class="vh-100" style="background-color: white">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem; background: #f0f0f0">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Login</h3>
                        <form action="{{ route('login-post') }}" method="POST">
                            @csrf
                            @if(session('usernameError'))
                                <div class="alert alert-danger" role="alert">
                                    Incorrect username or password.
                                </div>
                            @endif
                        <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Username</label>
                            <input name="username" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <button name="login" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
</body>
</html>


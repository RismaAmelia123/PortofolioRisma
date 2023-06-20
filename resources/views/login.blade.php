<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        body{
            font-family:  "Sofia", sans-serif;
            background-color: #9CB4CC;
        }
    </style>
</head>
<body>
    <form action="{{ url('login/auth') }}" method="post">
        @csrf
        <div class="container h-100">
            <div class=" vh-100 row h-50 d-flex justify-content-center align-items-center">
                <div class="col-md-4 py-5 align-center">
                    <h3 class="text-center fw-bold">Login</h3>
                    <form action="" >
                        <div class="col-mb-3">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                        </div>
                         <div class="pt-3">
                            <input type="submit" value="Login" class="form-control text-white btn" style="background-color: #748DA6;">
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="{{ asset('js.bootstrap.min.js') }}"></script>
</html>
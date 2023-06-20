<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        body {
            font-family: "Sofia", sans-serif;
            background-color: #9CB4CC;
        }
        /* body{
            font-family: monospace;
            background-color: #9CB4CC;
        } */
    </style>
    {{-- <style>
    </style> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #748DA6;">
        <div class="container-fluid">
            Risma Amelia Putri
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar" aria-label="toggle navigation" aria-controls="Navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact" class="nav-link {{ Request::segment(1)=='contact'?'active':'' }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
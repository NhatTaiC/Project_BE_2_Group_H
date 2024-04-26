<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
{{--Navbar--}}
<<<<<<< HEAD
<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Training - Group H</a>
=======
<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5 text-white fixed-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-weight: 700; color: white">Laravel Training - Group H</a>
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
<<<<<<< HEAD
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Đăng Nhập </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}">Đăng Ký</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Đăng Xuất</a>
=======
            <ul class="navbar-nav m-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="font-weight: 700; color: white">Đăng Nhập </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}" style="font-weight: 700; color: white">Đăng Ký</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}" style="font-weight: 700; color: white">Đăng Xuất</a>
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

{{--Footer--}}
<div class="container-fluid fixed-bottom bg-dark">
    <div class="container-fluid text-white py-2 my-2">
<<<<<<< HEAD
        <p class="mx-auto my-auto text-center">Lập trình web &#169 01/2024 - Nhóm H</p>
=======
        <p class="mx-auto my-auto text-center" style="font-weight: 700; color: white">Lập trình web &#169 01/2024 - Nhóm H</p>
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
    </div>
</div>
@yield('content')
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - Project Group H</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

{{-- NavBar --}}
<section class="section-navbar">
    <nav class="navbar navbar-dark bg-dark text-white navbar-expand-lg mb-5 " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Laravel Group H</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        {{-- Home Page --}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                        </li>

                       {{-- Login --}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>

                       {{-- CreateUser --}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('user.createUser') }}">Register</a>
                        </li>
                    @else
                        {{-- Management Page --}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('management_page') }}">Management Page</a>
                        </li>

                       {{-- Dropdown --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                               data-bs-toggle="dropdown">Management</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user.list') }}">TaiKhoan</a></li>
                                <li><a class="dropdown-item" href="{{ route('loaixe.list_loaixe') }}">LoaiXe</a></li>
                                <li><a class="dropdown-item" href="{{ route('xe.list_xe') }}">Xe</a></li>
                                <li><a class="dropdown-item" href="#">ChiTietXe</a></li>
                                <li><a class="dropdown-item" href="{{ route('branch.listBranches') }}">ChiNhanh</a></li>
                                <li><a class="dropdown-item" href="{{ route('makeappointment.list') }}">LichHen</a></li>
                                <li><a class="dropdown-item" href="#">LienHe</a></li>
                            </ul>
                        </li>

                        {{-- Logout --}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('signout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</section>


@yield('content')

{{-- Footer --}}
<section class="section-footer mt-5 pt-5">
    <div class="container-fluid text-center bg-dark fixed-bottom p-2">
        <h1 class="footer-title text-white">Lập Trình Web BE2 - Nhóm H 2024</h1>
    </div>
</section>

<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

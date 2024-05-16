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

{{-- Navbar --}}
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

                    {{-- Search --}}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('xe.searchXe') }}">SearchCars</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>


{{-- Section Title --}}
<section id="section-title">
    <div class="container-fluid text-center mt-5">
        <h1 class="text-center">
            Home Page
        </h1>
    </div>
</section>

{{-- Section Cards Xe --}}
<section id="section-card-xe">
    <div class="container-fluid mt-5 center text-center d-flex justify-content-around me-2">
        @foreach($xe as $x)
            <div class="card" style="width: 400px">
                <img src="{{ asset('uploads/'. $x->hinhanhxe ) }}" alt="" class="card-img-top"
                     style="width: 100%; height: 100%">
                <div class="card-img card-body">
                    <h4 class="card-title">
                        {{ $x->tenxe }}
                    </h4>
                    <div class="card-text">
                        {{--                            <p class="xe_id" type="hidden">ID Xe: {{ $x->xe_id }}</p>--}}
                        <p class="maloaixe">Mã Loại Xe: {{ $x->maxe }}</p>
                        <p class="mauxe">Màu Xe: {{ $x->mauxe }}</p>
                        <p class="giaxe">Giá Xe: {{ $x->giaxe }}</p>
                        <p class="sochongoi">Số Chỗ Ngồi: {{ $x->sochongoi }}</p>
                        <p class="dongco">Động Cơ: {{ $x->dongco }}</p>
                        <p class="dungtichbinhxang">Dung Tích Bình Xăng: {{ $x->dungtichbinhxang }}</p>
                    </div>
                    <a href="{{ route('xe.readXe', ['xe_id' => $x->xe_id]) }}" class="btn btn-primary">Thông Tin
                        Xe</a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Phân Trang --}}
    <div class="link text-center my-5 mx-5 px-5" style="text-align: center">{!! $xe->links() !!}</div>

</section>

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

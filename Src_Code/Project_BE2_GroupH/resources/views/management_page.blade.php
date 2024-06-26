@extends('dashboard')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/management_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btnsapxep.css') }}">
    <style>
        .btn-sapxep {
            text-align: center;
        }
    </style>

    {{-- --}}{{-- Section Title --}}{{--
     <section id="section-title">
         <div class="container-fluid text-center mt-5">
             <h1 class="text-center">
                 Management Page
             </h1>
         </div>
     </section>

     --}}{{-- Section Options --}}{{--
     <section id="section-option">
         <div class="container-fluid mt-5 center">
             <ul class="ul-option">
                 <li><a href="{{ route('user.list') }}" class="ul-item text-decoration-none">Management TaiKhoan</a></li>
                 <li><a href="{{ route('loaixe.list_loaixe') }}" class="ul-item text-decoration-none">Management LoaiXe</a></li>
                 <li><a href="{{ route('xe.list_xe') }}" class="ul-item text-decoration-none">Management Xe</a></li>
                 <li><a href="#" class="ul-item text-decoration-none">Management ChiTietXe</a></li>
                 <li><a href="#" class="ul-item text-decoration-none">Management ChiNhanh</a></li>
                 <li><a href="#" class="ul-item text-decoration-none">Management LichHen</a></li>
                 <li><a href="#" class="ul-item text-decoration-none">Management LienHe</a></li>
             </ul>
         </div>
     </section>--}}

    <style>
        .btn-sapxep {
            text-align: center;
        }
    </style>

    {{-- Section Title --}}
    <section id="section-title">
        <div class="container-fluid text-center mt-5">
            <h1 class="text-center">
                Management Page
            </h1>
        </div>
    </section>

    {{-- Section Options --}}
    <section id="section-option">
        <div class="container-fluid mt-5 center">
            <div class="row">
                <div class="col-md-12 btn-sapxep">

                    <button class="btn">
                        <a href="{{ route('user.list') }}" class="ul-item text-decoration-none">Management TaiKhoan</a>
                    </button>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn">
                        <a href="#" class="ul-item text-decoration-none">Management LienHe</a>
                    </button>

                </div>
                <div class="col-md-4">

                    <button class="btn">
                        <a href="{{ route('makeappointment.list') }}" class="ul-item text-decoration-none">Management LichHen</a>
                    </button>
                </div>
                <div class="col-md-4">

                    <button class="btn">
                        <a href="{{ route('branch.listBranches') }}" class="ul-item text-decoration-none">Management ChiNhanh</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn">
                        <a href="#" class="ul-item text-decoration-none">Management ChiTietXe</a>
                    </button>

                </div>
                <div class="col-md-4">

                    <button class="btn">
                        <a href="{{ route('xe.list_xe') }}" class="ul-item text-decoration-none">Management Xe</a>
                    </button>
                </div>
                <div class="col-md-4">

                    <button class="btn">
                        <a href="{{ route('loaixe.list_loaixe') }}" class="ul-item text-decoration-none">Management
                            LoaiXe</a>
                    </button>
                </div>
            </div>

            </ul>
        </div>
    </section>

@endsection

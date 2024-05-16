@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">Thông Tin Loại Xe {{ $loaixe->tenloaixe }}</h1>
        </div>
    </section>

    {{--  Table  --}}
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-bordered mb-5 pb-5">
                    <thead>
                    <tr class="row-header" style="background: lightcoral; font-size: 30px; font-weight: 700">
                        <th class="text-center bg-info th-data">ID</th>
                        <th class="text-center bg-info th-data">Mã Loại Xe</th>
                        <th class="text-center bg-info th-data">Tên Loại Xe</th>
                        <th class="text-center bg-info th-data">Năm Sản Xuất</th>
                        <th class="text-center bg-info th-data">Quốc Gia</th>
                        <th class="text-center bg-info th-data">Mô Tả</th>
                        <th class="text-center bg-info th-data">Hình Ảnh</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center td-data"
                        >{{ $loaixe->loaixe_id }}</td>
                        <td class="text-center td-data"
                        >{{ $loaixe->maloaixe }}</td>
                        <td class="text-center td-data"
                        >{{ $loaixe->tenloaixe }}</td>
                        <td class="text-center td-data"
                        >{{ $loaixe->namsx }}</td>
                        <td class="text-center td-data"
                        >{{ $loaixe->quocgia }}</td>
                        <td class="text-center td-data"
                        >{{ $loaixe->mota }}</td>
                        <td class="text-center td-data">
                            <img src="{{ asset('avatar/' . $loaixe->hinhanh ) }}" style="width: 70px; height: 70px"
                                 alt="avatar">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <br><br>
@endsection

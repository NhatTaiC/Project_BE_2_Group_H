@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">Thông Tin Xe {{ $xe->tenxe }}</h1>
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
                        <th class="text-center bg-info th-data">Mã Xe</th>
                        <th class="text-center bg-info th-data">Tên Xe</th>
                        <th class="text-center bg-info th-data">Giá Xe</th>
                        <th class="text-center bg-info th-data">Màu Xe</th>
                        <th class="text-center bg-info th-data">Số Chỗ Ngồi</th>
                        <th class="text-center bg-info th-data">Động Cơ</th>
                        <th class="text-center bg-info th-data">Dung Tích Bình Xăng</th>
                        <th class="text-center bg-info th-data">Hình Ảnh Xe</th>
                        <th class="text-center bg-info th-data">Mã Loại Xe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center td-data">{{ $xe->xe_id }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->maxe }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->tenxe }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->giaxe }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->mauxe }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->sochongoi }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->dongco }}</td>
                        <td class="text-center td-data"
                        >{{ $xe->dungtichbinhxang }}</td>
                        <td class="text-center td-data"><img
                                src="{{ asset('cars_default_img/' . $xe->hinhanhxe ) }}" style="width: 70px; height: 70px"
                                alt="avatar"></td>
                        <td class="text-center td-data"
                        >{{ $xe->maloaixe }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <br><br>
@endsection

@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            {{--            <h1 class="title">Thông Tin Xe {{ $xe->tenxe }}</h1>--}}
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
                    @foreach($xe as $x)
                        <tr>
                            <td class="text-center td-data">{{ $x->xe_id }}</td>
                            <td class="text-center td-data"
                            >{{ $x->maxe }}</td>
                            <td class="text-center td-data"
                            >{{ $x->tenxe }}</td>
                            <td class="text-center td-data"
                            >{{ $x->giaxe }}</td>
                            <td class="text-center td-data"
                            >{{ $x->mauxe }}</td>
                            <td class="text-center td-data"
                            >{{ $x->sochongoi }}</td>
                            <td class="text-center td-data"
                            >{{ $x->dongco }}</td>
                            <td class="text-center td-data"
                            >{{ $x->dungtichbinhxang }}</td>
                            <td class="text-center td-data"><img
                                    src="{{ asset('cars_default_img/' . $x->hinhanhxe ) }}"
                                    style="width: 70px; height: 70px"
                                    alt="avatar"></td>
                            <td class="text-center td-data"
                            >{{ $x->maloaixe }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

{{--                --}}{{-- Phân Trang --}}
{{--                <div class="link text-center my-5 mx-5 px-5" style="text-align: center">{!! $xe->links() !!}</div>--}}

            </div>
        </div>
    </main>

    <br><br>
@endsection

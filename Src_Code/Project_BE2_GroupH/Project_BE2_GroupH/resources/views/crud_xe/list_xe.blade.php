@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">Danh Sách Xe</h1>
        </div>
    </section>

    {{-- Thông Báo --}}
    @if (Session::has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
    @endif

    {{-- Table --}}
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">

                {{-- Bảng Hiển Thị --}}
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="row-header">
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
                        <th class="text-center bg-info th-data">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($xe as $x)
                        <tr class="row-data table:hover">
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
                                    src="{{ asset('uploads/' . $x->hinhanhxe ) }}" style="width: 70px; height: 70px"
                                    alt="avatar"></td>
                            <td class="text-center td-data"
                            >{{ $x->maloaixe }}</td>
                            <td class="text-center td-data">
                                <a href="{{ route('xe.readXe', ['xe_id' => $x->xe_id]) }}"
                                   class="text-decoration-none btn btn-primary">View</a>
                                <a href="{{ route('xe.updateXe', ['xe_id' => $x->xe_id]) }}"
                                   class="text-decoration-none btn btn-success">Edit</a>
                                <a href="{{ route('xe.deleteXe', ['xe_id' => $x->xe_id]) }}"
                                   class="text-decoration-none btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>

                {{-- Nút Thêm Xe --}}
                <button class="btn btn-dark p-3" type="button" style="width: 30%">
                    <a href="{{ route('xe.createXe') }}" class="btn-them text-decoration-none text-white" style="font-weight: 700; font-size: 20px">Thêm Xe</a>
                </button>

                {{-- Phân Trang --}}
                <div class="link text-center my-5 mx-5 px-5" style="text-align: center">{!! $xe->links() !!}</div>

            </div>
        </div>
    </main>
@endsection

@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">Danh Sách Loại Xe</h1>
        </div>
    </section>

    {{-- Thông Báo --}}
    @if (Session::has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('errors'))
        <div class="alert alert-danger">
            <i class="fas fa-check-circle"></i> {{ Session::get('errors') }}
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
                        <th class="text-center bg-info th-data">Mã Loại Xe</th>
                        <th class="text-center bg-info th-data">Tên Loại Xe</th>
                        <th class="text-center bg-info th-data">Năm Sản Xuất</th>
                        <th class="text-center bg-info th-data">Quốc Gia</th>
                        <th class="text-center bg-info th-data">Mô Tả</th>
                        <th class="text-center bg-info th-data">Hình Ảnh</th>
                        <th class="text-center bg-info th-data">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loaixe as $lx)
                        <tr class="row-data table:hover">
                            <td class="text-center td-data">{{ $lx->loaixe_id }}</td>
                            <td class="text-center td-data"
                            >{{ $lx->maloaixe }}</td>
                            <td class="text-center td-data"
                            >{{ $lx->tenloaixe }}</td>
                            <td class="text-center td-data"
                            >{{ $lx->namsx }}</td>
                            <td class="text-center td-data"
                            >{{ $lx->quocgia }}</td>
                            <td class="text-center td-data"
                            >{{ $lx->mota }}</td>
                            <td class="text-center td-data"><img
                                    src="{{ asset('uploads/' . $lx->hinhanh ) }}" style="width: 70px; height: 70px"
                                    alt="avatar"></td>
                            <td class="text-center td-data">
                                <a href="{{ route('loaixe.readLoaiXe', ['loaixe_id' => $lx->loaixe_id]) }}"
                                   class="text-decoration-none btn btn-primary">View</a>
                                <a href="{{ route('loaixe.updateLoaiXe', ['loaixe_id' => $lx->loaixe_id]) }}"
                                   class="text-decoration-none btn btn-success">Edit</a>
                                <a href="{{ route('loaixe.deleteLoaiXe', ['loaixe_id' => $lx->loaixe_id]) }}"
                                   class="text-decoration-none btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>

                {{-- Nút Thêm Loại Xe --}}
                <button class="btn btn-dark p-3" type="button" style="width: 30%">
                    <a href="{{ route('loaixe.createLoaiXe') }}" class="btn-them text-decoration-none text-white" style="font-weight: 700; font-size: 20px">Thêm Loại Xe</a>
                </button>

                {{-- Phân Trang --}}
                <div class="link text-center my-5 mx-5 px-5" style="text-align: center">{!! $loaixe->links() !!}</div>

            </div>
        </div>
    </main>
@endsection

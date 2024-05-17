@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>NHẬP THÔNG TIN LỊCH HẸN <a href="{{ route('makeappointment.list') }}"
                            class="btn btn-danger float-end">Back</a></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('makeappointment.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Mã liên hệ: </label>
                                <input type="text" name="MaLH" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tên khách hàng: </label>
                                <input type="text" name="TenKH" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Số điện thoại: </label>
                                <input type="text" name="SoDTKH" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mã loại xe: </label>
                                <input type="text" name="MaLoaiXe" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Trạng thái: </label>
                                <input type="text" name="TrangThai" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Yêu cầu: </label>
                                <input type="text" name="YeuCau" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hình ảnh xe mong muốn: </label>
                                <input type="file" name="HinhAnh" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection

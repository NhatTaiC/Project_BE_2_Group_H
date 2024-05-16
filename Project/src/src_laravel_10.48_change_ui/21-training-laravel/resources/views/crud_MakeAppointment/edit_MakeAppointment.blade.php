<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                        <h3>UPDATE THÔNG TIN LỊCH HẸN <a href="{{ route('makeappointment.list') }}"
                            class="btn btn-danger float-end">Back</a></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('makeappointment.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="makeappointments_id" type="hidden" value="{{ $makeappointment->makeappointments_id }}">
                            <div class="form-group mb-3">
                                <label for="">Mã liên hệ: </label>
                                <input type="text" name="MaLH" id="" value="{{ $makeappointment->MaLH }}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tên liên hệ: </label>
                                <input type="text" name="TenLH" id="" class="form-control"value="{{ $makeappointment->TenLH }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tên khách hàng: </label>
                                <input type="text" name="TenKH" id="" class="form-control"value="{{ $makeappointment->TenKH }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Số điện thoại: </label>
                                <input type="text" name="SoDTKH" id="" class="form-control"value="{{ $makeappointment->SoDTKH }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mã loại xe: </label>
                                <input type="text" name="MaLoaiXe" id="" class="form-control"value="{{ $makeappointment->MaLoaiXe }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Trạng thái: </label>
                                <input type="text" name="TrangThai" id="" class="form-control"value="{{ $makeappointment->TrangThai }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Yêu cầu: </label>
                                <input type="text" name="YeuCau" id="" class="form-control"value="{{ $makeappointment->YeuCau }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hình ảnh xe mong muốn: </label>
                                <input type="file" name="HinhAnh" id="" class="form-control">
                                <img src="{{ asset('uploads/imgmakeappointment/'.$makeappointment->HinhAnh) }}" 
                                width="100px" height="90-px" alt="HinhAnh">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

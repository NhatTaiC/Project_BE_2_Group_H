
@extends('dashboard')

@section('content')<!DOCTYPE html>
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
                        <h3>DANH SÁCH THÔNG TIN LỊCH HẸN 
                            <a href="{{ route('makeappointment.list') }}"
                            class="btn btn-danger float-end">Back</a>
                            <a href="{{ route('makeappointment.add') }}"
                            class="btn btn-primary float-end">Add</a></h3> 
                    </div>
                    <form action=""  class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" name="key" placeholder="Nhập tên khách hàng hoặc số điện thoại......">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search">Search</i>
                            </button>
                        </div>
                    </form>
                    <hr>
                    <div class="card-body">
                        <table class="table table-striped">
                           <thead>
                            <th>STT</th>
                            <th>Mã Liên Hệ</th>
                            <th>Tên Khách Hàng</th>
                            <th>SDT Khách Hàng</th>
                            <th>Mã Loại Xe</th>
                            <th>Trạng Thái</th>
                            <th>Yêu Cầu</th>
                            <th>Hình Ảnh Yêu Cầu</th>
                           </thead>
                           <tbody>
                            @foreach ($mkappointment as $makeappointment)
                                <tr>
                                    <td>{{ $makeappointment -> makeappointments_id}}</td>
                                    <td>{{ $makeappointment -> MaLH}}</td>
                                    <td>{{ $makeappointment -> TenKH}}</td>
                                    <td>{{ $makeappointment -> SoDTKH}}</td>
                                    <td>{{ $makeappointment -> MaLoaiXe}}</td>
                                    <td>{{ $makeappointment -> TrangThai}}</td>
                                    <td>{{ $makeappointment -> YeuCau}}</td>
                                    <td><img src="{{ asset('uploads/'.$makeappointment->HinhAnh) }}"
                                         width="100px" height="90-px" alt="HinhAnh"></td>
                                    <td><a href="{{ route('makeappointment.edit', ['makeappointments_id' => $makeappointment->makeappointments_id]) }}" class="btn btn-primary">Update</a>
                                        <a href="{{ route('makeappointment.delete', ['makeappointments_id' => $makeappointment->makeappointments_id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                           </tbody>
                          </table>
                          <div> {{ $mkappointment->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection

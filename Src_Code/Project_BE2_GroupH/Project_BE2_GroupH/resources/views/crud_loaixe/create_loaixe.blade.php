@extends('dashboard')

@section('content')

    {{-- Form-Control   --}}
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Đăng Ký Thông Tin Loại Xe</h3>
                        <div class="card-body">
                            <form action="{{ route('loaixe.postLoaiXe') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                {{-- Mã Loại Xe --}}
                                <div class="form-group mb-3">
                                    <label for="maloaixe">Nhập Mã Loại Xe:</label>
                                    <input type="text" id="maloaixe" class="form-control"
                                           name="maloaixe" required
                                    >
                                    @if ($errors->has('maloaixe'))
                                        <span class="text-danger">{{ $errors->first('maloaixe') }}</span>
                                    @endif
                                </div>

                                {{-- Tên Loại Xe --}}
                                <div class="form-group mb-3">
                                    <label for="tenloaixe">Nhập Tên Loại Xe:</label>
                                    <input type="text" id="tenloaixe"
                                           class="form-control"
                                           name="tenloaixe" required>
                                    @if ($errors->has('tenloaixe'))
                                        <span class="text-danger">{{ $errors->first('tenloaixe') }}</span>
                                    @endif
                                </div>

                                {{-- Năm Sản Xuất --}}
                                <div class="form-group mb-3">
                                    <label for="namsx">Nhập Năm Sản Xuất:</label>
                                    <input type="text" id="namsx" class="form-control"
                                           name="namsx" required>
                                    @if ($errors->has('namsx'))
                                        <span class="text-danger">{{ $errors->first('namsx') }}</span>
                                    @endif
                                </div>

                                {{-- Quốc Gia --}}
                                <div class="form-group mb-3">
                                    <label for="quocgia">Nhập Quốc Gia:</label>
                                    <input type="text" id="quocgia" class="form-control"
                                           name="quocgia" required>
                                    @if ($errors->has('quocgia'))
                                        <span class="text-danger">{{ $errors->first('quocgia') }}</span>
                                    @endif
                                </div>

                                {{-- Mô Tả --}}
                                <div class="form-group mb-3">
                                    <label for="mota">Nhập Mô Tả:</label>
                                    <input type="text" id="mota" class="form-control"
                                           name="mota" required>
                                    @if ($errors->has('mota'))
                                        <span class="text-danger">{{ $errors->first('mota') }}</span>
                                    @endif
                                </div>

                                <!-- Hình Ảnh -->
                                <div class="form-group mb-3">
                                    <label for="hinhanh">Avatar:</label>
                                    <input id="hinhanh" type="file"
                                           class="form-control" name="hinhanh"
                                    >
                                    <br>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('dashboard')

@section('content')

    {{-- Form-Control   --}}
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Đăng Ký Thông Tin Xe</h3>
                        <div class="card-body">
                            <form action="{{ route('xe.postXe') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                {{-- Mã Xe --}}
                                <div class="form-group mb-3">
                                    <label for="maxe">Nhập Mã Xe:</label>
                                    <input type="text" id="maxe" class="form-control"
                                           name="maxe" required autofocus
                                    >
                                    @if ($errors->has('maxe'))
                                        <span class="text-danger">{{ $errors->first('maxe') }}</span>
                                    @endif
                                </div>

                                {{-- Tên Xe --}}
                                <div class="form-group mb-3">
                                    <label for="tenxe">Nhập Tên Xe:</label>
                                    <input type="text" id="tenxe"
                                           class="form-control"
                                           name="tenxe" required >
                                    @if ($errors->has('tenxe'))
                                        <span class="text-danger">{{ $errors->first('tenxe') }}</span>
                                    @endif
                                </div>

                                {{-- Giá Xe --}}
                                <div class="form-group mb-3">
                                    <label for="giaxe">Nhập Giá Xe:</label>
                                    <input type="text" id="giaxe" class="form-control"
                                           name="giaxe" required >
                                    @if ($errors->has('giaxe'))
                                        <span class="text-danger">{{ $errors->first('giaxe') }}</span>
                                    @endif
                                </div>

                                {{-- Màu Xe --}}
                                <div class="form-group mb-3">
                                    <label for="mauxe">Nhập Màu Xe:</label>
                                    <input type="text" id="mauxe" class="form-control"
                                           name="mauxe" required >
                                    @if ($errors->has('mauxe'))
                                        <span class="text-danger">{{ $errors->first('mauxe') }}</span>
                                    @endif
                                </div>

                                {{-- Số Chỗ Ngồi --}}
                                <div class="form-group mb-3">
                                    <label for="sochongoi">Nhập Số Chỗ Ngồi:</label>
                                    <input type="text" id="sochongoi" class="form-control"
                                           name="sochongoi" required >
                                    @if ($errors->has('sochongoi'))
                                        <span class="text-danger">{{ $errors->first('sochongoi') }}</span>
                                    @endif
                                </div>


                                {{-- Động Cơ --}}
                                <div class="form-group mb-3">
                                    <label for="dongco">Nhập Động Cơ:</label>
                                    <input type="text" id="dongco" class="form-control"
                                           name="dongco" required >
                                    @if ($errors->has('dongco'))
                                        <span class="text-danger">{{ $errors->first('dongco') }}</span>
                                    @endif
                                </div>

                                {{-- Dung Tích Bình Xăng --}}
                                <div class="form-group mb-3">
                                    <label for="dungtichbinhxang">Nhập Dung Tích Bình Xăng:</label>
                                    <input type="text" id="dungtichbinhxang" class="form-control"
                                           name="dungtichbinhxang" required >
                                    @if ($errors->has('dungtichbinhxang'))
                                        <span class="text-danger">{{ $errors->first('dungtichbinhxang') }}</span>
                                    @endif
                                </div>

                                <!-- Hinh Anh Xe -->
                                <div class="form-group mb-3">
                                    <label for="hinhanhxe">Hinh Anh Xe:</label>
                                    <input id="hinhanhxe" type="file"
                                           class="form-control" name="hinhanhxe" required
                                    >
                                    <br>
                                </div>

                                {{-- Mã Loại Xe --}}
                                <div class="form-group mb-3">
                                    <label for="maloaixe">Nhập Mã Loại Xe:</label>
                                    <input type="text" id="maloaixe" class="form-control"
                                           name="maloaixe" required >
                                    @if ($errors->has('maloaixe'))
                                        <span class="text-danger">{{ $errors->first('maloaixe') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

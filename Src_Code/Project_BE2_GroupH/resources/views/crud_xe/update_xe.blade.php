@extends('dashboard')

@section('content')

    {{-- Form-Control   --}}
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Cập Nhật Thông Tin Xe</h3>
                        <div class="card-body">
                            <form action="{{ route('xe.postUpdateXe') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <input name="xe_id" type="hidden" value="{{ $xe->xe_id }}">

                                {{-- Mã Xe --}}
                                <div class="form-group mb-3">
                                    <label for="maxe">Nhập Mã Xe:</label>
                                    <input type="text" id="maxe" class="form-control" name="maxe" required autofocus
                                           value="{{ $xe->maxe }}"
                                           >
                                    @if ($errors->has('maxe'))
                                        <span class="text-danger">{{ $errors->first('maxe') }}</span>
                                    @endif
                                </div>

                                {{-- Tên Xe --}}
                                <div class="form-group mb-3">
                                    <label for="tenxe">Nhập Tên Xe:</label>
                                    <input type="text" id="tenxe" class="form-control" required
                                           value="{{ $xe->tenxe }}"
                                           name="tenxe">
                                    @if ($errors->has('tenxe'))
                                        <span class="text-danger">{{ $errors->first('tenxe') }}</span>
                                    @endif
                                </div>

                                {{-- Giá Xe --}}
                                <div class="form-group mb-3">
                                    <label for="giaxe">Nhập Giá Xe:</label>
                                    <input type="text" id="giaxe" class="form-control" required
                                           name="giaxe" value="{{ $xe->giaxe }}">
                                    @if ($errors->has('namsx'))
                                        <span class="text-danger">{{ $errors->first('namsx') }}</span>
                                    @endif
                                </div>

                                {{-- Màu Xe --}}
                                <div class="form-group mb-3">
                                    <label for="mauxe">Nhập Màu Xe:</label>
                                    <input type="text" id="mauxe" class="form-control" required
                                           name="mauxe" value="{{ $xe->mauxe }}">
                                    @if ($errors->has('mauxe'))
                                        <span class="text-danger">{{ $errors->first('mauxe') }}</span>
                                    @endif
                                </div>

                                {{-- Số Chỗ Ngồi --}}
                                <div class="form-group mb-3">
                                    <label for="sochongoi">Nhập Số Chỗ Ngồi:</label>
                                    <input type="text" id="sochongoi" class="form-control" required
                                           name="sochongoi" value="{{ $xe->sochongoi }}">
                                    @if ($errors->has('sochongoi'))
                                        <span class="text-danger">{{ $errors->first('sochongoi') }}</span>
                                    @endif
                                </div>

                                {{-- Động Cơ --}}
                                <div class="form-group mb-3">
                                    <label for="dongco">Nhập Động Cơ:</label>
                                    <input type="text" id="dongco" class="form-control" required
                                           name="dongco" value="{{ $xe->dongco }}">
                                    @if ($errors->has('dongco'))
                                        <span class="text-danger">{{ $errors->first('dongco') }}</span>
                                    @endif
                                </div>

                                {{-- Dung Tích Bình Xăng --}}
                                <div class="form-group mb-3">
                                    <label for="dungtichbinhxang">Nhập Dung Tích Bình Xăng:</label>
                                    <input type="text" id="dungtichbinhxang" class="form-control" required
                                           name="dungtichbinhxang" value="{{ $xe->dungtichbinhxang }}">
                                    @if ($errors->has('dungtichbinhxang'))
                                        <span class="text-danger">{{ $errors->first('dungtichbinhxang') }}</span>
                                    @endif
                                </div>

                                <!-- Hình Ảnh Xe -->
                                <div class="form-group mb-3">
                                    <label for="hinhanhxe">Hình Ảnh Xe:</label>
                                    <input id="hinhanhxe" type="file"
                                           class="form-control" name="hinhanhxe"
                                    >
                                    <br>
                                    <img src="{{ asset('uploads/' . $xe->hinhanhxe ) }}" style="width: 70px; height: 70px"
                                         alt="hinhanhxe">
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

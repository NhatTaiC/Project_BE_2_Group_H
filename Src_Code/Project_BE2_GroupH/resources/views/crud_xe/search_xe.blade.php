@extends('dashboard')

@section('content')

    {{-- Form-Control   --}}
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Tìm Thông Tin Xe</h3>
                        <div class="card-body">
                            <form action="{{ route('xe.search_xebyid') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                {{-- Mã Xe --}}
                                <div class="form-group mb-3">
                                    <label for="maxe">Nhập Mã Xe:</label>
                                    <input type="text" id="maxe" class="form-control"
                                           name="maxe"
                                    >
                                    @if ($errors->has('maxe'))
                                        <span class="text-danger">{{ $errors->first('maxe') }}</span>
                                    @endif
                                </div>

                                {{-- Tìm Theo Mã Xe --}}
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-warning btn-block">Tìm Theo Mã Xe</button>
                                </div>
                            </form>

                            {{-- Tìm Theo 2 Điều Kiện --}}
                            <div class="d-grid mx-auto mt-3">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-info btn-block " data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                    <a href="#" class="text-dark text-decoration-none">Tìm Xe Theo 2 Điều Kiện</a>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Nhập Thông Tin Cần Tìm Theo Form Bên Dưới</h4>
                                                <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="{{ route('xe.search_xebyname_bysheet') }}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    {{-- Tên Xe --}}
                                                    <div class="form-group mb-3">
                                                        <label for="tenxe">Nhập Tên Xe:</label>
                                                        <input type="text" id="tenxe" class="form-control"
                                                               name="tenxe"
                                                        >
                                                        @if ($errors->has('tenxe'))
                                                            <span class="text-danger">{{ $errors->first('tenxe') }}</span>
                                                        @endif
                                                    </div>

                                                    {{-- Số Chỗ Ngồi --}}
                                                    <div class="form-group mb-3">
                                                        <label for="sochongoi">Nhập Số Chỗ Ngồi:</label>
                                                        <input type="text" id="sochongoi" class="form-control"
                                                               name="sochongoi"
                                                        >
                                                        @if ($errors->has('sochongoi'))
                                                            <span class="text-danger">{{ $errors->first('sochongoi') }}</span>
                                                        @endif
                                                    </div>

                                                    {{-- Tìm Theo Mã Xe --}}
                                                    <div class="d-grid mx-auto">
                                                        <button type="submit" class="btn btn-warning btn-block">Tìm</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Cập nhập Liên Hệ
                        </h3>
                        <div class="card-body">
                            <form action="{{ route('relationship.postUpdateRelationship') }}" method="post">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã liên hệ:</td>
                                        <td class="td-right"><input type="text" id="maLienHe" class="td-right-username form-control"
                                                                    name="maLienHe" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Phòng Ban:</td>
                                        <td class="td-right"><input type="text" id="tenPhongBan" class="td-right-mk form-control"
                                                                    name="tenPhongBan" required autofocus>
                                            @if ($errors->has('tenPhongBan'))
                                                <span class="text-danger">{{ $errors->first('tenPhongBan') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại:</td>
                                        <td class="td-right"><input type="text" id="soDT" class="td-right-mk form-control"
                                                                    name="soDT" required autofocus>
                                            @if ($errors->has('soDT'))
                                                <span class="text-danger">{{ $errors->first('soDT') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">cập nhâp</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

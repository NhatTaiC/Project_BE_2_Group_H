@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Thêm Chi Nhánh
                        </h3>
                        <div class="card-body">
                            <form action="{{ route('branch.postBranch') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="maCN" class="td-right-username form-control"
                                                                    name="maCN" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                    name="tenCN" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Địa chỉ Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                    name="diaChiCN" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số điện thoại Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                    name="sodtCN" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Hình ảnh:</td>
                                        <td class="td-right"> <input type="file" class="form-control" id="imgCN" name="imgCN" multiple required></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Đăng ký</button>
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

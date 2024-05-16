@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Thêm Liên Hệ
                        </h3>
                        <div class="card-body">
                            <form action="{{route('branch.createBranch')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã chi nhánh:</td>
                                        <td class="td-right"><input type="text" id="maCN" class="td-right-username form-control"
                                                                    name="maCN" required autofocus>
                                            @if ($errors->has('maCN'))
                                                <span class="text-danger">{{ $errors->first('maCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                    name="tenCN" required autofocus>
                                            @if ($errors->has('tenCN'))
                                                <span class="text-danger">{{ $errors->first('tenCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                    name="sodtCN" required autofocus>
                                            @if ($errors->has('sodtCN'))
                                                <span class="text-danger">{{ $errors->first('sodtCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Địa Chỉ Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                    name="diaChiCN" required autofocus>
                                            @if ($errors->has('diaChiCN'))
                                                <span class="text-danger">{{ $errors->first('diaChiCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Anh Chi Nhánh:</td>
                                        <input type="file" name="imgCN" id="" class="form-control">
                                            @if ($errors->has('imgCN'))
                                                <span class="text-danger">{{ $errors->first('imgCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Thêm Chi Nhánh Mới</button>
                                        </td>
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

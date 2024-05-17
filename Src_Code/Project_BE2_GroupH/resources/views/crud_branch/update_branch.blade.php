@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Cập Nhập Chi Nhánh
                        </h3>
                        <div class="card-body">
                            <form action="{{route('branch.updateBranch')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-borderless">
                                        <tr>
                                            <input name="branch_id" type="hidden" value="{{ $branch->branch_id }}">
                                            <td class="td-left">Mã Chi Nhánh:</td>
                                            <td class="td-right"><input type="text" id="maCN" class="td-right-mk form-control"
                                                                        name="maCN" value="{{$branch->maCN}}" required autofocus>
                                                @if ($errors->has('maCN'))
                                                    <span class="text-danger">{{ $errors->first('maCN') }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                       <tr>
                                           <td class="td-left">Tên Chi Nhánh:</td>
                                           <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                       name="tenCN" value="{{$branch->tenCN}}" required autofocus>
                                               @if ($errors->has('tenCN'))
                                                   <span class="text-danger">{{ $errors->first('tenCN') }}</span>
                                               @endif
                                           </td>
                                       </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                    name="sodtCN" value="{{$branch->sodtCN}}" required autofocus>
                                            @if ($errors->has('sodtCN'))
                                                <span class="text-danger">{{ $errors->first('sodtCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Địa Chỉ Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                    name="diaChiCN" value="{{$branch->diaChiCN}}" required autofocus>
                                            @if ($errors->has('diaChiCN'))
                                                <span class="text-danger">{{ $errors->first('diaChiCN') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Anh Chi Nhánh:</td>
                                        <td><input type="file" name="imgCN" id="imgCN" class="form-control">
                                            <img src="{{ asset('uploads/branches/'.$branch->imgCN)}}" width="40px"
                                                 height="40px" alt="logo" />
                                            @if ($errors->has('imgCN'))
                                                <span class="text-danger">{{ $errors->first('imgCN') }}</span>
                                            @endif</td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <td class="td-left"><a href="{{route('branch.listBranches')}}">Quay Lại</a></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Update Chi Nhánh Mới</button>
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

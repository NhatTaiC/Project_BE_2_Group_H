@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mx-auto border-dark" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Màn Hình Cập Nhật
                        </h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="post">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"><input type="hidden" name="id" value="{{$user->id}}"
                                                                    class="td-right-username"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Username:</td>
                                        <td class="td-right"><input type="text" id="name" class="td-right-username form-control"
                                                                    name="name" value="{{ $user->name }}" placeholder="Username..." required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Email:</td>
                                        <td class="td-right"><input type="text" id="email_address" class="td-right-mk form-control"
                                                                    value="{{ $user->email }}" name="email" placeholder="Email..." required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Mật khẩu:</td>
                                        <td class="td-right"><input type="password" id="password" class="td-right-mk form-control"
                                                                    placeholder="Mật khẩu..." name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
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
                                            <a href="#" class="text-decoration-none me-2">Đã có tài khoản</a>
                                            <button class="btn btn-dark btn-block">Cập nhật</button>
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
